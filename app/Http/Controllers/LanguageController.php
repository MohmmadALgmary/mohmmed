<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::orderBy('id' , 'desc')->paginate(10);

        return response()->view('cms.language.index' , compact('languages' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.language.create' ); 
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
            'name' => 'required' ,
           

        ] ,[

        ]);

        if(! $validator->fails()){
            $languages = new Language();
            $languages->name = $request->input('name');

            $isSaved = $languages->save();

                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully'

                ] , 200);


            
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
        $languages = Language::findOrFail($id);

        return response()->view('cms.language.edit' , compact('languages' ));
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
            'name' => 'required' ,
           

        ] ,[

        ]);

        if(! $validator->fails()){
            $languages =  Language::findOrFail($id);
            $languages->name = $request->input('name');

            $isUpdate = $languages->save();

            return ['redirect' => route('languages.index')];


            
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
        $languages = Language::destroy($id);

    }
}
