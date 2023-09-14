@extends('layouts.app')
@section('title', 'Detail Subjek')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Detail
                        Kegiatan/Subjek</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('/home') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('/monitoring-pimpinan/monitoring/subject') }}"
                                class="text-muted text-hover-primary">Daftar</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="#">Detail Subjek</a></li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Secondary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_share_earn">Share & Earn</a>
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_offer_a_deal">Start a Call</a>
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
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-xl-9 mb-6">
                    <div class="card-body pb-0 pt-9">
                        <!--begin::Details-->
                        <div class="d-flex flex-sm-nowrap mb-6 flex-wrap">
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start mb-2 flex-wrap">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="text-hover-primary fs-2 fw-bold me-3 text-gray-800">
                                                {{ $subject->name }}</div>
                                            <span class="badge badge-light-success me-auto">Dalam proses</span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex fw-semibold fs-5 mb-4 flex-wrap text-gray-400">
                                            {{ $subject->comment }}</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target">Ubah Subjek</a>
                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">
                                                        Payments</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <span class="ms-2" data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference">
                                                            <i class="ki-duotone ki-information fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications" />
                                                                    <!--end::Input-->
                                                                    <!--end::Label-->
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1 px-3">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->
                                <div class="d-flex justify-content-start flex-wrap">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bold">{{ $subject->opened->format('d/m/Y') }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Tanggal Dibuat</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bold">
                                                    {{ $subject->closed ? $subject->closed->format('d/m/Y') : '-' }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Tanggal Selesai</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-4 fw-bold" data-kt-countup="true"
                                                    data-kt-countup-value="{{ $subject_details->count() }}">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Jumlah Daftar Subjek</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Details-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <!--begin::Card widget 3-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                            style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                            <!--begin::Header-->
                            <div class="card-header mb-3 pt-5">
                                <!--begin::Icon-->
                                <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                    style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                    <i class="ki-duotone ki-call fs-2qx lh-0 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end mb-3">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span
                                        class="fs-4hx fw-bold me-6 text-white">{{ $subject_detail_pending->count() }}</span>
                                    <div class="fw-bold fs-4 text-white">
                                        <span class="d-block">Dalam Proses</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer"
                                style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                <!--begin::Progress-->
                                <div class="fw-bold py-2 text-white">
                                    <span class="fs-1 d-block">12</span>
                                    <span class="opacity-50">Melewati Batas Waktu</span>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Card widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <!--begin::Card widget 3-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                            style="background-color: #00cec9;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                            <!--begin::Header-->
                            <div class="card-header mb-3 pt-5">
                                <!--begin::Icon-->
                                <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                    style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #00cec9">
                                    <i class="ki-duotone ki-call fs-2qx lh-0 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end mb-3">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span class="fs-4hx fw-bold me-6 text-white">{{ $subject_detail_done->count() }}</span>
                                    <div class="fw-bold fs-3 text-white">
                                        <span class="d-block">Selesai</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer"
                                style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                <!--begin::Progress-->
                                <div class="fw-bold py-2 text-white">
                                    <span class="fs-1 d-block">12</span>
                                    <span class="opacity-50">Melewati Batas Waktu</span>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Card widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Chart widget 17-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performa</span>
                                    <span class="fw-semibold fs-6 pt-2 text-gray-400">Terdapat 12 unit kerja
                                        terlibat</span>
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
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">Payments
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <span class="ms-2" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference">
                                                    <i class="ki-duotone ki-information fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1 px-3">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 17-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
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
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_table .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-125px">Nama</th>
                                                <th class="min-w-125px">Deskripsi</th>
                                                <th class="min-w-125px">Target</th>
                                                <th class="min-w-125px">Selesai</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="min-w-70px text-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($subject_details as $subject_detail)
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" />
                                                        </div>
                                                    </td>
                                                    <td>{{ $subject_detail->name }}</td>
                                                    <td>{{ $subject_detail->comment }}</td>
                                                    <td>{{ $subject_detail->start->format('d/m/Y') }} s/d
                                                        {{ $subject_detail->end->format('d/m/Y') }}</td>
                                                    <td>
                                                        @if ($subject_detail->is_done === true)
                                                            <div class="badge badge-light-success">
                                                                {{ $subject_detail->finish }}</div>
                                                        @else
                                                            <div class="badge badge-light-danger">Dalam Proses</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($subject_detail->active === true)
                                                            <div class="badge badge-light-success">Aktif</div>
                                                        @else
                                                            <div class="badge badge-light-danger">Tidak Aktif</div>
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Aksi
                                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{ url('/monitoring-pimpinan/monitoring/subject-detail/' . $subject_detail->id) }}"
                                                                    data-toggle="tooltip" data-original-title="Lihat"
                                                                    class="menu-link px-3">Lihat</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-id="{{ $subject->id }}"
                                                                    data-csrf="{{ csrf_token() }}"
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
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
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
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script>
        // Class definition
        var KTChartsWidget17 = (function() {
            // Private methods
            var initChart = function() {
                // Check if amchart library is included
                if (typeof am5 === "undefined") {
                    return;
                }

                var element = document.getElementById("kt_charts_widget_17_chart");

                if (!element) {
                    return;
                }

                var root;

                var init = function() {
                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    root = am5.Root.new(element);

                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root.setThemes([am5themes_Animated.new(root)]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                    // start and end angle must be set both for chart and series
                    var chart = root.container.children.push(
                        am5percent.PieChart.new(root, {
                            startAngle: 180,
                            endAngle: 360,
                            layout: root.verticalLayout,
                            innerRadius: am5.percent(50),
                        })
                    );

                    // Create series
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                    // start and end angle must be set both for chart and series
                    var series = chart.series.push(
                        am5percent.PieSeries.new(root, {
                            startAngle: 180,
                            endAngle: 360,
                            valueField: "value",
                            categoryField: "category",
                            alignLabels: false,
                        })
                    );

                    series.labels.template.setAll({
                        fontWeight: "400",
                        fontSize: 13,
                        fill: am5.color(KTUtil.getCssVariableValue('--bs-gray-500'))
                    });

                    series.states.create("hidden", {
                        startAngle: 180,
                        endAngle: 180,
                    });

                    series.slices.template.setAll({
                        cornerRadius: 5,
                    });

                    series.ticks.template.setAll({
                        forceHidden: true,
                    });

                    // Set data
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
                    series.data.setAll([{
                            value: {{ $subject_detail_done->count() }},
                            category: "Selesai",
                            fill: am5.color(KTUtil.getCssVariableValue('--bs-success'))
                        },
                        {
                            value: {{ $subject_detail_pending->count() }},
                            category: "Dalam Proses",
                            fill: am5.color("#00ff00")
                        },
                    ]);

                    series.appear(1000, 100);
                }

                am5.ready(function() {
                    init();
                });

                // Update chart on theme mode change
                KTThemeMode.on("kt.thememode.change", function() {
                    // Destroy chart
                    root.dispose();

                    // Reinit chart
                    init();
                });
            };

            // Public methods
            return {
                init: function() {
                    initChart();
                },
            };
        })();

        // Webpack support
        if (typeof module !== "undefined") {
            module.exports = KTChartsWidget17;
        }
    </script>
@endsection
