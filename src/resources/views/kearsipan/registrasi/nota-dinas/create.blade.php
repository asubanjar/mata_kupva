@extends('layouts.app')
@section('title', 'Registrasi Nota Dinas')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-1">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Registrasi
                        Naskah
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Kearsipan</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Nota Dinas</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">

                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Simpan</a>
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
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-lg-0 me-lg-7 me-xl-10 mb-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-8">
                                <!--begin::Form-->
                                <form action="" id="kt_invoice_form">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-equal fw-row text-nowrap order-xxl-2 order-1 me-4"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <input type="text" disabled
                                                class="form-control form-control-transparent fw-bold pe-5 text-gray-800"
                                                value="Nota Dinas">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center justify-content-end flex-equal fw-row order-3"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tanggal Pencatatan">
                                            <!--begin::Date-->
                                            <div class="fs-6 fw-bold text-nowrap text-gray-700">Tanggal Pencatatan</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input type="text" disabled
                                                    class="form-control form-control-transparent fw-bold pe-5"
                                                    value="<?= date('d-m-Y') ?>">
                                                <!--end::Datepicker-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-2"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-5">
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold mb-3 text-gray-700">Pengupload
                                                        Naskah</label>
                                                    <input type="text" disabled class="form-control form-control-solid"
                                                        placeholder="Nama Pengupload Naskah">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold mb-3 text-gray-700">Hak Akses
                                                        Naskah</label>
                                                    <select name="currency" aria-label="Hak Akses Naskah"
                                                        data-control="select2" data-placeholder="Hak Akses Naskah"
                                                        class="form-select form-select-solid">

                                                        <option></option>
                                                        <option>
                                                            Internal
                                                        </option>
                                                        <option>
                                                            Eksternal
                                                        </option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nomor
                                                        Naskah</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Nomor Naskah, contoh: T/642/DL.02.04/X/2023" />
                                                </div>
                                                <div class="mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perihal</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Perihal" />
                                                </div>
                                                <!--end::Input group-->

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
                                                            min="0" name="lampiran[]" placeholder="Jumlah Lampiran"
                                                            value="" data-kt-element="lampiran" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <select name="jenis_lampiran" aria-label="Jenis Lampiran"
                                                            data-control="select2" data-placeholder="Jenis Lampiran"
                                                            class="form-select form-select-solid">
                                                            <option></option>
                                                            <option>
                                                                Berkas
                                                            </option>
                                                            <option>
                                                                Lembar
                                                            </option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Kode
                                                        Klasifikasi</label>
                                                    <select name="kode_klasifikasi" aria-label="Kode Klasifikasi"
                                                        data-control="select2" data-placeholder="Kode Klasifikasi"
                                                        class="form-select form-select-solid">
                                                        <option></option>
                                                        <option>
                                                            TU - Ketataushaan Negara
                                                        </option>
                                                        <option>
                                                            RT - Kerumah Tanggaan
                                                        </option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Input group-->

                                                <div class="mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tingkat
                                                        Urgensi</label>
                                                    <select name="tingkat_urgensi" aria-label="Tingkat Urgensi"
                                                        data-control="select2" data-placeholder="Tingkat Urgensi"
                                                        class="form-select form-select-solid">
                                                        <option></option>
                                                        <option>
                                                            Biasa
                                                        </option>
                                                        <option>
                                                            Sangat Segera
                                                        </option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Sifat
                                                        Naskah</label>
                                                    <select name="sifat_naskah" aria-label="Sifat Naskah"
                                                        data-control="select2" data-placeholder="Sifat Naskah"
                                                        class="form-select form-select-solid">
                                                        <option></option>
                                                        <option>
                                                            Rahasia
                                                        </option>
                                                        <option>
                                                            Sangat Rahasia
                                                        </option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <div class="mb-5">
                                            <label class="form-label fs-6 fw-bold required text-gray-700">Kepada
                                                Yth.</label>
                                            <select class="form-select form-select-solid" multiple="multiple"
                                                data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Kepada" data-allow-clear="true">
                                                <option></option>
                                                <option>
                                                    Kepala PPATK
                                                </option>
                                                <option>
                                                    Kepala LOGIS
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                            <label class="form-label fs-6 fw-bold text-gray-700">Tembusan Yth.</label>
                                            <select class="form-select form-select-solid" multiple="multiple"
                                                data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Tembusan" data-allow-clear="true">
                                                <option></option>
                                                <option>
                                                    Kepala PPATK
                                                </option>
                                                <option>
                                                    Kepala LOGIS
                                                </option>
                                            </select>
                                        </div>

                                        <!--begin::Notes-->
                                        <div class="mb-5">
                                            <label class="form-label fs-6 fw-bold text-gray-700">Catatan</label>
                                            <textarea name="catatan" class="form-control form-control-solid" rows="2" placeholder="Catatan"></textarea>
                                        </div>
                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-lg-auto min-w-lg-300px">
                        <!--begin::Card-->
                        <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                            data-kt-sticky-offset="{default: false, lg: '200px'}"
                            data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                            data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Card body-->
                            <div class="card-body p-8">
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-bold text-gray-700">Penandatangan Naskah</label>
                                    <select name="ttd_naskah" aria-label="Penandatangan Naskah" data-control="select2"
                                        data-placeholder="Penandatangan Naskah" class="form-select form-select-solid">
                                        <option></option>
                                        <option>
                                            Kepala PPATK
                                        </option>
                                        <option>
                                            Kepala LOGIS
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-bold required text-gray-700">Jenjang</label>
                                    <select name="jenjang" aria-label="Jenjang" data-control="select2"
                                        data-placeholder="Jenjang" class="form-select form-select-solid mb-5">
                                        <option></option>
                                        <option>
                                            Atasan Langsung
                                        </option>
                                        <option>
                                            Lainnya
                                        </option>
                                    </select>
                                    <select name="jenjang" aria-label="Jenjang" data-control="select2"
                                        data-placeholder="Jenjang" class="form-select form-select-solid" disabled>
                                        <option>Kepala Logis</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-bold required text-gray-700">Halaman
                                        Tandatangan</label>
                                    <input class="form-control form-control-solid" type="number" min="1"
                                        name="hal_ttd[]" placeholder="Halaman Tandatangan" value=""
                                        data-kt-element="hal_ttd" />
                                </div>
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jumlah
                                        Penandatangan</label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Jumlah Penandatangan" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-8">

                                    <!--begin::Option-->
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack required mb-5">
                                        <span class="form-check-label fw-bold fs-6 ms-0 text-gray-700">File Naskah</span>

                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Dropzone-->
                                    <div class="dropzone">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here</h3>
                                                <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                    files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-8">

                                    <!--begin::Option-->
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                        <span class="form-check-label fw-bold fs-6 ms-0 text-gray-700">File
                                            Pendukung</span>

                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Dropzone-->
                                    <div class="dropzone">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here</h3>
                                                <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                    files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')

@endsection
