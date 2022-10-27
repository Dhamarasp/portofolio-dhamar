@extends('admin.app')
@section('title', "Master Siswa")
@section('konten-title', "Master Siswa")
    
@section('konten')

{{-- <section>
    <ul>
        @foreach ($siswas as $siswa)
            <li>Nisn : {{$siswa->nisn}}</li>
            <li>Nama : {{$siswa->nama}}</li>
            <li>Alamat : {{$siswa->alamat}}</li>
            <li>Jenis Kelamin : {{$siswa->jk}}</li>
            <li>Email : {{$siswa->email}}</li>
            <li>Foto : {{$siswa->foto}}</li>
            <li>About : {{$siswa->about}}</li>
            <br>
        @endforeach
    </ul>
</section> --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary text-center">DATA SISWA</h3>
    </div>
    <section>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route('mastersiswa.create')}}" class="btn btn-primary mb-3">+ Tambah Siswa</a>
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="search" class="form-control bg-light border-0 small" name="key" value="{{ Request::get('key') }}"
                            placeholder="Cari Nama" aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <br>
                <table class="table table-responsive-lg table-bordered table-hover table-stripped"> 
                    <thead>
                        <tr class="text-center">
                            {{-- <th>NO</th> --}}
                            <th>No</th>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kelamin</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </tbody>
                    @foreach ($siswas as $siswa)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$siswa->nisn}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>{{$siswa->jk}}</td>
                        <td>{{$siswa->email}}</td>
                        <td class="text-nowrap">
                            <a href="{{route('mastersiswa.show', $siswa['id'])}}" class="btn btn-circle btn-sm btn-info"><i class="fas fa-eye"></i></a>

                            <a href="{{route('mastersiswa.edit', $siswa['id'])}}?page=index" class="btn  btn-circle btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                            <form method="POST" action="{{route('mastersiswa.destroy', $siswa->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus data {{$siswa['nama']}}?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-circle btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button></form>
                            
                            {{-- <a href="{{route('mastersiswa.hapus', $siswa['id'])}}" onclick="return confirm('Apakah anda yakin akan menghapus data {{$siswa['nama']}}?')" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                        </td>
                    </form>
                    </tr>
                    @endforeach
                </table>
                {{ $siswas->withQueryString()->links() }}
            </div>
        </div>
    </section>
</div>

@endsection


    
