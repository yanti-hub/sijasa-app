<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Use komentar HTML yang benar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap");

      body, html {
          font-family: "Montserrat", sans-serif;
          font-size: 12px;
          background-color: white;
          height: 100%;
          font-weight: 700;
      }

      .container {
          display: flex;
          height: 100%;
          align-items: center;
          justify-content: center;
      }

      .login-form {
          height: 500px;
          width: 430px;
          padding: 0 35px;
          background-color: white;
          border: none;
      }

      input[type="email"], input[type="password"] {
          border-radius: 20px;
      }

      .btn-login {
          height: 35px;
          border-radius: 20px;
          font-weight: 700;
      }

      .link {
          color: #198754;
          text-decoration: none;
      }

      .link:hover {
          color: #198754;
          text-decoration: none;
      }

      .btn-gmail {
          height: 35px;
          border: 2px solid grey;
          border-radius: 20px;
          font-weight: 700;
      }

      .img-google {
        height: 20px;
        width: 20px;
      }
    </style>

    <link rel="stylesheet" href="{{ asset('/css-dashboard/staylelog.css')}}">

    <title>Form Forgot-Password</title>
  </head>
  <body>
     <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h5 class="card-title">Forgot Password</h5>
                <h6 class="card-subtitle text-muted mb-5 fw-bold">please change the password by entering email!</h6>
                <form>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                  </div>
                  <!-- code daftar register -->
                    <div class="d-grid mt-5">
                            <a href="{{ route('auth.login') }}" class="btn btn-success btn-login">Daftar</a>
                    </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
