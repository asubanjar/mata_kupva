@extends('layouts.app')
@section('title', 'Registrasi Nota Dinas')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-1">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
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
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Layout-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
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
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">
                                            <h4>Nota Dinas</h4>
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
                                                <input type="hidden" id="uniqid" name="uniqid"
                                                    value="{{ $uniqid = uniqid() }}">
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold mb-3 text-gray-700">Pengunggah
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
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                        Naskah</label>
                                                    <input id="tanggalNaskah" class="form-control form-control-solid"
                                                        name="tgl_naskah" placeholder="Tanggal Naskah">
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
                                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Sifat
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
                                        <!--begin::Row-->
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perihal</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Perihal" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        <div class="mb-8">

                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack required mb-5">
                                                <span
                                                    class="form-check-label fw-bold fs-6 ms-0 text-gray-700">Naskah</span>

                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="naskah">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>

                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-500">Unggah hanya 1
                                                            file</span>
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
                                            <div class="dropzone" id="lampiran">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>

                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-500">Unggah hanya 3
                                                            file</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
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
                </div>
                <!--end::Layout-->
                <!--begin::Layout-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
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
                                        <h4>Distribusi</h4>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-2"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-5">
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
                </div>
                <!--end::Layout-->

                <!--begin::Layout-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
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
                                        <h4>Persetujuan</h4>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-2"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-5">
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <div class="row">

                                            </div>
                                            <label class="form-label fs-6 fw-bold required text-gray-700">Penandatangan
                                                Naskah</label>
                                            <select name="ttd_naskah" aria-label="Penandatangan Naskah"
                                                data-control="select2" data-placeholder="Penandatangan Naskah"
                                                class="form-select form-select-solid">
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
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <select name="jenjang" aria-label="Jenjang" data-control="select2"
                                                        data-placeholder="Jenjang" class="form-select form-select-solid">
                                                        <option></option>
                                                        <option>
                                                            Atasan Langsung
                                                        </option>
                                                        <option>
                                                            Lainnya
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="jenjang" aria-label="Jenjang" data-control="select2"
                                                        data-placeholder="Jenjang" class="form-select form-select-solid"
                                                        disabled>
                                                        <option>Kepala Logis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-5">
                                                    <label class="form-label fs-6 fw-bold required text-gray-700">Halaman
                                                        Tandatangan</label>
                                                    <input class="form-control form-control-solid" type="number"
                                                        min="1" name="hal_ttd" placeholder="Halaman Tandatangan"
                                                        value="" data-kt-element="hal_ttd" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-5">
                                                    <label
                                                        class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jumlah
                                                        Penandatangan</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Jumlah Penandatangan" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
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
    <script>
        $("#tanggalNaskah").flatpickr({
            minDate: "today",
        });
    </script>

    <script>
        var myDropzone = new Dropzone("#naskah", {
            url: "/kearsipan/upload-naskah/{{ $uniqid }}/outbox", // Set the url for your upload script location
            paramName: "file",
            maxFiles: 1,
            maxFilesize: 10,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            addRemoveLinks: true,
            acceptedFiles: "application/pdf",
            init: function() {
                this.on("removedfile", function(file) {
                    if (confirm("Apakah anda yakin akan menghapus naskah ini?")) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            type: 'POST',
                            url: '/upload-delete/{{ $uniqid }}/inbox_attachments',
                            data: {
                                filename: file.name
                            },
                            success: function(data) {
                                console.log("File deleted successfully");
                                alert("Naskah berhasil dihapus");
                            },
                            error: function(xhr, status, error) {
                                console.error("Error deleting file: ", error);
                                alert("Kesalahan saat menghapus naskah");
                            }
                        });
                    }
                });
            }
        });
    </script>

    <script>
        var myDropzone = new Dropzone("#lampiran", {
            url: "/kearsipan/upload-naskah/{{ $uniqid }}/lampiran", // Set the url for your upload script location
            paramName: "file",
            maxFiles: 3,
            maxFilesize: 10,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            addRemoveLinks: true,
            acceptedFiles: "application/pdf, image/jpeg, image/png, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
            init: function() {
                this.on("removedfile", function(file) {
                    if (confirm("Apakah anda yakin akan menghapus naskah ini?")) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            type: 'POST',
                            url: '/upload-delete/{{ $uniqid }}/inbox_attachments',
                            data: {
                                filename: file.name
                            },
                            success: function(data) {
                                console.log("File deleted successfully");
                                alert("Naskah berhasil dihapus");
                            },
                            error: function(xhr, status, error) {
                                console.error("Error deleting file: ", error);
                                alert("Kesalahan saat menghapus naskah");
                            }
                        });
                    }
                });
            }
        });
    </script>

@endsection
