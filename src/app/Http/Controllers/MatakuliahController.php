<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){
        return view('matakuliah',[
            "matakuliah" => \App\Models\Matakuliah::all()
        ]);
    }
    //
    public function simpan (Request $request){
        //dd($request);
        \App\Models\Matakuliah::create([
            "kodematkul" => $request->kodematkul,
            "matakuliah" => $request->matakuliah,
            "dosen" => $request->dosen,
            "ruang" => $request->ruang,
        ]);
        return redirect()->route('matakuliah.index');
    
    }
}
    