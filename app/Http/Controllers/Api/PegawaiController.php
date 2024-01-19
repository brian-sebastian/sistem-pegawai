<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        if ($pegawai) {

            $res = [
                'status' => 'berhasil',
                'data' => $pegawai
            ];
        } else {
            $res = [
                'status' => 'data tidak ada',
                'data' => $pegawai
            ];
        }
        return $res;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $pegawai = Pegawai::create($request->all());
        if ($pegawai) {
            $res['status'] = 'berhasil di tambahkan';
            $res['data'] = $pegawai;
        } else {
            $res['status'] = 'gagal di tambahkan';
        }

        return response()->json($res);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id)->first();
        if ($pegawai) {

            $res = [
                'status' => 'berhasil',
                'data' => $pegawai
            ];
        } else {
            $res['status'] = 'data tidak ada';
        }

        return response()->json($res);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id)->update($request->all());

        if ($pegawai) {
            $res['status'] = 'berhasil di ubah';
            $res['data'] = Pegawai::where('id_pegawai', $id)->first();
        } else {
            $res['status'] = 'gagal d ubah';
        }

        return response()->json($res);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id)->delete();

        if ($pegawai > 0) {
            $res['status'] = 200;
            $res['message'] = 'berhasil di hapus';
        } else {
            $res['status'] = 400;
            $res['message'] = 'gagal di hapus';
        }

        return response()->json($res);
    }
}
