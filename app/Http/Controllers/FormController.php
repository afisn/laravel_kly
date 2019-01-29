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
     'gender' => 'required',
     'alamat' => 'required'
   ]);
    
    // $fileInForm = 'doc';
    // $file = $request->file($fileInForm);
    $mytime = \Carbon\Carbon::now();
    echo $mytime->toDateTimeString();
    
    // $thefile = \File::get($image);
    $file_name = $request->nama . '-' . $mytime . '.txt';
    \Storage::disk('local')->put('file', $file_name);

    return view('proses',['data' => $request]);
  }


  public function isiform($namatxt)
  {
    return view('formulir');
    return $namatxt;
  }

}