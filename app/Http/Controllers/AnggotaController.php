<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Read
    public function all() {
        $anggota = Anggota::all();

        echo $anggota;
    }

    public function find(int $id) {
        $anggota = Anggota::find($id);

        echo $anggota;
    }

    // Create
    public function insert(Request $request) {
        $anggota = new Anggota;
        $anggota->nama = $request->nama;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->alamat = $request->alamat;
        $anggota->telp = $request->telp;
        $anggota->save();

        echo $anggota;
    }

    // Update
    public function update(int $id, Request $request) {
        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->alamat = $request->alamat;
        $anggota->telp = $request->telp;
        $anggota->save();

        echo $anggota;
    }

    // Delete
    public function delete(int $id) {
        $anggota = Anggota::find($id);
        $anggota->delete();

        echo $anggota;
    }
}
