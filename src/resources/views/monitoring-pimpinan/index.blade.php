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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Monitoring Pimpinan</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Beranda</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Secondary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Rollover</a>
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_new_target">Add Target</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 gx-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-xl-10 mb-5"
                            style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 text-white">{{ $subjects->count() }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-white opacity-75">Subjek / Kegiatan Aktif</span>
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
                                        class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white opacity-75">
                                        <span>{{ $subject_pendings->count() }} Dalam proses</span>
                                        <span>{{ $subject_finish_percentage }}%</span>
                                    </div>
                                    <div class="h-8px w-100 mx-3 rounded bg-white bg-opacity-50">
                                        <div class="h-8px rounded bg-white" role="progressbar"
                                            style="width: {{ $subject_finish_percentage }}%;" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 20-->
                        <!--begin::List widget 26-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title fw-bold text-gray-800">Unit aksi selesai</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                @foreach ($statistik_jabatan_finishes as $statistik_jabatan_finish)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#"
                                            class="text-primary fw-semibold fs-6 me-2">{{ $statistik_jabatan_finish->name }}</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end h-auto w-auto">
                                            {{ $statistik_jabatan_finish->total_action_finish }} /
                                            {{ $statistik_jabatan_finish->total_action }}
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->
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
                                        <!--begin::Subject Detail-->
                                        <span
                                            class="fs-2hx fw-bold text-dark lh-1 ls-n2 me-2">{{ $subject_details->count() }}</span>
                                        <!--end::Subject Detail-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>{{ $subject_detail_finish_percentage }}% Selesai</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-gray-400">Detail Subjek Aktif</span>
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
                                            {{ $subject_detail_finishes->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="flex-grow-1 me-4 text-gray-500">Dalam proses</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-xxl-end text-gray-700">
                                            {{ $subject_detail_pendings->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->
                        <!--begin::List widget 26-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title fw-bold text-gray-800">Unit aksi dalam proses</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                @foreach ($statistik_jabatan_pendings as $statistik_jabatan_pending)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#"
                                            class="text-primary fw-semibold fs-6 me-2">{{ $statistik_jabatan_pending->name }}</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end h-auto w-auto">
                                            {{ $statistik_jabatan_pending->total_action_pending }} /
                                            {{ $statistik_jabatan_pending->total_action }}
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Engage widget 10-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column justify-content-between bgi-no-repeat bgi-size-cover bgi-position-x-center mt-9 pb-0"
                                style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                                <!--begin::Wrapper-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <div class="fs-2hx fw-bold mb-13 text-center text-gray-800">
                                        <span class="me-2">Try our all new Enviroment with
                                            <br />
                                            <span class="position-relative d-inline-block text-danger">
                                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                    class="text-danger opacity-75-hover">Pro Plan</a>
                                                <!--begin::Separator-->
                                                <span
                                                    class="position-absolute opacity-15 border-danger border-bottom w-100 bottom-0 start-0 border-4"></span>
                                                <!--end::Separator-->
                                            </span></span>for Free
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Action-->
                                    <div class="text-center">
                                        <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                    </div>
                                    <!--begin::Action-->
                                </div>
                                <!--begin::Wrapper-->
                                <!--begin::Illustration-->
                                <img class="h-150px h-lg-200px theme-light-show mx-auto"
                                    src="assets/media/illustrations/misc/upgrade.svg" alt="" />
                                <img class="h-150px h-lg-200px theme-dark-show mx-auto"
                                    src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
                                <!--end::Illustration-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 10-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10">
                    <!--begin::Col-->
                    <div class="col-xxl-6 mb-xl-10 mb-5">
                        <!--begin::Chart widget 8-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performance Overview</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">Users from all channels</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <ul class="nav" id="kt_chart_widget_8_tabs">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold me-1 px-4"
                                                data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle"
                                                href="#kt_chart_widget_8_week_tab">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold active me-1 px-4"
                                                data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle"
                                                href="#kt_chart_widget_8_month_tab">Week</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                                        <!--begin::Statistics-->
                                        <div class="mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-1 fw-semibold mt-n1 me-1 text-gray-400">$</span>
                                                <span class="fs-3x fw-bold lh-1 ls-n2 me-2 text-gray-800">18,89</span>
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>4,8%</span>
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-400">Avarage cost per
                                                interaction</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto"
                                            style="height: 275px"></div>
                                        <!--end::Chart-->
                                        <!--begin::Items-->
                                        <div class="d-flex flex-wrap pt-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column me-lg-16 pt-sm-3 me-7 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-primary h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Social Campaigns</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-danger h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column me-lg-16 pt-sm-3 me-7 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-success h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Email Newsletter</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-warning h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Courses</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column pt-sm-3 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-info h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">TV Campaign</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-success h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Radio</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Items-->
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab"
                                        role="tabpanel">
                                        <!--begin::Statistics-->
                                        <div class="mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-1 fw-semibold mt-n1 me-1 text-gray-400">$</span>
                                                <span class="fs-3x fw-bold lh-1 ls-n2 me-2 text-gray-800">8,55</span>
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>2.2%</span>
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-400">Avarage cost per
                                                interaction</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto"
                                            style="height: 275px"></div>
                                        <!--end::Chart-->
                                        <!--begin::Items-->
                                        <div class="d-flex flex-wrap pt-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column me-lg-16 pt-sm-3 me-7 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-primary h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Social Campaigns</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-danger h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Google Ads</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column me-lg-16 pt-sm-3 me-7 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-success h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Email Newsletter</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-warning h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Courses</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column pt-sm-3 pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-sm-6 mb-3">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-info h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">TV Campaign</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot bg-success h-10px w-10px me-2"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Label-->
                                                    <span class="fw-bold fs-6 text-gray-600">Radio</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Items-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 8-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-xl-10 mb-5">
                        <!--begin::Tables widget 16-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">Avg. 69.34% Conv. Rate</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 me-n1 text-gray-400">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                    <!--begin::Item-->
                                    <li class="nav-item me-lg-6 mb-3 me-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column w-80px h-85px active overflow-hidden pb-2 pt-5"
                                            id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                            href="#kt_stats_widget_16_tab_1">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-car fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <span class="nav-text fw-bold fs-6 lh-1 text-gray-800">SaaS</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute w-100 h-4px bg-primary bottom-0"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item me-lg-6 mb-3 me-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column w-80px h-85px overflow-hidden pb-2 pt-5"
                                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                            href="#kt_stats_widget_16_tab_2">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-bitcoin fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <span class="nav-text fw-bold fs-6 lh-1 text-gray-800">Crypto</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute w-100 h-4px bg-primary bottom-0"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item me-lg-6 mb-3 me-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column w-80px h-85px overflow-hidden pb-2 pt-5"
                                            id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                            href="#kt_stats_widget_16_tab_3">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-like fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <span class="nav-text fw-bold fs-6 lh-1 text-gray-800">Social</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute w-100 h-4px bg-primary bottom-0"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item me-lg-6 mb-3 me-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column w-80px h-85px overflow-hidden pb-2 pt-5"
                                            id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                            href="#kt_stats_widget_16_tab_4">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-tablet fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <span class="nav-text fw-bold fs-6 lh-1 text-gray-800">Mobile</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute w-100 h-4px bg-primary bottom-0"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item me-lg-6 mb-3 me-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column w-80px h-85px overflow-hidden pb-2 pt-5"
                                            id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                            href="#kt_stats_widget_16_tab_5">
                                            <!--begin::Icon-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-send fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <span class="nav-text fw-bold fs-6 lh-1 text-gray-800">Others</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute w-100 h-4px bg-primary bottom-0"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                        <th class="min-w-150px p-0 pb-3 text-start">AUTHOR</th>
                                                        <th class="min-w-100px pe-13 p-0 pb-3 text-end">CONV.</th>
                                                        <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                        <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-3.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Guy
                                                                        Hawkins</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">78.34%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_1_1"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-2.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jane
                                                                        Cooper</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">63.83%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_1_2"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-9.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jacob
                                                                        Jones</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">92.56%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_1_3"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-7.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Cody
                                                                        Fishers</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">63.08%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_1_4"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                        <th class="min-w-150px p-0 pb-3 text-start">AUTHOR</th>
                                                        <th class="min-w-100px pe-13 p-0 pb-3 text-end">CONV.</th>
                                                        <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                        <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-25.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Brooklyn
                                                                        Simmons</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">85.23%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_2_1"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-24.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Esther
                                                                        Howard</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">74.83%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_2_2"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-20.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Annette
                                                                        Black</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">90.06%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_2_3"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-17.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Marvin
                                                                        McKinney</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">54.08%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_2_4"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                        <th class="min-w-150px p-0 pb-3 text-start">AUTHOR</th>
                                                        <th class="min-w-100px pe-13 p-0 pb-3 text-end">CONV.</th>
                                                        <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                        <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-11.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jacob
                                                                        Jones</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">New
                                                                        York</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">52.34%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_3_1"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-23.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Ronald
                                                                        Richards</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Madrid</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">77.65%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_3_2"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-4.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Leslie
                                                                        Alexander</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Pune</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">82.47%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_3_3"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-1.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Courtney
                                                                        Henry</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">67.84%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_3_4"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                        <th class="min-w-150px p-0 pb-3 text-start">AUTHOR</th>
                                                        <th class="min-w-100px pe-13 p-0 pb-3 text-end">CONV.</th>
                                                        <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                        <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-12.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Arlene
                                                                        McCoy</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">London</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">53.44%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_4_1"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-21.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Marvin
                                                                        McKinneyr</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">74.64%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_4_2"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-30.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jacob
                                                                        Jones</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">PManila</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">88.56%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_4_3"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-14.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Esther
                                                                        Howard</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Iceland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">63.16%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_4_4"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                        <th class="min-w-150px p-0 pb-3 text-start">AUTHOR</th>
                                                        <th class="min-w-100px pe-13 p-0 pb-3 text-end">CONV.</th>
                                                        <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                        <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-6.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jane
                                                                        Cooper</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">68.54%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_5_1"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-10.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Esther
                                                                        Howard</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Kiribati</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">55.83%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_5_2"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-9.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Jacob
                                                                        Jones</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">93.46%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_5_3"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-3.jpg"
                                                                        class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                        class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Ralph
                                                                        Edwards</a>
                                                                    <span
                                                                        class="fw-semibold d-block fs-7 text-gray-400">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pe-13 text-end">
                                                            <span class="fw-bold fs-6 text-gray-600">64.48%</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <div id="kt_table_widget_16_chart_5_4"
                                                                class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i
                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Tables widget 16-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Card widget 18-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Body-->
                            <div class="card-body py-9">
                                <!--begin::Row-->
                                <div class="row gx-9 h-100">
                                    <!--begin::Col-->
                                    <div class="col-sm-6 mb-sm-0 mb-10">
                                        <!--begin::Image-->
                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100"
                                            style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')">
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-6">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column h-100">
                                            <!--begin::Header-->
                                            <div class="mb-7">
                                                <!--begin::Headin-->
                                                <div class="d-flex flex-stack mb-6">
                                                    <!--begin::Title-->
                                                    <div class="me-5 flex-shrink-0">
                                                        <span
                                                            class="fs-7 fw-bold d-block lh-1 me-2 pb-1 text-gray-400">Featured</span>
                                                        <span class="fs-1 fw-bold text-gray-800">9 Degree</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <span
                                                        class="badge badge-light-primary align-self-center fs-7 flex-shrink-0 px-4 py-3">In
                                                        Process</span>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Items-->
                                                <div class="d-flex align-items-center d-grid flex-wrap gap-2">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center me-xl-13 me-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px symbol-circle me-3">
                                                            <img src="assets/media/avatars/300-3.jpg" class=""
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <span
                                                                class="fw-semibold d-block fs-8 text-gray-400">Manager</span>
                                                            <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                class="fw-bold text-hover-primary fs-7 text-gray-800">Robert
                                                                Fox</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px symbol-circle me-3">
                                                            <span class="symbol-label bg-success">
                                                                <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <span
                                                                class="fw-semibold d-block fs-8 text-gray-400">Budget</span>
                                                            <span class="fw-bold fs-7 text-gray-800">$64.800</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="mb-6">
                                                <!--begin::Text-->
                                                <span class="fw-semibold fs-6 d-block mb-8 text-gray-600">Flat cartoony
                                                    illustrations with vivid unblended colors and asymmetrical beautiful
                                                    purple hair lady</span>
                                                <!--end::Text-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="min-w-100px w-100 mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-2">
                                                        <!--begin::Date-->
                                                        <span class="fs-6 fw-bold text-gray-700">Feb 6, 2021</span>
                                                        <!--end::Date-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold text-gray-400">Due Date</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="min-w-100px w-100 mb-3 rounded border border-dashed border-gray-300 px-4 py-2">
                                                        <!--begin::Number-->
                                                        <span class="fs-6 fw-bold text-gray-700">$
                                                            <span class="ms-n1" data-kt-countup="true"
                                                                data-kt-countup-value="284,900.00">0</span></span>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold text-gray-400">Budget</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Body-->
                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack bd-highlight mt-auto">
                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        title="Melody Macy">
                                                        <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        title="Michael Eberon">
                                                        <img alt="Pic" src="assets/media/avatars/300-3.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        title="Susan Redwood">
                                                        <span
                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                </div>
                                                <!--end::Users group-->
                                                <!--begin::Actions-->
                                                <a href="../../demo1/dist/apps/projects/project.html"
                                                    class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View
                                                    Project
                                                    <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i></a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card widget 18-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Chart widget 36-->
                        <div class="card card-flush h-lg-100 overflow-hidden">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performance</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">1,046 Inbound Calls today</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                        data-kt-daterangepicker-range="today"
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
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end p-0">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_36" class="min-h-auto w-100 pe-6 ps-4" style="height: 300px">
                                </div>
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
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Chart Widget 35-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header mb-6 pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Currency-->
                                        <span class="fs-3 fw-semibold align-self-start me-1 text-gray-400">$</span>
                                        <!--end::Currency-->
                                        <!--begin::Value-->
                                        <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 text-gray-800">3,274.94</span>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>9.2%</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                                    <!--end::Description-->
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 me-n1 text-gray-400">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body px-0 py-0">
                                <!--begin::Nav-->
                                <ul class="nav d-flex justify-content-between mx-9 mb-3">
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_1"
                                            href="#kt_charts_widget_35_tab_content_1">1d</a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_2"
                                            href="#kt_charts_widget_35_tab_content_2">5d</a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_3"
                                            href="#kt_charts_widget_35_tab_content_3">1m</a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_4"
                                            href="#kt_charts_widget_35_tab_content_4">6m</a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_5"
                                            href="#kt_charts_widget_35_tab_content_5">1y</a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content-->
                                <div class="tab-content mt-n6">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary"
                                            class="min-h-auto h-200px pe-6 ps-3"></div>
                                        <!--end::Chart-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive mt-n6 mx-9">
                                            <!--begin::Table-->
                                            <table class="gs-0 gy-4 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px pe-0 text-end"></th>
                                                        <th class="min-w-50px text-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">2:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">3:10
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$3,207.03</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+576.24</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">3:55
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$3,274.94</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+124.03</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary"
                                            class="min-h-auto h-200px pe-6 ps-3"></div>
                                        <!--end::Chart-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive mt-n6 mx-9">
                                            <!--begin::Table-->
                                            <table class="gs-0 gy-4 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px pe-0 text-end"></th>
                                                        <th class="min-w-50px text-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">4:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,345.45</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+134.02</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">11:35
                                                                AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">3:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$1,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">+144.04</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary"
                                            class="min-h-auto h-200px pe-6 ps-3"></div>
                                        <!--end::Chart-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive mt-n6 mx-9">
                                            <!--begin::Table-->
                                            <table class="gs-0 gy-4 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px pe-0 text-end"></th>
                                                        <th class="min-w-50px text-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">3:20
                                                                AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$3,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">12:30
                                                                AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">4:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">-154.03</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary"
                                            class="min-h-auto h-200px pe-6 ps-3"></div>
                                        <!--end::Chart-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive mt-n6 mx-9">
                                            <!--begin::Table-->
                                            <table class="gs-0 gy-4 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px pe-0 text-end"></th>
                                                        <th class="min-w-50px text-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">2:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">5:30
                                                                AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$1,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-info">+144.65</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">4:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,085.25</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">+154.06</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary"
                                            class="min-h-auto h-200px pe-6 ps-3"></div>
                                        <!--end::Chart-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive mt-n6 mx-9">
                                            <!--begin::Table-->
                                            <table class="gs-0 gy-4 table align-middle">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px pe-0 text-end"></th>
                                                        <th class="min-w-50px text-end"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">2:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$2,045.04</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">3:30
                                                                AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fw-bold fs-6 text-gray-600">10:30
                                                                PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 me-1 text-gray-800">$1.756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-info">+165.86</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart Widget 35-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Table widget 14-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">Updated 37 minutes ago</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                                        class="btn btn-sm btn-light">History</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table-row-dashed gs-0 gy-3 my-0 table align-middle">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold border-bottom-0 text-gray-400">
                                                <th class="min-w-175px p-0 pb-3 text-start">ITEM</th>
                                                <th class="min-w-100px p-0 pb-3 text-end">BUDGET</th>
                                                <th class="min-w-100px p-0 pb-3 text-end">PROGRESS</th>
                                                <th class="min-w-175px p-0 pb-3 pe-12 text-end">STATUS</th>
                                                <th class="w-125px p-0 pb-3 pe-7 text-end">CHART</th>
                                                <th class="w-50px p-0 pb-3 text-end">VIEW</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/stock/600x600/img-49.jpg"
                                                                class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Mivy
                                                                App</a>
                                                            <span class="fw-semibold d-block fs-7 text-gray-400">Jane
                                                                Cooper</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-gray-600">$32,400</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="pe-12 text-end">
                                                    <span class="badge fs-7 badge-light-primary px-4 py-3">In
                                                        Process</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7"
                                                        data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/stock/600x600/img-40.jpg"
                                                                class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Avionica</a>
                                                            <span class="fw-semibold d-block fs-7 text-gray-400">Esther
                                                                Howard</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-gray-600">$256,910</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.4%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="pe-12 text-end">
                                                    <span class="badge fs-7 badge-light-warning px-4 py-3">On Hold</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7"
                                                        data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/stock/600x600/img-39.jpg"
                                                                class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Charto
                                                                CRM</a>
                                                            <span class="fw-semibold d-block fs-7 text-gray-400">Jenny
                                                                Wilson</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-gray-600">$8,220</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="pe-12 text-end">
                                                    <span class="badge fs-7 badge-light-primary px-4 py-3">In
                                                        Process</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7"
                                                        data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/stock/600x600/img-47.jpg"
                                                                class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">Tower
                                                                Hill</a>
                                                            <span class="fw-semibold d-block fs-7 text-gray-400">Cody
                                                                Fisher</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-gray-600">$74,000</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="pe-12 text-end">
                                                    <span
                                                        class="badge fs-7 badge-light-success px-4 py-3">Complated</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7"
                                                        data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/stock/600x600/img-48.jpg"
                                                                class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="fw-bold text-hover-primary fs-6 mb-1 text-gray-800">9
                                                                Degree</a>
                                                            <span class="fw-semibold d-block fs-7 text-gray-400">Savannah
                                                                Nguyen</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-gray-600">$183,300</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.4%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="pe-12 text-end">
                                                    <span class="badge fs-7 badge-light-primary px-4 py-3">In
                                                        Process</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7"
                                                        data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Table widget 14-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-0 mb-5">
                        <!--begin::Chart widget 31-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header mb-7 pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                                        class="btn btn-sm btn-light">PDF Report</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 31-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 24-->
                        <div class="card card-flush h-xl-100 overflow-hidden">
                            <!--begin::Header-->
                            <div class="card-header py-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Human Resources</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">Reports by states and ganders</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 24-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script>
        var KTCardsWidget17 = function() {
            // Private methods
            var initChart = function() {
                var el = document.getElementById('kt_card_widget_17_chart');

                if (!el) {
                    return;
                }

                var options = {
                    size: el.getAttribute('data-kt-size') ? parseInt(el.getAttribute('data-kt-size')) : 70,
                    lineWidth: el.getAttribute('data-kt-line') ? parseInt(el.getAttribute('data-kt-line')) : 11,
                    rotate: el.getAttribute('data-kt-rotate') ? parseInt(el.getAttribute('data-kt-rotate')) :
                        145,
                    //percent:  el.getAttribute('data-kt-percent') ,
                }

                var canvas = document.createElement('canvas');
                var span = document.createElement('span');

                if (typeof(G_vmlCanvasManager) !== 'undefined') {
                    G_vmlCanvasManager.initElement(canvas);
                }

                var ctx = canvas.getContext('2d');
                canvas.width = canvas.height = options.size;

                el.appendChild(span);
                el.appendChild(canvas);

                ctx.translate(options.size / 2, options.size / 2); // change center
                ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI); // rotate -90 deg

                //imd = ctx.getImageData(0, 0, 240, 240);
                var radius = (options.size - options.lineWidth) / 2;

                var drawCircle = function(color, lineWidth, percent) {
                    percent = Math.min(Math.max(0, percent || 1), 1);
                    ctx.beginPath();
                    ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
                    ctx.strokeStyle = color;
                    ctx.lineCap = 'round'; // butt, round or square
                    ctx.lineWidth = lineWidth
                    ctx.stroke();
                };

                // Init 

                drawCircle(KTUtil.getCssVariableValue('--bs-primary'), options.lineWidth,
                    {{ $subject_detail_pendings->count() + $subject_detail_finishes->count() }} /
                    {{ $subject_details->count() }});

                @if ($subject_detail_finishes->count())
                    drawCircle(KTUtil.getCssVariableValue('--bs-success'), options.lineWidth,
                        {{ $subject_detail_finishes->count() }} /
                        {{ $subject_details->count() }});
                @endif
            }

            // Public methods
            return {
                init: function() {
                    initChart();
                }
            }
        }();

        // Webpack support
        if (typeof module !== 'undefined') {
            module.exports = KTCardsWidget17;
        }
    </script>
@endsection
