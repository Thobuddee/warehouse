<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class WarehouseModel //extends Model
{
	function select_all(){
		//MAKE ANY QUERY STRING
		$sql = "SELECT * FROM warehouse"; //echo $sql
		$table = DB::select($sql,[]);
		//CONVERT TO ARRAY BEFORE RETURN
		$table = $this->toArray($table);
		return $table;
	}
	function toArray($array_obj){
		//CONVERT ARRAY OF OBJECT TO ARRAY OF ARRAY BY
		//CONVERT TO STRING FIRST, THEN CONVERT TO ARRAY
		$str = json_encode($array_obj);
		return json_decode($str, true);
	}
	function select_id($id){
		//MAKE ANY QUERY STRING
		$sql = "SELECT * FROM warehouse WHERE id ={$id}";
		//QUERY
		$table = DB::select($sql,[]);
		//CONVERT TO ARRAY BEFORE RETURN
		$table = $this->toArray($table);
		return $table;
	}
	function insert($name,$latitude,$longitude){
	//MAKE ANY QUERY STRING
	$sql = "INSERT INTO warehouse (name,latitude,longitude)
	        VALUES ('{$name}',{$latitude},{$longitude})";
	       //QUERY
	       DB::insert($sql,[]) ;
	   }
	   function update($id,$name,$latitude,$longitude){
	   	//make any query string
	   	$sql = "UPDATE warehouse SET 
	   			name = '{$name}',
	   			latitude = {$latitude},
	   			longitude = {$longitude}
	   			WHERE id = {$id}";

	   //query
	   			DB::update($sql,[]);
	   }
	   function delete($id){
	   	//make any query string 
	   	$sql = "DELETE FROM warehouse WHERE id = {$id}";
	   	//query
	   	DB::delete($sql,[]);

	   }
}


