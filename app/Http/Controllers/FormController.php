<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required',
           'email' => 'required',
           'tanggal' => 'required',
           'telepon' => 'required|numeric',
            $fields = Input::get('gender');
            if($fields == 'Laki-laki'){
            // logic
            }
            else{
            // logic
            } 
           'alamat' => 'required'
        ]);

        return view('proses',['data' => $request]);
    }

}