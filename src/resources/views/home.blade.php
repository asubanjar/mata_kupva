@extends('layouts.app')
@section('title', 'Utama')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Theme mode setup on page load-->
            <!--end::Theme mode setup on page load-->
            <!--begin::App-->
            <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
                <!--begin::Page-->
                <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                    <!--begin::Navbar-->
                    <div class="app-container container-fluid">
                        <div class="card mb-xxl-8 mb-5">
                            <div class="card-body pb-0 pt-9">
                                <!--begin::Details-->
                                <div class="d-flex flex-sm-nowrap flex-wrap">
                                    <!--begin: Pic-->
                                    <div class="mb-4 me-7">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image" />
                                            <div
                                                class="position-absolute translate-middle start-100 bg-success rounded-circle border-body h-20px w-20px bottom-0 mb-6 border border-4">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start mb-2 flex-wrap">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <a href="#"
                                                        class="text-hover-primary fs-2 fw-bold me-1 text-gray-900">{{ Auth::user()->name }}</a>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex fw-semibold fs-6 mb-4 flex-wrap pe-2">
                                                    <div
                                                        class="d-flex align-items-center text-hover-primary mb-2 me-5 text-gray-400">
                                                        <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>{{ Auth::user()->position }}
                                                    </div>
                                                    <div href="#"
                                                        class="d-flex align-items-center text-hover-primary mb-2 me-5 text-gray-400">
                                                        <i class="ki-duotone ki-whatsapp fs-4 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>+{{ Auth::user()->phone }}
                                                    </div>
                                                    <div href="#"
                                                        class="d-flex align-items-center text-hover-primary mb-2 text-gray-400">
                                                        <i class="ki-duotone ki-sms fs-4 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>{{ Auth::user()->email }}
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">
                                                <a href="#" class="btn btn-sm btn-primary me-2"
                                                    id="kt_user_follow_button">
                                                    <i class="ki-duotone ki-check fs-3 d-none"></i>
                                                    <!--begin::Indicator label-->
                                                    <span class="indicator-label">Ubah Profil</span>
                                                    <!--end::Indicator label-->
                                                    <!--begin::Indicator progress-->
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                                    <!--end::Indicator progress-->
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="me-0">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">
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
                                                            <a href="#" class="menu-link flex-stack px-3">Create
                                                                Payment
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
                                                                                type="checkbox" value="1"
                                                                                checked="checked" name="notifications" />
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
                                        <!--end::Title-->
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                                <!--begin::Stats-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="4500">0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Naskah Dinas</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="80">0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Projects</div>
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
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="60" data-kt-countup-prefix="%">0
                                                            </div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Progress-->
                                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                                <div class="d-flex justify-content-between w-100 mb-2 mt-auto">
                                                    <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                                    <span class="fw-bold fs-6">50%</span>
                                                </div>
                                                <div class="h-5px w-100 bg-light mx-3 mb-3">
                                                    <div class="bg-success h-5px rounded" role="progressbar"
                                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <!--end::Progress-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Navs-->
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x fs-5 fw-bold border-transparent">
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-active-primary active me-10 ms-0 py-5"
                                            href="#">Overview</a>
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--begin::Navs-->
                            </div>
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::Wrapper-->
                    <div class="app-container container-fluid d-flex">

                        <!--begin::Main-->
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                            <!--begin::Content wrapper-->
                            <div class="d-flex flex-column flex-column-fluid">
                                <!--begin::Content-->
                                <div id="kt_app_content" class="app-content">
                                    <!--begin::Row-->
                                    <div class="row g-5 g-xxl-10">
                                        <!--begin::Col-->
                                        <div class="col-xxl-4 mb-xxl-10">
                                            <!--begin::Card Widget 22-->
                                            <div class="card card-reset mb-xl-10 mb-5">
                                                <!--begin::Body-->
                                                <div class="card-body p-0">
                                                    <!--begin::Row-->
                                                    <div class="row g-5 g-lg-9">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href="{{ url('/kearsipan/registrasi/nota-dinas/create') }}"
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="fa fa-pen-clip fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Nota Dinas
                                                                        </div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href='../../demo43/dist/apps/ecommerce/catalog/products.html'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="ki-outline ki-element-11 fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Monitoring</div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href="{{ url('/kearsipan/kotak-masuk/disposisi') }}"
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="fa fa-arrow-down-wide-short fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Disposisi</div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href='../../demo43/dist/apps/file-manager/folders.html'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="ki-outline ki-rocket fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">File Manager
                                                                        </div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href="{{ url('/kearsipan/kotak-keluar/naskah-dinas') }}"
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="fa fa-paper-plane fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Pencatatan Naskah
                                                                            Dinas
                                                                        </div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Card-->
                                                            <div class="card card-shadow">
                                                                <!--begin::Body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Items-->
                                                                    <a href='../../demo43/dist/apps/support-center/overview.html'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="ki-outline ki-rescue fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Help Center
                                                                        </div>
                                                                        <!--end::Desc-->
                                                                    </a>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card Widget 22-->
                                            <!--begin::Card Widget 23-->
                                            <div class="card border-0">
                                                <!--begin::Body-->
                                                <div class="card-body py-12">
                                                    <!--begin::Action-->
                                                    <button class="btn btn-light-warning fs-3 fw-bolder w-100 mb-13 py-5"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_app">Campaign
                                                        Glossary</button>
                                                    <!--end::Action-->
                                                    <!--begin::Block-->
                                                    <div
                                                        class="d-flex border-primary bg-light-primary mb-6 rounded border border-dashed p-5">
                                                        <!--begin::Icon-->
                                                        <span class="me-5">
                                                            <i class="ki-outline ki-information fs-3x text-primary"></i>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Section-->
                                                        <div class="me-2">
                                                            <a href="#"
                                                                class="text-hover-primary fs-4 fw-bolder text-gray-800">Important
                                                                Note!</a>
                                                            <span class="fw-semibold d-block fs-5 text-gray-700">Please
                                                                add tracking code to your website to optimize your
                                                                campaigns</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Block-->
                                                    <!--begin::Action-->
                                                    <button class="btn btn-primary fs-3 fw-bolder w-100 py-5"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add
                                                        Conversion
                                                        Tracking</button>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card Widget 23-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xxl-8 mb-xl-10 mb-5">
                                            <!--begin::Engage widget 14-->
                                            <div class="card mb-xl-11 mb-5 border-0" data-bs-theme="light"
                                                style="background-color: #844AFF">
                                                <!--begin::Body-->
                                                <div class="card-body py-0">
                                                    <!--begin::Row-->
                                                    <div class="row align-items-center lh-1 h-100">
                                                        <!--begin::Col-->
                                                        <div class="col-7 ps-xl-10 pe-5">
                                                            <!--begin::Title-->
                                                            <div class="fs-2qx fw-bold mb-6 text-white">Pengumuman</div>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <span
                                                                class="fw-semibold fs-6 d-block mb-10 text-white opacity-75">Terdapat
                                                                penambahan fitur multiple sign yang dapat digunakan untuk
                                                                lebih dari satu penandatangan dalam satu naskah</span>
                                                            <!--end::Text-->
                                                            <!--begin::Action-->
                                                            <div class="d-flex d-grid gap-2">
                                                                <a href="#" class="btn btn-success me-lg-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_upgrade_plan">Unduh
                                                                    Pengumuman</a>
                                                                <a href="#" class="btn text-white"
                                                                    style="background: rgba(255, 255, 255, 0.2)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_create_app">Konsultasi</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-5 pt-lg-15 pt-5">
                                                            <!--begin::Illustration-->
                                                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end bgi-position-y-bottom h-325px"
                                                                style="background-image:url('assets/media/svg/illustrations/easy/8.svg">
                                                            </div>
                                                            <!--end::Illustration-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Engage widget 14-->
                                            <!--begin::Table widget 17-->
                                            <div class="card card-flush border-0">
                                                <!--begin::Header-->
                                                <div class="card-header pt-7">
                                                    <!--begin::Title-->
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fs-3 fw-bold text-gray-800">Berita &
                                                            Informasi</span>
                                                        <span class="fw-semibold fs-6 mt-1 text-gray-400">Selalu dapatkan
                                                            informasi terbaru terkait aplikasi DINAMIS</span>
                                                    </h3>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                                        <div data-kt-daterangepicker="true"
                                                            data-kt-daterangepicker-opens="left"
                                                            class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                            <!--begin::Display range-->
                                                            <div class="fw-bold text-gray-600">Loading date range...
                                                            </div>
                                                            <!--end::Display range-->
                                                            <i class="ki-outline ki-calendar-8 fs-1 me-0 ms-2"></i>
                                                        </div>
                                                        <!--end::Daterangepicker-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-6">
                                                    <!--begin::Table container-->
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <table class="table-row-dashed gs-0 gy-6 my-0 table align-middle">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <tr class="fs-7 fw-bold text-gray-400">
                                                                    <th class="w-150px p-0 pb-3 text-start">STATUS
                                                                    </th>
                                                                    <th class="min-w-100px p-0 pb-3 text-start">NAME
                                                                    </th>
                                                                    <th class="min-w-100px p-0 pb-3 text-center">
                                                                        BUDGET</th>
                                                                    <th class="w-250px p-0 pb-3 text-start">
                                                                        OPTIMIZATION SCORE</th>
                                                                    <th class="w-50px p-0 pb-3 text-end">ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span
                                                                            class="badge fs-7 badge-light-success px-4 py-3">Live
                                                                            Now</span>
                                                                    </td>
                                                                    <td class="ps-0 text-start">
                                                                        <span
                                                                            class="fw-bold fs-6 d-block text-gray-800">Marni
                                                                            Schlanger</span>
                                                                        <span class="fw-semibold fs-7 text-gray-400">20
                                                                            Jul 2021</span>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="fw-bold fs-6 text-gray-800">$15</span>
                                                                        <span
                                                                            class="fw-bold fs-7 d-block text-gray-400">Daily</span>
                                                                    </td>
                                                                    <td class="pe-20 ps-0">
                                                                        <div class="progress bg-light-primary rounded">
                                                                            <div class="progress-bar bg-primary m-0 rounded"
                                                                                role="progressbar"
                                                                                style="height: 12px;width: 120px"
                                                                                aria-valuenow="120" aria-valuemin="0"
                                                                                aria-valuemax="120px"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                            <i
                                                                                class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span
                                                                            class="badge fs-7 badge-light-primary px-4 py-3">Reviewing</span>
                                                                    </td>
                                                                    <td class="ps-0 text-start">
                                                                        <span
                                                                            class="fw-bold fs-6 d-block text-gray-800">Addison
                                                                            Smart</span>
                                                                        <span class="fw-semibold fs-7 text-gray-400">19
                                                                            Jul 2021</span>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="fw-bold fs-6 text-gray-800">$10</span>
                                                                        <span
                                                                            class="fw-bold fs-7 d-block text-gray-400">Daily</span>
                                                                    </td>
                                                                    <td class="pe-20 ps-0">
                                                                        <div class="progress bg-light-primary rounded">
                                                                            <div class="progress-bar bg-primary m-0 rounded"
                                                                                role="progressbar"
                                                                                style="height: 12px;width: 10px"
                                                                                aria-valuenow="10" aria-valuemin="0"
                                                                                aria-valuemax="10px"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                            <i
                                                                                class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span
                                                                            class="badge fs-7 badge-light-warning px-4 py-3">Paused</span>
                                                                    </td>
                                                                    <td class="ps-0 text-start">
                                                                        <span
                                                                            class="fw-bold fs-6 d-block text-gray-800">Paul
                                                                            Melone</span>
                                                                        <span class="fw-semibold fs-7 text-gray-400">21
                                                                            Jul 2021</span>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="fw-bold fs-6 text-gray-800">$3</span>
                                                                        <span
                                                                            class="fw-bold fs-7 d-block text-gray-400">Daily</span>
                                                                    </td>
                                                                    <td class="pe-20 ps-0">
                                                                        <div class="progress bg-light-primary rounded">
                                                                            <div class="progress-bar bg-primary m-0 rounded"
                                                                                role="progressbar"
                                                                                style="height: 12px;width: 60px"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="60px"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                            <i
                                                                                class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span
                                                                            class="badge fs-7 badge-light-success px-4 py-3">Live
                                                                            Now</span>
                                                                    </td>
                                                                    <td class="ps-0 text-start">
                                                                        <span
                                                                            class="fw-bold fs-6 d-block text-gray-800">Marni
                                                                            Schlanger</span>
                                                                        <span class="fw-semibold fs-7 text-gray-400">23
                                                                            Jul 2021</span>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="fw-bold fs-6 text-gray-800">$23</span>
                                                                        <span
                                                                            class="fw-bold fs-7 d-block text-gray-400">Daily</span>
                                                                    </td>
                                                                    <td class="pe-20 ps-0">
                                                                        <div class="progress bg-light-primary rounded">
                                                                            <div class="progress-bar bg-primary m-0 rounded"
                                                                                role="progressbar"
                                                                                style="height: 12px;width: 160px"
                                                                                aria-valuenow="160" aria-valuemin="0"
                                                                                aria-valuemax="160px"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                            <i
                                                                                class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed mb-n4 border-gray-200">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::Pagination-->
                                                    <div class="d-flex flex-stack flex-wrap pt-10">
                                                        <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of
                                                            50 entries</div>
                                                        <!--begin::Pages-->
                                                        <ul class="pagination">
                                                            <li class="page-item previous">
                                                                <a href="#" class="page-link">
                                                                    <i class="previous"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">4</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">5</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">6</a>
                                                            </li>
                                                            <li class="page-item next">
                                                                <a href="#" class="page-link">
                                                                    <i class="next"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Pages-->
                                                    </div>
                                                    <!--end::Pagination-->
                                                </div>
                                                <!--end: Card Body-->
                                            </div>
                                            <!--end::Table widget 17-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Engage widget 13-->
                                    <div class="card card-flush">
                                        <!--begin::Header-->
                                        <div class="card-header mb-2 pt-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Time Series</span>
                                                <span class="fw-semibold fs-6 mt-1 text-gray-400">Let’s add some
                                                    useful info here</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                                    class="btn btn-sm btn-light">Help</a>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Select-->
                                            <select class="form-select fs-4 mb-7 py-5 ps-7 text-gray-600"
                                                data-control="select2" data-placeholder="Dropdown Fixed">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                            </select>
                                            <!--end::Select-->
                                            <!--begin::Illustration-->
                                            <img class="h-250px theme-light-show mb-8"
                                                src="assets/media/illustrations/sigma-1/21.png" alt="" />
                                            <img class="h-250px theme-dark-show mb-8"
                                                src="assets/media/illustrations/sigma-1/21-dark.png" alt="" />
                                            <!--end::Illustration-->
                                            <!--begin::Text-->
                                            <h1 class="fw-semibold mb-lg-12 text-gray-600">We are not able to generate
                                                chart of campaigns
                                                <br />at the moment. Please try later.
                                            </h1>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage widget 13-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Content wrapper-->
                        </div>
                        <!--end:::Main-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::App-->
            <!--begin::Drawers-->
            <!--begin::Activities drawer-->
            <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
                data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
                <div class="card rounded-0 border-0 shadow-none">
                    <!--begin::Header-->
                    <div class="card-header" id="kt_activities_header">
                        <h3 class="card-title fw-bold text-dark">Activity Logs</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                                id="kt_activities_close">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body position-relative" id="kt_activities_body">
                        <!--begin::Content-->
                        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5"
                            data-kt-scroll="true" data-kt-scroll-height="auto"
                            data-kt-scroll-wrappers="#kt_activities_body"
                            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                            data-kt-scroll-offset="5px">
                            <!--begin::Timeline items-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus
                                                Mobile App” project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Added at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top"
                                                    title="Nina Nilson">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div
                                                class="d-flex align-items-center min-w-750px mb-5 rounded border border-dashed border-gray-300 px-7 py-3">
                                                <!--begin::Title-->
                                                <a href="../../demo43/dist/apps/projects/project.html"
                                                    class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                                    with customer</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light text-muted">Application Design</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div
                                                    class="symbol-group symbol-hover flex-grow-1 min-w-100px flex-nowrap pe-2">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div
                                                            class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                            A</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px pe-2">
                                                    <span class="badge badge-light-primary">In Progress</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="../../demo43/dist/apps/projects/project.html"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div
                                                class="d-flex align-items-center min-w-750px mb-0 rounded border border-dashed border-gray-300 px-7 py-3">
                                                <!--begin::Title-->
                                                <a href="../../demo43/dist/apps/projects/project.html"
                                                    class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project
                                                    Delivery Preparation</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px">
                                                    <span class="badge badge-light text-muted">CRM System
                                                        Development</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover flex-grow-1 min-w-100px flex-nowrap">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div
                                                            class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                            B</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px">
                                                    <span class="badge badge-light-success">Completed</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="../../demo43/dist/apps/projects/project.html"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n2 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs
                                                that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top"
                                                    title="Alan Nilson">
                                                    <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="fs-5 fw-semibold text-hover-primary mb-2 text-gray-800">3 New
                                                Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                    <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div
                                                class="d-flex align-items-center min-w-700px rounded border border-dashed border-gray-300 p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-lg-20 pe-10">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3"
                                                        src="assets/media/svg/files/pdf.svg" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-1">
                                                        <!--begin::Desc-->
                                                        <a href="../../demo43/dist/apps/projects/project.html"
                                                            class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                            Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-lg-20 pe-10">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo43/dist/apps/projects/project.html"
                                                        class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-1">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client
                                                            UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo43/dist/apps/projects/project.html"
                                                        class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="fw-semibold ms-1">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance
                                                            Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged
                                                with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads
                                                Pro Admin Dashboard project:
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top"
                                                    title="Nina Nilson">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top"
                                                    title="Marcus Dotson">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div
                                                class="d-flex align-items-center min-w-700px rounded border border-dashed border-gray-300 p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="w-150px rounded"
                                                            src="assets/media/stock/600x400/img-29.jpg" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark rounded bg-opacity-10">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="w-150px rounded"
                                                            src="assets/media/stock/600x400/img-31.jpg" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark rounded bg-opacity-10">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="w-150px rounded"
                                                            src="assets/media/stock/600x400/img-40.jpg" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark rounded bg-opacity-10">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                                                assigned to you in Multi-platform Database Design project
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center fs-6 mt-1">
                                                    <!--begin::Info-->
                                                    <div class="text-muted fs-7 me-2">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1 mb-10">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Placed at 5:05 AM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top"
                                                    title="Robert Rich">
                                                    <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Notice-->
                                            <div
                                                class="notice d-flex bg-light-primary border-primary min-w-lg-600px flex-shrink-0 rounded border border-dashed p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-md-nowrap flex-wrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-md-0 fw-semibold mb-3">
                                                        <h4 class="fw-bold text-gray-900">Database Backup Process
                                                            Completed!</h4>
                                                        <div class="fs-6 pe-7 text-gray-700">Login into Admin Dashboard to
                                                            make sure the data integrity is OK</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Action-->
                                                    <a href="#"
                                                        class="btn btn-primary align-self-center text-nowrap px-6">Proceed</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed
                                                for Workshow Planning & Budget Estimation
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center fs-6 mt-1">
                                                <!--begin::Info-->
                                                <div class="text-muted fs-7 me-2">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline items-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer py-5 text-center" id="kt_activities_footer">
                        <a href="../../demo43/dist/pages/user-profile/activity.html"
                            class="btn btn-bg-body text-primary">View All Activities
                            <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--end::Activities drawer-->
            <!--begin::Chat drawer-->
            <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
                data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
                <!--begin::Messenger-->
                <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
                    <!--begin::Card header-->
                    <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                        <!--begin::Title-->
                        <div class="card-title">
                            <!--begin::User-->
                            <div class="d-flex justify-content-center flex-column me-3">
                                <a href="#"
                                    class="fs-4 fw-bold text-hover-primary lh-1 mb-2 me-1 text-gray-900">Brian Cox</a>
                                <!--begin::Info-->
                                <div class="lh-1 mb-0">
                                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                    <span class="fs-7 fw-semibold text-muted">Active</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-dots-square fs-2"></i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">Contacts</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_users_search">Add Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                title="Specify a contact email to send an invitation">
                                                <i class="ki-outline ki-information fs-7"></i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Groups</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">Create Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">Invite Members</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item my-1 px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                            </div>
                            <!--end::Menu-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                                <i class="ki-outline ki-cross-square fs-2"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <!--begin::Messages-->
                        <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary me-1 text-gray-900">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
                                        data-kt-element="message-text">How likely are you to recommend our company to your
                                        friends and family ?</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary ms-1 text-gray-900">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-primary text-dark fw-semibold mw-lg-400px rounded p-5 text-end"
                                        data-kt-element="message-text">Hey there, we’re just writing to let you know that
                                        you’ve been subscribed to a repository on GitHub.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary me-1 text-gray-900">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">1 Hour</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
                                        data-kt-element="message-text">Ok, Understood!</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">2 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary ms-1 text-gray-900">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-primary text-dark fw-semibold mw-lg-400px rounded p-5 text-end"
                                        data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                        requests!</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary me-1 text-gray-900">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">3 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
                                        data-kt-element="message-text">You can unwatch this repository immediately by
                                        clicking here:
                                        <a href="https://keenthemes.com">Keenthemes.com</a>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">4 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary ms-1 text-gray-900">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-primary text-dark fw-semibold mw-lg-400px rounded p-5 text-end"
                                        data-kt-element="message-text">Most purchased Business courses during this sale!
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary me-1 text-gray-900">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">5 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
                                        data-kt-element="message-text">Company BBQ to celebrate the last quater
                                        achievements and goals. Food and drinks provided</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(template for out)-->
                            <div class="d-flex justify-content-end d-none mb-10" data-kt-element="template-out">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary ms-1 text-gray-900">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-primary text-dark fw-semibold mw-lg-400px rounded p-5 text-end"
                                        data-kt-element="message-text"></div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for out)-->
                            <!--begin::Message(template for in)-->
                            <div class="d-flex justify-content-start d-none mb-10" data-kt-element="template-in">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-hover-primary me-1 text-gray-900">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
                                        data-kt-element="message-text">Right before vacation season we have the next Big
                                        Deal for you.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for in)-->
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                        <!--begin::Input-->
                        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                            placeholder="Type a message"></textarea>
                        <!--end::Input-->
                        <!--begin:Toolbar-->
                        <div class="d-flex flex-stack">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="Coming soon">
                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="Coming soon">
                                    <i class="ki-outline ki-cloud-add fs-3"></i>
                                </button>
                            </div>
                            <!--end::Actions-->
                            <!--begin::Send-->
                            <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                            <!--end::Send-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Messenger-->
            </div>
            <!--end::Chat drawer-->
            <!--begin::Chat drawer-->
            <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
                data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
                data-kt-drawer-close="#kt_drawer_shopping_cart_close">
                <!--begin::Messenger-->
                <div class="card card-flush w-100 rounded-0">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <h3 class="card-title fw-bold text-gray-900">Shopping Cart</h3>
                        <!--end::Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">Iblender</a>
                                    <span class="fw-semibold d-block text-gray-400">The best kitchen gadget in 2022</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 350</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">5</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">SmartCleaner</a>
                                    <span class="fw-semibold d-block text-gray-400">Smart tool for cooking</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 650</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">4</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">CameraMaxr</a>
                                    <span class="fw-semibold d-block text-gray-400">Professional camera for edge</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 150</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">3</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">$D Printer</a>
                                    <span class="fw-semibold d-block text-gray-400">Manfactoring unique objekts</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 1450</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">7</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">MotionWire</a>
                                    <span class="fw-semibold d-block text-gray-400">Perfect animation tool</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 650</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">7</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">Samsung</a>
                                    <span class="fw-semibold d-block text-gray-400">Profile info,Timeline etc</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 720</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">6</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-3">
                                <!--begin::Section-->
                                <div class="mb-3">
                                    <a href="../../demo43/dist/apps/ecommerce/sales/details.html"
                                        class="text-hover-primary fs-4 fw-bold text-gray-800">$D Printer</a>
                                    <span class="fw-semibold d-block text-gray-400">Manfactoring unique objekts</span>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold fs-5 text-gray-800">$ 430</span>
                                    <span class="text-muted mx-2">for</span>
                                    <span class="fw-bold fs-5 me-3 text-gray-800">8</span>
                                    <a href="#"
                                        class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                        <i class="ki-outline ki-minus fs-4"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                        <i class="ki-outline ki-plus fs-4"></i>
                                    </a>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Pic-->
                            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
                            </div>
                            <!--end::Pic-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <span class="fw-bold text-gray-600">Total</span>
                            <span class="fw-bolder fs-5 text-gray-800">$ 1840.00</span>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <span class="fw-bold text-gray-600">Sub total</span>
                            <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                        </div>
                        <!--end::Item-->
                        <!--end::Action-->
                        <div class="d-flex justify-content-end mt-9">
                            <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Messenger-->
            </div>
            <!--end::Chat drawer-->
            <!--end::Drawers-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <i class="ki-outline ki-arrow-up"></i>
            </div>
            <!--end::Scrolltop-->
            <!--begin::Modals-->
            <!--begin::Modal - Invite Friends-->
            <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header justify-content-end border-0 pb-0">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-xl-18 pb-15 mx-5 pt-0">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">Invite a Friend</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                    <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Google Contacts Invite-->
                            <div class="btn btn-light-primary fw-bold w-100 mb-8">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />Invite Gmail Contacts
                            </div>
                            <!--end::Google Contacts Invite-->
                            <!--begin::Separator-->
                            <div class="separator d-flex flex-center mb-8">
                                <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Textarea-->
                            <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                            <!--end::Textarea-->
                            <!--begin::Users-->
                            <div class="mb-10">
                                <!--begin::Heading-->
                                <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                                <!--end::Heading-->
                                <!--begin::List-->
                                <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Emma
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Melody
                                                    Macy</a>
                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Max
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Sean
                                                    Bean</a>
                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Brian
                                                    Cox</a>
                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Mikaela
                                                    Collins</a>
                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Francis
                                                    Mitcham</a>
                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Olivia
                                                    Wild</a>
                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Neil
                                                    Owen</a>
                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Dan
                                                    Wilson</a>
                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Emma
                                                    Bold</a>
                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Ana
                                                    Crown</a>
                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Robert
                                                    Doe</a>
                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">John
                                                    Miller</a>
                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Lucy
                                                    Kunic</a>
                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Ethan
                                                    Wilder</a>
                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Neil
                                                    Owen</a>
                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="w-100px ms-2">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                                data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Notice-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">Adding Users by Team Members</label>
                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        checked="checked" />
                                    <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Invite Friend-->
            <!--begin::Modal - Create App-->
            <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Create App</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                id="kt_modal_create_app_stepper">
                                <!--begin::Aside-->
                                <div
                                    class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav ps-lg-10">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item current" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check stepper-check fs-2"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Details</h3>
                                                    <div class="stepper-desc">Name your App</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check stepper-check fs-2"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--begin::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Frameworks</h3>
                                                    <div class="stepper-desc">Define your app framework</div>
                                                </div>
                                                <!--begin::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check stepper-check fs-2"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Database</h3>
                                                    <div class="stepper-desc">Select the app database type</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check stepper-check fs-2"></i>
                                                    <span class="stepper-number">4</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Billing</h3>
                                                    <div class="stepper-desc">Provide payment details</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check stepper-check fs-2"></i>
                                                    <span class="stepper-number">5</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Completed</h3>
                                                    <div class="stepper-desc">Review and Submit</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 5-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--begin::Aside-->
                                <!--begin::Content-->
                                <div class="flex-row-fluid py-lg-5 px-lg-15">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">App Name</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="name" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                        <span class="required">Category</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Select your app category">
                                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Options-->
                                                    <div class="fv-row">
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-primary">
                                                                        <i
                                                                            class="ki-outline ki-compass fs-1 text-primary"></i>
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bold fs-6">Quick Online Courses</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure is just one SEO</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="1" />
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-danger">
                                                                        <i
                                                                            class="ki-outline ki-element-11 fs-1 text-danger"></i>
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bold fs-6">Face to Face
                                                                        Discussions</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure is just one aspect</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="2" />
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-success">
                                                                        <i
                                                                            class="ki-outline ki-timer fs-1 text-success"></i>
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bold fs-6">Full Intro Training</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure copywriting</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="3" />
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end:Options-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                        <span class="required">Select Framework</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your apps framework">
                                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i class="ki-outline ki-html fs-2x text-warning"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">HTML5</span>
                                                                <span class="fs-7 text-muted">Base Web Projec</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                checked="checked" name="framework" value="1" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="ki-outline ki-react fs-2x text-success"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">ReactJS</span>
                                                                <span class="fs-7 text-muted">Robust and flexible app
                                                                    framework</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="2" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i
                                                                        class="ki-outline ki-angular fs-2x text-danger"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Angular</span>
                                                                <span class="fs-7 text-muted">Powerful data
                                                                    mangement</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="3" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i class="ki-outline ki-vue fs-2x text-primary"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Vue</span>
                                                                <span class="fs-7 text-muted">Lightweight and responsive
                                                                    framework</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="4" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="required fs-5 fw-semibold mb-2">Database Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="dbname" placeholder="" value="master_db" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                        <span class="required">Select Database Engine</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Select your app database engine">
                                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="ki-outline ki-note text-success fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">MySQL</span>
                                                                <span class="fs-7 text-muted">Basic MySQL database</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" checked="checked" value="1" />
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i class="ki-outline ki-google text-danger fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Firebase</span>
                                                                <span class="fs-7 text-muted">Google based app data
                                                                    management</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" value="2" />
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i
                                                                        class="ki-outline ki-microsoft text-warning fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">DynamoDB</span>
                                                                <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                                    Database</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" value="3" />
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">Name On Card</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify a card holder's name">
                                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="" name="card_name" value="Max Doe" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Card
                                                        Number</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Enter card number" name="card_number"
                                                            value="4111 1111 1111 1111" />
                                                        <!--end::Input-->
                                                        <!--begin::Card logos-->
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                            <img src="assets/media/svg/card-logos/visa.svg"
                                                                alt="" class="h-25px" />
                                                            <img src="assets/media/svg/card-logos/mastercard.svg"
                                                                alt="" class="h-25px" />
                                                            <img src="assets/media/svg/card-logos/american-express.svg"
                                                                alt="" class="h-25px" />
                                                        </div>
                                                        <!--end::Card logos-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-10">
                                                    <!--begin::Col-->
                                                    <div class="col-md-8 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                            Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row fv-row">
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <select name="card_expiry_month"
                                                                    class="form-select form-select-solid"
                                                                    data-control="select2" data-hide-search="true"
                                                                    data-placeholder="Month">
                                                                    <option></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <select name="card_expiry_year"
                                                                    class="form-select form-select-solid"
                                                                    data-control="select2" data-hide-search="true"
                                                                    data-placeholder="Year">
                                                                    <option></option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                    <option value="2032">2032</option>
                                                                    <option value="2033">2033</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-4 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">CVV</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                                title="Enter a card CVV code">
                                                                <i
                                                                    class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                                            </span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input wrapper-->
                                                        <div class="position-relative">
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-solid" minlength="3"
                                                                maxlength="4" placeholder="CVV" name="card_cvv" />
                                                            <!--end::Input-->
                                                            <!--begin::CVV icon-->
                                                            <div
                                                                class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                <i class="ki-outline ki-credit-cart fs-2hx"></i>
                                                            </div>
                                                            <!--end::CVV icon-->
                                                        </div>
                                                        <!--end::Input wrapper-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="fs-6 fw-semibold form-label">Save Card for further
                                                            billing?</label>
                                                        <div class="fs-7 fw-semibold text-muted">If you need more info,
                                                            please check budget planning</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            checked="checked" />
                                                        <span class="form-check-label fw-semibold text-muted">Save
                                                            Card</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100 text-center">
                                                <!--begin::Heading-->
                                                <h1 class="fw-bold text-dark mb-3">Release!</h1>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your
                                                    project.</div>
                                                <!--end::Description-->
                                                <!--begin::Illustration-->
                                                <div class="py-15 px-4 text-center">
                                                    <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                        class="mw-100 mh-300px" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                        </div>
                                        <!--end::Step 5-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div class="me-2">
                                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                    data-kt-stepper-action="previous">
                                                    <i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-stepper-action="submit">
                                                    <span class="indicator-label">Submit
                                                        <i class="ki-outline ki-arrow-right fs-3 me-0 ms-2"></i></span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-stepper-action="next">Continue
                                                    <i class="ki-outline ki-arrow-right fs-3 me-0 ms-1"></i></button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
            <!--begin::Modal - New Card-->
            <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add New Card</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-xl-15 mx-5 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_new_card_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Name On Card</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Specify a card holder's name">
                                            <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="card_name" value="Max Doe" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Enter card number" name="card_number"
                                            value="4111 1111 1111 1111" />
                                        <!--end::Input-->
                                        <!--begin::Card logos-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                            <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                                class="h-25px" />
                                            <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                class="h-25px" />
                                            <img src="assets/media/svg/card-logos/american-express.svg" alt=""
                                                class="h-25px" />
                                        </div>
                                        <!--end::Card logos-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-10">
                                    <!--begin::Col-->
                                    <div class="col-md-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="card_expiry_month" class="form-select form-select-solid"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Month">
                                                    <option></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="card_expiry_year" class="form-select form-select-solid"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Year">
                                                    <option></option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                    <option value="2032">2032</option>
                                                    <option value="2033">2033</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">CVV</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Enter a card CVV code">
                                                <i class="ki-outline ki-information-5 fs-6 text-gray-500"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                            <!--end::Input-->
                                            <!--begin::CVV icon-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                <i class="ki-outline ki-credit-cart fs-2hx"></i>
                                            </div>
                                            <!--end::CVV icon-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check
                                            budget planning</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            checked="checked" />
                                        <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="pt-15 text-center">
                                    <button type="reset" id="kt_modal_new_card_cancel"
                                        class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            <!--begin::Modal - Upgrade plan-->
            <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-xl">
                    <!--begin::Modal content-->
                    <div class="modal-content rounded">
                        <!--begin::Modal header-->
                        <div class="modal-header justify-content-end border-0 pb-0">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body pb-15 px-xl-20 px-5 pt-0">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">Upgrade a Plan</h1>
                                <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                    <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Plans-->
                            <div class="d-flex flex-column">
                                <!--begin::Nav group-->
                                <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                    <button
                                        class="btn btn-color-gray-400 btn-active btn-active-secondary active me-2 px-6 py-3"
                                        data-kt-plan="month">Monthly</button>
                                    <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                        data-kt-plan="annual">Annual</button>
                                </div>
                                <!--end::Nav group-->
                                <!--begin::Row-->
                                <div class="row mt-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 mb-lg-0 mb-10">
                                        <!--begin::Tabs-->
                                        <div class="nav flex-column">
                                            <!--begin::Tab link-->
                                            <label
                                                class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack active mb-6 p-6 text-start"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6 flex-shrink-0">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            checked="checked" value="startup" />
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                            Startup</div>
                                                        <div class="fw-semibold opacity-75">Best for startups</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                        data-kt-plan-price-annual="399">39</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <label
                                                class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack mb-6 p-6 text-start"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6 flex-shrink-0">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="advanced" />
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                            Advanced</div>
                                                        <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                        data-kt-plan-price-annual="3399">339</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <label
                                                class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack mb-6 p-6 text-start"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6 flex-shrink-0">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="enterprise" />
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                            Enterprise
                                                            <span
                                                                class="badge badge-light-success fs-7 ms-2 px-3 py-2">Popular</span>
                                                        </div>
                                                        <div class="fw-semibold opacity-75">Best value for 1000+ team
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                        data-kt-plan-price-annual="9999">999</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <label
                                                class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack mb-6 p-6 text-start"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6 flex-shrink-0">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="custom" />
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                            Custom</div>
                                                        <div class="fw-semibold opacity-75">Requet a custom license</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                </div>
                                                <!--end::Price-->
                                            </label>
                                            <!--end::Tab link-->
                                        </div>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Tab content-->
                                        <div class="tab-content h-100 bg-light rounded p-10">
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-semibold">Optimal for 10+ team size and new
                                                        startup</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 10
                                                            Active Users</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 30
                                                            Project Integrations</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Analytics
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
                                                            Module</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
                                                            Module</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                            Platform</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited
                                                            Cloud Space</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-semibold">Optimal for 100+ team size and
                                                        grown company</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 10
                                                            Active Users</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 30
                                                            Project Integrations</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Analytics
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Finance
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span
                                                            class="fw-semibold fs-5 flex-grow-1 text-gray-700">Accounting
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                            Platform</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited
                                                            Cloud Space</span>
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-semibold">Optimal for 1000+ team and
                                                        enterpise</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 10
                                                            Active Users</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Up to 30
                                                            Project Integrations</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Analytics
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Finance
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span
                                                            class="fw-semibold fs-5 flex-grow-1 text-gray-700">Accounting
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Network
                                                            Platform</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Unlimited
                                                            Cloud Space</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-semibold">Optimal for corporations</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Unlimited
                                                            Users</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Unlimited
                                                            Project Integrations</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Analytics
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Finance
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span
                                                            class="fw-semibold fs-5 flex-grow-1 text-gray-700">Accounting
                                                            Module</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Network
                                                            Platform</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold fs-5 flex-grow-1 text-gray-700">Unlimited
                                                            Cloud Space</span>
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Plans-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center flex-row-fluid pt-12">
                                <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Upgrade Plan</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Upgrade plan-->
            <!--begin::Modal - Users Search-->
            <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header justify-content-end border-0 pb-0">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-xl-18 pb-15 mx-5 pt-0">
                            <!--begin::Content-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">Search Users</h1>
                                <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Search-->
                            <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                                data-kt-search-min-length="2" data-kt-search-enter="enter"
                                data-kt-search-layout="inline">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                    autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden" />
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <i
                                        class="ki-outline ki-magnifier fs-2 fs-lg-1 position-absolute top-50 translate-middle-y ms-5 text-gray-500"></i>
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                        name="search" value=""
                                        placeholder="Search by username, full name or email..."
                                        data-kt-search-element="input" />
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="position-absolute top-50 translate-middle-y lh-0 d-none end-0 me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px text-muted align-middle"></span>
                                    </span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="btn btn-flush btn-active-color-primary position-absolute top-50 translate-middle-y lh-0 d-none end-0 me-5"
                                        data-kt-search-element="clear">
                                        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                                    </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Wrapper-->
                                <div class="py-5">
                                    <!--begin::Suggestions-->
                                    <div data-kt-search-element="suggestions">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                        <!--end::Heading-->
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold">
                                                    <span class="fs-6 me-2 text-gray-800">Emma Smith</span>
                                                    <span class="badge badge-light">Art Director</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold">
                                                    <span class="fs-6 me-2 text-gray-800">Melody Macy</span>
                                                    <span class="badge badge-light">Marketing Analytic</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold">
                                                    <span class="fs-6 me-2 text-gray-800">Max Smith</span>
                                                    <span class="badge badge-light">Software Enginer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold">
                                                    <span class="fs-6 me-2 text-gray-800">Sean Bean</span>
                                                    <span class="badge badge-light">Web Developer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold">
                                                    <span class="fs-6 me-2 text-gray-800">Brian Cox</span>
                                                    <span class="badge badge-light">UI/UX Designer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Suggestions-->
                                    <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="0">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='0']" value="0" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Emma
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="1">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='1']" value="1" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Melody
                                                            Macy</a>
                                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="2">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='2']" value="2" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Max
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="3">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='3']" value="3" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Sean
                                                            Bean</a>
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='4']" value="4" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Brian
                                                            Cox</a>
                                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="5">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='5']" value="5" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Mikaela
                                                            Collins</a>
                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="6">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='6']" value="6" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Francis
                                                            Mitcham</a>
                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="7">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='7']" value="7" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Olivia
                                                            Wild</a>
                                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="8">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='8']" value="8" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Neil
                                                            Owen</a>
                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="9">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='9']" value="9" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Dan
                                                            Wilson</a>
                                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="10">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='10']" value="10" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Emma
                                                            Bold</a>
                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="11">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='11']" value="11" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Ana
                                                            Crown</a>
                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="12">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='12']" value="12" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Robert
                                                            Doe</a>
                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="13">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='13']" value="13" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">John
                                                            Miller</a>
                                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="14">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='14']" value="14" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Lucy
                                                            Kunic</a>
                                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="15">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='15']" value="15" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">Ethan
                                                            Wilder</a>
                                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-bottom-dashed border-gray-300"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack bg-active-lighten rounded p-4"
                                                data-user-id="16">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='16']" value="16" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-hover-primary mb-2 text-gray-900">John
                                                            Miller</a>
                                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="w-100px ms-2">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center">
                                            <button type="reset" id="kt_modal_users_search_reset"
                                                data-bs-dismiss="modal"
                                                class="btn btn-active-light me-3">Cancel</button>
                                            <button type="submit" id="kt_modal_users_search_submit"
                                                class="btn btn-primary">Add Selected Users</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Results-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="d-none text-center">
                                        <!--begin::Message-->
                                        <div class="fw-semibold py-10">
                                            <div class="fs-3 mb-2 text-gray-600">No users found</div>
                                            <div class="text-muted fs-6">Try to search by username, full name or email...
                                            </div>
                                        </div>
                                        <!--end::Message-->
                                        <!--begin::Illustration-->
                                        <div class="px-5 text-center">
                                            <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                                class="w-100 h-200px h-sm-325px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Users Search-->
            <!--end::Modals-->
            <!--begin::Javascript-->

        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
