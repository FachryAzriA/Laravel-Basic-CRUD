<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa; // contoh penggunaan model

class MahasiswaController extends Controller
{
    public function mainMenu()
    {
        return view('welcome');
    }

    public function viewAll()
    {
        $allMahasiswa = Mahasiswa::all();
        return view('mahasiswa.daftar-mahasiswa',['mahasiswas'=>$allMahasiswa]);
    }

    public function viewMahasiswa($mahasiswa)
    {
        $result = Mahasiswa::find($mahasiswa);
        return view('mahasiswa.personal-mahasiswa',['mahasiswa'=>$result]);
    }

    public function addData()
    {
        return view('mahasiswa.tambah-mahasiswa');
    }

    public function storeData(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas',
            'nama' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'fakultas' => '',
            'jurusan' => '',
            'ipk' => '',
        ]);

        // Mass Assigment
        Mahasiswa::create($validateData);
        
        $request->session()->flash('pesan','Data berhasil ditambahkan');
        return redirect()->route('mahasiswa.viewAll');
    }

    public function edit($mahasiswa)
    {
        $result = Mahasiswa::find($mahasiswa);
        return view('mahasiswa.edit-mahasiswa',['mahasiswa'=>$result]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'fakultas' => '',
            'jurusan' => '',
            'ipk' => '',
        ]);
        
        Mahasiswa::where('id',$mahasiswa->id)->update($validateData);
        $request->session()->flash('pesan','Data berhasil diperbaharukan');
        return redirect()->route('viewMahasiswa',['nim'=>$mahasiswa->id]);
    }

    public function delete(Mahasiswa $id)
    {
        $id->delete();
        return redirect()->route('mahasiswa.viewAll')->with('pesan','Data berhasil dihapus');
    }
}
