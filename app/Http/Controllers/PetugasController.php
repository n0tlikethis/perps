<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    // Read
    public function all() {
        $petugas = Petugas::all();

        echo $petugas;
    }

    public function find(int $id) {
        $petugas = Petugas::find($id);

        echo $petugas;
    }

    public function where(string $username) {
        $petugas = Petugas::where('username', $username)->get();

        echo $petugas;
    }

    // Create
    public function insert(Request $request) {
        $petugas = new Petugas;
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->nama = $request->nama;
        $petugas->telp = $request->telp;
        $petugas->alamat = $request->alamat;
        $petugas->save();

        echo $petugas;
    }

    // Update
    public function update(int $id, Request $request) {
        $petugas = Petugas::find($id);
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->nama = $request->nama;
        $petugas->telp = $request->telp;
        $petugas->alamat = $request->alamat;
        $petugas->save();

        echo $petugas;
    }

    // Delete
    public function delete(int $id) {
        $petugas = Petugas::find($id);
        $petugas->delete();

        echo $petugas;
    }
}
