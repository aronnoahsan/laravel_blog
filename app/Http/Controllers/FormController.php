<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    function form()
    {
        return view('form');
    }
    function store_data(Request $request)
    {
        $data = new Form();
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->country = $request->input('country');
        // Save Checkbox
        $checkbox_data = $request->input('skill');
        $data->skill = implode(',', $checkbox_data);
        // Save Image
        if ($request->hasFile('profilePicture')) {
            $image = $request->file('profilePicture');
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $image->move("storage/images", $image_name);
            $data->profilePicture = $image_name;
        }
        $data->save();
        return back();
    }
}
