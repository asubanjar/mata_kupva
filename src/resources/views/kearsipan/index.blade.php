@extends('layouts.app')
@section('title', 'Utama')
@section('content')

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #f39c12; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/message-2-down.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Disposisi</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">69</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Tindak Lanjut</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span>43 Belum Dibaca</span>
                                    <span>72%</span>
                                </div>
                                <div class="h-8px w-100 mx-3 rounded bg-white bg-opacity-50">
                                    <div class="h-8px rounded bg-white" role="progressbar" style="width: 72%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #39cccc ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-text.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Pencatatan Naskah
                                    Dinas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Disetujui</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #00c0ef  ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Dinas Belum
                                    Disetujui</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white"></span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #F1416C ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/send-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Dinas Belum
                                    Dikirim</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">3</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white"></span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #01ff70; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/mailbox.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Masuk Internal</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">2</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Tindak Lanjut</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Card widget 20-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #1668c8; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/plane-tilt.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Permohonan Surat Tugas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">4</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Disetujui</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <div class="row gy-5 g-xl-10">
                @include('kearsipan.daftar-penugasan')
            </div>
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->

@endsection
