@extends('layouts.app')
@section('title', 'Master Kader')
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
                    <h5 class="card-title fw-bold mb-4"><b>Master Kader</b>
                    </h5>
                    <a href="{{ '/add-kader' }}"><button type="button" class="btn btn-plus btn-primary m-1"><i
                                class="ti ti-plus"></i>
                            Tambah Kader</button></a>

                    <div class="card card-table">
                        <div class="card-body  p-4">
                            <table class="table datatable-primary text-center myDatakader" id="myDatakader">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Tanggal Bergabung</th>
                                        <th scope="col">No. Telpon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kader as $k)
                                        <tr>
                                            <td>{{ $k->nama ?? '-' }}</td>
                                            <td>{{ $k->jabatan ?? '-' }}</td>
                                            <td>{{ $k->tgl_gabung ?? '-' }}</td>
                                            <td>{{ $k->no_telp ?? '-' }}</td>
                                            <td style="color: {{ $k->status === 'active' ? 'green' : 'red' }}">
                                                <b><b>
                                                        @if ($k->status === 'active')
                                                            Aktif
                                                        @else
                                                            Tidak Aktif
                                                        @endif
                                                    </b></b>
                                            </td>



                                            <td>
                                                <a href="/detail-kader/{{ encrypt($k->id) }}"><button
                                                        class="btn btn2 btn-success"><i class="ti ti-eye"></i></button></a>
                                                <a href="/edit-kader/{{ encrypt($k->id) }}"><button
                                                        class="btn btn2 btn-primary"><i class="ti ti-edit"></i></button></a>
                                                <a href="/delete-kader/{{ encrypt($k->id) }}"><button
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
