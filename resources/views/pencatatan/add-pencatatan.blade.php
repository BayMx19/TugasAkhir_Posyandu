@extends('layouts.app')
@section('title', 'Tambah Pencatatan')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><a href="{{ '/pencatatan' }}"><button
                            class="btn btn2 btn-primary"><i class="ti ti-arrow-left"></i></button></a> <b
                        class="mx-2">Tambah Pencatatan</b>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" method="POST" action="/add-users/store" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <h5 class="mb-4 text-center"><b>Data Anak</b></h5>
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
                                        <label for="Child's_Age" class="form-label">Umur Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Child's_Age" name="Child's_Age"
                                            required>

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
                                        <label for="Sex" class="form-label">Jenis Kelamin<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Sex" name="Sex" required>

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
                                        <label for="Region" class="form-label">Kota / Kabupaten<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Region " name="Region" required>

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
                                        <label for="Type_of_Place" class="form-label">Tipe Tempat Tinggal <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Type_of_Place" name="Type_of_Place" required>
                                            <option value="" selected disabled>Pilih Tipe Tempat Tinggal</option>

                                            <option value="Urban">Perkotaan</option>
                                            <option value="Rural">Pedesaan</option>
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
                                        <label for="Birth_Order" class="form-label">Kelahiran Ke? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Birth_Order" name="Birth_Order" required>
                                            <option value="" selected disabled>Pilih Kelahiran</option>

                                            <option value="1">Pertama</option>
                                            <option value="2">Kedua</option>
                                            <option value="3">Ketiga</option>
                                            <option value="4">Keempat</option>
                                            <option value="5">Kelima</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Twin_Child" class="form-label">Anak Kembar? <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Twin_Child" name="Twin_Child" required>
                                            <option value="" selected disabled>Pilih</option>

                                            <option value="single birth">Kelahiran Tunggal</option>
                                            <option value="1st of multiple">Nomor 1 dari kelipatan</option>
                                            <option value="2nd of multiple">Nomor 2 dari kelipatan</option>

                                        </select>

                                    </div>
                                </div>
                                <h5 class="mb-4 mt-4 text-center"><b>Pencatatan Perkembangan Anak</b></h5>
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
                                <h5 class="mb-4 mt-4 text-center"><b>Data Orang Tua</b></h5>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_ibu" class="form-label">Nama Ibu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Mother's_Age" class="form-label">Umur Ibu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Mother's_Age" name="Mother's_Age"
                                            required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Mother's_Working_Status" class="form-label">Apakah Ibu
                                            Bekerja?<label class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Mother's_Working_Status"
                                            name="Mother's_Working_Status" required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_ayah" class="form-label">Nama Ayah<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                            required>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Father's_Education" class="form-label">Pendidikan Ayah<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="Father's_Education"
                                            name="Father's_Education" required>

                                    </div>
                                </div>


                                <h5 class="mb-4 mt-4 text-center"><b>Data PHBS</b></h5>


                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Drinking_Water" class="form-label">Sumber Air Minum<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Drinking_Water" name="Drinking_Water" required>
                                            <option value="" selected disabled>Pilih Sumber Air Minum</option>

                                            <option value="Sumber Aman">Sumber Aman</option>
                                            <option value="Sumber Tidak Aman">Sumber Tidak Aman</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Toilet_Types" class="form-label">Tipe Toilet<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Toilet_Types" name="Toilet_Types" required>
                                            <option value="" selected disabled>Pilih Tipe Toilet</option>

                                            <option value="Higienis">Higienis</option>
                                            <option value="Tidak Higienis">Tidak Higienis</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Wealth_Index" class="form-label">Indeks Kesejahteraan<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="Wealth_Index" name="Wealth_Index" required>
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