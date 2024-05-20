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
                        <form id="myForm" method="POST" action="/add-pencatatan/store" enctype="multipart/form-data">
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
                                            id="tgl_catat" name="tgl_catat" required hidden>

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
                                        <select class="form-control" id="nama_anak" name="nama_anak" required>
                                            <option value="" selected disabled>Pilih Nama Anak</option>
                                            @foreach ($anak as $item)
                                            <option data-namaanak="{{ $item->nama_anak }}"
                                                data-nik="{{ $item->nik_anak }}" data-umur="{{ $item->umur }}"
                                                data-tempatlahir="{{ $item->tempat_lahir }}"
                                                data-tgllahir="{{ $item->tgl_lahir }}" data-jkanak="{{ $item->jk }}"
                                                data-kotaanak="{{ $item->kota }}"
                                                data-kecamatananak="{{ $item->kecamatan }}"
                                                data-kelurahananak="{{ $item->kelurahan }}"
                                                data-tipettanak="{{ $item->tipe_tt }}"
                                                data-posyanduanak="{{ $item->posyandu }}"
                                                data-kelahirankeanak="{{ $item->kelahiran_ke }}"
                                                data-kembaranak="{{ $item->kembar }}"
                                                data-ibuanak="{{ $item->nama_ibu }}"
                                                data-umuribuanak="{{ $item->umur_ibu }}"
                                                data-pendidikanibuanak="{{ $item->pendidikan_ibu }}"
                                                data-kerjaibuanak="{{ $item->ibu_bekerja }}"
                                                data-ayahanak="{{ $item->nama_ayah }}" data-rt="{{ $item->rt }}"
                                                data-rw="{{ $item->rw }}" data-nobpjs="{{ $item->no_bpjs }}"
                                                data-pendidikanayahanak="{{ $item->pendidikan_ayah }}">
                                                {{ $item->nama_anak }}
                                            </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nik_anak" class="form-label">NIK Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nik_anak" name="nik_anak" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">Tempat Lahir Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="tempat_lahir_anak"
                                            name="tempat_lahir" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir Anak<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="tgl_lahir_anak" name="tgl_lahir"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Childs_Age" class="form-label">Umur<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="umur" name="Childs_Age" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Sex" class="form-label">Jenis Kelamin<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="jk_anak" name="Sex" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Region" class="form-label">Kota / Kabupaten<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kota_anak" name="Region" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kecamatan_anak" name="kecamatan"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label">Kelurahan / Desa<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kelurahan_anak" name="kelurahan"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
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
                                        <label for="tipett_anak" class="form-label">Tipe Tempat Tinggal<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="tipett_anak" name="Type_of_Place"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="posyandu" class="form-label">Posyandu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="posyandu_anak" name="posyandu"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kelahiran_ke_anak" class="form-label">Kelahiran Ke? <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kelahiran_ke_anak"
                                            name="Birth_Order" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="kembar_anak" class="form-label">Anak Kembar? <label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="kembar_anak" name="Twin_Child"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="no_bpjs" class="form-label">No. BPJS<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" required>
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
                                        <label for="pb" class="form-label">Panjang Badan<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="pb" name="pb" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="asi_ekslusif" class="form-label">Asi Ekslusif<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="imd" name="imd" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Ya">Ya</option>

                                        </select>
                                    </div>
                                </div>
                                <h5 class="mb-4 mt-4 text-center"><b>Data Orang Tua</b></h5>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_ibu" class="form-label">Nama Ibu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="umur_ibu" class="form-label">Umur Ibu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="umur_ibu" name="mothers_age"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="pendidikan_ibu"
                                            name="mothers_education" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ibu_bekerja" class="form-label">Apakah Ibu Bekerja?<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="ibu_bekerja"
                                            name="mothers_working_status" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="nama_ayah" class="form-label">Nama Ayah<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah<label
                                                class="text-red">*</label></label>
                                        <input type="text" class="form-control" id="pendidikan_ayah"
                                            name="fathers_education" readonly>
                                    </div>
                                </div>


                                <h5 class="mb-4 mt-4 text-center"><b>Data PHBS</b></h5>


                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="Drinking_Water" class="form-label">Sumber Air Minum<label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="drinkingWater" name="Drinking_Water" required>
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
                                        <select class="form-control" id="toiletTypes" name="Toilet_Types" required>
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
                                        <select class="form-control" id="wealthIndex" name="Wealth_Index" required>
                                            <option value="" selected disabled>Pilih Indeks Kesejahteraan
                                            </option>

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
                                            <input type="text" class="form-control hasil-prediksi"
                                                id="p_stunting_display" value="" name="p_stunting_display" required
                                                disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_stunting"
                                                value="" name="p_stunting" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="mb-3">
                                            <label for="p_wasting" class="form-label">Prediksi Wasting<label
                                                    class="text-red">*</label></label>
                                            <input type="text" class="form-control hasil-prediksi"
                                                id="p_wasting_display" value="" name="p_wasting_display" required
                                                disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_wasting"
                                                value="" name="p_wasting" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="mb-3">
                                            <label for="p_underweight" class="form-label">Prediksi
                                                Underweight<label class="text-red">*</label></label>
                                            <input type="text" class="form-control hasil-prediksi"
                                                id="p_underweight_display" value="" name="p_underweight_display"
                                                required disabled>
                                            <input type="hidden" class="form-control hasil-prediksi" id="p_underweight"
                                                value="" name="p_underweight" required>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary mt-3" style="display: none;" id="simpanButton"
                                onclick="showSwal()">
                                Simpan</button>
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
    var ageYears = today.getFullYear() - birthDate.getFullYear();
    var ageMonths = today.getMonth() - birthDate.getMonth();
    var ageDays = today.getDate() - birthDate.getDate();

    // Jika hari ini adalah sebelum tanggal lahir di bulan ini, kurangi satu bulan dari umur
    if (ageDays < 0) {
        ageMonths--;
        ageDays += new Date(today.getFullYear(), today.getMonth(), 0)
            .getDate(); // Tambahkan jumlah hari di bulan sebelumnya
    }

    // Jika bulan ini adalah sebelum bulan lahir, kurangi satu tahun dari umur dan tambahkan 12 bulan
    if (ageMonths < 0) {
        ageYears--;
        ageMonths += 12;
    }

    var ageDisplay = '';
    if (ageYears > 0) {
        ageDisplay += ageYears + ' Tahun ';
    }
    if (ageMonths > 0) {
        ageDisplay += ageMonths + ' Bulan ';
    }
    if (ageDays > 0) {
        ageDisplay += ageDays + ' Hari';
    }

    document.getElementById('umurDisplay').value = ageDisplay.trim();
    document.getElementById('umur').value = ageDisplay.trim();
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
    event.preventDefault();
    // Menghentikan perilaku default dari tombol submit

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
            // Ambil nilai dari form input
            const childAge = document.getElementById('umur').value; // Childs_Age
            let childAgeMonths;

            if (childAge.includes('Tahun') && childAge.includes('Bulan')) {
                const ageParts = childAge.split(' ');
                const years = parseInt(ageParts[0]);
                const months = parseInt(ageParts[2]);
                childAgeMonths = years * 12 + months;
            } else if (childAge.includes('Tahun')) {
                const years = parseInt(childAge);
                childAgeMonths = years * 12;
            } else if (childAge.includes('Bulan')) {
                const months = parseInt(childAge);
                childAgeMonths = months;
            } else {
                childAgeMonths = 0;
            }


            const typeOfPlace = document.getElementById('tipett_anak').value; // Type of Place
            const typeOfPlaceNumeric = typeOfPlace === 'Perkotaan' ? 0 : 1;

            const gender = document.getElementById('jk_anak').value; // Jenis kelamin
            const genderNumeric = gender === 'Laki-Laki' ? 0 : 1;

            const motherEducation = document.getElementById('pendidikan_ibu').value; // Pendidikan ibu
            const motherEducationNumeric =
                motherEducation === 'Tidak Bersekolah' ? 0 :
                motherEducation === 'SD' ? 1 :
                motherEducation === 'SMP' ? 2 :
                3; // SMA/S1/S2/S3 bernilai 3

            const fatherEducation = document.getElementById('pendidikan_ayah').value; // Pendidikan ayah
            const fatherEducationNumeric =
                fatherEducation === 'Tidak Bersekolah' ? 0 :
                fatherEducation === 'SD' ? 1 :
                fatherEducation === 'SMP' ? 2 :
                3; // SMA/S1/S2/S3 bernilai 3

            const motherWorkingStatus = document.getElementById('ibu_bekerja').value; // Status pekerjaan ibu
            const motherWorkingStatusNumeric = motherWorkingStatus === 'Ya' ? 1 : 0; // Konversi ke numerik

            const drinkingWater = document.getElementById('drinkingWater').value; // Drinking_Water
            const drinkingWaterNumeric = (drinkingWater === 'Sumber Aman') ? 1 : 0;

            const twinChild = document.getElementById('kembar_anak').value; // Twin_Child
            let twinChildNumeric;
            const wealthIndex = document.getElementById('wealthIndex').value; // Wealth_Index
            let wealthIndexNumeric;

            switch (wealthIndex) {
                case 'Miskin':
                    wealthIndexNumeric = 0;
                    break;
                case 'Menengah':
                    wealthIndexNumeric = 1;
                    break;
                case 'Kaya':
                    wealthIndexNumeric = 2;
                    break;
                default:
                    wealthIndexNumeric = null;
            }

            switch (twinChild) {
                case 'Tunggal':
                    twinChildNumeric = 0;
                    break;
                case 'Nomor 1 dari kelipatan':
                    twinChildNumeric = 1;
                    break;
                case 'Nomor 2 dari kelipatan':
                    twinChildNumeric = 2;
                    break;
                case 'Nomor 3 dari kelipatan':
                    twinChildNumeric = 3;
                    break;
                default:
                    twinChildNumeric = 0; // Default value jika input tidak valid
            }

            const toiletTypes = document.getElementById('toiletTypes').value; // Toilet_Types
            const toiletTypesNumeric = (toiletTypes === 'Higienis') ? 1 : 0;
            const motherAge = document.getElementById('umur_ibu').value; // Mothers_Age
            let motherAgeYears;

            if (motherAge.includes('Tahun')) {
                motherAgeYears = parseInt(motherAge);
            } else {
                motherAgeYears = 0;
            }
            const data = {
                "0": 0, // Region
                "1": typeOfPlaceNumeric, // Type_of_Place
                "2": genderNumeric, // Sex
                "3": childAgeMonths, // Childs_Age
                "4": motherEducationNumeric, // Mothers_Education
                "5": fatherEducationNumeric, // Fathers_Education
                "6": motherAgeYears, // Mothers_Age
                "7": motherWorkingStatusNumeric, // Mothers_Working_Status
                "8": parseInt(document.getElementById('kelahiran_ke_anak').value), // Birth_Order
                "9": twinChildNumeric, // Twin_Child
                "10": drinkingWaterNumeric, // Drinking_Water
                "11": toiletTypesNumeric, // Toilet_Types
                "12": wealthIndexNumeric, // Wealth_Index
                "13": parseFloat(document.getElementById('bb').value), // Childs_Weight
                "14": parseFloat(document.getElementById('pb').value) // Childs_Height
            };


            console.log("Data yang akan dikirim:", data);

            // Konversi data yang relevan ke numerik
            const numericData = {};
            for (const key in data) {
                numericData[key] = parseFloat(data[key]);
            }

            // Kirim permintaan POST ke endpoint /predict
            fetch('/predict', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(numericData)
                })
                .then(response => response.json())
                .then(data => {
                    // Tampilkan hasil prediksi jika diperlukan
                    document.getElementById("hiddenRow").style.display = "block";
                    document.getElementById("p_stunting").value = data["Hasil Prediksi Stunting"];
                    document.getElementById("p_wasting").value = data["Hasil Prediksi Wasting"];
                    document.getElementById("p_underweight").value = data["Hasil Prediksi Underweight"];
                    document.getElementById("simpanButton").style.display = "block";
                    document.getElementById("p_stunting_display").value = data["Hasil Prediksi Stunting"];
                    document.getElementById("p_wasting_display").value = data["Hasil Prediksi Wasting"];
                    document.getElementById("p_underweight_display").value = data[
                        "Hasil Prediksi Underweight"];

                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Error:', error);
                });


        }
    });
}

document.addEventListener('DOMContentLoaded', (event) => {
    const namaAnak = document.getElementById('nama_anak');

    namaAnak.addEventListener('change', function() {
        const selectedOption = namaAnak.options[namaAnak.selectedIndex];

        const data = {
            namaAnak: selectedOption.getAttribute('data-namaanak'),
            nikAnak: selectedOption.getAttribute('data-nik'),
            umur: selectedOption.getAttribute('data-umur'),
            tempatlahirAnak: selectedOption.getAttribute('data-tempatlahir'),
            tgllahirAnak: selectedOption.getAttribute('data-tgllahir'),
            jkAnak: selectedOption.getAttribute('data-jkanak'),
            kotaAnak: selectedOption.getAttribute('data-kotaanak'),
            kecamatanAnak: selectedOption.getAttribute('data-kecamatananak'),
            kelurahanAnak: selectedOption.getAttribute('data-kelurahananak'),
            tipettAnak: selectedOption.getAttribute('data-tipettanak'),
            posyanduAnak: selectedOption.getAttribute('data-posyanduanak'),
            kelahirankeAnak: selectedOption.getAttribute('data-kelahirankeanak'),
            kembarAnak: selectedOption.getAttribute('data-kembaranak'),
            ibuAnak: selectedOption.getAttribute('data-ibuanak'),
            umuribuAnak: selectedOption.getAttribute('data-umuribuanak'),
            pendidikanibuAnak: selectedOption.getAttribute('data-pendidikanibuanak'),
            kerjaibuAnak: selectedOption.getAttribute('data-kerjaibuanak'),
            ayahAnak: selectedOption.getAttribute('data-ayahanak'),
            pendidikanayahAnak: selectedOption.getAttribute('data-pendidikanayahanak'),
            rt: selectedOption.getAttribute('data-rt'),
            rw: selectedOption.getAttribute('data-rw'),
            nobpjs: selectedOption.getAttribute('data-nobpjs')
        };


        // Set the values of the inputs
        document.getElementById('nik_anak').value = data.nikAnak;
        document.getElementById('umur').value = data.umur;
        document.getElementById('tempat_lahir_anak').value = data.tempatlahirAnak;
        document.getElementById('tgl_lahir_anak').value = data.tgllahirAnak;
        document.getElementById('jk_anak').value = data.jkAnak;
        document.getElementById('kota_anak').value = data.kotaAnak;
        document.getElementById('kecamatan_anak').value = data.kecamatanAnak;
        document.getElementById('kelurahan_anak').value = data.kelurahanAnak;
        document.getElementById('tipett_anak').value = data.tipettAnak;
        document.getElementById('posyandu_anak').value = data.posyanduAnak;
        document.getElementById('kelahiran_ke_anak').value = data.kelahirankeAnak;
        document.getElementById('kembar_anak').value = data.kembarAnak;
        document.getElementById('nama_ibu').value = data.ibuAnak;
        document.getElementById('umur_ibu').value = data.umuribuAnak;
        document.getElementById('pendidikan_ibu').value = data.pendidikanibuAnak;
        document.getElementById('ibu_bekerja').value = data.kerjaibuAnak;
        document.getElementById('nama_ayah').value = data.ayahAnak;
        document.getElementById('pendidikan_ayah').value = data.pendidikanayahAnak;
        document.getElementById('rt').value = data.rt;
        document.getElementById('rw').value = data.rw;
        document.getElementById('no_bpjs').value = data.nobpjs;
    });
});
</script>
@endsection