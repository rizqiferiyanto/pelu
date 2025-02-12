<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
       $siswas = Student::all();
            return view('siswa.siswa',compact('siswas'));
    }
    public function add(){
        return view('siswa.create');
    }
    public function store(Request $request) {
        //untuk menyimpen data siswa
        // data yang di sempen adalah nama,alamat dann jenis kelamin
        $data = Student::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin
        ]);
        //mengarahkan kembali ke halaman siswa setelah berhasil simpan data
        return redirect()->route('siswa');

    }
    public function edit($id){
        $data = Student::findOrFail($id);
        return view('edit-siswa', compact('data'));

    }

    public function update(Request $request, $id)
    {
        $data= Student::findOrFail($id);

        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin'=> $request->jenis_kelamin,
        ]);

        return redirect()->route('siswa');
    }

    public function destroy($id)
    {
        //menemukan siswa berdasarkan id
        $data = Student::find($id);
        // menghapus siswa berdasarkan id yang di temukan
        $data->delete();

        return redirect()->route('siswa');
    }


}
