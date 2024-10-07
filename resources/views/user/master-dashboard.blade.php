<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIJASA BANYUWANGI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
     <link rel="stylesheet" href="{{ asset('/css-dashboard/style.css') }}">

  </head>
  
  <body>
    <!-- Navbar -->
    @include('user.navbar')


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


    
    
   @include('user.tentang-kami')

    @include('user.kategori')

    @include('user.panduan')
 
      <!-- footer -->
    @include('user.footer')
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </body>
</html>