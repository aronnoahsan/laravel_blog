<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form(){
        return view('form');
    }
    function store_data(Request $request){
        $data = new Form();
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
    }
}
