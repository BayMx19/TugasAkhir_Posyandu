@extends('layouts.app')
@section('title', 'Pencatatan Perkembangan Anak')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><b>Pencatatan Perkembangan Anak</b>
                </h5>
                <a href="{{ '/add-pencatatan' }}"><button type="button" class="btn btn-plus btn-primary m-1"><i
                            class="ti ti-plus"></i>
                        Tambah Pencatatan</button></a>


                <div class="card card-table">
                    <div class="card-body  p-4">
                        <table class="table datatable-primary text-center myDatausers" id="myDatapencatatan">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">Tanggal Pencatatan</th>
                                    <th scope="col">Nama Anak</th>
                                    <th scope="col">Prediksi Stunting</th>
                                    <th scope="col">Prediksi Wasting</th>
                                    <th scope="col">Prediksi Underweight</th>
                                    <th scope="col" class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pencatatan as $p)
                                <tr>
                                    <td>{{ $p->tgl_catat}}</td>
                                    <td>{{ $p->nama_anak }}</td>
                                    <td>{{ $p->p_stunting }}</td>
                                    <td>{{ $p->p_wasting }}</td>
                                    <td>{{ $p->p_underweight }}</td>




                                    <td>
                                        <a href="/detail-pencatatan/{{ encrypt($p->id) }}"><button
                                                class="btn btn2 btn-success"><i class="ti ti-eye"></i></button></a>
                                        <a href="/edit-pencatatan/{{ encrypt($p->id) }}"><button
                                                class="btn btn2 btn-primary"><i class="ti ti-edit"></i></button></a>
                                        <a href="/pencatatan/delete/{{ encrypt($p->id) }}"><button
                                                class="btn btn2 btn-danger"><i class="ti ti-trash"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="floating-container">
                    <div class="floating-button"><i class="ti ti-printer"></i></div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection