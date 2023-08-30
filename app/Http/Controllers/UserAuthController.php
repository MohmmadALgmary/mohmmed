<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    public function showLogin($guard){
        return response()->view('cms.auth.login' , compact('guard'));
    }

    public function login(Request $request){
        $validator = Validator($request->all() , [
            'email' => 'required|email|string' ,
            'password' => 'required|min:6'
        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ];

        if(! $validator->fails()){
            if(Auth::guard($request->get('guard'))->attempt($credentials) ){
                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Login IS Successfully'
                ] , 200);
            }
            else{
                return response()->json([
                    'icon' => 'error' ,
                    'title' => 'Login is Failed'
                ] , 400);
            }
        }

        else {
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
            ] , 400);
        }
    }

    public function logout(Request $request){
        $guard = auth('admin')->check() ? 'admin' : 'author' ;
        Auth::guard($guard)->logout();
        $request->session()->invalidate();

        return redirect()->route('login.view' , $guard);
    }

    public function changePassword(Request $request){

    return response()->view('cms.Admin.changePassword');

    }
    public function updatePassword(Request $request){

        $guard =auth('admin')->check() ? 'admin' : 'author';

        $validator = Validator($request->all() , [
           'password'=>'required|string|' ,
           'new_password'=>'required|string|min:3|max:20|confirmed',
           'new_password_confirmation'=>'required|string|min:3|max:20',


        ],[

        ]);

        if(! $validator->fails()){
        $user = auth($guard)->user();
        $user->password = Hash::make($request->get('new_password'));

        $isSaved = $user->save();
        return response()->json([
            'icon' => $isSaved ? 'success':'error',
            'tittle' => $isSaved ? "Change Pasword Successfully" : "Change Pasword Is Failed" ,

        ], $isSaved ? 200 : 400);
        }
        else{
            return response()->json([
                'icon'=> 'error',
                'title' => $validator->getMessageBag()->first()
            ],400);
        }







        }



    public function RestPassword(){

    }

    public function edit_profile(Request $request){

        if(Auth::guard('admin')->id()){
            $admins = Admin::findOrFail(Auth::guard('admin')->id());
            $cities = City::all();
            return response()->view('cms.admin.edit',compact('admins','cities'));

        }
        elseif (Auth::guard('admin')->id()) {

            $authors = Author::findOrFail(Auth::guard('author')->get->id());
            $cities = City::all();

            return response()->view('cms.author.edit',compact('authors','cities'));


        }






        }

    public function updateProfile(Request $request)
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
            $admins = Admin::findOrFail(Auth::guard('admin')->id());

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

}
