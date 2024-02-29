@extends('layouts.app')
@section('title', 'Detail Surat Tugas')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-1">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack w-100 flex-wrap gap-4">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3 gap-1">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Detail Surat Tugas</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo42/dist/index.html" class="text-muted text-hover-primary">Kearsipan</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet w-5px h-2px bg-gray-400"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Kotak Keluar</li>
                            <li class="breadcrumb-item">
                                <span class="bullet w-5px h-2px bg-gray-400"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Detail Surat Tugas</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-1 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <span class="badge badge-lg badge-light-info fw-bold">{{ $st->no_st }}</span>
                        </div>
                        <div>
                            <button class="btn btn-light-info" onclick="goBack()">Kembali</button>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body table-responsive py-4">
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
                                    <input type="text" class="form-control form-control-solid" name="no_nodis"
                                        value="{{ $st->no_nodis }}" readonly>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                        Nota Dinas</label>
                                    <input id="tanggalNodis" class="form-control form-control-solid" name="tgl_nodis"
                                        value="{{ $st->tgl_nodis->format('d M Y') }}" readonly>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Dasar
                                        Penugasan</label>
                                    <select class="form-select form-select-solid" name="dasar_penugasan" disabled>
                                        <option>
                                            {{ $st->dasar_penugasan }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="col-lg-6 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Perihal
                                        Nota Dinas</label>
                                    <textarea class="form-control form-control-solid text-nowrap" name="perihal_nodis" readonly>
                                    {{ $st->perihal_nodis }}
                                    </textarea>
                                </div>
                                <div class="col-lg-6 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Detail
                                        Penugasan</label>
                                    <textarea class="form-control form-control-solid text-nowrap" name="detail_penugasan" readonly>
                                        {{ $st->detail_penugasan }}
                                    </textarea>
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
                                    <input type="text" readonly class="form-control form-control-solid" name="unit_kerja"
                                        value="{{ $st->unit_kerja }}">
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                        Kegiatan</label>
                                    <select name="nama_kegiatan_id" class="form-select form-select-solid" disabled>
                                        <option>
                                            {{ $st->namaKegiatan->nama }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                        Transportasi</label>
                                    <select class="form-select form-select-solid" name="jenis_transportasi" disabled>
                                        <option>
                                            {{ $st->jenis_transportasi }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div id="anggaran" class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                        Pembiayaan Anggaran</label>
                                    <select id="pembiayaan" class="form-select form-select-solid" name="jenis_pembiayaan"
                                        disabled>
                                        <option>
                                            {{ $st->jenis_pembiayaan }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jenis
                                        Perjalanan Dinas</label>
                                    <select id="perjadin" name="jenis_perjadin_id" class="form-select form-select-solid"
                                        disabled>
                                        <option>
                                            {{ $st->jenisPerjadin->nama }}
                                        </option>
                                    </select>
                                </div>
                                <div id="kotakab" class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                        Kota / Kabupaten</label>
                                    <select class="form-select form-select-solid" name="nama_kota" disabled>
                                        <option>
                                            {{ $st->nama_kota }}
                                        </option>
                                    </select>
                                </div>
                                <div id="negara" class="col-lg-4 mb-5" style="display: none">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                        Negara</label>
                                    <input id="nama_negara" type="text" class="form-control form-control-solid"
                                        name="nama_negara" placeholder="Nama Negara">
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                        Perjalanan
                                        Dinas</label>
                                    @foreach ($st->TanggalTugas as $tgl)
                                        <div class="form-check mb-2">
                                            <input id="flexCheckCheckedDisabled" name="tanggal[]"
                                                class="form-check-input" type="checkbox" checked disabled />
                                            <div class="form-check-label" for="flexCheckDefault">
                                                {{ $tgl->tanggal->format('d F Y') }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Detail
                                        Kegiatan</label>
                                    <textarea class="form-control form-control-solid text-nowrap" name="detail_kegiatan" readonly>
                                        {{ $st->detail_kegiatan }}
                                    </textarea>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Capaian
                                        Target Kinerja</label>
                                    <textarea class="form-control form-control-solid text-nowrap" name="target_kinerja" readonly>
                                        {{ $st->target_kinerja }}
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-start flex-xxl-row">
                            <h4>Pembiayaan Anggaran</h4>
                        </div>
                        <div class="separator separator-dashed my-2"></div>

                        <div class="table-responsive py-4">
                            <table id="table-detail" class="table-rounded table-striped gy-5 fs-6 table table border">
                                <thead>
                                    <tr class="text-muted fw-bold fs-7 text-uppercase gs-0 text-start">
                                        {{-- <th class="min-w-125px">No</th> --}}
                                        <th class="min-w-125px text-center">Kode Akun</th>
                                        <th class="min-w-175px text-center">Nama Akun</th>
                                        <th class="min-w-175px text-center">Pagu Anggaran</th>
                                        <th class="min-w-175px text-center">Perkiraan Anggaran</th>
                                        <th class="min-w-175px text-center">Realisasi</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($st->pembiayaan as $pembiayaan)
                                        <td class="text-center">{{ $pembiayaan->kode_akun }}</td>
                                        <td class="text-center">{{ $pembiayaan->nama_akun }}</td>
                                        <td class="text-center">Rp.{{ $pembiayaan->pagu_anggaran }}</td>
                                        <td class="text-center">Rp.{{ $pembiayaan->perkiraan_anggaran }}</td>
                                        <td class="text-center">Rp.{{ $pembiayaan->realisasi }}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

@endsection

@section('script')
    <script type="text/javascript">
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
