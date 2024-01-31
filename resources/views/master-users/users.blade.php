@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><b>Master Users</b>
                    </h5>
                    <button type="button" class="btn btn-plus btn-primary m-1">+
                        Tambah User</button>

                    <div class="card card-table mt-5">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDatausers" id="myDatausers">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">User ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tanggal Registrasi</th>
                                        <th scope="col">Role</th>
                                        <th scope="col" class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>65165162121</td>
                                        <td>Isa</td>
                                        <td>isa@gmail.com</td>
                                        <td>17 Februari 2023</td>
                                        <td>User</td>



                                        <td>
                                            <a href="/detail-user"><button class="btn3 btn-primary"><i
                                                        class="ti-info"></i></button></a>
                                            <a href="/harilibur/delete/"><button class="btn3 btn-danger"><i
                                                        class="ti-trash"></i></button></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>65165162122</td>
                                        <td>Rifan</td>
                                        <td>rifan@gmail.com</td>
                                        <td>10 Februari 2023</td>
                                        <td>User</td>



                                        <td>
                                            <a href="/data-master/detailuser"><button class="btn3 btn-primary"><i
                                                        class="ti-info"></i></button></a>
                                            <a href="/harilibur/delete/"><button class="btn3 btn-danger"><i
                                                        class="ti-trash"></i></button></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
