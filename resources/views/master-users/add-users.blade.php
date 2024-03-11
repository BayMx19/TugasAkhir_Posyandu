@extends('layouts.app')
@section('title', 'Tambah Pengguna')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><a href="{{ '/master_users' }}"><button class="btn btn2 btn-primary"><i
                                    class="ti ti-arrow-left"></i></button></a> <b class="mx-2">Tambah Pengguna</b>
                    </h5>
                    <div class="card">
                        <div class="card-body">
                            <form id="myForm" method="POST" action="/add-users/store" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                required>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                required>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="" selected disabled>Pilih Role</option>

                                                <option value="Kader">Kader</option>
                                                <option value="SuperAdmin">SuperAdmin</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <label
                                                    class="text-red">*</label></label>
                                            <input type="password" class="form-control " id="password" name="password"
                                                required>
                                            <span class="password-toggle" onclick="togglePasswordVisibility()">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="toggleIcon" width="16"
                                                    height="16" fill="currentColor" class="bi bi-eye"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                    <path
                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Status <label
                                                    class="text-red">*</label></label>
                                            <div class="mt-1">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status_active" value="active">
                                                    <label class="form-check-label" for="status_active">Aktif</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status_inactive" value="inactive">
                                                    <label class="form-check-label" for="status_inactive">Tidak
                                                        Aktif</label>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                </div>



                                <button type="submit" class="btn btn-primary mt-3" onclick="showSwal()">Simpan</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
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

        function showSwal() {
            Swal.fire({
                title: "Simpan Data?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Trigger form submission after "Ya" is clicked
                    document.getElementById('myForm').submit();
                }
            });
        }
    </script>
@endsection
