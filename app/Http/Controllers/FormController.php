<?php

namespace App\Http\Controllers;

use Storage;
use Carbon;
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
    
    //memasukkan request ke array
    $data = [];
    $data['nama'] = $request->get('nama');
    $data['email'] = $request->get('email');
    $data['tanggal'] = $request->get('tanggal');
    $data['telepon'] = $request->get('telepon');
    $data['gender'] = $request->get('gender');
    $data['alamat'] = $request->get('alamat');
    
    $comma_separated = implode(", ", $data);
    // $file = $request->all();
    // foreach ($request->all() as $isi){
    //   $file = array($isi);
    // }

    $mytime = \Carbon\Carbon::now();
    
    //memasukkan isi form kedalam bentuk txt dengan nama file custom
    $file_name = $request->nama . '-' . time() . '.txt';
    Storage::put($file_name, $comma_separated);

    return view('proses',['data' => $request]);
  }


  public function isiform($namatxt)
  {
    return view('formulir');
    return $namatxt;
  }

}