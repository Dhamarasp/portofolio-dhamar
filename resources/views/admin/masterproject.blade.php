@extends('admin.app')
@section('title', "Master Project")
@section('konten-title', "Master Project")
    
@section('konten')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 border bottom">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div>
            <div class="card-body text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{$siswa->nisn}}</td>
                                    <td>{{$siswa->nama}}</td>
                                    <td class="text-nowrap">
                                        <button onclick="show({{ $siswa->id }})" class="btn btn-info btn-circle btn-sm"><i class="fas fa-play"></i></button>

                                        <a href="{{ route('masterproject.create') }}?siswa={{ $siswa->id }}" class="btn btn-success btn-circle btn-sm">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project Siswa</h6>            
            </div>
            <div id="project" class="card-body">
                Pilih siswa terlebih dahulu
            </div>
        </div>
    </div>
</div>

<script>
    function show(id){
        $.get('/admin/masterproject/'+id, function(data){
            $('#project').html(data);
        })
    }
</script>
@endsection

    {{-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary text-center">PROJECT SISWA</h3>
        </div>
        <section>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{route('masterproject.create')}}" class="btn btn-primary mb-3">+ Tambah Project</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>No</th>
                                <th>Nama Siswa (Project)</th>
                                <th>Nama Project</th>
                                <th>Deskripsi</th>
                                <th>Foto Project</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </tbody>
                        @php $no=0; @endphp
                        @foreach ($projects as $projek)
                        @php $no++; @endphp
                        <tr class="text-center">
                            <th>{{$no}}</th>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$projek->siswa->nama}}</td>
                            <td>{{$projek->nama_projek}}</td>
                            <td>{{$projek->deskripsi}}</td>
                            <td>
                                <img src="{{asset('storage/'. $projek->foto)}}" alt="" style="display: block;
                                    max-height: 300px;
                                    width: auto;
                                    height: auto;
                                    margin-left:auto;
                                    margin-right:auto; 
                                    overflow: hidden;">
                            </td>
                            <td>{{$projek->tanggal}}</td>
                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>

                                <a href="{{route('masterproject.edit', $projek['id'])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                                <form method="POST" action="{{route('masterproject.destroy', $projek->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus data {{$projek['nama']}}?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button></form>

                                <a href="{{route('masterproject.hapus', $projek['id'])}}" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data {{$projek['nama_projek']}}?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div> --}}


