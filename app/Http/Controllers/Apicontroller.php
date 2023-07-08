<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ApiModel::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model=new ApiModel();
        $model->name=$request->name;
        $model->email=$request->email;
        $model->password=$request->password;
        $insert=$model->save();
        if($insert)
        {
            return response()->json('DATA INSERTED SUCCESSFULLY');
        }
        else
        {
            return response()->json(' NOT  DATA INSERTED SUCCESSFULLY'); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiModel $apiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiModel $apiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApiModel $apiModel,$id)
    {
        $data=ApiModel::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return response()->json(' DATA UPDATED SUCCESSFULLY');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiModel $apiModel,$id)
    {
        $data=ApiModel::find($id);
        $data->delete();
        return response()->json(' DATA DELETED SUCCESSFULLY');
    }
    public function finddata($id)
    {
        $data=ApiModel::find($id);
        return response()->json($data);
    }
}
