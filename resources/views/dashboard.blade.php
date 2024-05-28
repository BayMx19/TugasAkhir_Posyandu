@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><b>Dashboard</b>
                </h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Jumlah Kader</h5>
                                        <h4 class="fw-semibold mb-3">{{ $getcountKaders }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-blue rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-user fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="earning"></div> --}}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Jumlah Anak</h5>
                                        <h4 class="fw-semibold mb-3">{{ $getcountAnak }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-blue rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-mood-kid fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="earning"></div> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Jumlah Stunting</h5>
                                        <h4 class="fw-semibold mb-3">{{ $getcountStunting }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-blue rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-mood-kid fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="earning"></div> --}}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Jumlah Wasting</h5>
                                        <h4 class="fw-semibold mb-3">{{ $getcountWasting }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-blue rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-mood-kid fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="earning"></div> --}}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold">Jumlah Underweight</h5>
                                        <h4 class="fw-semibold mb-3">{{ $getcountUnderweight }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-blue rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-mood-kid fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="earning"></div> --}}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <h5 class="card-title fw-semibold mt-2 mb-3">Sebaran Gizi Anak</h5>
                    <div class="col-lg-4 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Anak Stunting</h5>
                                    </div>

                                </div>
                                <div class="chart-jumlah">
                                    <canvas id="p_stuntingChart">
                                    </canvas>

                                </div><br>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Anak Wasting</h5>
                                    </div>

                                </div>
                                <div class="chart-jumlah">
                                    <canvas id="p_wastingChart">
                                    </canvas>

                                </div><br>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Anak Underweight</h5>
                                    </div>

                                </div>
                                <div class="chart-jumlah">
                                    <canvas id="p_underweightChart">
                                    </canvas>

                                </div><br>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Penderita Gizi Buruk</h5>
                                    </div>

                                </div>
                                <div class="chart-jumlah">
                                    <canvas id="myChart">
                                    </canvas>

                                </div><br>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-6 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Jenis Kelamin Anak</h5>
                                    </div>

                                </div>

                                <div class="chart-jumlah">
                                    <canvas id="genderChart"></canvas>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Kondisi Anak</h5>
                                    </div>

                                </div>

                                <div class="chart-jumlah">
                                    <canvas id="kondisiChart"></canvas>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var datachart = @json($datachart);

    var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
        'Oktober', 'November', 'Desember'
    ];
    var p_stunting = [];
    var p_wasting = [];
    var p_underweight = [];

    for (var i = 1; i <= 12; i++) {
        p_stunting.push(datachart[i]['p_stunting']);
        p_wasting.push(datachart[i]['p_wasting']);
        p_underweight.push(datachart[i]['p_underweight']);
    }

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: bulan,
            datasets: [{
                    label: 'Stunting (anak)',
                    data: p_stunting,
                    backgroundColor: '#dc3545',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Wasting (anak)',
                    data: p_wasting,
                    backgroundColor: '#4E73DF',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Underweight (anak)',
                    data: p_underweight,
                    backgroundColor: '#FFFDB5',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctxGender = document.getElementById('genderChart').getContext('2d');
    var genderCounts = @json($genderCounts);

    var genderChart = new Chart(ctxGender, {
        type: 'pie',
        data: {
            labels: ['Laki-Laki', 'Perempuan'],
            datasets: [{
                data: [genderCounts['Laki-Laki'], genderCounts['Perempuan']],
                backgroundColor: [
                    '#4E73DF',
                    '#dc3545'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    var ctxKondisi = document.getElementById('kondisiChart').getContext('2d');
    var kondisiCounts = @json($kondisiCounts);

    var kondisiChart = new Chart(ctxKondisi, {
        type: 'pie',
        data: {
            labels: ['Hidup', 'Meninggal'],
            datasets: [{
                data: [kondisiCounts['hidup'], kondisiCounts['meninggal']],
                backgroundColor: [
                    '#4E73DF',
                    '#dc3545'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });


    var ctxP_stunting = document.getElementById('p_stuntingChart').getContext('2d');
    var p_stuntingCounts = @json($p_stuntingCounts);

    var p_stuntingChart = new Chart(ctxP_stunting, {
        type: 'pie',
        data: {
            labels: ['Stunting', 'Tidak Stunting'],
            datasets: [{
                data: [p_stuntingCounts['Stunting'], p_stuntingCounts['Tidak Stunting']],
                backgroundColor: [
                    '#4E73DF',
                    '#dc3545'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    var ctxP_wasting = document.getElementById('p_wastingChart').getContext('2d');
    var p_wastingCounts = @json($p_wastingCounts);

    var p_wastingChart = new Chart(ctxP_wasting, {
        type: 'pie',
        data: {
            labels: ['Wasting', 'Tidak Wasting'],
            datasets: [{
                data: [p_wastingCounts['Wasting'], p_wastingCounts['Tidak Wasting']],
                backgroundColor: [
                    '#4E73DF',
                    '#dc3545'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    var ctxp_underweight = document.getElementById('p_underweightChart').getContext('2d');
    var p_underweightCounts = @json($p_underweightCounts);

    var p_underweightChart = new Chart(ctxp_underweight, {
        type: 'pie',
        data: {
            labels: ['Underweight', 'Tidak Underweight'],
            datasets: [{
                data: [p_underweightCounts['Underweight'], p_underweightCounts[
                    'Tidak Underweight']],
                backgroundColor: [
                    '#4E73DF',
                    '#dc3545'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
});
</script>
<script src="{{ asset('assets/js/chart.js') }}"></script>
@endsection