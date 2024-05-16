<style>
    .timeline-label:before {
        left: 150px !important;
    }
</style>

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
                                                            <i class="ki-duotone ki-file fs-3 text-success me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="156">0</div>
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
                                                            <i class="ki-duotone ki-folder-down fs-3 text-info me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="6">0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">Disposisi BTL</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <i class="ki-duotone ki-time fs-3 text-warning me-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                                                data-kt-countup-value="3">0
                                                            </div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-400">DTP/PCP</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->
                                                    <div
                                                    class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true"
                                                            data-kt-countup-value="1">0
                                                        </div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Tidak Hadir</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
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
                                                                    <a href="{{ url('/kearsipan/registrasi/naskah-dinas/create') }}"
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="far fa-edit fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Naskah Dinas
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
                                                                    <a href='/monitoring-pimpinan/dashboard'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="fas fa-tasks fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
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
                                                                            class="fas fa-mouse fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Persetujuan</div>
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
                                                                    <a href='/kearsipan/registrasi/permohonan-st/create'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="fas fa-subway fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Surat Tugas
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
                                                                        <div class="fw-bold fs-5 pt-4">Kotak Keluar
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
                                                                    <a href='https://layananbantuan.ppatk.go.id'
                                                                        class="btn btn-active-color-primary w-100 px-7 py-6 text-start">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="ki-outline ki-rescue fs-2x fs-lg-2hx ms-n1 text-gray-500"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Desc-->
                                                                        <div class="fw-bold fs-5 pt-4">Bantuan
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
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xxl-8 mb-xl-10 mb-5">
                                            <!--begin::Engage widget 14-->
                                            <div class="card mb-xl-11 mb-5 border-0 bg-primary" data-bs-theme="light"
                                                >
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
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-xxl-12 col-md-4 mb-5 mb-lg-10">
                                        <!--begin::List Widget 5-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="fw-bold mb-2 text-gray-900">Beirta & Informasi</span>       
                                        </h3>
                                
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            
                                            </button>             
                                        <!--end::Menu-->
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Timeline-->
                                        <div class="timeline-label">
                                
                                            <!--begin::Item-->
                                            <div class="timeline-item">
                                                <!--begin::Label-->
                                                <div class="timeline-label fw-bold text-gray-800 fs-6" style="width: 150px">
                                                    24 Desember 2024</div>
                                                <!--end::Label-->
                                
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                
                                                <!--begin::Content-->
                                                <div class="timeline-content d-flex">
                                                    <span class="fw-bold text-gray-800 ps-3">Sehubungan dengan telah 
                                                        ditetapkannya Peraturan tentang Klasifikasi Arsip dan 
                                                        Peraturan tentang Pelimpahan Wewenang Penandatanganan 
                                                        Naskah Dinas di lingkungan PPATK, file peraturan tersebut 
                                                        dapat diunduh pada tautan berikut</span>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->
                                            
                                            <!--begin::Item-->
                                            <div class="timeline-item">
                                                <!--begin::Label-->
                                                <div class="timeline-label fw-bold text-gray-800 fs-6" style="width: 150px">
                                                    5 Mei 2024</div>
                                                <!--end::Label-->
                                
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                
                                                <!--begin::Content-->
                                                <div class="timeline-content d-flex">
                                                    <span class="fw-bold text-gray-800 ps-3">Pelimpahan Wewenang Pendatanganan Naskah Dinas di Lingkungan Pusat Pelaporan dan Analisis Transaksi Keuangan
                                                        Klasifikasi Arsip di Lingkungan Pusat Pelaporan dan Analisis Transaksi Keuangan</span>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->                                          
                                         </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>
                                <!--end: List Widget 5-->
                                </div>
                            </div>     
                        </div>
                        <!--end:::Main-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::App-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <i class="ki-outline ki-arrow-up"></i>
            </div>
            <!--end::Scrolltop-->
            <!--begin::Javascript-->

        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
