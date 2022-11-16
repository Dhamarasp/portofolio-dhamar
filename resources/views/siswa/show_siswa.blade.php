@extends('admin.app')
@section('title', "Show Siswa")
@section('konten-title', "Show Siswa")

@section('konten')


<a href="/admin/mastersiswa"><button class="btn btn-success mb-3" type="submit"><i
            class="fas fa-angle-double-left"></i></button></a>

<a href="{{route('mastersiswa.edit', $siswas['id'])}}?page=show" class="btn btn-warning mb-3"><i
        class="fas fa-edit"></i></a>

<form method="POST" action="{{route('mastersiswa.destroy', $siswas->id)}}"
    onclick="return confirm('Apakah anda yakin akan menghapus data {{$siswas['nama']}}?')" class="d-inline">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger mb-3" type="submit"><i class="fas fa-trash"></i></button>
</form>
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <div class="rounded-circle mx-auto" style="
                        height: 220px;
                        width: 220px;
                        background-image: url({{ asset('images/admin/' . $siswas->foto) }});
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center center;">
                </div><br>

                <h5 class="font-weight-bold">{{$siswas->nama}}</h5>
                <h5 class="font-weight-bold">{{$siswas->alamat}}</h5>
                <h5 class="font-weight-bold">{{$siswas->email}}</h5>

            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <div class="card-header py-1 d-flex flex-row align-items-center justify-content-center">
                    <h6 class="m-1 font-weight-bold text-primary ">Kontak</h6>
                </div>
                <div class="card-body m-1">
                    @foreach ($kontaks as $kontak)
                    <h5 class="font-weight-bold">
                        <i class="fab fa-{{strtolower($kontak->jeniskontak->jenis_kontak)}}"></i>
                        {{ $kontak->deskripsi }}
                    </h5>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="card-header py-1 d-flex flex-row align-items-center justify-content-left">
                    <h6 class="m-1 font-weight-bold text-primary "> Tentang {{$siswas->nama}}</h6>
                </div>
                <div class="card-body m-1">
                    <h5 class="font-weight-bold">{{$siswas->tentang}}</h5>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="card-header py-1 d-flex flex-row align-items-center justify-content-left">
                    <h6 class="m-1 font-weight-bold text-primary ">Project {{$siswas->nama}}</h6>
                </div>
                <div class="card-body m-1">
                    <div class="row">
                        @foreach ($siswas->projeks as $projek)
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <img class="w-100" src="{{asset('images/admin/' . $projek->foto)}}" alt="">
                                    <hr>
                                    <a href="/admin/masterproject">Baca selengkapnya..</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
