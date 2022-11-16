<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Projek;
use App\Models\Siswa;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        $projects = Projek::with('siswa')->get();
        return view('admin.masterproject', compact('projects', 'siswas'));
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
        return view('projek.tambah_project', compact('siswas'));
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
            'nama_projek' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'foto' => 'image|mimes:jpg,png,jpeg,svg',
            'tanggal' => 'required'
        ],[
            'nama_projek.required' => 'Nama Project Wajib Diisi',
            'nama_projek.max' => 'Maksimal 255 Huruf',
            'deskripsi.required' => 'Deskripsi Project Wajib Diisi',
            'deskripsi.max' => 'Makimal 255 Huruf',
            'foto.image' => 'Foto Harus Berupa Gambar',
            'foto.mimes' => 'Format Yang Diperbolehkan jpg, png, jpeg, svg',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $foto = time() . "_" . $file->getClientOriginalName();
            $save_db_foto = 'masterproject/' . $foto;

            $dir = public_path('images/admin/masterproject');
            if (!file_exists($dir)) mkdir($dir); 

            $file->move($dir, $foto);
        } else {
            $save_db_foto = 'projek.webp';
        }

        $validatedData['foto'] = $save_db_foto;
        
        Projek::create($validatedData);
        return redirect('/admin/masterproject')->with('success', 'Berhasil Menambahkan Data');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projeks = Siswa::find($id)->projeks;
        return view('projek.show_project', compact('projeks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Projek::find($id);
        $siswas = Siswa::all();
        $projects = Projek::where('id',$id)->firstorfail();
        return view('projek.edit_project', compact('projects'), compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projek $masterproject)
    {

        $validatedData = $request->validate([
            'id_siswa' => 'required',
            'nama_projek' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'foto' => 'image|mimes:jpg,png,jpeg,svg',
            'tanggal' => 'required',
        ],[
            'nama_projek.required' => 'Nama Project Wajib Diisi',
            'nama_projek.max' => 'Maksimal 255 Huruf',
            'deskripsi.required' => 'Deskripsi Project Wajib Diisi',
            'deskripsi.max' => 'Makimal 255 Huruf',
            'foto.image' => 'Foto Harus Berupa Gambar',
            'foto.mimes' => 'Format Yang Diperbolehkan jpg, png, jpeg, svg',
        ]);
    
        if ($request->file('foto')) {
            if ($masterproject->foto != 'projek.webp') {
                $old_foto = public_path('images/admin/' . $masterproject->foto);
                if(file_exists($old_foto)) unlink($old_foto);
            }

            $file = $request->file('foto');
            $foto = time(). "_" . $file->getClientOriginalName();
            $save_db_foto = 'masterproject/' .$foto;

            $dir = public_path('images/admin/masterproject');
            $file->move($dir, $foto);

            $validatedData['foto'] = $save_db_foto;

        }
    
        $masterproject->update($validatedData);
        
        return redirect('/admin/masterproject')->with('success', 'Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projek::where('id', $id)->firstorfail();
        if($projects->foto !='projek.webp'){
            $old_foto = public_path('images/admin/' . $projects->foto);
            if(file_exists($old_foto)) unlink($old_foto);
        }

        $projects=Projek::find($id)
            ->delete();
            
        return redirect('/admin/masterproject')->with('error', 'Berhasil Menghapus Data !');
    }
}
