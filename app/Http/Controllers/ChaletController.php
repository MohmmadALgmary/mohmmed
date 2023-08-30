<?php

namespace App\Http\Controllers;

use App\Models\Chalets;
use Illuminate\Http\Request;

class ChaletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.chalet.create');
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

        ]);

         if(! $validator->fails()){

             $chalets = new $chalets();


            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

               $image->move('storage/images/chalet', $imageName);
             $image->storeAs('storage/images/admin', $imageName);

                $chalets->image = $imageName;
                }

        //   $chalet->name = $request->get('name');
             $chalet->title = $request->get('title');
             $chalet->description = $request->get('description');
             $chalet->description = $request->get('description2');


             $isSaved = $chalets->save();
             return response()->json([
                 'icon' => 'success' ,
                 'title' => 'Created is Successfully'
             ] , 200) ;

         }
         else{
            return response()->json([
                 'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()] , 400);
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
        $chalets = Chalets::findOrFail($id);

        return response()->view('cms.chalet.edit' , compact('chalets'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
