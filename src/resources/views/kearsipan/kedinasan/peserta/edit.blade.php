@extends('layouts.app')
@section('title', 'Edit Daftar Peserta')
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
                            Edit Peserta</h1>
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
                            <li class="breadcrumb-item text-muted">Surat Tugas</li>
                            <li class="breadcrumb-item">
                                <span class="bullet w-5px h-2px bg-gray-400"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Daftar Peserta</li>
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
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card">
                    <div class="card-header border-1 pt-6">
                        <div class="card-title">
                            <span class="badge badge-lg badge-light-info fw-bold">{{ $peserta->nama_peserta }}</span>
                        </div>
                    </div>
                    <div class="card-body table-responsive py-4">
                        <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <div class="row gx-10">
                                    <div class="col-lg-4 mb-5">
                                        <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Status
                                            Peserta</label>
                                        <select name="status_peserta" class="form-select form-select-solid">
                                            <option value="" selected disabled>Pilih Status Peserta</option>
                                            @foreach (['Narasumber', 'Peserta'] as $item)
                                                <option value="{{ $item }}"
                                                    {{ $item == $peserta->status_peserta ? 'selected' : '' }}>
                                                    {{ $item }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Pembiayaan
                                            Anggaran</label>
                                        <select name="pembiayaan_anggaran" class="form-select form-select-solid">
                                            <option value="" selected disabled>Pilih Pembiayaan Anggaran</option>
                                            @foreach (['Biaya', 'Non Biaya'] as $item)
                                                <option value="{{ $item }}"
                                                    {{ $item == $peserta->pembiayaan_anggaran ? 'selected' : '' }}>
                                                    {{ $item }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                            Perjalanan Dinas</label>
                                        @foreach ($peserta->suratTugas->tanggalTugas()->orderBy('tanggal')->get() as $tgl)
                                            <div class="form-check mb-2">
                                                <input @if ($peserta->tanggalTugas()->where('tanggal_tugas_id', $tgl->id)->exists()) checked @endif name="tanggal[]"
                                                    class="form-check-input" type="checkbox" value="{{ $tgl->id }}"
                                                    id="flexCheckDefault" />
                                                <div class="form-check-label" for="flexCheckDefault">
                                                    {{ $tgl->tanggal->format('d F Y') }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="stid" value="{{ $peserta->suratTugas->id }}">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-light-info" onclick="goBack()">Kembali</button>

                                <button type="submit" class="btn btn-light-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
