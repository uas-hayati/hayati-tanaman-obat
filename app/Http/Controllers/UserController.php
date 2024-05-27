<?php

namespace App\Http\Controllers;

use App\Models\Tumbuhan;
use Illuminate\Http\Request;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tumbuhanObat = Tumbuhan::get()->take(4);

        return view('index', [
            'tumbuhanObat' => $tumbuhanObat
        ]);
    }

    public function showTumbuhan()
    {
        $tanamanObat = Tumbuhan::get();

        return view('products', [
            'tanamanObat' => $tanamanObat
        ]);
    }

    public function showDetail(string $id)
    {
        // $result = Tumbuhan::join('tempat', 'menu.tempat_id', '=', 'tempat.id')
        //     ->where('tempat.id', '=', $id)
        //     ->select('menu.*', 'tempat.*', 'tempat.nama as nama_tempat', 'menu.nama as nama_menu') // Pilih semua kolom dari menu dan tempat
        //     ->get();

        // if ($result->isEmpty()) {
        //     $result = Tempat::select('*')
        //         ->where('id', $id)
        //         ->get();
        //     return view("detail", [
        //         'result' => $result
        //     ]);
        // } else {
        //     return view('detail', [
        //         'result' => $result
        //     ]);
        // }

        $tumbuhan = Tumbuhan::select('*')->where('id', $id)->get();
        return view("detail", [
            'tumbuhan' => $tumbuhan
        ]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('cariNama');
        $all = Tumbuhan::get();


        $tanamanObat = Tumbuhan::where('nama', 'like', "%" . $keyword . "%")->get();
        if ($tanamanObat->isEmpty()) {
            return view("products", [
                'message' => 'Tidak ada yang sesuai dengan pencarian',
                'all' => $all
            ]);
        } elseif ($tanamanObat->isNotEmpty()){
            return view('products', [
                'tanamanObat' => $tanamanObat,
                // 'all' => $all
            ]);
        } else {
            return view('products', ['all' => $all]); // Corrected syntax here
            // return response()->json($all);
        }


        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
