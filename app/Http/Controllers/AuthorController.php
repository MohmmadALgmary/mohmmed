<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::withCount('articles')->orderBy('id' , 'desc')->paginate(10);
        // $this->authorize('viewAny',Author::class);

        return response()->view('cms.author.index' , compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $roles = Role::where('guard_name' , 'author')->get();
        // $this->authorize('create',Author::class);

        return response()->view('cms.author.create' , compact('cities' , 'roles'));

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
            $authors = new Author();
            $authors->email = $request->input('email');
            $authors->password = Hash::make($request->input('password'));

            $isSaved = $authors->save();

            if($isSaved){
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/author', $imageName);
                    // $image->storeAs('storage/images/Author', $imageName);

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
                $users->actor()->associate($authors);

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
        $authors = Author::findOrFail($id);

        return response()->view('cms.author.edit' , compact('cities' , 'authors'));
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
            $authors = Author::findOrFail($id);
            $authors->email = $request->input('email');
            // $authors->password = Hash::make($request->input('password'));

            $isUpdate = $authors->save();

            if($isUpdate){
                $users = $authors->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/author', $imageName);
                    // $image->storeAs('storage/images/Author', $imageName);

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
                $users->actor()->associate($authors);

                $isUpdate = $users->save();

                return ['redirect' => route('authors.index')];

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
        $authors = Author::destroy($id);
    }
}
