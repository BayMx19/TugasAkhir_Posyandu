@extends('layouts.app')
@section('title', 'Master Anak')
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
                    <h5 class="card-title fw-bold mb-4"><b>Master Anak</b>
                    </h5>
                    <a href="{{ '/add-anak' }}"><button type="button" class="btn btn-plus btn-primary m-1"><i
                                class="ti ti-plus"></i>
                            Tambah Anak</button></a>

                    <div class="card card-table">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDataanak" id="myDataanak">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">Nama Anak</th>
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Kondisi</th>
                                        <th scope="col" class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anak as $a)
                                        <tr>
                                            <td>{{ $a->nama_anak ?? '-' }}</td>
                                            <td>{{ $a->nama_ibu ?? '-' }}</td>
                                            <td>{{ $a->jk ?? '-' }}</td>
                                            <td>{{ $a->umur ?? '-' }}</td>
                                            <td>{{ $a->kondisi ?? '-' }}</td>



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
