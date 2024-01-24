<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Penjualan Online</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{asset('assets/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{asset('assets/assets/images/logos/dark-logo.svg') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center">Silahkan Login - Penjualan Online Halimah</p>

                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            type="text" name="email" placeholder="Email Address"
                                            value="{{ old('email') }}" autofocus required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        @if (session('error'))
                                        <div class="col-md-12">
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        </div>
                                        @endif
                                        <!-- <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div> -->
                                        <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                        <!-- <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>