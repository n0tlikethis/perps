<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    // Read
    public function all() {
        $penerbit = Penerbit::all();

        echo $penerbit;
    }

    public function find(int $id) {
        $penerbit = Penerbit::find($id);

        echo $penerbit;
    }

    // Create
    public function insert(Request $request) {
        $penerbit = new Penerbit;
        $penerbit->nama = $request->nama;
        $penerbit->alamat = $request->alamat;
        $penerbit->telp = $request->telp;
        $penerbit->save();

        echo $penerbit;
    }

    // Update
    public function update(int $id, Request $request) {
        $penerbit = Penerbit::find($id);
        $penerbit->nama = $request->nama;
        $penerbit->alamat = $request->alamat;
        $penerbit->telp = $request->telp;
        $penerbit->save();

        echo $penerbit;
    }

    // Delete
    public function delete(int $id) {
        $penerbit = Penerbit::find($id);
        $penerbit->delete();

        echo $penerbit;
    }
}
