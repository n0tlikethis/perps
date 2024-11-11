<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    // Read
    public function all() {
        $rak = Rak::all();

        echo $rak;
    }

    public function find(int $id) {
        $rak = Rak::find($id);

        echo $rak;
    }

    // Create
    public function insert(Request $request) {
        $rak = new Rak;
        $rak->kode_rak = $request->kode_rak;
        $rak->lokasi = $request->lokasi;
        $rak->save();

        echo $rak;
    }

    // Update
    public function update(int $id, Request $request) {
        $rak = Rak::find($id);
        $rak->lokasi = $request->lokasi;
        $rak->save();

        echo $rak;
    }

    // Delete
    public function delete(int $id) {
        $rak = Rak::find($id);
        $rak->delete();

        echo $rak;
    }
}
