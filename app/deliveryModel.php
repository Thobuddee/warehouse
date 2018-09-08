<?php

namespace App;

use Illuminate\Support\Facades\DB;

class deliveryModel
{
    function select_all(){
		//MAKE ANY QUERY STRING
		$sql = "SELECT * FROM delivery"; //echo $sql
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
	function select_id($edit){
		//MAKE ANY QUERY STRING
		$sql = "SELECT * FROM delivery WHERE id ='{$id}'";
		//QUERY
		$table = DB::select($sql,[]);
		//CONVERT TO ARRAY BEFORE RETURN
		$table = $this->toArray($table);
		return $table;
	}
	function insert($Matrial_Number,$Product_Name,$date,$Amount,$EmpID){
		//MAKE ANY QUERY STRING
		$sql = "INSERT INTO delivery (Matrial_Number,Product_Name,date,Amount,EmpID)
				VALUES ({$Matrial_Number},'{$Product_Name}',{$date},{$Amount},{$EmpID})";
			   //QUERY
			   DB::insert($sql,[]) ;
		   }
		   function update($id,$Matrial_Number,$Product_Name,$date,$Amount,$EmpID){
			   //make any query string
			   $sql = "UPDATE delivery SET 
					   Matrial_Number = '{$Matrial_Number}',
					   Product_Name = {$Product_Name},
					   date = {$date},
					Amount = {$Amount},
					EmpID = {$EmpID},
					   WHERE id = {$id}";
	
		   //query
					   DB::update($sql,[]);
		   }
		   function delete($id){
			   //make any query string 
			   $sql = "DELETE FROM delivery WHERE id = {$id}";
			   //query
			   DB::delete($sql,[]);
		   
	   }
}
