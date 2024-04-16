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
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <form id="add_form2" method="post" action="{{ route('nota-dinas.store') }}" class="needs-validation"
                    novalidate="">
                    @csrf
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
                                        <div class="mb-1">
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
                                                        <input type="text" disabled
                                                            class="form-control form-control-solid disabled"
                                                            placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                            Naskah</label>
                                                        <!--begin::Select-->
                                                        <select name="jenis_naskah" aria-label="Jenis Naskah"
                                                            data-control="select2" data-placeholder="Jenis Naskah"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected>Pilih Jenis Naskah
                                                            </option>
                                                            <?php foreach ($jenis_naskahs as $jenis_naskah): ?>
                                                            <option value="{{ $jenis_naskah->code }}">
                                                                {{ $jenis_naskah->name }}
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nomor
                                                            Naskah</label>
                                                        <input name="no_surat" type="text"
                                                            class="form-control form-control-solid"
                                                            placeholder="Nomor Naskah, contoh: T/642/DL.02.04/X/2023" />
                                                    </div>
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                            Naskah</label>
                                                        <input id="tanggalNaskah" name="tgl_naskah"
                                                            class="form-control form-control-solid" name="tgl_naskah"
                                                            placeholder="Tanggal Naskah">
                                                    </div>
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Hak
                                                            Akses
                                                            Naskah</label>
                                                        <select name="is_public" aria-label="Hak Akses Naskah"
                                                            data-control="select2" data-placeholder="Hak Akses Naskah"
                                                            class="form-select form-select-solid">
                                                            <option>
                                                                Internal
                                                            </option>
                                                            <option>
                                                                Eksternal
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
                                                                placeholder="Jumlah Lampiran" value=""
                                                                data-kt-element="lampiran" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!--begin::Select-->
                                                            <select name="kode_klasifikasi" aria-label="Kode Klasifikasi"
                                                                data-control="select2" data-placeholder="Jenis Lampiran"
                                                                class="form-select form-select-solid">
                                                                <option value="" selected>Pilih Jenis Lampiran
                                                                </option>
                                                                <?php foreach ($satuan_units as $satuan_unit): ?>
                                                                <option value="{{ $satuan_unit->code }}">
                                                                    {{ $satuan_unit->name }}
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                            <!--end::Select-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Klasifikasi
                                                            Arsip</label>
                                                        <!--begin::Select-->
                                                        <select name="kode_klasifikasi" aria-label="Kode Klasifikasi"
                                                            data-control="select2" data-placeholder="Klasifikasi Arsip"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected disabled>Pilih Kode Klasifikasi
                                                            </option>
                                                            <?php foreach ($classifications as $classification): ?>
                                                            <option value="{{ $classification->id }}">
                                                                {{ $classification->code }} - {{ $classification->name }}
                                                            </option>
                                                            <?php endforeach; ?>
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
                                                            <option value="" selected disabled>Pilih Urgensi
                                                            </option>
                                                            <?php foreach ($urgensis as $urgensi): ?>
                                                            <option value="{{ $urgensi->code }}">
                                                                {{ $urgensi->name }}
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Sifat
                                                            Naskah</label>
                                                        <select name="sifat" aria-label="Sifat Naskah"
                                                            data-control="select2" data-placeholder="Sifat Naskah"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected disabled>Pilih Urgensi
                                                            </option>
                                                            <?php foreach ($sifats as $sifat): ?>
                                                            <option value="{{ $sifat->code }}">
                                                                {{ $sifat->name }}
                                                            </option>
                                                            <?php endforeach; ?>
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
                                                        <input name="perihal" type="text"
                                                            class="form-control form-control-solid"
                                                            placeholder="Perihal" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <div class="row gx-10">

                                                <!--begin::Input group-->
                                                <div class="col-lg-6 mb-4">

                                                    <!--begin::Option-->
                                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">
                                                        Naskah</label>
                                                    <!--end::Option-->
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="naskah">
                                                        <!--begin::Message-->
                                                        <div class="dz-message needsclick">
                                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                    class="path1"></span><span class="path2"></span></i>

                                                            <!--begin::Info-->
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here
                                                                    or
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
                                                <div class="col-lg-6 mb-4">
                                                    <!--begin::Option-->
                                                    <label class="form-label fs-6 fw-bold mb-3 text-gray-700">File
                                                        Pendukung</label>
                                                    <!--end::Option-->
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="lampiran">
                                                        <!--begin::Message-->
                                                        <div class="dz-message needsclick">
                                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                    class="path1"></span><span class="path2"></span></i>

                                                            <!--begin::Info-->
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bold mb-1 text-gray-900">Drop files here
                                                                    or
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
                                            <div class="fv-row mb-5">
                                                <label class="form-label fs-6 fw-bold required text-gray-700">Kepada
                                                    Yth.</label>
                                                <select name="jabatan_code_to[]" class="form-select form-select-solid"
                                                    id="jabatan_code_to" multiple="multiple" data-kt-select2="true"
                                                    data-close-on-select="false" data-placeholder="Kepada"
                                                    data-allow-clear="true">
                                                    <?php foreach ($receivers as $receiver): ?>
                                                    <option value="{{ $receiver->jabatan_code }}">
                                                        {{ $receiver->position }}
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="fv-row mb-5">
                                                <label class="form-label fs-6 fw-bold text-gray-700">Tembusan Yth.</label>
                                                <select name="jabatan_code_cc[]" class="form-select form-select-solid"
                                                    id="jabatan_code_cc" multiple="multiple" data-kt-select2="true"
                                                    data-close-on-select="false" data-placeholder="Tembusan"
                                                    data-allow-clear="true">
                                                    <?php foreach ($receivers as $receiver): ?>
                                                    <option value="{{ $receiver->jabatan_code }}">
                                                        {{ $receiver->position }}
                                                    </option>
                                                    <?php endforeach; ?>
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
                                            <div class="fv-row mb-5">
                                                <label class="form-label fs-6 fw-bold required text-gray-700">Penandatangan
                                                    Naskah</label>
                                                <select name="ttd_naskah" aria-label="Penandatangan Naskah"
                                                    data-control="select2" data-placeholder="Penandatangan Naskah"
                                                    class="form-select form-select-solid">
                                                    <option value="" selected disabled>Pilih Penandatangan
                                                    </option>
                                                    <?php foreach ($signers as $signer): ?>
                                                    <option value="{{ $signer->id }}">
                                                        {{ $signer->name }} - {{ $signer->position }}
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div id="jenjang" class="fv-row mb-5">
                                                <label
                                                    class="form-label fs-6 fw-bold required text-gray-700">Jenjang</label>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <select id="jenjang" name="jenjang" aria-label="Jenjang"
                                                            data-control="select2" data-placeholder="Pilih Jenjang"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected disabled>Pilih Jenjang
                                                            </option>
                                                            <option value="AL">
                                                                Atasan Langsung
                                                            </option>
                                                            <option value="S">
                                                                Sendiri
                                                            </option>
                                                            <option value="L">
                                                                Lainnya
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div id="jenjang_atasan_langsung" class="col-lg-9 mb-5"
                                                        style="display: none">
                                                        <input type="text" disabled
                                                            class="form-control form-control-solid disabled"
                                                            placeholder="{{ Auth::user()->atasan->name }}">
                                                    </div>
                                                    <div id="jenjang_sendiri" class="col-lg-9 mb-5"
                                                        style="display: none">
                                                        <input type="text" disabled
                                                            class="form-control form-control-solid disabled"
                                                            placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div id="jenjang_lainnya" class="col-lg-9 mb-5"
                                                        style="display: none">
                                                        <select name="ttd_naskah" aria-label="Penandatangan Naskah"
                                                            data-control="select2" data-placeholder="Penandatangan Naskah"
                                                            class="form-select form-select-solid">
                                                            <option value="" selected disabled>Pilih Penandatangan
                                                            </option>
                                                            <?php foreach ($signers as $signer): ?>
                                                            <option value="{{ $signer->id }}">
                                                                {{ $signer->name }} - {{ $signer->position }}
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required text-gray-700">Halaman
                                                            Tandatangan</label>
                                                        <input name="hal_ttd" class="form-control form-control-solid"
                                                            type="number" min="1" name="hal_ttd"
                                                            placeholder="Halaman Tandatangan" value=""
                                                            data-kt-element="hal_ttd" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-5">
                                                        <label
                                                            class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jumlah
                                                            Penandatangan</label>
                                                        <input name="jml_ttd" type="text"
                                                            class="form-control form-control-solid"
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
                    <div>
                        <button id="submitNaskahDinas" type="submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Simpan
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm ms-2 align-middle"></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/registrasi-naskah/validate.js') }}"></script>

    <script>
        $("#jabatan_code_to").on("select2:select select2:unselect", function(e) {
            var items = $(this).val();
            var ip = e.params.data.id;
            var tembusan = $("#jabatan_code_cc").val();

            $.each(tembusan, function(i, item) {
                $.each(items, function(k, item2) {
                    if (item == item2) {
                        items.splice(k, 1);
                        $("#jabatan_code_to").val(items).change();
                        return false;
                    }
                })
            })
        });

        $("#jabatan_code_cc").on("select2:select select2:unselect", function(e) {
            var items = $(this).val();
            var ip = e.params.data.id;
            var tujuan = $("#jabatan_code_to").val();

            $.each(tujuan, function(i, item) {
                $.each(items, function(k, item2) {
                    if (item == item2) {
                        items.splice(k, 1);
                        $("#jabatan_code_cc").val(items).change();
                        return false;
                    }
                })
            })
        });
    </script>

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

@endsection
