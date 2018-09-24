<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\packmateModel;

class packmateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $obj = packmateModel::all();
    $data ['obj'] = $obj;
    return view ('packmate.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('packmate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $obj       = new packmateModel();
      $obj->matrial_number  = $request['matrial_number'];
      $obj->description    = $request['description'];
      $obj->save();
      return redirect(url('/packmate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = packmateModel::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $obj = packmateModel::find($id);
      $obj ['method'] = "put";
      //return view ('ProductFinal.create',$obj);
      return view('packmate.edit', ['obj' => $obj]);
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
    $obj       = packmateModel::find($id);
    $obj->matrial_number  = $request['matrial_number'];
    $obj->description    = $request['description'];
    $obj->save();
    return redirect(url('/packmate'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $obj = packmateModel::find($id);
      $obj->delete();
      return redirect(url('/packmate'));
    }
}
