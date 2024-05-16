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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-warning"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px;
                             background-image: url('{{ asset('assets/media/icons/tabler/png/message-2-down.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-warning">Disposisi</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-warning">69</span>
                                    <span class="fw-semibold fs-6 pt-1 text-warning">Belum Tindak Lanjut</span>
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
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-warning">
                                    <span>43 Belum Dibaca</span>
                                    <span>72%</span>
                                </div>
                                <div class="h-8px w-100 mx-3 rounded bg-warning bg-opacity-50">
                                    <div class="h-8px rounded bg-warning" role="progressbar" style="width: 72%;"
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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-info"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-text.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-info">Pencatatan Naskah
                                    Dinas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-info">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-info">Belum Disetujui</span>
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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-danger"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-danger">Naskah Dinas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-danger">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-danger"> Belum
                                        Disetujui</span>
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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-dark"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/send-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-dark">Naskah Dinas </span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-dark">3</span>
                                    <span class="fw-semibold fs-6 pt-1 text-dark">Belum
                                        Dikirim</span>
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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-success"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/mailbox.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-success">Naskah Masuk Internal</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-success">2</span>
                                    <span class="fw-semibold fs-6 pt-1 text-success">Belum Tindak Lanjut</span>
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
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-primary">
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
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end bg-light-primary"
                        style="background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/plane-tilt.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-primary">Permohonan Surat Tugas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-primary">4</span>
                                    <span class="fw-semibold fs-6 pt-1 text-primary">Belum Disetujui</span>
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
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-primary">
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
