<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    // Read
    public function all() {
        $pengarang = Pengarang::all();

        echo $pengarang;
    }

    public function find(int $id) {
        $pengarang = Pengarang::find($id);

        echo $pengarang;
    }

    // Create
    public function insert(Request $request) {
        $pengarang = new Pengarang;
        $pengarang->nama = $request->nama;
        $pengarang->alamat = $request->alamat;
        $pengarang->telp = $request->telp;
        $pengarang->save();

        echo $pengarang;
    }

    // Update
    public function update(int $id, Request $request) {
        $pengarang = Pengarang::find($id);
        $pengarang->nama = $request->nama;
        $pengarang->alamat = $request->alamat;
        $pengarang->telp = $request->telp;
        $pengarang->save();

        echo $pengarang;
    }

    // Delete
    public function delete(int $id) {
        $pengarang = Pengarang::find($id);
        $pengarang->delete();

        echo $pengarang;
    }
}
