@extends('parent')
@section('title', 'Project')
@section('dhamar')
<!-- Projects -->
<section id="projects">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Projects</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="img 1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="img 2" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="{{asset('images/3.jpg')}}" class="card-img-top" alt="img 3" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path
      fill="#0d6efd"
      fill-opacity="1"
      d="M0,256L48,229.3C96,203,192,149,288,149.3C384,149,480,203,576,218.7C672,235,768,213,864,202.7C960,192,1056,192,1152,192C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
    ></path>
  </svg>
</section>
<!-- Akhir Projects -->

@endsection

    