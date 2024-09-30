<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIJASA BANYUWANGI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand text-white fw-bolder" href="#">
          <img src="{{ asset('assets/sijasa.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top rounded-circle">
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
              <a class="nav-link text-white" href="#">Panduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Kontak</a>
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

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="d-block w-100" style="width: 100%; height: 390px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/gor.jpg') }}" class="d-block w-100" style="width: 100%; height: 390px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/gambar/sirkuit.jpg') }}" class="d-block w-100" style="width: 100%; height: 390px;" alt="...">
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
    
   

    <div class="p-3 bg-dark" style="width: 100%; height: 400px;" >.bg-secondary-subtle</div>

    <div class="p-3 bg-dark" style="width: 100%; height: 230px;" >
      <h1 class="fw-bold" style="color: orange;">Tentang Kami</h1>
      <h5 class="text-white fw-medium fs-5"> Platform yang memudahkan Anda untuk menyewa lapangan olahraga dan alat di Banyuwangi secara online. Baik untuk futsal, basket, voli, atau kegiatan olahraga lainnya, Anda bisa mencari dan memesan lapangan serta peralatan dengan cepat dan mudah. Dapatkan informasi ketersediaan, harga, dan fasilitas langsung melalui aplikasi kami. Nikmati pengalaman penyewaan yang praktis dan efisien, tanpa ribet!</h5>
    </div>



    
    <div class="p-3" style="width: 100%; height: 600px; background-color: #FF8C00; color: #FF4500; ">
      <!-- Kategori -->
      <div class="container section-title font-weight-bold text-black text-center" data-aos="fade-up">
        <h1>Kategori<br></h1>
        <h4><p>Tempat atau Fasilitas Apa Saja Yang Dapat Disewa</p></h4>
      </div>
      <div class="container">
        <div class="container px-10 text-center">
          <div class="p1"></div>
          <div class="row gx-10">

            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/stadiun.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Stadion Diponegoro</h5>
                      <p class="card-text">Stadion Diponegoro adalah suatu stadion olahraga yang berlokasi di kelurahan Penganjuran, Kecamatan Banyuwangi, Kabupaten Banyuwang.</p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/gambar/gor.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gor TawangAlun</h5>
                      <p class="card-text">GOR Tawang Alun Banyuwangi adalah gedung olahraga yang terletak di Desa Mojopanggung, Kecamatan Giri, Banyuwangi. GOR ini memiliki berbagai fasilitas untuk mendukung atlet Banyuwangi dalam berbagai cabang olahraga.</p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
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
                      <p class="card-text">Sirkuit BMX muncar meruakan sirkuit milik pemerintah kabupaten banyuwangi, Sirkuit ini menjadi satu santunya lintasan BMX yang sesuai dengan standarisasi UCI(Union Cliyce Internasioanl).</p>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>`
      </div>
      <!-- footer -->
      <footer class="text-white pt-5 pb-4">

        <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
          
            <div class="col-md-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Company Name</h5>
              <p>Dinas Pemuda dan Olahraga (Dispora) Kabupaten Banyuwangi adalah salah satu Organisasi Perangkat Daerah (OPD) yang bertugas melaksanakan urusan pemerintahan daerah di bidang kepemudaan dan olahraga.</p>
            </div>
            <div class="col-md-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Providers</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 ma-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Location</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
               <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Providers</a> 
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 ma-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
            <p><i class="fas fa-home mr-3"></i> Banyuwangi</p>
            <p><i class="fas fa-envelope mr-3"></i> email@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> +62 123 456 789</p>
            <p><i class="fas fa-print mr-3"></i> +62 987 654 321</p>
            </div>
        </div>
        <hr class="mb-4">

        <div class="row align-items-center">
          <div class="col-md-7 col-lg-8">
            <p> Copyright 2003 All right reserved by:</p>
              <a href="#" style="text-decoration: none;">
                <strong class="text-warning">The Providers</strong></a></p>
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
    </div>
    

    <div class="p-3 bg-dark" style="width: 100%; height: 500px;" >.bg-secondary-subtle</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

