<?php

namespace App\Http\Controllers;

use App\Models\Tumbuhan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $dataTumbuhan = Tumbuhan::count('id');
        $dataAdmin = User::count('id');

        // return view('admin.index',compact($dataTempat));
        // menampilkan halaman dan mengirim data pengguna
        return view('admin.index', [
            'user' => auth()->user(),
            'dataTumbuhan'=> $dataTumbuhan,
            'dataAdmin'=> $dataAdmin,
        ]);
    }

    // REGISTRASI
    public function tambahAkun() {
        // menampilkan halaman tambah akun dan mengirim data pengguna
        return view('admin.register', [
            'user' => auth()->user()
        ]);
    }
}
