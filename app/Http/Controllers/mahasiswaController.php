<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $data = mahasiswa::orderBy('nim','desc')->paginate(10);
        return view('mahasiswa.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);

        $request->validate(
            [
                'nim' => 'required|numeric|Unique:mahasiswa,nim',
                'nama' => 'required',
                'jurusan' => 'required'
            ],
            [
                'nim.required' => 'nim wajib di isi',
                'nim.numeric' => 'nim wajib Anggka',
                'nim.Unique' => 'nim sudah terdaftar',
                'nama.required' => 'nama wajib di isi',
                'jurusan.required' => 'jurusan wajib di isi'

            ]
        );

        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ];
        mahasiswa::create($data);
        return redirect ()->to('mahasiswa')->with('success','Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mahasiswa::where('nim',$id)->first();
       return view('mahasiswa.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
               
                'nama' => 'required',
                'jurusan' => 'required'
            ],
            [
                
                'nama.required' => 'nama wajib di isi',
                'jurusan.required' => 'jurusan wajib di isi'

            ]
        );

        $data = [
           
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ];
        mahasiswa::where('nim',$id)->update($data);
        return redirect ()->to('mahasiswa')->with('success','Data Berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mahasiswa::where('nim',$id)->delete();
        return redirect ()->to('mahasiswa')->with('success','Data Berhasil Di Hapus');
    }
}