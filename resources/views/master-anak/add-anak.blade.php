@extends('layouts.app')
@section('title', 'Tambah Anak')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4"><a href="{{ '/master_anak' }}"><button class="btn btn2 btn-primary"><i
                                    class="ti ti-arrow-left"></i></button></a> <b class="mx-2">Tambah Anak</b>
                    </h5>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="/add-anak/store" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="tgl_daftar" class="form-label">Tanggal Daftar <label
                                                    class="text-red">*</label></label>
                                            <input type="date" class="form-control" value="{{ now()->toDateString() }}"
                                                id="tgl_daftar" name="tgl_daftar" disabled>
                                            <input type="hidden" name="tgl_daftar" id="tgl_daftar"
                                                value="{{ now()->toDateString() }}">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nama_anak" class="form-label">Pencatat <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->username }}"
                                                id="nama_anak" name="nama_anak" disabled>
                                            <input type="hidden" name="pencatat" id="pencatat"
                                                value="{{ Auth::user()->username }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nama_anak" class="form-label">Nama Anak <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="nama_anak" name="nama_anak"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nik_anak" class="form-label">NIK Anak </label>
                                            <input type="text" class="form-control" id="nik_anak" name="nik_anak">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir </label>
                                            <input type="text" class="form-control" id="tempat_lahir"
                                                name="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir <label
                                                    class="text-red">*</label></label>
                                            <input type="date" class="form-control" id="tgl_lahir"
                                                onchange="calculateAge()" name="tgl_lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Umur <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="umurDisplay" name="umurDisplay"
                                                readonly>
                                            <input type="hidden" class="form-control" id="umur" name="umur">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kondisi <label
                                                    class="text-red">*</label></label>
                                            <div class="mt-1">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kondisi"
                                                        id="hidup" value="hidup">
                                                    <label class="form-check-label" for="hidup">Hidup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kondisi"
                                                        id="meninggal" value="meninggal">
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
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat Rumah</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label">Provinsi </label>
                                            <input type="text" class="form-control" id="provinsi" name="provinsi">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="kota" class="form-label">Kota </label>
                                            <input type="text" class="form-control" id="kota" name="kota">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan </label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="kelurahan" class="form-label">Kelurahan </label>
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="tipe_tt" class="form-label">Tipe Tempat Tinggal <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="tipe_tt" name="tipe_tt" required>
                                                <option value="" selected disabled>Pilih Tipe Tempat Tinggal</option>
                                                <option value="Perkotaan">Perkotaan</option>
                                                <option value="Pedesaan">Pedesaan</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="posyandu" class="form-label">Posyandu</label>
                                            <input type="text" class="form-control" id="posyandu"
                                                value="Posyandu Kumis Kucing" name="posyandu" readonly>
                                            <input type="hidden" class="form-control" id="posyandu"
                                                value="Posyandu Kumis Kucing" name="posyandu" readonly>

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
                                                <option value="Lainnya">Lainnya (>2)</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="kembar" class="form-label">Anak Kembar? <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="kembar" name="kembar" required>
                                                <option value="" selected disabled>Apakah Anak Kembar?</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value="Kembar Pertama">Kembar Pertama</option>
                                                <option value="Kembar Kedua">Kembar Kedua</option>
                                            </select>

                                        </div>
                                    </div>

                                    <h5 class="mt-2"><b>Data Ibu</b></h5>

                                    <div class="col-sm-6 mt-3">
                                        <div class="mb-3">
                                            <label for="nama_ibu" class="form-label">Nama Ibu <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <div class="mb-3">
                                            <label for="nik_ibu" class="form-label">NIK Ibu </label>
                                            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label for="tgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu <label
                                                    class="text-red">*</label></label>
                                            <input type="date" class="form-control" id="tgl_lahir_ibu"
                                                name="tgl_lahir_ibu" onchange="calculateAgeIbu()" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label for="umur_ibu" class="form-label">Umur Ibu </label>
                                            <input type="text" class="form-control" id="umurDisplay_ibu"
                                                name="umurDisplay_ibu" readonly>
                                            <input type="hidden" class="form-control" id="umur_ibu" name="umur_ibu">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="ibu_bekerja" class="form-label">Apakah Ibu Bekerja? <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="ibu_bekerja" name="ibu_bekerja" required>
                                                <option value="" selected disabled>Apakah Ibu Bekerja?</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="pendidikan_ibu" class="form-label">Pendidikan Terakhir Ibu <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu"
                                                required>
                                                <option value="" selected disabled>Pilih Pendidikan Terakhir Ibu
                                                </option>
                                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>

                                        </div>
                                    </div>

                                    <h5 class="mt-2"><b>Data Ayah</b></h5>

                                    <div class="col-sm-6 mt-3">
                                        <div class="mb-3">
                                            <label for="nama_ayah" class="form-label">Nama Ayah <label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <div class="mb-3">
                                            <label for="nik_ayah" class="form-label">NIK Ayah </label>
                                            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label for="tgl_lahir_ayah" class="form-label">Tanggal Lahir Ayah <label
                                                    class="text-red">*</label></label>
                                            <input type="date" class="form-control" id="tgl_lahir_ayah"
                                                name="tgl_lahir_ayah" onchange="calculateAgeAyah()" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label for="umur_ayah" class="form-label">Umur Ayah </label>
                                            <input type="text" class="form-control" id="umurDisplay_ayah"
                                                name="umur_ayah" readonly>
                                            <input type="hidden" class="form-control" id="umur_ayah" name="umur_ayah">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="ayah_bekerja" class="form-label">Apakah Ayah Bekerja? <label
                                                    class="text-red">*</label></label>
                                            <select class="form-control" id="ayah_bekerja" name="ayah_bekerja" required>
                                                <option value="" selected disabled>Apakah ayah Bekerja?</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="pendidikan_ayah" class="form-label">Pendidikan Terakhir Ayah
                                                <label class="text-red">*</label></label>
                                            <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah"
                                                required>
                                                <option value="" selected disabled>Pilih Pendidikan Terakhir Ayah
                                                </option>
                                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
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
