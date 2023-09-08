<?php

namespace App\Http\Controllers;
use App\Models\chalets;
use App\Models\City;
use App\Models\Country;
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
        $cities = City::all();
        $countries = Country::all();

        return response()->view('cms.chalet.create', compact('cities' , 'countries'));
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

        ] , [

        ]);

        if(! $validator->fails()){
            $chalets = new chalets();

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/chalet', $imageName);
                // $image->storeAs('storage/images/admin', $imageName);

                $chalets->image = $imageName;
                }

            $chalets->title = $request->get('title');
            $chalets->description = $request->get('description');
            $chalets->description2 = $request->get('description2');
            $chalets->description3 = $request->get('description3');
            $chalets->description4 = $request->get('description4');
            $chalets->description5 = $request->get('description5');

            $chalets->city_id = $request->get('city_id');
            $chalets->country_id = $request->get('country_id');

            $isSaved = $chalets->save();

            if($isSaved){
                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully',
                ] , 200);
            }

        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
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
