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
                        <li class="breadcrumb-item text-muted">Permohonan ST</li>
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
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-lg-0 mb-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-8">
                                <!--begin::Form-->
                                <form id="add_form" method="post" action="{{ route('permohonan-st.store') }}"
                                    class="needs-validation" novalidate="">
                                    @csrf
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <h4>Nota Dinas</h4>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>

                                    <div class="mb-5">
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nomor
                                                    Nota Dinas</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="no_nodis" placeholder="Nomor Nota Dinas">
                                            </div>
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                    Nota Dinas</label>
                                                <input id="tanggalNodis" class="form-control form-control-solid"
                                                    name="tgl_nodis" placeholder="Tanggal Nota Dinas">
                                            </div>
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Dasar
                                                    Penugasan</label>
                                                <select class="form-select form-select-solid" name="dasar_penugasan">
                                                    <option value="" selected disabled>Pilih Dasar Penugasan
                                                    </option>
                                                    <option value="Arahan">Arahan</option>
                                                    <option value="Disposisi">Disposisi</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                    <option value="Nota Dinas">Nota Dinas</option>
                                                    <option value="Surat Tugas">Surat Tugas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="fv-row col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perihal
                                                    Nota Dinas</label>
                                                <textarea class="form-control form-control-solid" name="perihal_nodis" placeholder="Perihal Nota Dinas"></textarea>
                                            </div>
                                            <div class="fv-row col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Detail
                                                    Penugasan</label>
                                                <textarea class="form-control form-control-solid" name="detail_penugasan" placeholder="Detail Penugasan"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <h4>Permohonan Surat Tugas</h4>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>

                                    <div class="mb-5">
                                        <div class="row gx-10">
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama Unit
                                                    Kerja</label>
                                                <input type="text" readonly class="form-control form-control-solid"
                                                    name="unit_kerja" placeholder="Nama Unit Kerja"
                                                    value="{{ Auth::user()->unit_organisasi }}">
                                            </div>
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                                    Kegiatan</label>
                                                <select name="nama_kegiatan_id" aria-label="Hak Akses Naskah"
                                                    data-control="select2" class="form-select form-select-solid">
                                                    <option value="" selected disabled>Pilih Kegiatan</option>
                                                    <?php foreach ($kegiatans as $kegiatan): ?>
                                                    <option value="{{ $kegiatan->id }}">
                                                        {{ $kegiatan->nama }}</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                    Transportasi</label>
                                                <select class="form-select form-select-solid" name="jenis_transportasi">
                                                    <option value="" selected disabled>Pilih Jenis Transportasi
                                                    </option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                    <option value="Angkutan Darat">Angkutan Darat</option>
                                                    <option value="Angkutan Laut">Angkutan Laut</option>
                                                    <option value="Angkutan Udara">Angkutan Udara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div id="anggaran" class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                    Pembiayaan Anggaran</label>
                                                <select id="pembiayaan" name="jenis_pembiayaan" data-control="select2"
                                                    class="form-select form-select-solid">
                                                    <option value="" selected disabled>Pilih Jenis Pembiayaan
                                                        Anggaran
                                                    </option>
                                                    <option value="Tanpa Biaya">Tanpa Biaya</option>
                                                    <option value="Biaya PPATK">Biaya PPATK</option>
                                                    <option value="Biaya Pusdiklat">Biaya Pusdiklat</option>
                                                    <option value="Biaya Non PPATK">Biaya Non PPATK</option>
                                                </select>
                                            </div>
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                    Perjalanan Dinas</label>
                                                <select id="perjadin" name="jenis_perjadin_id"
                                                    aria-label="Hak Akses Naskah" data-control="select2"
                                                    class="form-select form-select-solid">
                                                    <option value="" selected disabled>Pilih Jenis Perjalanan Dinas
                                                    </option>
                                                    <?php foreach ($perjadins as $perjadin): ?>
                                                    <option value="{{ $perjadin->id }}">
                                                        {{ $perjadin->nama }}</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div id="kotakab" class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                                    Kota / Kabupaten</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    name="nama_kota">
                                                    <option value="" selected disabled>Pilih Kota / Kabupaten
                                                    </option>
                                                    <?php foreach ($kotakabs as $kotakab): ?>
                                                    <option value="{{ $kotakab->nama }}">
                                                        {{ $kotakab->nama }}</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div id="negara" class="fv-row col-lg-4 mb-5" style="display: none">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                                    Negara</label>
                                                <input id="nama_negara" type="text"
                                                    class="form-control form-control-solid" name="nama_negara"
                                                    placeholder="Nama Negara">
                                            </div>
                                        </div>
                                        <div id="kt_docs_repeater_basic" style="display: none">
                                            <div class="col-lg-4 mb-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    Add
                                                </a>
                                            </div>
                                            <div data-repeater-list="array_anggaran">
                                                <div data-repeater-item class="card mb-5 p-8">
                                                    <div class="row gx-10">
                                                        <div class="fv-row col-lg-3 mb-5">
                                                            <label
                                                                class="form-label fs-6 fw-bold required mb-3 text-gray-700">Kode
                                                                Akun</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="kode_akun" placeholder="Kode Akun">
                                                        </div>
                                                        <div class="fv-row col-lg-3 mb-5">
                                                            <label
                                                                class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                                                Akun</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="nama_akun" placeholder="Nama Akun">
                                                        </div>
                                                        <div class="fv-row col-lg-3 mb-5">
                                                            <label
                                                                class="form-label fs-6 fw-bold required mb-3 text-gray-700">Pagu
                                                                Anggaran</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="pagu_anggaran" placeholder="Pagu Anggaran">
                                                        </div>
                                                        <div class="col-lg-3 mb-5">
                                                            <a href="javascript:;" data-repeater-delete
                                                                class="btn btn-sm btn-light-danger mt-md-8 mt-3">
                                                                <i class="ki-duotone ki-trash fs-5"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-10">
                                                        <div class="fv-row col-lg-3 mb-5">
                                                            <label
                                                                class="form-label fs-6 fw-bold required mb-3 text-gray-700">Realisasi
                                                                s/d {{ date('M Y') }}</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="realisasi" placeholder="Realiasi">
                                                        </div>
                                                        <div class="fv-row col-lg-3 mb-5">
                                                            <label
                                                                class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perkiraan
                                                                Penggunaan Anggaran</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="perkiraan_anggaran"
                                                                placeholder="Perkiraan Penggunaan Anggaran">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="fv-row col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                    Perjalanan
                                                    Dinas</label>
                                                <input id="startDinas" class="form-control form-control-solid"
                                                    name="tgl_st_start" placeholder="Tanggal Perjalanan Dinas">
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="fv-row col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Detail
                                                    Kegiatan</label>
                                                <textarea class="form-control form-control-solid" name="detail_kegiatan" placeholder="Detail Kegiatan"></textarea>
                                            </div>
                                            <div class="fv-row col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Capaian
                                                    Target Kinerja</label>
                                                <textarea class="form-control form-control-solid" name="target_kinerja" placeholder="Capaian Target Kinerja"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button id="submitPerjadin" type="submit" class="btn btn-primary">
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
                                <!--end::Wrapper-->
                            </div>
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
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/permohonan-st/validate.js') }}"></script>

    <script type="text/javascript">
        $("#tanggalNodis").flatpickr();
        $("#startDinas").flatpickr({
            minDate: "today",
            mode: "multiple",
        });

        $("#perjadin").on("change", function() {
            if ($(this).find("[value=\"9B652C20-66F7-4F38-9DA0-3C34C9C96ED4\"]").is(":selected") == true) {
                $("#negara").show();
                $("#kotakab").hide();
            } else {
                $("#negara").hide();
                $('#nama_negara').val(null);
                $("#kotakab").show();
            }
        });

        $("#anggaran").on("change", function() {
            if ($(this).find("[value=\"Biaya PPATK\"]").is(":selected") == true) {
                $("#kt_docs_repeater_basic").show();
            } else {
                $("#kt_docs_repeater_basic").hide();
            }
        });

        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>

@endsection
