@extends('layouts.app')
@section('title', 'Master Users')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div id="success-alert" class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div id="error-alert" class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <h5 class="card-title fw-bold mb-4"><b>Master Users</b>
                    </h5>
                    <a href="{{ '/add-users' }}"><button type="button" class="btn btn-plus btn-primary m-1"><i
                                class="ti ti-plus"></i>
                            Tambah User</button></a>

                    <div class="card card-table">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDatausers" id="myDatausers">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td>{{ $u->nama }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->username }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td style="color: {{ $u->status === 'active' ? 'green' : 'red' }}">
                                                <b><b>
                                                        @if ($u->status === 'active')
                                                            Aktif
                                                        @else
                                                            Tidak Aktif
                                                        @endif
                                                    </b></b>
                                            </td>



                                            <td>
                                                <a href="/detail-users/{{ encrypt($u->id) }}"><button
                                                        class="btn btn2 btn-success"><i class="ti ti-eye"></i></button></a>
                                                <a href="/edit-users/{{ encrypt($u->id) }}"><button
                                                        class="btn btn2 btn-primary"><i class="ti ti-edit"></i></button></a>
                                                <a href="/delete-users/{{ encrypt($u->id) }}"><button
                                                        class="btn btn2 btn-danger"><i class="ti ti-trash"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successAlert = document.getElementById('success-alert');
            var errorAlert = document.getElementById('error-alert');
            if (successAlert) {
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
            if (errorAlert) {
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    </script>
@endsection
