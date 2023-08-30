<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::with('country:id,name')->orderBy('id' , 'desc')->paginate(2);

        // return $cities ;
        return response()->json([
            'title' => 'Data of City' ,
            'staus' => true ,
            'data' => $cities
        ] , 200);
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
            'street' => 'required' ,
            'country_id' => 'required'
        ]);

        if(! $validator->fails()){
            $cities = new City();
            // $cities = $cities->request->only('title' , 'strret');
            // $cities = $cities->request->except('title' , 'strret');
            // $cities = $cities->request->query;


            $cities->create($request->all());

            return response()->json([
                'status' => true ,
                'message' => 'Created is Successfully',
            ] , 200);
        }
        else{
            return response()->json([
                // 'title' => 'Created City is Failed' ,
                'status' => false ,
                'message' => $validator->getMessageBag()->first(),
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
        $cities = City::with('country:id,name')->find($id);

        return response()->json([
            'title' => 'Data for Spcified Cities' ,
            'status' => true ,
            'data' => $cities
        ] , 200);
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
            'street' => 'sometimes|required' ,
            'country_id' => 'required'
        ]);

        if(! $validator->fails()){
            $cities = City::find($id);
            // $cities = $cities->request->only('title' , 'strret');
            // $cities = $cities->request->except('title' , 'strret');
            // $cities = $cities->request->query;


            $cities->update($request->all());

            return response()->json([
                'status' => true ,
                'message' => 'Updated is Successfully',
            ] , 200);
        }
        else{
            return response()->json([
                // 'title' => 'Created City is Failed' ,
                'status' => false ,
                'message' => $validator->getMessageBag()->first(),
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
        $cities = City::find($id)->delete();
        return response()->json([
            'status' => true ,
            'message' => 'Deleted is Successfully',
        ] , 200);
    }
}

