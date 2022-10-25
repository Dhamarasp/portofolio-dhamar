<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Siswa;
use App\Models\Projek;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->key;
        $jumlahbaris = 2;
        if (strlen($key)) {
            $siswas = Siswa::where('id','like',"%$key%")
                    ->orWhere('nama','like',"%$key%")
                    ->paginate($jumlahbaris);
        } else {
            $siswas = Siswa::orderBy('id')->paginate($jumlahbaris);
        }
        return view('admin.mastersiswa')->with('siswas',$siswas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.tambah_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $messages = [
        //     'required' => ':attribute tidak boleh kosong!',
        //     'numeric' => ':attribute harus diisi angka!',
        //     'alpha' => ':attribute harus diisi huruf',
        //     'email' => ':attribute contoh ( example@gmail.com )',
        //     'alpha_num' => ':attribute hanya boleh diisi angka dan huruf!',
        //     'mimes'=> ':attribute harus berupa fornat (jpg, png, jpeg, svg)',
        //     'min' => ':attribute minimal :min karakter!',
        //     'max' => ':attribute maksimal :max karakter!'
        // ];
        $validatedData = $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required|max:100',
            'alamat' => 'required|max:100',
            'jk' => 'required',
            'email' => 'required|email',
            'foto' => 'image|mimes:jpg,png,jpeg,svg',
            'tentang' => 'required|max:255'
        ],[
            'nisn.required'         => 'Nisn Wajib Diisi',
            'nisn.numeric'          => 'Nisn Wajib Berupa Angka',
            'nama.required'         => 'Nama Wajib Diisi',
            'nama.max'              => 'Nama Maksimal 100 Huruf',
            'alamat.required'       => 'Alamat Wajib Diisi',
            'alamat.max'            => 'Alamat Maksimal 100 Huruf',
            'email.required'        =>'Email Wajib Diisi',
            'email.email'           => 'Email Contoh example@gmail.com',
            'foto.image'            => 'Foto Harus Berupa Gambar',
            'foto.mimes'            => 'Format Yang Diperbolehkan jpg, png, jpeg, svg',
            'tentang.required'      => 'Kolom Ini Wajib Diisi',
            'tentang.max'           => 'Maksimal 255 Hurud',
        ]);

        if ($request->file('foto') == null) {
            $validatedData['foto'] = "default.jpg";
        }else{
            $validatedData['foto'] = $request->file('foto')->store('siswa-images'); 
        }

        Siswa::create($validatedData);
        return redirect('/admin/mastersiswa')->with('success', 'Berhasil Menambahkan Data!');
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
        $siswas=Siswa::where('id',$id)->with('projeks')->firstorfail();
        return view('siswa.show_siswa', compact('siswas','kontaks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas=Siswa::where('id',$id)->firstorfail();
        return view('siswa.edit_siswa', compact('siswas'));
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
        // $messages = [
        //     'required' => ':attribute tidak boleh kosong!',
        //     'numeric' => ':attribute harus diisi angka!',
        //     'alpha' => ':attribute harus diisi huruf',
        //     'email' => ':attribute contoh ( example@gmail.com )',
        //     'alpha_num' => ':attribute hanya boleh diisi angka dan huruf!',
        //     'mimes'=> ':attribute harus berupa fornat (jpg, png, jpeg, svg)',
        //     'min' => ':attribute minimal :min karakter!',
        //     'max' => ':attribute maksimal :max karakter!'
        // ];

        $validatedData = $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required|max:100',
            'alamat' => 'required|max:100',
            'jk' => 'required',
            'email' => 'required|email',
            'foto' => 'image|mimes:jpg,png,jpeg,svg',
            'tentang' => 'required|max:255'
        ],[
            'nisn.required'         => 'Nisn Wajib Diisi',
            'nisn.numeric'          => 'Nisn Wajib Berupa Angka',
            'nama.required'         => 'Nama Wajib Diisi',
            'nama.max'              => 'Nama Maksimal 100 Huruf',
            'alamat.required'       => 'Alamat Wajib Diisi',
            'alamat.max'            => 'Alamat Maksimal 100 Huruf',
            'email.required'        =>'Email Wajib Diisi',
            'email.email'           => 'Email Contoh example@gmail.com',
            'foto.image'            => 'Foto Harus Berupa Gambar',
            'foto.mimes'            => 'Format Yang Diperbolehkan jpg, png, jpeg, svg',
            'tentang.required'      => 'Kolom Ini Wajib Diisi',
            'tentang.max'           => 'Maksimal 255 Hurud',
        ]);

        if($request->file('foto')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('siswa-images'); 
        }

        $siswas=Siswa::where('id', $id)
            ->update($validatedData);

        $route = ($request->page == "index") ? redirect()->route('mastersiswa.index') : redirect()->route('mastersiswa.show', $id); 

        return $route->with('success', 'Berhasil Merubah Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $siswas=Siswa::where('id',$id)->firstorfail();
        if($siswas->foto){
            Storage::delete($siswas->foto);
        }
        $siswas = Siswa::find($id)
                ->delete();

        return redirect('admin/mastersiswa')->with('error','Berhasil Menghapus Data !');
    }
}
