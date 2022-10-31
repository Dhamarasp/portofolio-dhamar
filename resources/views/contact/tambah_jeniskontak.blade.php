@extends('admin.app')
@section('title', "Tambah Jenis Kontak")
@section('konten-title', "Tambah Jenis Kontak")

@section('konten')
{{-- @if($errors->any())

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $message)
            <li>{{$message}}</li>
@endforeach
</ul>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

@endif --}}

<a href="/admin/masterkontak"><button class="btn btn-success mb-3" type="submit">Kembali</button></a>

<div class="card shadow jutify">
    <div class="card-body">
        <div class="form-group row">
            <label for="jenis_kontak" class="col-sm-3 col-form-label">Jenis Kontak Saat Ini : </label>
            <div class="col-sm-5 text-nowrap">
                @foreach ($item as $item)
                <form method="POST" action="{{ route('jeniskontak.destroy', $item->id) }}"
                    onclick="return confirm('Apakah Anda Yakin Akan Menghapus Jenis Kontak {{ $item->jenis_kontak }} ?')"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">{{ $item->jenis_kontak }}</span>
                    </button>
                </form>
                @endforeach
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{route('jeniskontak.store')}}">
            @csrf
            <div class="form-group row">
                <label for="jenis_kontak" class="col-sm-3 col-form-label">Tambah Jenis Kontak</label>
                <div class="col-sm-5">
                    <input type="text" name="jenis_kontak" id="jenis_kontak"
                        class="form-control @error('jenis_kontak') is-invalid @enderror"
                        value="{{ old('jenis_kontak') }}">
                    @error('jenis_kontak')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary mt-3" type="submit">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
@endsection
