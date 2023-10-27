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
                        <li class="breadcrumb-item text-muted">Permohonan ST</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Primary button-->
                    <button type="submit" class="btn btn-primary">Simpan Coba</button>
                    <!--end::Primary button-->
                </div> --}}
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
                    <div class="flex-lg-row-fluid mb-lg-0 mb-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-8">
                                <!--begin::Form-->
                                <form id="add_form" method="post"
                                    action="{{ url('/kearsipan/registrasi/permohonan-st') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <h4>Nota Dinas</h4>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>

                                    <div class="mb-5">
                                        <div class="row gx-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nomor
                                                    Nota Dinas</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="no_nodis" placeholder="Nomor Nota Dinas">
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                                    Nota Dinas</label>
                                                <input type="date" class="form-control form-control-solid"
                                                    name="tgl_nodis" placeholder="Tanggal Nota Dinas">
                                            </div>
                                            <div class="col-lg-4 mb-5">
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
                                            <div class="col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perihal
                                                    Nota Dinas</label>
                                                <textarea class="form-control form-control-solid" name="perihal_nodis" placeholder="Perihal Nota Dinas"></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-5">
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
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama Unit
                                                    Kerja</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="unit_kerja" placeholder="Nama Unit Kerja">
                                            </div>
                                            <div class="col-lg-4 mb-5">
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
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                    Perjalanan Dinas</label>
                                                <select name="jenis_perjadin_id" aria-label="Hak Akses Naskah"
                                                    data-control="select2" class="form-select form-select-solid">
                                                    <option value="" selected disabled>Pilih Jenis Perjalanan Dinas
                                                    </option>
                                                    <?php foreach ($perjadins as $perjadin): ?>
                                                    <option value="{{ $perjadin->id }}">
                                                        {{ $perjadin->nama }}</option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                                    Kota / Kabupaten</label>
                                                <select name="nama_kota" aria-label="Hak Akses Naskah"
                                                    data-control="select2" data-placeholder="Nama Kota / Kabupaten"
                                                    class="form-select form-select-solid">
                                                    <option></option>
                                                    <option>Internal</option>
                                                    <option>Eksternal</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-5">
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
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                                    Pembiayaan Anggaran</label>
                                                <select name="jenis_pembiayaan" aria-label="Hak Akses Naskah"
                                                    data-control="select2" data-placeholder="Jenis Perjalanan Dinas"
                                                    class="form-select form-select-solid">
                                                    <option></option>
                                                    <option>Internal</option>
                                                    <option>Eksternal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Mulai
                                                    Perjalanan
                                                    Dinas</label>
                                                <input type="date" class="form-control form-control-solid"
                                                    name="tgl_st_start" placeholder="Tanggal Nota Dinas">
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Selesai
                                                    Perjalanan
                                                    Dinas</label>
                                                <input type="date" class="form-control form-control-solid"
                                                    name="tgl_st_end" placeholder="Tanggal Nota Dinas">
                                            </div>
                                        </div>
                                        <div class="row gx-10">
                                            <div class="col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Detail
                                                    Kegiatan</label>
                                                <textarea class="form-control form-control-solid" name="detail_kegiatan" placeholder="Detail Kegiatan"></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-5">
                                                <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Capaian
                                                    Target Kinerja</label>
                                                <textarea class="form-control form-control-solid" name="target_kinerja" placeholder="Capaian Target Kinerja"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">Coba Simpan</button>
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
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')

@endsection
