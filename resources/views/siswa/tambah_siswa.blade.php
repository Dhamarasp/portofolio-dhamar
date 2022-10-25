@extends('admin.app')
@section('title', "Tambah Siswa")
@section('konten-title', "Tambah Siswa")

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

<a href="/admin/mastersiswa"><button class="btn btn-success mb-3" type="submit">Kembali</button></a>

<div class="card shadow jutify">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{route('mastersiswa.store')}}">
            @csrf
            <div class="form-group row">
                <label for="nisn" class="col-sm-3 col-form-label">Nisn</label>
                <div class="col-sm-5">
                    <input type="text" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                    @error('nisn')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"> 
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select name="jk" id="jk" class="form-control">
                        <option value="Laki-laki" @if(old('jk') == "Laki-laki") selected @endif>Laki-laki</option>
                        <option value="Perempuan" @if(old('jk') == "Perempuan") selected @endif>Perempuan</option>
                        <option value="Others" @if(old('jk') == "Others") selected @endif>Others</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-5">
                    <div class="custom-file">
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                        <div id="file-upload-filename"></div>
                        <div class="col-sm-5">
                            <img class="img-preview img-fluid w-50 mt-5">
                        </div>
                        <input type="file" name="foto" class="custom-file-input" id="foto" onchange="previewImage()">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tentang" class="col-sm-3 col-form-label">Tentang</label>
                <div class="col-sm-5">
                    <textarea type="text" name="tentang" id="tentang" rows="3" class="form-control @error('tentang') is-invalid @enderror">{{ old('tentang') }}</textarea>
                    @error('tentang')
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

<script>

    function previewImage(){
        const image = document.querySelector("#foto");
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
    
