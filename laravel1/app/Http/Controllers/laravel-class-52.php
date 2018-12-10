<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiseController extends Controller
{
   public function methodName(){
   	echo "Done";
   }

   public function methodName1($data){
   	echo $data;
   }

   public function methodName2($data1,$data2){
   	echo $data1.$data2;
   }
}

 
