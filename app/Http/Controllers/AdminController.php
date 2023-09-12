<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Language;
use App\Models\AdminLanguages;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function deleteAdmin(User $user)
{
    if ($user->id !== auth()->user()->id) {
        $user->delete();
        return redirect()->route('admins.index')->with('success', 'تم حذف المسؤول بنجاح.');
    } else {
        return redirect()->route('admins.index')->with('error', 'لا يمكنك حذف نفسك.');
    }
}
public function restoreAll(){
    $admins = Admin::onlyTrashed()->restore();
    if($admins){
        return redirect()->back()->with('success','تم الاستعادة');
    }
    else{
        // 
    }
    
}
public function restore(){
    $admins = Admin::withTrashed()
    ->where('id',$id)->restore();
 
        return redirect()->back()->with('Admin','Restored Successfully ');
    }
    public function foceDeleteEle(){
        $admins = Admin::withTrashed()->where('id',$id)->foceDelete();
     
            return redirect()->back()->with('Admin','Restored Successfully ');
        }


public function indexTrash(){
    $admins = Admin::onlyTrashed()->paginate(15);
        return response()->view('cms.Admin.trashed');
    
}







    public function index()
    {
        $admins = Admin::orderBy('id' , 'desc')->paginate(10);
        // $languages = Admin->lan::orderBy('id' , 'desc')->paginate(10);

        // $this->authorize('viewAny',Admin::class);

        return response()->view('cms.admin.index' , compact('admins' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $languages = Language::orderBy('id' , 'desc')->paginate(10);

        $roles = Role::where('guard_name' , 'admin')->get();
        // $this->authorize('create',Admin::class);

        return response()->view('cms.admin.create' , compact('cities','roles','languages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'first_name' => 'required' ,
            'last_name' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'required' ,
            'mobile' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,
            'date' => 'required' ,
            'image'=>"image|max:2048|mimes:png,jpg,jpeg,pdf",


        ] ,[

        ]);

        if(! $validator->fails()){
            $admins = new Admin();
            $admins->email = $request->input('email');
            $admins->password = Hash::make($request->input('password'));

            $lan_admin = new AdminLanguages();


            $isSaved = $admins->save();

            if($isSaved){
                $users = new User();

                $roles = Role::findOrFail($request->get('role_id'));
                $admins->assignRole($roles->name);

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/admin', $imageName);
                    // $image->storeAs('storage/images/admin', $imageName);

                    $users->image = $imageName;
                    }
                $users->first_name = $request->input('first_name');
                $users->last_name = $request->input('last_name');
                $users->gender = $request->input('gender');
                $users->mobile = $request->input('mobile');
                $users->status = $request->input('status');
                $users->date = $request->input('date');
                $users->address = $request->input('address');
                $users->city_id = $request->input('city_id');
                $users->actor()->associate($admins);

                $isSaved = $users->save();

                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully'

                ] , 200);


            }
        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()
            ] , 400);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities= City::all();
        $admins = Admin::findOrFail($id);


        return response()->view('cms.Admin.edit' , compact('cities' , 'admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all() , [
            'first_name' => 'required' ,
            'last_name' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'nullable' ,
            'mobile' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,
            'date' => 'required' ,

        ] ,[

        ]);

        if(! $validator->fails()){
            $admins = Admin::findOrFail($id);
            $admins->email = $request->input('email');
            // $admins->password = Hash::make($request->input('password'));

            $isUpdate = $admins->save();

            if($isUpdate){
                $users = $admins->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/admin', $imageName);
                    // $image->storeAs('storage/images/admin', $imageName);

                    $users->image = $imageName;
                    }

                $users->first_name = $request->input('first_name');
                $users->last_name = $request->input('last_name');
                $users->gender = $request->input('gender');
                $users->mobile = $request->input('mobile');
                $users->status = $request->input('status');
                $users->date = $request->input('date');
                $users->address = $request->input('address');
                $users->city_id = $request->input('city_id');
                $users->actor()->associate($admins);

                $isUpdate = $users->save();

                return ['redirect' => route('admins.index')];

                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Updated is Successfully'

                ] , 200);


            }
        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()
            ] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //    $this->authorize()
    if(Auth::user()->id != $id){
        Admin::findOrFail($id)->delete;
    }else{
        return redirect()->back();
    }
    }
}
