@extends('layouts.app')
@section('title', 'Tambah Pencatatan')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><a href="{{ '/perkembangan' }}"><button
                            class="btn btn2 btn-primary"><i class="ti ti-arrow-left"></i></button></a> <b
                        class="mx-2">Tambah Pencatatan</b>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" method="POST" action="/add-users/store" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tgl_catat" class="form-label">Tanggal Pencatatan <label
                                                class="text-red">*</label></label>
                                        <input type="date" class="form-control" id="tgl_catat" name="tgl_catat"
                                            value="{{ now()->toDateString() }}" required disabled>
                                        <input type="date" class="form-control" value="{{ now()->toDateString() }}"
                                            id="tgl_catat" name="tgl_catat" required disabled hidden>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pencatat" class="form-label">Pencatat <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="pencatat" name="pencatat"
                                            value="{{Auth::user()->nama}}" required disabled>
                                        <input type="hidden" class="form-control" id="pencatat" name="pencatat"
                                            value="{{Auth::user()->nama}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_anak" class="form-label">Nama Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_anak" name="nama_anak"
                                            required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nik_anak" class="form-label">NIK Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nik_anak" name="nik_anak" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="umur" class="form-label">Umur Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="umur" name="umur" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kondisi" class="form-label">Kondisi <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="kondisi" name="kondisi" required>
                                            <option value="" selected disabled>Pilih Kondisi</option>

                                            <option value="Hidup">Hidup</option>
                                            <option value="Meninggal">Meninggal</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="bb" class="form-label">Berat Badan<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="bb" name="bb" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pb" class="form-label">Panjang Badan / Tinggi Badan<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="pb" name="pb" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="lk" class="form-label">Lingkar Kepala<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="lk" name="lk" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="imd" class="form-label">IMD<label class="text-red">*</label></label>
                                        <select class="form-control" id="imd" name="imd" required>
                                            <option value="" selected disabled>Pilih IMD</option>

                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="jk" class="form-label">Jenis Kelamin <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="jk" name="jk" required>
                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>

                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat Rumah<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kota" class="form-label">Kota / Kabupaten<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kota" name="kota" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                            required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label">Kelurahan / Desa<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                                            required>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tipe_tt" class="form-label">Tipe Tempat Tinggal <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="tipe_tt" name="tipe_tt" required>
                                            <option value="" selected disabled>Pilih Tipe Tempat Tinggal</option>

                                            <option value="Perkotaan">Perkotaan</option>
                                            <option value="PedesaanMeninggal">Pedesaan</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="posyandu" class="form-label">Posyandu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="posyandu"
                                            value="Posyandu Kumis Kucing" name="posyandu" required disabled>
                                        <input type="hidden" class="form-control" id="posyandu"
                                            value="Posyandu Kumis Kucing" name="posyandu" required>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelahiran_ke" class="form-label">Kelahiran Ke? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="kelahiran_ke" name="kelahiran_ke" required>
                                            <option value="" selected disabled>Pilih Kelahiran</option>

                                            <option value="Pertama">Pertama</option>
                                            <option value="Kedua">Kedua</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kembar" class="form-label">Anak Kembar? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="kembar" name="kembar" required>
                                            <option value="" selected disabled>Pilih</option>

                                            <option value="Kelahiran Tunggal">Kelahiran Tunggal</option>
                                            <option value="Nomor 1 dari kelipatan">Nomor 1 dari kelipatan</option>
                                            <option value="Nomor 2 dari kelipatan">Nomor 2 dari kelipatan</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="air_minum" class="form-label">Sumber Air Minum<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="air_minum" name="air_minum" required>
                                            <option value="" selected disabled>Pilih Sumber Air Minum</option>

                                            <option value="Sumber Aman">Sumber Aman</option>
                                            <option value="Sumber Tidak Aman">Sumber Tidak Aman</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="toilet" class="form-label">Tipe Toilet<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="toilet" name="toilet" required>
                                            <option value="" selected disabled>Pilih Tipe Toilet</option>

                                            <option value="Higienis">Higienis</option>
                                            <option value="Tidak Higienis">Tidak Higienis</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="index_kesejahteraan" class="form-label">Indeks Kesejahteraan<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="index_kesejahteraan" name="index_kesejahteraan"
                                            required>
                                            <option value="" selected disabled>Pilih Indeks Kesejahteraan</option>

                                            <option value="Miskin">Miskin</option>
                                            <option value="Menengah">Menengah</option>
                                            <option value="Kaya">Kaya</option>
                                        </select>

                                    </div>
                                </div>


                            </div>

                            <button class="btn btn-danger mt-3" onclick="sendColab()">Tampilkan Hasil
                                Prediksi</button>

                            <div class="row" style="display:none; " id="hiddenRow" onclick="shownAfterClick()">
                                <div class="col-sm-12">
                                    <div class="col-sm-12 mt-3">
                                        <div class="mb-3">
                                            <label for="p_stunting" class="form-label">Prediksi Stunting<label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control hasil-prediksi" id="p_stunting"
                                                value="" name="p_stunting" required disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_stunting"
                                                value="" name="p_stunting" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="mb-3">
                                            <label for="p_wasting" class="form-label">Prediksi Wasting<label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control hasil-prediksi" id="p_wasting"
                                                value="" name="p_wasting" required disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_wasting"
                                                value="" name="p_wasting" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="mb-3">
                                            <label for="p_underweight" class="form-label">Prediksi Underweight<label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control hasil-prediksi" id="p_underweight"
                                                value="" name="p_underweight" required disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_underweight"
                                                value="" name="p_underweight" required>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mt-3" onclick="showSwal()">
                                Simpan</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

function showSwal() {
    Swal.fire({
        title: "Simpan Data?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak"
    }).then((result) => {
        if (result.isConfirmed) {
            // Trigger form submission after "Ya" is clicked
            document.getElementById('myForm').submit();
        }
    });
}

function sendColab() {
    Swal.fire({
        title: "Tunjukkan Hasil Analisa?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("hiddenRow").style.display = "block";
        }
    });
}
</script>
@endsection