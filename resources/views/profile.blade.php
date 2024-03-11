@extends('layouts.app')
@section('title', 'Informasi Akun')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><b class="mx-2">Informasi Akun</b>
                    </h5>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                value="{{ $profile->username }}" name="username" disabled>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" value="{{ $profile->email }}"class="form-control"
                                                id="email" name="email" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" value="{{ $profile->nama }}" class="form-control"
                                                id="nama" name="nama" disabled>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <input type="text" value="{{ $profile->role }}" class="form-control"
                                                id="role" name="role" disabled>

                                        </div>
                                    </div>




                                </div>



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
    </script>
@endsection
