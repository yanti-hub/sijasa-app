<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/template/dist/assets/css/pages/auth.css')}}">
</head>

<body>
    <div id="auth" class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-6 col-md-8 col-sm-10"> <!-- Membatasi lebar card agar tidak terlalu besar di layar besar -->
            <div class="card shadow-lg"> <!-- Card dengan efek bayangan -->
                <div class="card-body"> <!-- Isi dari card -->
                    <div id="auth-left">
                        <div class="auth-logo mb-4">
                            <a href="index.html"><img src="{{ asset('/template/dist/assets/images/logo/logo.png')}}" alt="Logo" class="img-fluid"></a>
                        </div>
                        <h1 class="auth-title text-center">Forgot Password</h1>
                        <p class="auth-subtitle text-center mb-5">Input your email and we will send you reset password link.</p>

                        <form action="index.html">
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="email" class="form-control form-control-xl" placeholder="Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Login</a>.
                            </p>
                        </div>
                    </div>
                </div> <!-- End of card-body -->
            </div> <!-- End of card -->
        </div> <!-- End of column wrapper -->
    </div>
</body>

</html>
