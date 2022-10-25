@extends('parent')
@section('title', 'Contact')
@section('dhamar')
<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-7">
        <form>
          <div class="mb-3">
            <label for="Name" class="form-label">Nama Lengkap</label>
            <input type="email" class="form-control" id="name" aria-describedby="name" />
            
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" />
            
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
          
          
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
  
  
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path
    fill="#0d6efd"
    fill-opacity="1"
    d="M0,224L30,213.3C60,203,120,181,180,160C240,139,300,117,360,138.7C420,160,480,224,540,213.3C600,203,660,117,720,101.3C780,85,840,139,900,154.7C960,171,1020,149,1080,138.7C1140,128,1200,128,1260,154.7C1320,181,1380,235,1410,261.3L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
  ></path>
</svg>
<!-- Akhir Contact -->
@endsection
    

