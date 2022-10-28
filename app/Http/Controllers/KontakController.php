<?php

namespace App\Http\Controllers;

use App\Models\JenisKontak;
use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Siswa;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        $kontaks = Kontak::with('siswa')->get();
        return view('admin.masterkontak', compact('kontaks', 'siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_siswa = request()->query('siswa');
        $siswas = Siswa::find($id_siswa);
        $kontaks = JenisKontak::all();
        return view('contact.tambah_kontak', compact('siswas','kontaks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_siswa' => 'required',
            'id_jenis' => 'required',
            'deskripsi' => 'required|max:255'
        ]);
        
        Kontak::create($validatedData);
        return redirect('/admin/masterkontak')->with('success', 'Berhasil Menambahkan Kontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontaks = Siswa::find($id)->kontak;
        return view('contact.show_kontak', compact('kontaks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Kontak::find($id);
        $kontaks = Kontak::where('id', $id)->firstorfail();
        return view('contact.edit_kontak', compact('kontaks'));
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
        $validatedData = $request->validate([
            'deskripsi' => 'required'
        ]);

        Kontak::where('id', $id)
        ->update($validatedData);

        return redirect('admin/masterkontak')->with('success', 'Berhasil Mengubah Kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kontak::find($id)->delete();
        return redirect('/admin/masterkontak')->with('success', 'Berhasil Menghapus Kontak');
    }
}
