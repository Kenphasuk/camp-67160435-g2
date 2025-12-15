<?php

namespace App\Http\Controllers;

Use Illuminate\Http\Request;
//php artisan make:controller Controller
class MyController extends Controller
{
    function index(){
        return $this->MYFUNCTION();
    }
    function myfunction(){
        return view('myview/index');
    }
    function process(Request $request){
        //echo $_POST['num'];
        $data['mynum'] = $request->input('num');
        return view('myview.process', $data);
    }
}
