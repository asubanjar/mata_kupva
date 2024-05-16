@extends('layouts.app')
@section('title', 'Detail Naskah')
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Detail
                        Naskah Dinas
                    </h1>
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
                            <a href="{{ url('/kearsipan') }}" class="text-muted text-hover-primary">Kearsiapan</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('/kearsipan/registrasi/naskah-dinas') }}"
                                class="text-muted text-hover-primary">Naskah Dinas</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="#">Detail</a></li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Primary button-->
                    <a href="{{ url('/kearsipan/registrasi/naskah-dinas') }}"
                        class="btn btn-sm fw-bold btn-primary">Kembali</a>
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
                <!--begin::Navbar-->
                <div class="card mb-xxl-8 mb-5">
                    <div class="card-body pb-0 pt-9">
                        <!--begin::Details-->
                        <div class="d-flex flex-sm-nowrap flex-wrap">
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start mb-2 flex-wrap">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="text-hover-primary fs-2 fw-bold me-1 text-gray-900">
                                                {{ $naskah_dinas->hal }}</div>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex fw-semibold fs-6 mb-4 flex-wrap pe-2">
                                            <div
                                                class="d-flex align-items-center text-hover-primary mb-2 me-5 text-gray-400">
                                                <i class="ki-duotone ki-dots-circle-vertical fs-4 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <div class="badge badge-light-success">{{ $naskah_dinas->nomor_naskah }}
                                                </div>
                                            </div>
                                            <div href="#"
                                                class="d-flex align-items-center text-hover-primary mb-2 me-5 text-gray-400">
                                                <i class="ki-duotone ki-dots-circle-vertical fs-4 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>{{ $naskah_dinas->urgensi->name }}
                                            </div>
                                            <div href="#"
                                                class="d-flex align-items-center text-hover-primary mb-2 text-gray-400">
                                                <i class="ki-duotone ki-dots-circle-vertical fs-4 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>{{ $naskah_dinas->sifat->name }}
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Actions-->
                                    <div class="d-flex my-4">
                                        <a href="#" class="btn btn-sm btn-secondary me-3" data-bs-toggle="modal"
                                            data-bs-target="#modal_edit_naskah_dinas">Ubah</a>
                                        <a href="#" class="btn btn-sm btn-secondary me-3"
                                            data-bs-toggle="modal">Ajukan</a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::details View-->
                <div class="card mb-xl-10 mb-5" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Detail Naskah Dinas</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row gx-10">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Pengunggah</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            <div class="badge badge-light-success">{{ $naskah_dinas->pengunggah->name }}
                                            </div>
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Lampiran</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ $naskah_dinas->jumlah_lampiran !== 0 ? $naskah_dinas->jumlah_lampiran . ' / ' . $naskah_dinas->satuanUnit->name : '-' }}
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Jenis Naskah</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9 fv-row">
                                        <span
                                            class="fw-bold fs-6 text-gray-800">{{ $naskah_dinas->jenisNaskah ? $naskah_dinas->jenisNaskah->name : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Klasifikasi Arsip</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9 d-flex align-items-center">
                                        <span
                                            class="fw-bold fs-6 me-2 text-gray-800">{{ $naskah_dinas->classification ? $naskah_dinas->classification->name : '-' }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Tanggal</label>
                                    <!--begin::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ \Carbon\Carbon::parse($naskah_dinas->tanggal_naskah)->format('d-m-Y') }}
                                        </span>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Hak Akses</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ $naskah_dinas->is_public ? 'Eksternal' : 'Internal' }}
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Penandatangan</label>
                                    <!--end::Label-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ $naskah_dinas->penandatangan
                                                ? $naskah_dinas->penandatangan->name . ' - ' . $naskah_dinas->penandatangan->position
                                                : '-' }}
                                        </span>
                                    </div>
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Posisi Persetujuan</label>
                                    <!--begin::Label-->
                                    <!--begin::Label-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ $naskah_dinas->posisiPersetujuan
                                                ? $naskah_dinas->posisiPersetujuan->name . ' - ' . $naskah_dinas->posisiPersetujuan->position
                                                : '-' }}
                                        </span>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Halaman Penandatangan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            {{ $naskah_dinas->ttd_page }}
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Tujuan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            @if ($naskah_dinas->tujuan)
                                                <ul>
                                                    @foreach ($naskah_dinas->tujuan as $tujuan)
                                                        <li>
                                                            <div class="badge badge-light-success">{{ $tujuan }}
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-10">
                                    <!--begin::Label-->
                                    <label class="col-lg-3 fw-semibold text-muted">Tembusan</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-9">
                                        <span class="fw-bold fs-6 text-gray-800">
                                            @unless (empty($naskah_dinas->tembusan))
                                                <ul>
                                                    @foreach ($naskah_dinas->tembusan as $tembusan)
                                                        <li>
                                                            <div class="badge badge-light-warning">{{ $tembusan }}</div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endunless
                                        </span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::details View-->
                <!--begin::Row-->
                <div class="row g-5 g-xxl-8">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Accordion-->
                        <div class="accordion mb-xl-9 mb-6" id="kt_accordion_1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                    <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3"
                                        aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                        Naskah Utama
                                    </button>
                                </h2>
                                <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                    aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                    <div class="accordion-body">
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <center>
                                                <iframe class="responsive-iframe"
                                                    src="{{ '/kearsipan/inbox-attachment/' . $naskah_dinas->nid }}"
                                                    height="1200" width="100%" allowfullscreen></iframe>
                                            </center>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Accordion-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xxl-8">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Accordion-->
                        <div class="accordion mb-xl-9 mb-6" id="kt_accordion_2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="kt_accordion_2_header_3">
                                    <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_body_3"
                                        aria-expanded="false" aria-controls="kt_accordion_2_body_3">
                                        Lampiran
                                    </button>
                                </h2>
                                <div id="kt_accordion_2_body_3" class="accordion-collapse collapse"
                                    aria-labelledby="kt_accordion_2_header_3" data-bs-parent="#kt_accordion_2">
                                    <div class="accordion-body">
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
                                                    <input type="text" id="custom-search-box-attachment"
                                                        class="form-control form-control-solid w-250px ps-13"
                                                        placeholder="Search Lampiran" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-table-toolbar="base">
                                                    <!--end::Filter-->
                                                    <!--begin::Add Lampiran-->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#modal_add_lampiran">Tambah Lampiran</button>
                                                    <!--end::Add Lampiran-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <table class="table-row-dashed fs-6 gy-5 table align-middle" id="attachments">
                                                <thead>
                                                    <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-400">
                                                        <th class="w-10px pe-2">
                                                            No
                                                        </th>
                                                        <th class="min-w-200px">Nama</th>
                                                        <th class="min-w-50px">Ukuran File</th>
                                                        <th class="min-w-50px">Aksi</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Accordion-->
                    </div>
                    <!--begin::Actions-->
                    <div class="d-flex my-4">
                        <a href="#" class="btn btn-sm btn-success me-3" data-bs-toggle="modal"
                            data-bs-target="#modal_edit_naskah_dinas">Ajukan</a>
                    </div>
                    <!--end::Actions-->
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Modals-->
                <!--begin::Modal - Naskah Dinas - Edit-->
                <div class="modal fade" tabindex="-1" id="modal_edit_naskah_dinas">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Ubah Naskah Dinas</h3>
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <form id="add_form" method="post"
                                action="{{ route('naskah-dinas.update', $naskah_dinas->id) }}" class="needs-validation"
                                enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="mb-1">
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-5">
                                                    <label for="exampleFormControlInput1"
                                                        class="required form-label">Pengunggah Naskah</label>
                                                    <input type="text" disabled
                                                        class="form-control form-control-solid disabled"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                        Naskah</label>
                                                    <!--begin::Select-->
                                                    <select name="jenis_naskah_code" aria-label="Jenis Naskah"
                                                        data-control="select2" data-placeholder="Jenis Naskah"
                                                        class="form-select form-select-solid">
                                                        <option value="">Pilih Jenis Naskah</option>
                                                        @foreach ($jenis_naskahs as $jenis_naskah)
                                                            <option value="{{ $jenis_naskah->code }}"
                                                                @selected(old('jenis_naskah_code', $naskah_dinas->jenis_naskah_code) == $jenis_naskah->code)>
                                                                {{ $jenis_naskah->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nomor
                                                        Naskah</label>
                                                    <input name="nomor_naskah" type="text"
                                                        class="form-control form-control-solid"
                                                        value="{{ $naskah_dinas->nomor_naskah }}"
                                                        placeholder="Nomor Naskah, contoh: T/642/DL.02.04/X/2024" />
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                        Naskah</label>
                                                    <input id="tanggalNaskah" name="tanggal_naskah"
                                                        class="form-control form-control-solid" name="tgl_naskah"
                                                        value="{{ $naskah_dinas->tanggal_naskah }}"
                                                        placeholder="Tanggal Naskah">
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Hak
                                                        Akses
                                                        Naskah</label>
                                                    <select name="is_public" aria-label="Hak Akses Naskah"
                                                        data-control="select2" data-placeholder="Hak Akses Naskah"
                                                        class="form-select form-select-solid">
                                                        <option value="false" @selected(old('is_public', $naskah_dinas->is_public) == 'false')>Internal
                                                        </option>
                                                        <option value="true" @selected(old('is_public', $naskah_dinas->is_public) == 'true')>Eksternal
                                                        </option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Input group-->
                                                <div class="row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold mb-3 text-gray-700">Lampiran</label>
                                                    <div class="col-lg-6">
                                                        <input class="form-control form-control-solid" type="number"
                                                            min="0" name="jumlah_lampiran"
                                                            placeholder="Jumlah Lampiran"
                                                            value="{{ $naskah_dinas->jumlah_lampiran }}" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!--begin::Select-->
                                                        <select name="satuan_unit_code" aria-label="Jenis Lampiran"
                                                            data-control="select2" data-placeholder="Jenis Lampiran"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected>Pilih Jenis Lampiran
                                                            </option>
                                                            @foreach ($satuan_units as $satuan_unit)
                                                                <option value="{{ $satuan_unit->code }}"
                                                                    @selected(old('satuan_unit_code', $naskah_dinas->satuan_unit_code) == $satuan_unit->code)>
                                                                    {{ $satuan_unit->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Klasifikasi
                                                        Arsip</label>
                                                    <!--begin::Select-->
                                                    <select name="classification_id" aria-label="Kode Klasifikasi"
                                                        data-control="select2" data-placeholder="Klasifikasi Arsip"
                                                        class="form-select form-select-solid">
                                                        <option value="" selected disabled>Pilih Kode Klasifikasi
                                                        </option>
                                                        @foreach ($classifications as $classification)
                                                            <option value="{{ $classification->id }}"
                                                                @selected(old('classification_id', $naskah_dinas->classification_id) == $classification->id)>
                                                                {{ $classification->code }} - {{ $classification->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tingkat
                                                        Urgensi</label>
                                                    <select name="urgensi_code" aria-label="Tingkat Urgensi"
                                                        data-control="select2" data-placeholder="Tingkat Urgensi"
                                                        class="form-select form-select-solid">
                                                        <option value="" selected disabled>Pilih Urgensi
                                                        </option>
                                                        @foreach ($urgensis as $urgensi)
                                                            <option value="{{ $urgensi->code }}"
                                                                @selected(old('urgensi_code', $naskah_dinas->urgensi_code) == $urgensi->code)>
                                                                {{ $urgensi->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Sifat
                                                        Naskah</label>
                                                    <select name="sifat_code" aria-label="Sifat Naskah"
                                                        data-control="select2" data-placeholder="Sifat Naskah"
                                                        class="form-select form-select-solid">
                                                        <option value="" selected disabled>Pilih Urgensi
                                                        </option>
                                                        @foreach ($sifats as $sifat)
                                                            <option value="{{ $sifat->code }}"
                                                                @selected(old('sifat_code', $naskah_dinas->sifat_code) == $sifat->code)>
                                                                {{ $sifat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <div class="fv-row mb-5">
                                                    <label for="exampleFormControlInput1"
                                                        class="required form-label">Perihal</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="hal" value="{{ $naskah_dinas->hal }}"
                                                        placeholder="Perihal Naskah" />
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <div class="fv-row mb-5">
                                                    <label class="form-label fs-6 fw-bold required text-gray-700">Kepada
                                                        Yth.</label>
                                                    <select name="jabatan_to_code[]" class="form-select form-select-solid"
                                                        id="jabatan_to_code" multiple="multiple" data-kt-select2="true"
                                                        data-close-on-select="false" data-placeholder="Kepada"
                                                        data-allow-clear="true">
                                                        @foreach ($receivers as $receiver)
                                                            @php
                                                                $selectedCodes = explode(',', $naskah_dinas->jabatan_to_code);
                                                                $isSelected = in_array($receiver->jabatan_code, $selectedCodes);
                                                            @endphp
                                                            <option value="{{ $receiver->jabatan_code }}"
                                                                {{ $isSelected ? 'selected' : '' }}>
                                                                {{ $receiver->position }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold text-gray-700">Tembusan
                                                        Yth.</label>
                                                    <select name="jabatan_to_code[]" class="form-select form-select-solid"
                                                        id="jabatan_cc_code" multiple="multiple" data-kt-select2="true"
                                                        data-close-on-select="false" data-placeholder="Tembusan"
                                                        data-allow-clear="true">
                                                        @foreach ($receivers as $receiver)
                                                            @php
                                                                $selectedCodes = explode(',', $naskah_dinas->jabatan_cc_code);
                                                                $isSelected = in_array($receiver->jabatan_code, $selectedCodes);
                                                            @endphp
                                                            <option value="{{ $receiver->jabatan_code }}"
                                                                {{ $isSelected ? 'selected' : '' }}>
                                                                {{ $receiver->position }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required text-gray-700">Penandatangan
                                                        Naskah</label>
                                                    <select name="signer_id" aria-label="Penandatangan Naskah"
                                                        data-control="select2" data-placeholder="Penandatangan Naskah"
                                                        class="form-select form-select-solid">
                                                        <option value="" selected disabled>Pilih Penandatangan
                                                        </option>
                                                        @foreach ($signers as $signer)
                                                            <option value="{{ $signer->id }}"
                                                                @selected(old('signer_id', $naskah_dinas->signer_id) == $signer->id)>
                                                                {{ $signer->name }} - {{ $signer->position }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <div id="jenjang" class="fv-row mb-5">
                                                    <label class="form-label fs-6 fw-bold required text-gray-700">Jenjang
                                                        Penandatangan</label>
                                                    <div class="row">
                                                        <select name="approve_people_id" aria-label="Jenjang Naskah"
                                                            data-control="select2" data-placeholder="Jenjang Naskah"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected disabled>Pilih Jenjang
                                                                Penandatangan
                                                            </option>
                                                            @foreach ($signers as $signer)
                                                                <option value="{{ $signer->id }}"
                                                                    @selected(old('approve_people_id', $naskah_dinas->approve_people_id) == $signer->id)>
                                                                    {{ $signer->name }} - {{ $signer->position }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-5">
                                                    <label class="form-label fs-6 fw-bold required text-gray-700">Halaman
                                                        Tandatangan</label>
                                                    <input name="ttd_page" class="form-control form-control-solid"
                                                        type="number" min="1" placeholder="Halaman Tandatangan"
                                                        value="{{ $naskah_dinas->ttd_page }}"
                                                        data-kt-element="hal_ttd" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jumlah
                                                        Penandatangan</label>
                                                    <input name="signer_quantity" type="number"
                                                        class="form-control form-control-solid"
                                                        placeholder="Jumlah Penandatangan"
                                                        value="{{ $naskah_dinas->signer_quantity }}" />
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <!--begin::Notes-->
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold text-gray-700">Catatan</label>
                                                    <textarea name="note" class="form-control form-control-solid" rows="2" placeholder="Catatan">{{ $naskah_dinas->note }}</textarea>
                                                </div>
                                                <!--end::Notes-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button id="submitNaskahDinas" type="submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Simpan
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm ms-2 align-middle"></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Modal - Naskah Dinas - Edit-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script src="{{ asset('assets/js/pages/registrasi-naskah/validate.js') }}"></script>

    <script>
        $(function() {
            var attachmentTable = $('#attachments').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: "{{ route('inbox-attachment.index', ['nid' => $naskah_dinas->nid, 'subject' => 'lampiran']) }}",
                columns: [{
                        data: null,
                        name: 'rownum',
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'filename',
                        name: 'filename',
                        searchable: true,
                        orderable: true,
                    },
                    {
                        data: 'filesize',
                        name: 'filesize',
                        searchable: true,
                        orderable: true,
                        render: function(data, type, row) {
                            // Convert filesize from bytes to megabytes
                            var fileSizeInMB = (row.filesize / (1024 * 1024)).toFixed(2);
                            return fileSizeInMB + ' MB';
                        },
                    },
                    {
                        data: null,
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return '<button class="delete-button btn btn-icon btn-active-light-danger w-40px h-40px me-3" data-id="' +
                                row.id +
                                '"><i class="ki-solid ki-trash fs-1"></i></button> ' +
                                '<button class="show-button btn btn-icon btn-active-light-warning w-40px h-40px me-3" data-id="' +
                                row.id +
                                '"><i class="ki-solid ki-eye fs-1"></i></button>';
                        }
                    }
                ]
            });

            //Search Attachment
            $('#custom-search-box-attachment').keyup(function() {
                attachmentTable.search($(this).val()).draw();
            });

            //Insert Attachment
            $('#add_form_lampiran').submit(function(event) {
                event.preventDefault();

                if (this.checkValidity() === false) {
                    event.stopPropagation();
                } else {
                    var formData = new FormData(this);

                    $.ajax({
                        url: $(this).attr('action'), // or your specific URL
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('#modal_add_lampiran').modal('hide');

                            attachmentTable.ajax.reload();

                            // Reset the form fields
                            $('#add_form_lampiran')[0].reset();

                            // Reset Dropzone if used
                            if (typeof Dropzone !== 'undefined' && $('#dropzone_lampiran').get(
                                    0).dropzone) {
                                $('#dropzone_lampiran').get(0).dropzone.removeAllFiles();
                            }

                            alert('Attachment added successfully');
                        },
                        error: function(xhr, status, error) {
                            alert('An error occurred');
                        }
                    });
                }
                this.classList.add('was-validated');
            });

            //Delete Attachment
            $('#attachments').on('click', '.delete-button', function() {
                var id = $(this).data('id'); // Get the ID of the record to delete

                // Confirm before delete
                if (!confirm('Are you sure you want to delete this record?')) {
                    return;
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });

                $.ajax({
                    url: '/kearsipan/inbox-attachment/' + id,
                    type: 'DELETE',
                    success: function(result) {
                        attachmentTable.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Error occurred while deleting the record.');
                    }
                });
            });

            //Show Attachment
            $('#attachments').on('click', '.show-button', function() {
                var id = $(this).data('id');

                var url = '/monitoring-pimpinan/subject-attachment/' + id + '/download';

                window.open(url, '_blank');
            });
        });
    </script>

    <script>
        $("#jenjang").on("change", function() {
            if ($(this).find("[value=\"L\"]").is(":selected") == true) {
                $("#jenjang_lainnya").show();
                $("#jenjang_atasan_langsung").hide();
                $("#jenjang_sendiri").hide();
            } else if ($(this).find("[value=\"AL\"]").is(":selected") == true) {
                $("#jenjang_atasan_langsung").show();
                $("#jenjang_lainnya").hide();
                $("#jenjang_sendiri").hide();
            } else if ($(this).find("[value=\"S\"]").is(":selected") == true) {
                $("#jenjang_sendiri").show();
                $("#jenjang_lainnya").hide();
                $("#jenjang_atasan_langsung").hide();
            } else {
                $("#jenjang_lainnya").hide();
                $("#jenjang_atasan_langsung").hide();
                $("#jenjang_sendiri").hide();
            }
        });
    </script>

    <script>
        $("#jabatan_to_code").on("select2:select select2:unselect", function(e) {
            var items = $(this).val();
            var ip = e.params.data.id;
            var tembusan = $("#jabatan_cc_code").val();

            $.each(tembusan, function(i, item) {
                $.each(items, function(k, item2) {
                    if (item == item2) {
                        items.splice(k, 1);
                        $("#jabatan_to_code").val(items).change();
                        return false;
                    }
                })
            })
        });

        $("#jabatan_cc_code").on("select2:select select2:unselect", function(e) {
            var items = $(this).val();
            var ip = e.params.data.id;
            var tujuan = $("#jabatan_to_code").val();

            $.each(tujuan, function(i, item) {
                $.each(items, function(k, item2) {
                    if (item == item2) {
                        items.splice(k, 1);
                        $("#jabatan_cc_code").val(items).change();
                        return false;
                    }
                })
            })
        });
    </script>

    <script>
        $("#tanggalNaskah").flatpickr({
            enableTime: false,
            dateFormat: "d-m-Y",
        });
    </script>
@endsection
