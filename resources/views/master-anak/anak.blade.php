@extends('layouts.app')
@section('title', 'Master Anak')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><b>Master Anak</b>
                    </h5>
                    <button type="button" class="btn btn-plus btn-primary m-1"><i class="ti ti-plus"></i>
                        Tambah Anak</button>

                    <div class="card card-table">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDataanak" id="myDataanak">
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
                                    @foreach ($anak as $a)
                                        <tr>
                                            <td>{{ $a->nama }}</td>
                                            <td>{{ $a->email }}</td>
                                            <td>{{ $a->username }}</td>
                                            <td>{{ $a->role }}</td>
                                            <td>{{ $a->status }}</td>



                                            <td>
                                                <a href="/detail-users"><button class="btn btn2 btn-success"><i
                                                            class="ti ti-eye"></i></button></a>
                                                <a href="/detail-users"><button class="btn btn2 btn-primary"><i
                                                            class="ti ti-edit"></i></button></a>
                                                <a href="/master-users/delete/"><button class="btn btn2 btn-danger"><i
                                                            class="ti ti-trash"></i></button></a>
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
@endsection
