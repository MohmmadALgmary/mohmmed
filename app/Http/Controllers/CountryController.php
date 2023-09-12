<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::withCount('cities')->orderBy('id', 'desc');

        if ($request->get('name')) {
            $countries->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->get('code')) {
            $countries->orWhere('code', 'like', '%' . $request->code . '%');
        }
        if ($request->get('created_at')) {
            $countries->orWhere('created_at', 'like', '%' . $request->created_at . '%');
        }

        $countries = $countries->paginate(5);

        return response()->view('cms.Country.index', compact('countries'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.Country.create');

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
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|numeric|digits:4'
        ] , [
            'name.required' => 'اسم الدولة مطلوب' ,
            'code.required' => 'الكود  مطلوب' ,
            'name.min' => 'يجب إدخال أكثر من 3 خانات'
        ]);


        if( ! $validator->fails()){
            $countries = new Country();

            $countries->name = $request->get('name');
            $countries->code = $request->get('code');

            $isSaved = $countries->save();
            if($isSaved){
                return response()->json(['icon' => 'success'
                 , 'title' => "Created is Successfully"] , 200);
            }
            else{
                return response()->json(['icon' => 'error'
                , 'title' => "Created is Failed"] , 400);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::findOrFail($id);
        return response()->view('cms.country.edit' , compact('countries'));
    }
    public function show($id)
    {
        $countries = Country::findOrFail($id);
        return response()->view('cms.country.show' , compact('countries'));
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
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|numeric|digits:4'
        ]);

        if(! $validator->fails()){
            $countries = Country::findOrFail($id);
            $countries->name = $request->get('name');
            $countries->code = $request->get('code');

            $isUpdated = $countries->save();
            return ['redirect' => route('countries.index')];
        }
        else{
            return response()->json(['icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()] , 400);
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
        $countries = Country::destroy($id);

    }

    // public function indexTrashed()
    // {
    //     $countries =Country::onlyTrashed()->orderBy('deleted_','desc');

    //     return response()->view('cms.country.trashed' , compact('countries'));
    // }
    // public function restore()
    // {
    //     $countries =Country::onlyTrashed()->findOrFail($id)->restor();
    //     return back()->with('success','Success');

    // }





}
