<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
   public function handlePathVariable($data){
        return "tham so ".$data;
   }
    public function handleQueryString(Request $request){
       $data = $request;
       return view('datahandle',[
           'data'=>$data
       ]);
    }
    public function processForm(Request $request){
        return view('form-success',[
            'data'=>$request
        ]);
    }
    public function returnForm(){
        return view('form-data');
    }

}
