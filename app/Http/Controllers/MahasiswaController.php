<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Mahasiswa::all();
        return view('welcome2', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
        ]);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->telp = $request->telp;
        $mahasiswa->save();
        return redirect(route('mahasiswa.index')) ->with('successMsg','New Mahasiswa Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return "Hello";
        $data = Mahasiswa::where('id',$id)->first();
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
        ]);
        $data = Mahasiswa::findOrFail($id);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->telp = $request->telp;
        $data->update([
            'nim'=>$request->nim,
            'nama_lengkap'=>$request->nama,
            'angkatan'=>$request->angkatan,
            'email'=>$request->email,
            'telp'=>$request->telp
        ]);
        return redirect(route('mahasiswa.index')) ->with('successMsg','New Mahasiswa Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index')->with('successMsg','Data Berhasil Dihapus');
    }
}
