<?php

namespace App\Http\Controllers;

use App\Models\Tumbuhan;
use Illuminate\Http\Request;

class TumbuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tumbuhan = Tumbuhan::all();
        return view("admin.tumbuhan.index", [
            'user' => auth()->user(),
            'tumbuhan' => $tumbuhan
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tumbuhan.create', ['user' => auth() -> user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('gambar');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        //
        // $gambarPath =  ->store('post-image');
        // $validateData = $request->validate([
        //     'nama'=> 'required|string|max:255',
        //     'alamat'=> 'required|string|max:255',
        //     'jam_buka' => 'required',
        //     'jam_tutup' => 'required',
        //     'gambar' => $gambarPath,
        // ]);

        $tanamanObat = new Tumbuhan([
            'nama' => $request->input('nama'),
            'nama_latin' => $request->input('nama_latin'),
            'famili' => $request->input('famili'),
            'kegunaan' => $request->input('kegunaan'),
            'gambar' => $nama_file,
            'deskripsi' => $request->input('deskripsi'),
            'admin_id' => $request->user()->id,
        ]);
        $tanamanObat->save();
        // Tempat::create($validateData);

        return redirect()->route('admin.tumbuhan.index')->with('success', 'Data tumbuhan berhasil ditambah');
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
        $tumbuhan = Tumbuhan::select('*')
        ->where('id', $id)
        ->get();
    return view("admin.tumbuhan.edit", [
        'user' => auth()->user(),
        'tumbuhan' => $tumbuhan
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tumbuhanObat = Tumbuhan::findOrFail($id);


        $tumbuhanObat->update([
            'nama' => $request->input('nama'),
            'nama_latin' => $request->input('nama_latin'),
            'famili' => $request->input('famili'),
            'kegunaan' => $request->input('kegunaan'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            $tumbuhanObat->update(['gambar' => $nama_file]);
        }

        return redirect()->route('admin.tumbuhan.index')->with('success', 'Data tempat berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tumbuhan::where('id', $id)->delete();
        return redirect()->route('admin.tumbuhan.index')->with('success', 'Data tempat berhasil dihapus');
    }
}
