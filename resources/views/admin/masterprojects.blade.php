@if($siswas->isEmpty())
    <h6 class="text-center">Siswa Belum Memiliki Project</h6>
@else
@foreach ($siswas as $siswa)
<div class="card">
    <div class="card-header">
        {{ $siswa->nama_projek }}
    </div>
    <div class="card-body">
        <h5>Tanggal Project</h5>
        {{ $siswas->tanggal }}
        <h5>Deskripsi Project</h5>
        {{ $siswas->deskripsi }}
    </div>
</div>
    
@endforeach
    
@endif