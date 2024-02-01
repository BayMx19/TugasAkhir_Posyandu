@extends('layouts.app')
@section('title', 'Master Kader')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><b>Master Kader</b>
                    </h5>
                    <button type="button" class="btn btn-plus btn-primary m-1"><i class="ti ti-plus"></i>
                        Tambah Kader</button>

                    <div class="card card-table">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDatakader" id="myDatakader">
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
                                    @foreach ($kader as $k)
                                        <tr>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->email }}</td>
                                            <td>{{ $k->username }}</td>
                                            <td>{{ $k->role }}</td>
                                            <td style="color: {{ $u->status === 'active' ? 'green' : 'red' }}">
                                                {{ $k->status }}</td>



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
