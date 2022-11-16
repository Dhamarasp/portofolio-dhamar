@extends('admin.app')
@section('title', "Edit Siswa")
@section('konten-title', "Edit Siswa")

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

<a href="{{ url()->previous() }}"><button class="btn btn-success mb-3" type="submit">Kembali</button></a>

<div class="card shadow justify">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{route('mastersiswa.update', $siswas->id)}}">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ Request::query('page') }}" name="page">
            <div class="form-group row">
                <label for="nisn" class="col-sm-3 col-form-label">Nisn</label>
                <div class="col-sm-5">
                    <input type="text" name="nisn" value="{{$siswas->nisn}}" id="nisn" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" value="{{$siswas->nama}}" id="nama" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" name="alamat" value="{{$siswas->alamat}}" id="alamat" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select name="jk" class="form-control">
                        <option @if($siswas->jk == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                        <option @if($siswas->jk == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
                        <option @if($siswas->jk == "Others") selected @endif value="Others">Others</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" value="{{$siswas->email}}" name="email" id="email" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-5">
                    <div class="custom-file">
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                        <input type="hidden" name="oldFoto" value="{{$siswas->foto}}">
                        <div class="col-sm-5">
                            @if($siswas->foto)
                            <img src="{{asset('images/admin/' . $siswas->foto)}}"
                                class="img-preview img-fluid w-70 mt-5">
                            @else
                            <img class="img-preview img-fluid w-70 mt-5">
                            @endif
                        </div>
                        <input type="file" name="foto" class="custom-file-input" id="foto" onchange="previewImage()">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tentang" class="col-sm-3 col-form-label">Tentang</label>
                <div class="col-sm-5">
                    <textarea type="text" name="tentang" id="tentang" rows="3"
                        class="form-control">{{$siswas->tentang}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-3" type="submit">EDIT</button>
            </div>
        </form>
    </div>
</div>


<script>
    function previewImage() {
        const image = document.querySelector("#foto");
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
