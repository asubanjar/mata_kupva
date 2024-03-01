@extends('layouts.app')
@section('title', 'Daftar Peserta')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-1">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack w-100 flex-wrap gap-4">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3 gap-1">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Tambah Data Peserta - {{ $surat_tugas->perihal_nodis }}</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo42/dist/index.html" class="text-muted text-hover-primary">Kearsipan</a>
                            </li>
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
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-table-toolbar="base">
                                <!--begin::Add DIPA-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_add">Tambah Peserta</button>
                                <!--end::Add DIPA-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body table-responsive py-4">
                        <!--begin::Table-->
                        <table id="table-user" class="table-row-dashed fs-6 gy-5 table align-middle">
                            <thead>
                                <tr class="text-muted fw-bold fs-7 text-uppercase gs-0 text-start">
                                    <th class="min-w-125px">Nama Peserta</th>
                                    <th class="min-w-100px">Unit Organisasi</th>
                                    <th class="min-w-100px">Tanggal Dinas</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($pesertas as $peserta)
                                    <tr>
                                        <td>
                                            {{ $peserta->nama_peserta }}
                                        </td>
                                        <td>
                                            {{ $peserta->unit_organisasi }}
                                        </td>
                                        <td>
                                            @foreach ($peserta->tanggalTugas()->orderBy('tanggal')->get() as $tgl)
                                                <li>
                                                    {{ $tgl->tanggal->format('d M Y') }}
                                                </li>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
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

    <!--begin::Modal - Peserta - Add-->
    <div class="modal fade" tabindex="-1" id="modal_add">
        <div class="modal-lg modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tambah Peserta</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_form" method="post"
                    action="{{ url('kearsipan/surat-tugas/' . $surat_tugas->id . '/peserta') }}" class="needs-validation"
                    novalidate="">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-5">
                            <div class="row gx-10">
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Instansi
                                        Peserta</label>
                                    <select id="instansiPeserta" name="instansi_peserta"
                                        class="form-select form-select-solid" onchange="handleChange()">
                                        <option value="" selected disabled>Pilih Instansi Peserta</option>
                                        <option value="PPATK">PPATK</option>
                                        <option value="Non PPATK">Non PPATK</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Status
                                        Peserta</label>
                                    <select name="status_peserta" class="form-select form-select-solid">
                                        <option value="" selected disabled>Pilih Status Peserta</option>
                                        <option value="Narasumber">Narasumber</option>
                                        <option value="Peserta">Peserta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <input id="nama" type="hidden" class="form-control form-control-solid"
                                    name="nama" />
                                <div id="namaPesertaContainer" class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama
                                        Peserta</label>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">NIP</label>
                                    <input id="nip" type="text" class="form-control form-control-solid"
                                        name="nip" placeholder="NIP" />
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Golongan</label>
                                    <input id="golongan" type="text" class="form-control form-control-solid"
                                        name="golongan" placeholder="Golongan" />
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Jabatan</label>
                                    <input id="jabatan" type="text" class="form-control form-control-solid"
                                        name="jabatan" placeholder="Jabatan" />
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Unit
                                        Organisasi</label>
                                    <input id="unit_organisasi" type="text" class="form-control form-control-solid"
                                        name="unit_organisasi" placeholder="Unit Organisasi" />
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Pembiayaan
                                        Anggaran</label>
                                    <select name="pembiayaan_anggaran" class="form-select form-select-solid">
                                        <option value="" selected disabled>Pilih Pembiayaan Anggaran</option>
                                        <option value="Biaya">Dengan Biaya</option>
                                        <option value="Non Biaya">Tanpa Biaya</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Tanggal
                                        Perjalanan Dinas</label>
                                    @foreach ($surat_tugas->TanggalTugas()->orderBy('tanggal')->get() as $tgl)
                                        <div class="form-check mb-2">
                                            <input name="tanggal[]" class="form-check-input" type="checkbox"
                                                value="{{ $tgl->id }}" id="flexCheckDefault" />
                                            <div class="form-check-label" for="flexCheckDefault">
                                                {{ $tgl->tanggal->format('d F Y') }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal - Peserta - Add-->
@endsection

@section('script')
    <script type="text/javascript">
        var tbl = $("#table-user").DataTable({
            "order": [
                [2, "asc"]
            ]
        });

        document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", function(e) {
            tbl.search(e.target.value).draw();
        })

        $(document).on('change', '#namaPeserta', function() {
            var instansiPeserta = $('#instansiPeserta').val();

            if (instansiPeserta === 'PPATK') {
                var id = $(this).val();
                var url = '{{ route('kearsipan.detailpeserta', ':id') }}';
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        if (response != null) {
                            $('#golongan').val(response.data.golongan);
                            $('#jabatan').val(response.data.position);
                            $('#nama').val(response.data.name);
                            $('#nip').val(response.data.nip);
                            $('#unit_organisasi').val(response.data.unit_organisasi);
                        }
                    }
                });
            }
        });

        function handleChange() {
            var instansiPesertaSelect = document.getElementById("instansiPeserta");
            var namaPesertaContainer = document.getElementById("namaPesertaContainer");

            if (instansiPesertaSelect.value === "Non PPATK") {
                namaPesertaContainer.innerHTML =
                    `<label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama Peserta</label>
                    <input type="text" name="nama_peserta" class="form-control form-control-solid" placeholder="Nama Peserta">`;

                $('#golongan').val(null);
                $('#jabatan').val(null);
                $('#nama').val(null);
                $('#nip').val(null);
                $('#unit_organisasi').val(null);
            } else {
                namaPesertaContainer.innerHTML =
                    `<label class="form-label fs-6 fw-bold required mb-3 text-gray-700">Nama Peserta</label>
                    <select id="namaPeserta" name="nama_peserta" data-dropdown-parent="#modal_add"
                        data-control="select2" class="form-select form-select-solid">
                        <option value="" selected disabled>Pilih Peserta</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
            `;
                $('#namaPeserta').select2();
            }
        }
    </script>
@endsection
