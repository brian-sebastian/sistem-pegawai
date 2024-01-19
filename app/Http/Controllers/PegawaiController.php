<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Table Pegawai';
        $data['pegawai'] = Pegawai::all();
        return view('pegawai.pegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Pegawai';
        return view('pegawai.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required|integer',
            'foto' => 'required|file|max:5120',
            'email' => 'required',
            'jabatan' => 'required'
        ]);

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'foto' => $request->foto,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gaji' => '6000',
            'is_active' => 1,
            'tanggal_masuk' => date('Y-m-d')
        ];

        // dd($data);
        Pegawai::create($data);

        return redirect('/')->with('success', 'Data Berhasil Di Tambahkan');
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
    public function edit($id)
    {

        $data['title'] = 'Ubah Pegawai';
        $data['pegawai'] = Pegawai::where('id_pegawai', $id)->first();

        return view('pegawai.ubah', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required|integer',
            'foto' => 'required|file|max:5120',
            'email' => 'required',
            'jabatan' => 'required'
        ]);

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'foto' => $request->foto,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gaji' => '6000',
            'is_active' => 1,
            'tanggal_masuk' => date('Y-m-d')
        ];

        $pegawai = Pegawai::where('id_pegawai', $id);

        $pegawai->update($data);
        return redirect('/')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id);
        $pegawai->delete();

        return redirect('/')->with('success', 'Data Berhasil Di Hapus');
    }
}
