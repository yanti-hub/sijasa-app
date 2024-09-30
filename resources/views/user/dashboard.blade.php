<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIJASA BANYUWANGI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-white fw-bolder" href="#">
          <img src="/docs/5.3/assets/brand/bootstrap-logo.svg"  alt="" width="30" height="24" class="d-inline-block align-text-top">
            SIJASA BANYUWANGI
        </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Paduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: orange;" href="{{ route('login')}}">Login</a>
            </li>
          </ul>
      </div>
    </nav>


<!-- gambar slide -->
    <!-- <div class="image">
      <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="img-fluid" style="width: 100%; height: 380px; object-fit: cover;" alt="Responsive image">
      <h5>First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div> -->

    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="d-block w-100" style="width: 100%; height: 400px; object-fit: cover;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="d-block w-100" style="width: 100%; height: 400px; object-fit: cover;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="d-block w-100" style="width: 100%; height: 400px; object-fit: cover;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
   
    <div class="p-3 bg-dark" style="width: 100%; height: 200px;" >.bg-secondary-subtle</div>


    
    <div class="p-3" style="width: 100%; height: 600px; background-color: #FF8C00; color: #FF4500; ">
      <!-- Kategori -->
      <div class="container">
        <div class="container px-4 text-center">
          <div class="p1"></div>
          <div class="row gx-5">

            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    

    <div class="p-3 bg-dark" style="width: 100%; height: 200px;" >.bg-secondary-subtle</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

