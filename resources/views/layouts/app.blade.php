<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Posyandu Kumis Kucing | @yield('title')</title>
    <link rel="icon" href="\assets\img\posyandu_logo.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        @include('layouts.sidebar')
        <div class="body-wrapper">
            @include('layouts.navbar')
            @yield('content')
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
    function confirmLogout() {
        var isConfirmed = confirm("Anda yakin untuk logout?");

        if (isConfirmed) {
            window.location.href = "{{ '/logout' }}";
        } else {
            alert("Logout dibatalkan.");
        }
    }
    </script>
    <script>
    $(document).ready(function() {

        $(".myDatausers").DataTable({
            "searching": true,
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]

        });
        $(".myDatakader").DataTable({
            "searching": true,
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]

        });
        $(".myDataanak").DataTable({
            "searching": true,
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]

        });
        $(".myDatapencatatan").DataTable({
            "searching": true,
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]

        });
    });
    </script>

    @if (session('toast_error'))
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "{{ session('toast_error') }}",
        showConfirmButton: false,
        timer: 3000,
        confirmButtonColor: '#005c97',
    });
    </script>
    @endif

</body>

</html>