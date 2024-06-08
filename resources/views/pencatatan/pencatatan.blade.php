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
                                        <!-- <a href="/edit-pencatatan/{{ encrypt($p->id) }}"><button
                                                class="btn btn2 btn-primary"><i class="ti ti-edit"></i></button></a> -->
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
                    <div class="floating-button" data-bs-toggle="modal" data-bs-target="#downloadModal"><i
                            class="ti ti-printer"></i></div>

                </div>
                <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog"
                    aria-labelledby="downloadModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="downloadModalLabel">
                                    <b>Download Data Pencatatan</b>
                                </h5>

                            </div>
                            <div class="modal-body">
                                <form id="downloadForm" method="GET" action="{{ route('data.download') }}">


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="text-popup-download">Masukkan Tanggal</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="tgl_catat_dari">Dari</label>
                                                <input type="date" class="form-control" id="tgl_catat_dari"
                                                    name="tgl_catat_dari">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="tgl_catat_hingga">Hingga</label>
                                                <input type="date" class="form-control" id="tgl_catat_hingga"
                                                    name="tgl_catat_hingga">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary"
                                    onclick="submitDownloadForm()">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
function submitDownloadForm() {
    document.getElementById('downloadForm').submit();
}
</script>
@endsection