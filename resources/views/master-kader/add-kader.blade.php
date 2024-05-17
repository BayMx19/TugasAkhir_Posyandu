@extends('layouts.app')
@section('title', 'Tambah Kader')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><a href="{{ '/master_kader' }}"><button
                            class="btn btn2 btn-primary"><i class="ti ti-arrow-left"></i></button></a> <b
                        class="mx-2">Tambah Kader</b>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/add-kader/store" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="email" name="email" required>
                                            <option value="" selected disabled>Pilih Email Kader</option>
                                            @foreach ($users as $user)
                                            <option name="email" data-nama="{{ $user->nama }}">
                                                {{ $user->email }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="namaUsers" name="nama" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="jabatan" name="jabatan" required>
                                            <option value="" selected disabled>Pilih Jabatan</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Anggota">Anggota</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tgl_gabung" class="form-label">Tanggal Bergabung</label>
                                        <input type="date" class="form-control" id="tgl_gabung" name="tgl_gabung">

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="rt" class="form-label">RT</label>
                                                <input type="text" class="form-control" id="rt" name="rt">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="rw" class="form-label">RW</label>
                                                <input type="text" class="form-control" id="rw" name="rw">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">No. Telepon</label>
                                        <input type="number" class="form-control" id="no_telp" name="no_telp">

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



                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
var selectEmail = document.getElementById('email');
var namaInput = document.getElementById('namaUsers'); // Corrected variable name

selectEmail.addEventListener('change', function() {
    var selectedOption = selectEmail.options[selectEmail.selectedIndex];
    var selectedName = selectedOption.getAttribute('data-nama');

    namaInput.value = selectedName; // Update the input field with the selected name
});
</script>
@endsection