<?php

namespace App\Http\Controllers;

use App\WarehouseModel;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //LOAD OBJECT MODEL
        $model = new WarehouseModel();
        //GET QUERY
        $table = $model->select_all();
        //PREPARE VARIABLE FOR VIEW
        $data = [
            "table" => $table
        ];
        return view('warehouse/index',$data);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouse/create');
    }

    function store(Request $request)
    {
    // GET INPUT FROM POST METHOD (HTML:FORM)
    $name = $request->input('name');
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');

    //LOAD OBJECT MODEL
    $model = new WarehouseModel();
    //QUERY
    $model->insert($name,$latitude,$longitude);
    //REDIRECT TO SOME PAGE
    return redirect('/warehouse');
}

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //LOAD OBJECT MODEL
        $model = new WarehouseModel();
        //GET QUERY
        $table = $model->select_id($id);
        //PREPARE VARIABLE FOR VIEW
        $data =[
        "table" => $table
        ];
        return view('warehouse/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //LOAD OBJECT MODEL
        $model = new WarehouseModel();
        //GET QUERY
        $table = $model->select_id($id);
        //prepare variable for view
        $data = [
        "table" => $table
        ];
        return view('warehouse/edit',$data);
    }

    public function update(Request $request, $id)
    {
        //GET INPUT FROM POST METHOD (HTML:FORM)
        $name = $request->input('name');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        //LOAD OBJECT MODEL
        $model = new WarehouseModel();
        //Query
        $model->update($id,$name,$latitude,$longitude);
        //Redirect to some page
        return redirect('/warehouse');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //load objaect model
        $model = new WarehouseModel();
        //query
        $model->delete($id);
        //redirect to some page
        return redirect('/warehouse');
    }
}
