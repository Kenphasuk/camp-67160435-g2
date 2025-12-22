<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        return view('Myhtml.formsubmit', [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'address' => $request->address,
            'color' => $request->color,
            'music' => $request->music ?? []
        ]);
    }
}
