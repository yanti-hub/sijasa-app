@extends('user.master-dashboard')

@section('title','Dashboar')
@section('content')

  @include('user.navbar')
  @include('user.footer')
  @include('user.kategori')
  @include('user.panduan')
  @include('user.tentang-kami')
    
@endsection
  
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bolder" href="#">
      <img src="{{ asset('assets/logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
      SIJASA BANYUWANGI
    </a>
    
    <!-- Toggler for mobile menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12.5A.5.5 0 0 1 3 12h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 8h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 4h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </button>

    <!-- Collapsible menu items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="kategori">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Panduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: orange;" href="{{ route('auth.login')}}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- gambar slide -->
    <!-- <div class="image">
      <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="img-fluid" style="width: 100%; height: 380px; object-fit: cover;" alt="Responsive image">
      <h5>First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div> -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/gambar/view1.jpg') }}" class="d-block w-100" style="width: 100%; height: 650px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/view2.jpg') }}" class="d-block w-100" style="width: 100%; height: 650px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/view3.jpg') }}" class="d-block w-100" style="width: 100%; height: 650px;" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
   

    <!-- <div class="p-3" >
      <div class="container section-title font-weight-bold text-black text-center" data-aos="fade-up"></div>
        <h1>Link Terkait<br></h1>
      </div>  -->
       <!-- Clients Section -->
    <section id="clients" class="clients section" style="background-color: #f0f0f0;" >
  <div class="container text-center" data-aos="fade-up">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/bwi.png') }}" class="img-fluid" alt="BWI Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/dispora (1).png') }}" class="img-fluid" alt="Dispora Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/bwi.png') }}" class="img-fluid" alt="BWI Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/dispora (1).png') }}" class="img-fluid" alt="Dispora Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/bwi.png') }}" class="img-fluid" alt="BWI Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/dispora (1).png') }}" class="img-fluid" alt="Dispora Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/bwi.png') }}" class="img-fluid" alt="BWI Logo">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/gambar/dispora (1).png') }}" class="img-fluid" alt="Dispora Logo">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Include Swiper JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiperElements = document.querySelectorAll('.init-swiper');
    swiperElements.forEach(function (swiperElement) {
      var configElement = swiperElement.querySelector('.swiper-config');
      var config = JSON.parse(configElement.textContent);
      new Swiper(swiperElement, config);
    });
  });
</script>

<div class="responsive-div">
<!-- <div class="p-3 bg-white" style="width: 100%; height: 1800px;"> -->
    
    
    <!-- <div class="p-3 bg-white" style="width: 100%; height: 500px;"> -->
      <div class="container">
        <div class="row align-items-center mt-5">
          <!-- sisi kiri: Text -->
          <div class="col-md-6">
            <div class="section-title font-weight-bold" data-aos="fade-up">
              <h1 class="mb-4 text-bold">TENTANG KAMI<br></h1>
              <h5 class="text-dark fw-medium fs-5 text-justify">
                Platform yang memudahkan Anda untuk menyewa lapangan olahraga dan alat di Banyuwangi secara online. 
                Baik untuk futsal, basket, voli, atau kegiatan olahraga lainnya, Anda bisa mencari dan memesan lapangan 
                serta peralatan dengan cepat dan mudah. Dapatkan informasi ketersediaan, harga, dan fasilitas langsung 
                melalui aplikasi kami. Nikmati pengalaman penyewaan yang praktis dan efisien, tanpa ribet!
              </h5>
            </div>
          </div>

          <!--gambar kanan -->
          <div class="col-md-6" data-aos="fade-up">
            <img src="{{ asset('assets/SIJASAS.png') }}" alt="Tentang Kami" class="img-fluid">
          </div>
        </div>
      </div>
    <!-- </div> -->




    
    <!-- <div class="p-3 bg-white mt-5" style="width: 100%; height: 500px;"> -->
      <!-- Kategori -->
      <div class="container section-title font-weight-bold text-black text-center mt-5" data-aos="fade-up">
        <h1>KATEGORI<br></h1>
        <h5 class="mt-2">
          <p>Tempat atau Fasilitas Apa Saja Yang Dapat Disewa</p></h5>
      </div>
      <div class="container mt-5">
        <div class="container px-10 text-center">
          <div class="p1"></div>
          <div class="row gx-10">

            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Stadion Diponegoro</h5>
                      <!-- <p class="card-text">Stadion Diponegoro adalah suatu stadion olahraga yang berlokasi di kelurahan Penganjuran, Kecamatan Banyuwangi, Kabupaten Banyuwang.</p> -->
                      <a href="{{ route('sirkuit') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/gor.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gor Tawang Alun</h5>
                      <!-- <p class="card-text">GOR Tawang Alun Banyuwangi adalah gedung olahraga yang terletak di Desa Mojopanggung, Kecamatan Giri, Banyuwangi. GOR ini memiliki berbagai fasilitas untuk mendukung atlet Banyuwangi dalam berbagai cabang olahraga.</p> -->
                      <a href="{{ route('sirkuit') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/sirkuit.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Sirkuit BMX Muncar</h5>
                      <!-- <p class="card-text">Sirkuit BMX muncar meruakan sirkuit milik pemerintah kabupaten banyuwangi, Sirkuit ini menjadi satu santunya lintasan BMX yang sesuai dengan standarisasi UCI(Union Cliyce Internasioanl).</p> -->
                      <a href="{{ route('sirkuit') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>`
      </div>
    <!-- </div> -->

    <!-- <div class="p-3 bg-white" style="width: 100%; height: 800px;"> -->
      <div class="container section-title font-weight-bold text-black text-center mt-5" data-aos="fade-up">
        <h1>PANDUAN<br></h1>
        <h5 class="mt-2">
          <p>Penjelasan tata cara penyewaan di Sijasa Banyuwangi</p></h5>
          <embed class="mt-4" src="/assets/panduan.pdf" type="application/pdf" width="100%" height="500px" />
      </div>
    <!-- </div> -->
 
</div>

      <!-- footer -->
    <!-- <div class="p-3 bg-dark" style="width: 100%; height: 600px;" > -->
      
      <footer class="bg-dark text-white pt-5 pb-4 mt-5">

        <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
          
            <div class="col-md-3 col-xl-3 mx-auto">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">SIJASA BANYUWANGI</h5>
              <img src="{{ asset('assets/logo.png') }}" alt="Tentang Kami" class="img-fluid">
              <P></P>
            </div>

            <div class="col-md-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">MELAYANI</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Penyewaan Tempat</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Kegiatan Olahraga</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Event atau Festival</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Program Sosial</a> 
              </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 ma-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">LOKASI</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Stadiun Diponegoro</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;">Gor Tawang Alun</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Sirkuit BMX Muncar</a> 
              </p>
               <!-- <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p> -->
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 ma-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">KONTAK</h5>
            <p><i class="fas fa-home mr-3"></i> Jl. Jaksa Agung Soeprapto No. 37 Banyuwangi, Jawa timur, Indonesia</p>
            <p><i class="fas fa-phone mr-3"></i> (0333) 418802</p>
            <p><i class="mr-3"></i>reservasi@sijasa.banyuwangikab.go.id</p>
            <!-- <p><i class="fas fa-print mr-3"></i> reservasi@sijasa.banyuwangikab.go.id</p> -->
            </div>
        </div>
        <hr class="mb-4">

        <div class="row align-items-center">
          <div class="col-md-7 col-lg-8">
            <p> Copyright 2024 All right reserved by : sijasa banyuwangi </p>
              <!-- <a href="#" style="text-decoration: none;">
                <strong class="text-warning">The Providers</strong></a></p> -->
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">
              <ul class="list-unsyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    <!-- </div> -->
    


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </body>
</html>

