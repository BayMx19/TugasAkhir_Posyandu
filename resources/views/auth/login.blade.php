@section('title', 'Login')
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>@yield('title') | Posyandu Kumis Kucing</title>
    <link rel="icon" href="\assets\img\posyandu_logo.png">

    <style>
    ::-webkit-scrollbar {
        width: 8px;
        background-color: transparent !important;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #163172 !important;
        background-color: -webkit-linear-gradient(to right, #005c97, #363795) !important;
        background-color: linear-gradient(to right, #005c97, #363795) !important;
        border-radius: 5px;
    }




    .main {
        font-family: "Nunito" !important;
        scroll-behavior: smooth !important;
        background: white !important;
        width: auto;
        height: 100vh;
    }

    a {
        color: #163172;
        overflow: hidden;
        text-decoration: none;
    }

    label {
        float: left !important;
        font-weight: bold;
    }

    .row {
        text-align: center !important;
        justify-content: center !important;

    }

    .card {
        width: 450px !important;
        height: 500px !important;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 16px;
    }

    .card-body {
        padding: 0px 40px !important
    }


    .btn-login {
        color: white;
        font-weight: bold;
        background-color: #4E73DF;
        border-radius: 10px;
        border: 2px solid transparent;
        padding: 7px 0px !important;
        margin-top: 1rem;
        display: flex;
        align-items: center !important;
        text-align: center !important;
        justify-content: center !important;
    }

    #spinner {
        margin-left: 5px;
    }

    .btn-login:hover {
        color: #4E73DF;
        background-color: white;
        border: 2px solid #4E73DF;
        /* height: 40px; */

    }

    .img-header {
        height: 500px;
        width: auto;
        position: absolute;
        top: 15%;
        left: 20%;
        right: 25%
    }

    .login-form {
        position: relative;
        top: 35%;
        animation: form 10s;
    }

    .form-control {
        border-radius: 10px !important;
        border: 1px solid #4E73DF;
        text-align: center;
        font-family: "Nunito", sans-serif;
        font-size: 14px;
    }

    form {
        margin-top: 60px;
    }

    .login-header-img {
        margin-top: 50px;
    }

    label {
        color: #4E73DF !important;
    }

    @keyframes form {
        from {
            top: 0px;
        }

        to {
            bottom: 25%;
        }
    }

    .footer-text {
        font-family: "Nunito", sans-serif !important;
        font-size: 12px !important;
        font-weight: bold;
    }

    .kiri {
        background: #4E73DF !important;
        height: 100vh;
        position: relative;

    }

    .kanan {
        background: white !important;
        position: relative;
        height: 100vh;
        /* text-align: center !important;
            justify-content: center; */

    }

    .text-header {
        font-family: "Roboto", sans-serif !important;
        font-weight: bold;
        margin-top: 25%;
        font-size: 28px;

    }


    .container {
        margin-top: 5%;
    }

    .password-container {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 20px;
        top: 57%;
        transform: translateY(-50%);
        cursor: pointer;
    }
    </style>

</head>

<body>
    <main class="main">
        <div class="container-fluid">
            <div class="row">


                <div class="col-sm-6 kiri">
                    <img src="{{ asset('assets/img/left_img_login.png') }}" class="img-header mb-5">
                </div>
                <div class="col-sm-6 kanan">

                    <div class="card shadow">
                        <div class="card-body">
                            <div class="header-login">
                                <h3 class="text-header">Masuk</h3>
                            </div>
                            <div class="container ">
                                <div class="row login-form">
                                    <form class="mt-2" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <label for="Email" class="label-form mb-1">Email</label>

                                        <input type="text" class="form-control form-login mt-2" id="email"
                                            placeholder="Masukkan Email" name="email" required autocomplete="off">

                                        <label for="password" class="label-form mt-3 mb-1">Password</label>
                                        <input type="password" class="form-control form-login mt-2" id="password"
                                            placeholder="Masukkan Password" name="password" required autocomplete="off">
                                        <span class="password-toggle" onclick="togglePasswordVisibility()">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="toggleIcon" width="16"
                                                height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>
                                        </span>
                                        <br>


                                        <div class="d-grid gap-2">

                                            <button id="loginBtn" type="submit" class="btn-login">Masuk <div
                                                    id="spinner" style="display: none;">
                                                    <!-- Spinner HTML -->
                                                    <div class="spinner-border spinner-masuk"
                                                        style="width: 1rem; height: 1rem;" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div></button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleIcon = document.getElementById("toggleIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }

    document.getElementById('loginBtn').addEventListener('click', function() {
        // Menampilkan spinner
        document.getElementById('spinner').style.display = 'block';

        // Simulasi proses login (dapat dihapus)
        setTimeout(function() {
            // Menyembunyikan spinner
            document.getElementById('spinner').style.display = 'none';

            // Lakukan hal-hal lain setelah login berhasil
            // Contoh: Redirect ke halaman lain
            window.location.href = 'dashboard';
        }, 500);
    });
    </script>

</body>

</html>