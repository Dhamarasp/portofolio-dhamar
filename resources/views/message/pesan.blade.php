@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show md-4" role="success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
  {{ Session::get('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show md-4" role="success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-exclamation-triangle"></i><b>Gagal !</b></h5>
  {{ Session::get('error') }}
</div>
@endif