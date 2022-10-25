<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <!--CSS LAINNYA-->
        <style>
            .jumbotron{
                padding: 6rem 1rem;
                background: #e2edff;

            }
            .nav-link{
                color: white;
            }

            #projects{
                background: #e2edff;
            }

            section{
                padding-top: 5rem;
            }
        </style>

        <title>Tugas Portofolio</title>
    </head>
    <body id="home">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Dhamar Adhi Susyatama Putra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" href="#home">Home</a>
                        <a class="nav-link active" href="#about">About</a>
                        <a class="nav-link active" href="#projects">Projects</a>
                        <a class="nav-link active" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <!--End of navbar-->    

        <!--Hero-->
        <section class="jumbotron text-center">
            <img src="{{asset('images/pp.jpg')}}" alt="aaa" width="200" class=" rounded-circle img-thumbnail">
            <h1 class="display-4">Dhamar Adhi Susyatama Putra</h1>
            <p class="lead">Student | Technology Lovers | Otomotive Enthusiasts</p>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,192C480,181,600,139,720,144C840,149,960,203,1080,218.7C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        <!--End of hero-->

        <!--About-->
        <section id="about">
            <div class="container">

                <div class="row text-center">
                    <div class="col">
                        <h2>About Me</h2>
                    </div>
                </div>

                <div class="row m-3 mb-5 text-center justify-content-center">
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, laboriosam minus odit voluptas ducimus veritatis tempore quam fugiat pariatur dolore dolorum, quis voluptatibus neque voluptate.</p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dolores eligendi accusantium quod, odit ex assumenda ratione culpa neque quas sapiente rerum fugiat sint aliquam!</p>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,256L60,224C120,192,240,128,360,117.3C480,107,600,149,720,181.3C840,213,960,235,1080,218.7C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <!-- End of about-->

        <!--Projects-->
        <section id="projects">
            <div class="container">
                <div class="row">
                    <div class="col text-center mb-5">
                        <h2>My Projects</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1586802978403-6406fb3ddfff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Dhamar Adhi Sp">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1467043198406-dc953a3defa0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cG90dGVkJTIwcGxhbnR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1557090495-fc9312e77b28?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,298.7C480,309,600,299,720,256C840,213,960,139,1080,117.3C1200,96,1320,128,1380,144L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        <!--End of projects-->

        <!--contact-->
        <section id="contact" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Contact Me</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,138.7C480,149,600,203,720,197.3C840,192,960,128,1080,122.7C1200,117,1320,171,1380,197.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <!--End of contact-->

        <!--Footer-->
        <footer class="bg-primary text-white text-center p-3">
            <p>Made with ❤ by <a href="#" class="text-white fw-bold">Alexander Sebastian Richard</a></p>
        </footer>
        <!--End of footer-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
