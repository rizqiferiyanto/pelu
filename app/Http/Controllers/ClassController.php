<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        return view('siswa.index');
    }

    public function create(){
        return view('siswa.create');
    }

    public function page(){
        return view('murid.page');
    }
    public function store(Request $request){
        $validatedata =$request->validate([
            'image' => 'required',
            'name' => 'required',
            'notelp' => 'required',
            'addres' => 'required',
        ]);

        if($request->hasfile('image')){
            $validatedata['image']=$request->file('image')->store('images','public');
        }

        Clases::create($validatedata);
        return redirect()->route('page')->with('sucses','data berhasil di tambahkan');
    }
}

