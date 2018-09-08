<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deliveryModel;

class deliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new deliveryModel();
        //GET QUERY
        $table = $model->select_all();
        //PREPARE VARIABLE FOR VIEW
        $data = [
            "table" => $table
        ];
        return view('delivery/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('delivery/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Matrial_Number = $request->input('Matrial_Number');
        $Product_Name = $request->input('Product_Name');
        $date = $request->input('date');
        $Amount = $request->input('Amount');
        $EmpID = $request->input('EmpID');
    
        //LOAD OBJECT MODEL
        $model = new deliveryModel();
        //QUERY
        $model->insert($Matrial_Number,$Product_Name,$date,$Amount,$EmpID);
        //REDIRECT TO SOME PAGE
        return redirect('/delivery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new deliveryModel();
        //GET QUERY
        $table = $model->select_id($id);
        //PREPARE VARIABLE FOR VIEW
        $data =[
        "table" => $table
        ];
        return view('delivery/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new deliveryModel();
        //GET QUERY
        $table = $model->select_id($id);
        //prepare variable for view
        $data = [
        "table" => $table
        ];
        return view('delivery/edit',$data);
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
        $Matrial_Number = $request->input('Matrial_Number');
        $Product_Name = $request->input('Product_Name');
        $date = $request->input('date');
        $Amount = $request->input('Amount');
        $EmpID = $request->input('EmpID');
        //LOAD OBJECT MODEL
        $model = new delivveryModel();
        //Query
        $model->update(Product_Name);
        //Redirect to some page
        return redirect('/delivery');
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
       $model = new deliveryModel();
       //query
       $model->delete($id);
       //redirect to some page
       return redirect('/delivery');
    }
}
