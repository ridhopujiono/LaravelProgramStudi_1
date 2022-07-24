<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Anggota::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.anggota.index', [
            "title" => "Calon Anggota",
            "data" => $data
        ]);
    }


    public function acc_anggota($id)
    {
        Anggota::find($id)->update([
            "status" => 2
        ]);

        return redirect('dashboard')->with('success', "Anggota berhasil di terima, data akan masuk ke Manajamene Anggota");
    }


    public function manajemen_anggota()
    {
        $data = Anggota::where('status', 2)->orderBy('created_at', 'desc')->get();
        return view('admin.manajemen_anggota.index', [
            "title" => "Anggota",
            "data" => $data
        ]);
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
        $data = Anggota::find($id);
        return view('admin.manajemen_anggota.edit', [
            "title" => "Edit Anggota",
            "data" => $data
        ]);
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
        $data = Anggota::find($id)->update([
            "npm" => $request->npm,
            "nama" => $request->nama,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
            "alamat" => $request->alamat,
        ]);

        return redirect('manajemen_anggota')->with('success', "Data berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Anggota::find($id)->delete();
        return redirect('manajemen_anggota')->with('success', "Data berhasil dihapus");
    }
}
