@extends('layouts.app')
@section('title', 'Daftar Subjek')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Daftar
                        Kegiatan/Subjek</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Daftar Kegiatan/Subjek</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Chart widget 36-->
                        <div class="card card-flush h-lg-100 overflow-hidden">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performa Eselon 1</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">{{ $actions->count() }} total
                                        aksi</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end p-0">
                                <!--begin::Chart-->
                                {{-- <div id="kt_charts_widget_36" class="min-h-auto w-100 pe-6 ps-4" style="height: 300px">
                                </div> --}}
                                <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 36-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-xl-10 mb-5 border-0"
                            style="background-color: #080655">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span
                                        class="fs-2hx fw-bold lh-1 ls-n2 me-2 text-white">{{ $subject_actives->count() }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-white opacity-50">Aktif Kegiatan/Subjek</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column w-100 mt-3">
                                    <div
                                        class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white opacity-50">
                                        <span>{{ $subject_openeds->count() }} Berjalan</span>
                                        <span>{{ $progress_percentage }}% Selesai</span>
                                    </div>
                                    <div class="h-8px w-100 bg-light-danger mx-3 rounded">
                                        <div class="bg-danger h-8px rounded" role="progressbar" style="width: 10%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 16-->
                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-md-50 mb-xl-10 mb-5">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span
                                        class="fs-2hx fw-bold text-dark lh-1 ls-n2 me-2">{{ $actions_active->count() }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-gray-400">Aksi belum selesai</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <!--begin::Title-->
                                <span class="fs-6 fw-bolder d-block mb-2 text-gray-800">Pengguna paling aktif</span>
                                <!--end::Title-->
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michael Eberon">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-11.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-dark fs-8 fw-bold text-gray-300">+42</span>
                                    </a>
                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 17-->
                        <div class="card card-flush h-md-50 mb-xl-10 mb-5">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold align-self-start me-1 text-gray-400">+</span>
                                        <!--end::Currency-->
                                        <!--begin::Amount-->
                                        <span
                                            class="fs-2hx fw-bold text-dark lh-1 ls-n2 me-2">{{ $subject_detail_actives->count() }}</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-gray-400">Jumlah Detail Subjek</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-center flex-wrap pb-4 pt-2">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                        data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="flex-grow-1 me-4 text-gray-500">Selesai</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-xxl-end text-gray-700">
                                            {{ $subject_detail_closeds->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="flex-grow-1 me-4 text-gray-500">Progress</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-xxl-end text-gray-700">
                                            {{ $subject_detail_openeds->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->
                        <!--begin::List widget 25-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-800">Highlight</h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar d-none">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="fw-bold text-gray-600">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 fs-1 me-0 ms-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="fw-semibold fs-6 me-2 text-gray-700">Rata-rata subjek
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="fw-bolder fs-6 text-gray-900">7.8</span>
                                        <!--end::Number-->
                                        <span class="fw-bold fs-6 text-gray-400">/10</span>
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="fw-semibold fs-6 me-2 text-gray-700">Rata-rata subjek detail</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="fw-bolder fs-6 text-gray-900">730</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="fw-semibold fs-6 me-2 text-gray-700">Rata-rata aksi
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="fw-bolder fs-6 text-gray-900">2,309</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-xl-0 mb-5">
                        <!--begin::Timeline widget 3-->
                        <div class="card h-md-100">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Info Baru Hari Ini</span>
                                    <span class="text-muted fw-semibold fs-7 mt-1">Total 4.567
                                        aksi</span>
                                </h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">Pusat laporan</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body px-0 pt-7">
                                <!--begin::Nav-->
                                <ul
                                    class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                                            <span class="fs-7 fw-semibold">Fr</span>
                                            <span class="fs-6 fw-bold">20</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                            <span class="fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 fw-bold">21</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                                            <span class="fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 fw-bold">22</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger active px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                                            <span class="fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 fw-bold">23</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                                            <span class="fs-7 fw-semibold">Tu</span>
                                            <span class="fs-6 fw-bold">24</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                                            <span class="fs-7 fw-semibold">We</span>
                                            <span class="fs-6 fw-bold">25</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                                            <span class="fs-7 fw-semibold">Th</span>
                                            <span class="fs-6 fw-bold">26</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                                            <span class="fs-7 fw-semibold">Fri</span>
                                            <span class="fs-6 fw-bold">27</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                                            <span class="fs-7 fw-semibold">Sa</span>
                                            <span class="fs-6 fw-bold">28</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                                            <span class="fs-7 fw-semibold">Su</span>
                                            <span class="fs-6 fw-bold">29</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item ms-0 p-0">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-danger px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                                            <span class="fs-7 fw-semibold">Mo</span>
                                            <span class="fs-6 fw-bold">30</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content (ishlamayabdi)-->
                                <div class="tab-content mb-2 px-9">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Penambahan Rencana Aksi
                                                    Pengawasan Pihak Pelapor yang Tepat Sasaran</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-primary me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Penambahan Rencana Aksi
                                                    Pengawasan Pihak Pelapor yang Tepat Sasaran</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">03.10
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Penambahan Rencana Aksi
                                                    Pengawasan Pihak Pelapor yang Tepat Sasaran</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">03.00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Penambahan Rencana Aksi
                                                    Laporan berkualitas yang tepat sasaran</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">03.40
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Penambahan Rencana Aksi
                                                    Pola kerja yang memanfaatkan seluruh basis data PPATK</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-danger me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-primary me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-danger me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-danger me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-primary me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-success me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-danger me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-warning me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-info me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">16:30 -
                                                    17:00
                                                    <span class="fw-semibold fs-7 text-gray-400">PM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Dashboard
                                                    UI/UX Design Review</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Mark Morris</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-danger me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">10:20 -
                                                    11:00
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">Marketing
                                                    Campaign Discussion</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Peter
                                                        Marcus</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 bg-primary me-4"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fw-semibold fs-2 text-gray-800">12:00 -
                                                    13:40
                                                    <span class="fw-semibold fs-7 text-gray-400">AM</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Description-->
                                                <div class="fw-semibold fs-6 text-gray-700">9 Degree
                                                    Project Estimation Meeting</div>
                                                <!--end::Description-->
                                                <!--begin::Link-->
                                                <div class="fw-semibold fs-7 text-gray-400">Lead by
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                        class="text-primary opacity-75-hover fw-semibold">Lead
                                                        by Bob</a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_create_project">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Action-->
                                <div class="float-end d-none">
                                    <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">Add Lesson</a>
                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Timeline widget 3-->
                        <!--begin::Timeline widget 3-->
                        <div class="card card-flush d-none h-md-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">What's on the road?</h3>
                                    <div class="fs-6 text-gray-400">Total 482 participants</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Select-->
                                    <select name="status" data-control="select2" data-hide-search="true"
                                        class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                        <option value="1" selected="selected">Options</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-0">
                                <!--begin::Dates-->
                                <ul class="nav nav-pills d-flex hover-scroll-x ms-4 flex-nowrap py-2">
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_0">
                                            <span class="fs-7 fw-semibold text-gray-400">Fr</span>
                                            <span class="fs-6 fw-bold text-gray-800">20</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_1">
                                            <span class="fs-7 fw-semibold text-gray-400">Sa</span>
                                            <span class="fs-6 fw-bold text-gray-800">21</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_2">
                                            <span class="fs-7 fw-semibold text-gray-400">Su</span>
                                            <span class="fs-6 fw-bold text-gray-800">22</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger active me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_3">
                                            <span class="fs-7 fw-semibold text-gray-400">Mo</span>
                                            <span class="fs-6 fw-bold text-gray-800">23</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_4">
                                            <span class="fs-7 fw-semibold text-gray-400">Tu</span>
                                            <span class="fs-6 fw-bold text-gray-800">24</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_5">
                                            <span class="fs-7 fw-semibold text-gray-400">We</span>
                                            <span class="fs-6 fw-bold text-gray-800">25</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_6">
                                            <span class="fs-7 fw-semibold text-gray-400">Th</span>
                                            <span class="fs-6 fw-bold text-gray-800">26</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_7">
                                            <span class="fs-7 fw-semibold text-gray-400">Fr</span>
                                            <span class="fs-6 fw-bold text-gray-800">27</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_8">
                                            <span class="fs-7 fw-semibold text-gray-400">Sa</span>
                                            <span class="fs-6 fw-bold text-gray-800">28</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_9">
                                            <span class="fs-7 fw-semibold text-gray-400">Su</span>
                                            <span class="fs-6 fw-bold text-gray-800">29</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_10">
                                            <span class="fs-7 fw-semibold text-gray-400">Mo</span>
                                            <span class="fs-6 fw-bold text-gray-800">30</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-color-active-white btn-active-danger me-2 px-3 py-4"
                                            data-bs-toggle="tab" href="#kt_schedule_day_11">
                                            <span class="fs-7 fw-semibold text-gray-400">Tu</span>
                                            <span class="fs-6 fw-bold text-gray-800">31</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                </ul>
                                <!--end::Dates-->
                                <!--begin::Tab Content-->
                                <div class="tab-content px-9">
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_0" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Dashboard
                                                    UI/UX Design Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Kendell Trevor</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Development
                                                    Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Weekly
                                                    Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Sales
                                                    Pitch Proposal</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Development
                                                    Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">9
                                                    Degree Project Estimation Meeting</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_2" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Lunch
                                                    & Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Marketing
                                                    Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Kendell Trevor</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Lunch
                                                    & Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Kendell Trevor</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_3" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Dashboard
                                                    UI/UX Design Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Karina Clarke</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Marketing
                                                    Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Peter Marcus</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Committee
                                                    Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Peter Marcus</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_4" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Creative
                                                    Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Creative
                                                    Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Weekly
                                                    Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Mark Randall</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_5" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Development
                                                    Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">David Stevenson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Project
                                                    Review & Testing</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Team
                                                    Backlog Grooming Session</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Mark Randall</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_6" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Committee
                                                    Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Karina Clarke</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Marketing
                                                    Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Michael Walters</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Development
                                                    Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Kendell Trevor</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_7" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Weekly
                                                    Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Lunch
                                                    & Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Naomi Hayabusa</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Sales
                                                    Pitch Proposal</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Kendell Trevor</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_8" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Weekly
                                                    Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Karina Clarke</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Committee
                                                    Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Creative
                                                    Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Walter White</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_9" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Marketing
                                                    Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Sean Bean</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Lunch
                                                    & Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Peter Marcus</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Creative
                                                    Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Bob Harris</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_10" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Committee
                                                    Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Creative
                                                    Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Caleb Donaldson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Lunch
                                                    & Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">David Stevenson</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_11" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Committee
                                                    Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                    <span class="fs-7 text-uppercase text-gray-400">pm</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Weekly
                                                    Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded">
                                            </div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-semibold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                    <span class="fs-7 text-uppercase text-gray-400">am</span>
                                                </div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">Marketing
                                                    Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                    <a href="#">Terry Robins</a>
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Timeline widget-3-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13"
                                    placeholder="Search Kegiatan / Subjek" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-table-toolbar="base">
                                <!--begin::Filter-->
                                <div class="w-150px me-3">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Status"
                                        data-kt-status-filter="status">
                                        <option></option>
                                        <option value="all">All</option>
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Filter-->
                                <!--begin::Add Kegiatan/Subjek-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_add">Tambah Kegiatan/Subjek</button>
                                <!--end::Add Kegiatan/Subjek-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-table-select="delete_selected">Delete
                                    Selected</button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table-row-dashed fs-6 gy-5 table align-middle" id="kt_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-400">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">Nama</th>
                                    <th class="min-w-125px">Jenis Subjek</th>
                                    <th class="min-w-125px">Deskripsi</th>
                                    <th class="min-w-125px">Tanggal Dimulai</th>
                                    <th class="min-w-125px">Tanggal Ditutup</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="min-w-70px text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->subjectType->name }}</td>
                                        <td>{{ $subject->comment }}</td>
                                        <td>{{ $subject->opened->format('d/m/Y') }}</td>
                                        <td>{{ $subject->closed ? $subject->closed->format('d/m/Y') : '-' }}</td>
                                        <td>
                                            @if ($subject->active === true)
                                                <div class="badge badge-light-success">Aktif</div>
                                            @else
                                                <div class="badge badge-light-danger">Tidak Aktif</div>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('/monitoring-pimpinan/monitoring/subject/' . $subject->id) }}"
                                                        data-toggle="tooltip" data-original-title="Lihat"
                                                        class="menu-link px-3">Lihat</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3"
                                                        data-id="{{ $subject->id }}" data-csrf="{{ csrf_token() }}"
                                                        data-table-filter="delete_row">Hapus</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Modals-->
                <!--begin::Modal - Subject - Add-->
                <div class="modal fade" tabindex="-1" id="modal_add">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Tambah Kegiatan / Subjek</h3>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <form id="add_form" method="post"
                                action="{{ url('/monitoring-pimpinan/monitoring/subject') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                <div class="modal-body">
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                        <input type="text" class="form-control form-control-solid" name="name"
                                            placeholder="Nama Kegiatan atau Subjek" />
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Jenis
                                            Kegiatan/Subjek</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            name="subject_type_id">
                                            <option>Pilih..</option>
                                            @foreach ($subject_types as $subject_type)
                                                <option value="{{ $subject_type->id }}">{{ $subject_type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                        <textarea class="form-control form-control-solid" name="comment"></textarea>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <div class="fv-row input-group mb-10" id="kt_td_picker_date_only"
                                            data-td-target-input="nearest" data-td-target-toggle="nearest">
                                            <input id="kt_td_picker_date_only_input" type="text"
                                                class="form-control" data-td-target="#kt_td_picker_date_only"
                                                name="opened" />
                                            <span class="input-group-text" data-td-target="#kt_td_picker_date_only"
                                                data-td-toggle="datetimepicker">
                                                <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Modal - Subject - Add-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script>
        new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only"), {
            localization: {
                format: "dd/MM/yyyy HH:mm"
            }
        });
    </script>
    <script>
        // Define form element
        const form = document.getElementById('add_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form, {
                fields: {
                    'name': {
                        validators: {
                            notEmpty: {
                                message: 'Text input is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
    </script>

    <script>
        "use strict";
        var List = (function() {
            var t,
                e,
                o = () => {
                    e.querySelectorAll('[data-table-filter="delete_row"]').forEach(
                        (e) => {
                            e.addEventListener("click", function(e) {
                                e.preventDefault();
                                const o = e.target.closest("tr"),
                                    n = o.querySelectorAll("td")[2].innerText;
                                let sub_id = $(this).data("id");
                                let token = $(this).data("csrf");

                                Swal.fire({
                                    text: "Apakah anda yakin akan menghapus " + n + " ?",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ya, hapus!",
                                    cancelButtonText: "Tidak, batalkan",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-danger",
                                        cancelButton: "btn fw-bold btn-active-light-primary",
                                    },
                                }).then(function(e) {
                                    e.value ?
                                        Swal.fire({
                                            text: "Kamu telah menghapus " + n + "!.",
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Baik",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            },
                                        }).then(function() {
                                            $.ajax({
                                                url: `/monitoring-pimpinan/monitoring/subject/${sub_id}`,
                                                type: "DELETE",
                                                cache: false,
                                                data: {
                                                    _token: token,
                                                },
                                            });

                                            window.location.reload();
                                        }) :
                                        "cancel" === e.dismiss &&
                                        Swal.fire({
                                            text: n + " was not deleted.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            },
                                        });
                                });
                            });
                        },
                    );
                },
                n = () => {
                    const o = e.querySelectorAll('[type="checkbox"]'),
                        n = document.querySelector(
                            '[data-table-select="delete_selected"]',
                        );
                    o.forEach((t) => {
                            t.addEventListener("click", function() {
                                setTimeout(function() {
                                    c();
                                }, 50);
                            });
                        }),
                        n.addEventListener("click", function() {
                            Swal.fire({
                                text: "Are you sure you want to delete selected customers?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, delete!",
                                cancelButtonText: "No, cancel",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-danger",
                                    cancelButton: "btn fw-bold btn-active-light-primary",
                                },
                            }).then(function(n) {
                                n.value ?
                                    Swal.fire({
                                        text: "You have deleted all selected customers!.",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary",
                                        },
                                    }).then(function() {
                                        o.forEach((e) => {
                                            e.checked &&
                                                t
                                                .row($(e.closest("tbody tr")))
                                                .remove()
                                                .draw();
                                        });
                                        e.querySelectorAll(
                                            '[type="checkbox"]',
                                        )[0].checked = !1;
                                    }) :
                                    "cancel" === n.dismiss &&
                                    Swal.fire({
                                        text: "Selected customers was not deleted.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary",
                                        },
                                    });
                            });
                        });
                };
            const c = () => {
                const t = document.querySelector('[data-table-toolbar="base"]'),
                    o = document.querySelector(
                        '[data-table-toolbar="selected"]',
                    ),
                    n = document.querySelector(
                        '[data-table-select="selected_count"]',
                    ),
                    c = e.querySelectorAll('tbody [type="checkbox"]');
                let r = !1,
                    l = 0;
                c.forEach((t) => {
                        t.checked && ((r = !0), l++);
                    }),
                    r ?
                    ((n.innerHTML = l),
                        t.classList.add("d-none"),
                        o.classList.remove("d-none")) :
                    (t.classList.remove("d-none"), o.classList.add("d-none"));
            };
            return {
                init: function() {
                    (e = document.querySelector("#kt_table")) &&
                    (e.querySelectorAll("tbody tr").forEach((t) => {
                            const e = t.querySelectorAll("td"),
                                o = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
                            e[2].setAttribute("data-order", o);
                        }),
                        (t = $(e).DataTable({
                            info: !1,
                            order: [],
                            columnDefs: [{
                                    orderable: !1,
                                    targets: 0
                                },
                                {
                                    orderable: !1,
                                    targets: 4
                                },
                            ],
                        })).on("draw", function() {
                            n(), o(), c();
                        }),
                        n(),
                        document
                        .querySelector('[data-table-filter="search"]')
                        .addEventListener("keyup", function(e) {
                            t.search(e.target.value).draw();
                        }),
                        o(),
                        (() => {
                            const e = document.querySelector(
                                '[data-kt-status-filter="status"]',
                            );
                            $(e).on("change", (e) => {
                                let o = e.target.value;
                                "all" === o && (o = ""), t.column(6).search(o).draw();
                            });
                        })());
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            List.init();
        });
    </script>

    <script>
        var ctx = document.getElementById('kt_chartjs_1');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
        var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
        var successColor = KTUtil.getCssVariableValue('--kt-success');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['SETIA', 'ASA', 'TEGAS', 'PENGASUH'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [{
                label: 'Total Aksi',
                data: [
                    {{ $setia_total->count() }},
                    {{ $asa_total->count() }},
                    {{ $tegas_total->count() }},
                    {{ $pengasuh_total->count() }}
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                ],
                borderWidth: 1
            }, {
                label: 'Selesai',
                data: [
                    {{ $setia_finish->count() }},
                    {{ $asa_finish->count() }},
                    {{ $tegas_finish->count() }},
                    {{ $pengasuh_finish->count() }}
                ],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgb(75, 192, 192)',
                ],
                borderWidth: 1
            }]
        };

        // Chart config
        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Progres Penyelesaian'
                    }
                }
            },
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    </script>
@endsection
