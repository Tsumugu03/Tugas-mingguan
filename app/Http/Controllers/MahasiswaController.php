<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index () 
    {

        $data = Mahasiswa::all();

    return view ('mahasiswa', compact ('data'), [
        "title" => "Data Mahasiswa",
    ]);
}
}


public tambahmahasiswa index () 
    {

        $data = Mahasiswa::all();

    return view ('mahasiswa', compact ('data'), [
        "title" => "Data Mahasiswa",
    ]);

public function insertdata (Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    

    public function tampildata [$id]
    (
        $data = mahasiswa ::find [$id]
        return view["edit"], [
            "title" "edit data mahasiswa"
            "data" $data,
        ]);

        public function editdata[$request, $id]
        {
            $data= Mahasiswa:: find($id);
            
            $data -> update($request -> all();)

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diedit');
        }

    

}


