@extends('layouts.app')
@section('title', 'Edit Anak')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><a href="{{ '/master_anak' }}"><button
                            class="btn btn2 btn-primary"><i class="ti ti-arrow-left"></i></button></a> <b
                        class="mx-2">Edit Anak</b>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/edit-anak/{{ encrypt($anak->id) }}/update"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tgl_daftar" class="form-label">Tanggal Daftar <label
                                                class="text-red">*</label></label>
                                        <input type="date" class="form-control" value="{{ $anak->tgl_daftar }}"
                                            id="tgl_daftar" name="tgl_daftar" disabled>
                                        <input type="hidden" name="tgl_daftar" id="tgl_daftar"
                                            value="{{ $anak->tgl_daftar }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_anak" class="form-label">Pencatat <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" value="{{ $anak->pencatat }}"
                                            id="nama_anak" name="nama_anak" disabled>
                                        <input type="hidden" name="pencatat" id="pencatat"
                                            value="{{ $anak->pencatat }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_anak" class="form-label">Nama Anak <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_anak"
                                            value="{{ $anak->nama_anak }}" name="nama_anak" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nik_anak" class="form-label">NIK Anak </label>
                                        <input type="text" class="form-control" id="nik_anak"
                                            value="{{ $anak->nik_anak }}" name="nik_anak">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">Tempat Lahir </label>
                                        <input type="text" class="form-control" id="tempat_lahir"
                                            value="{{ $anak->tempat_lahir }}" name="tempat_lahir">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir <label
                                                class="text-red">*</label></label>
                                        <input type="date" class="form-control" id="tgl_lahir" onchange="calculateAge()"
                                            name="tgl_lahir" value="{{ $anak->tgl_lahir }}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="no_bpjs" class="form-label">No. BPJS <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="no_bpjs"
                                            value="{{ $anak->no_bpjs }}" name="no_bpjs">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="umur" class="form-label">Umur <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="umurDisplay"
                                            value="{{ $anak->umur }}" name="umurDisplay" readonly disabled>
                                        <input type="hidden" class="form-control" id="umur" value="{{ $anak->umur }}"
                                            name="umur">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kondisi <label
                                                class="text-red">*</label></label>
                                        <div class="mt-1">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kondisi" id="hidup"
                                                    value="hidup" @if ($anak->kondisi == 'hidup') checked @endif>
                                                <label class="form-check-label" for="hidup">Hidup</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kondisi"
                                                    id="meninggal" value="meninggal" @if ($anak->kondisi == 'meninggal')
                                                checked @endif>
                                                <label class="form-check-label" for="meninggal">Meninggal</label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="jk" class="form-label">Jenis Kelamin <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="jk" name="jk" required>
                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki" {{ $anak->jk == 'Laki-Laki' ? 'selected' : '' }}>
                                                Laki-Laki</option>
                                            <option value="Perempuan" {{ $anak->jk == 'Perempuan' ? 'selected' : '' }}>
                                                Perempuan</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat Rumah</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{ $anak->alamat }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi </label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi"
                                            value="{{ $anak->provinsi }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kota" class="form-label">Kota </label>
                                        <input type="text" class="form-control" id="kota" name="kota"
                                            value="{{ $anak->kota }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan </label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                            value="{{ $anak->kecamatan }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                                            value="{{ $anak->kelurahan }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class=" mb-3">
                                                <label for="rt" class="form-label">RT<label
                                                        class="text-red">*</label></label>
                                                <input type="text" class="form-control" id="rt" name="rt" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="rw" class="form-label">RW<label
                                                        class="text-red">*</label></label>
                                                <input type="text" class="form-control" id="rw" name="rw" required>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tipe_tt" class="form-label">Tipe Tempat Tinggal <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="tipe_tt" name="tipe_tt" required>
                                            <option value="" selected disabled>Pilih Tipe Tempat Tinggal
                                            </option>
                                            <option value="Perkotaan"
                                                {{ $anak->tipe_tt == 'Perkotaan' ? 'selected' : '' }}>Perkotaan
                                            </option>
                                            <option value="Pedesaan"
                                                {{ $anak->tipe_tt == 'Pedesaan' ? 'selected' : '' }}>Pedesaan</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="posyandu" class="form-label">Posyandu</label>
                                        <input type="text" class="form-control" id="posyandu" name="posyandu" readonly
                                            value="{{ $anak->posyandu }}">
                                        <input type="hidden" class="form-control" id="posyandu" name="posyandu" readonly
                                            value="{{ $anak->posyandu }}">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelahiran_ke" class="form-label">Kelahiran Ke? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="kelahiran_ke" name="kelahiran_ke" required>
                                            <option value="" disabled selected>Pilih Kelahiran</option>
                                            <option value="Pertama"
                                                {{ $anak->kelahiran_ke == 'Pertama' ? 'selected' : '' }}>Pertama
                                            </option>
                                            <option value="Kedua"
                                                {{ $anak->kelahiran_ke == 'Kedua' ? 'selected' : '' }}>Kedua
                                            </option>
                                            <option value="Lainnya"
                                                {{ $anak->kelahiran_ke == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                                (>2)</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kembar" class="form-label">Anak Kembar? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="kembar" name="kembar" required>
                                            <option value="" disabled selected>Apakah Anak Kembar?</option>
                                            <option value="Tidak" {{ $anak->kembar == 'Tidak' ? 'selected' : '' }}>
                                                Tidak</option>
                                            <option value="Kembar Pertama"
                                                {{ $anak->kembar == 'Pertama' ? 'selected' : '' }}>Kembar Pertama
                                            </option>
                                            <option value="Kembar Kedua"
                                                {{ $anak->kembar == 'Kedua' ? 'selected' : '' }}>Kembar Kedua</option>
                                        </select>

                                    </div>
                                </div>

                                <h5 class="mt-2"><b>Data Ibu</b></h5>

                                <div class="col-sm-6 mt-3">
                                    <div class="mb-3">
                                        <label for="nama_ibu" class="form-label">Nama Ibu <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                            value="{{ $anak->nama_ibu }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="mb-3">
                                        <label for="nik_ibu" class="form-label">NIK Ibu </label>
                                        <input type="text" class="form-control" id="nik_ibu" name="nik_ibu"
                                            value="{{ $anak->nik_ibu }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="mb-3">
                                        <label for="tgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu <label
                                                class="text-red">*</label></label>
                                        <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu"
                                            onchange="calculateAgeIbu()" required value="{{ $anak->tgl_lahir_ibu }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="mb-3">
                                        <label for="umur_ibu" class="form-label">Umur Ibu </label>
                                        <input type="text" class="form-control" id="umurDisplay_ibu"
                                            name="umurDisplay_ibu" readonly value="{{ $anak->umur_ibu }}">
                                        <input type="hidden" class="form-control" id="umur_ibu" name="umur_ibu">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ibu_bekerja" class="form-label">Apakah Ibu Bekerja? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="ibu_bekerja" name="ibu_bekerja" required>
                                            <option value="" disabled selected>Apakah Ibu Bekerja?</option>
                                            <option value="Ya" {{ $anak->ibu_bekerja == 'Ya' ? 'selected' : '' }}>
                                                Ya</option>
                                            <option value="Tidak" {{ $anak->ibu_bekerja == 'Tidak' ? 'selected' : '' }}>
                                                Tidak</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pendidikan_ibu" class="form-label">Pendidikan Terakhir Ibu
                                            <label class="text-red">*</label></label>
                                        <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
                                            <option value="" selected>Pilih Pendidikan Terakhir Ibu
                                            </option>
                                            <option value="Tidak Bersekolah"
                                                {{ $anak->pendidikan_ibu == 'Tidak Bersekolah' ? 'selected' : '' }}>
                                                Tidak Bersekolah</option>
                                            <option value="SD" {{ $anak->pendidikan_ibu == 'SD' ? 'selected' : '' }}>SD
                                            </option>
                                            <option value="SMP" {{ $anak->pendidikan_ibu == 'SMP' ? 'selected' : '' }}>
                                                SMP</option>
                                            <option value="SMA" {{ $anak->pendidikan_ibu == 'SMA' ? 'selected' : '' }}>
                                                SMA</option>
                                            <option value="S1" {{ $anak->pendidikan_ibu == 'S1' ? 'selected' : '' }}>S1
                                            </option>
                                            <option value="S2" {{ $anak->pendidikan_ibu == 'S2' ? 'selected' : '' }}>S2
                                            </option>
                                            <option value="S3" {{ $anak->pendidikan_ibu == 'S3' ? 'selected' : '' }}>S3
                                            </option>
                                        </select>

                                    </div>
                                </div>

                                <h5 class="mt-2"><b>Data Ayah</b></h5>

                                <div class="col-sm-6 mt-3">
                                    <div class="mb-3">
                                        <label for="nama_ayah" class="form-label">Nama Ayah <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                            value="{{ $anak->nama_ayah }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="mb-3">
                                        <label for="nik_ayah" class="form-label">NIK Ayah </label>
                                        <input type="text" class="form-control" id="nik_ayah" name="nik_ayah"
                                            value="{{ $anak->nik_ayah }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="mb-3">
                                        <label for="tgl_lahir_ayah" class="form-label">Tanggal Lahir Ayah <label
                                                class="text-red">*</label></label>
                                        <input type="date" class="form-control" id="tgl_lahir_ayah"
                                            name="tgl_lahir_ayah" onchange="calculateAgeAyah()" required
                                            value="{{ $anak->tgl_lahir_ayah }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="mb-3">
                                        <label for="umur_ayah" class="form-label">Umur Ayah </label>
                                        <input type="text" class="form-control" id="umurDisplay_ayah" name="umur_ayah"
                                            readonly value="{{ $anak->umur_ayah }}">
                                        <input type="hidden" class="form-control" id="umur_ayah" name="umur_ayah">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ayah_bekerja" class="form-label">Apakah Ayah Bekerja? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="ayah_bekerja" name="ayah_bekerja" required>
                                            <option value="" selected>Apakah ayah Bekerja?</option>
                                            <option value="Ya" {{ $anak->ayah_bekerja == 'Ya' ? 'selected' : '' }}>Ya
                                            </option>
                                            <option value="Tidak"
                                                {{ $anak->ayah_bekerja == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pendidikan_ayah" class="form-label">Pendidikan Terakhir Ayah
                                            <label class="text-red">*</label></label>
                                        <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah"
                                            required>
                                            <option value="" selected>Pilih Pendidikan Terakhir Ayah
                                            </option>
                                            <option value="Tidak Bersekolah"
                                                {{ $anak->pendidikan_ayah == 'Tidak Bersekolah' ? 'selected' : '' }}>
                                                Tidak Bersekolah</option>
                                            <option value="SD" {{ $anak->pendidikan_ayah == 'SD' ? 'selected' : '' }}>SD
                                            </option>
                                            <option value="SMP" {{ $anak->pendidikan_ayah == 'SMP' ? 'selected' : '' }}>
                                                SMP</option>
                                            <option value="SMA" {{ $anak->pendidikan_ayah == 'SMA' ? 'selected' : '' }}>
                                                SMA</option>
                                            <option value="S1" {{ $anak->pendidikan_ayah == 'S1' ? 'selected' : '' }}>S1
                                            </option>
                                            <option value="S2" {{ $anak->pendidikan_ayah == 'S2' ? 'selected' : '' }}>S2
                                            </option>
                                            <option value="S3" {{ $anak->pendidikan_ayah == 'S3' ? 'selected' : '' }}>S3
                                            </option>
                                        </select>

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
function calculateAge() {
    var birthdate = document.getElementById('tgl_lahir').value;

    var today = new Date();
    var birthDate = new Date(birthdate);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() <
            birthDate.getDate())) {
        age--;
    }

    document.getElementById('umurDisplay').value = age + ' Tahun';
    document.getElementById('umur').value = age + ' Tahun';
}

function calculateAgeIbu() {
    var birthdate = document.getElementById('tgl_lahir_ibu').value;

    var today = new Date();
    var birthDate = new Date(birthdate);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() <
            birthDate.getDate())) {
        age--;
    }

    document.getElementById('umurDisplay_ibu').value = age + ' Tahun';
    document.getElementById('umur_ibu').value = age + ' Tahun';
}

function calculateAgeAyah() {
    var birthdate = document.getElementById('tgl_lahir_ayah').value;

    var today = new Date();
    var birthDate = new Date(birthdate);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() <
            birthDate.getDate())) {
        age--;
    }

    document.getElementById('umurDisplay_ayah').value = age + ' Tahun';
    document.getElementById('umur_ayah').value = age + ' Tahun';
}
</script>
@endsection