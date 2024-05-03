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
                                        <h4 class="fw-semibold mb-3">120</h4>
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
                                        <h4 class="fw-semibold mb-3">120</h4>
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
                                        <h4 class="fw-semibold mb-3">120</h4>
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
                    <div class="col-lg-12 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Penderita Gizi Buruk</h5>
                                    </div>
                                    <div class="row">

                                        <select class="form-select">
                                            <option disabled>Pilih Tahun</option>
                                            <option value="1">2023</option>
                                            <option value="2">2024</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection