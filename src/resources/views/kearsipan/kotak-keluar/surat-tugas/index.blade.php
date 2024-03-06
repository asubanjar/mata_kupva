@extends('layouts.app')
@section('title', 'Daftar Pencatatan Surat Tugas')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-1 mt-15">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack w-100 flex-wrap gap-4">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3 gap-1">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Pencatatan Surat Tugas</h1>
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
                            <li class="breadcrumb-item text-muted">Surat Tugas</li>
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
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body table-responsive py-4">
                        <!--begin::Table-->
                        <table id="table-st" class="table-row-dashed table-striped gy-5 fs-6 table">
                            <thead>
                                <tr class="text-muted fw-bold fs-7 text-uppercase gs-0 text-start">
                                    {{-- <th class="min-w-125px">No</th> --}}
                                    <th class="min-w-125px">No. Nota Dinas</th>
                                    <th class="min-w-175px">Tanggal Nota Dinas</th>
                                    <th class="min-w-125px">Perihal</th>
                                    <th class="min-w-125px">Kegiatan</th>
                                    <th class="min-w-125px">Lokasi</th>
                                    <th class="min-w-125px">Tanggal Dinas</th>
                                    <th class="min-w-125px">Tanggal Dibuat</th>
                                    <th class="min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($surat_tugas as $st)
                                    <tr>
                                        {{-- <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $no++ }}
                                            </div>
                                        </td> --}}
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->no_nodis }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->tgl_nodis->format('d M Y') }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->perihal_nodis }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->namaKegiatan->nama }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->nama_kota }}</div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                @foreach ($st->tanggalTugas()->orderBy('tanggal')->get() as $tgl)
                                                    <li>
                                                        {{ $tgl->tanggal->format('d M Y') }}
                                                    </li>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-hover-primary mb-2 text-gray-800">
                                                {{ $st->created_at->format('d M Y H:i:s') }}
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('/kearsipan/surat-tugas/' . $st->id) }}"
                                                        data-toggle="tooltip" data-original-title="Tambah Peserta"
                                                        class="menu-link px-3">Detail</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('/kearsipan/surat-tugas/' . $st->id . '/peserta') }}"
                                                        data-toggle="tooltip" data-original-title="Tambah Peserta"
                                                        class="menu-link px-3">Tambah Peserta</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../../demo42/dist/apps/user-management/users/view.html"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3"
                                                        data-kt-users-table-filter="delete_row">Hapus</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
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

@endsection

@section('script')
    <script type="text/javascript">
        var tbl = $("#table-st").DataTable({
            "order": [
                [6, "desc"]
            ]
        });

        document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", function(e) {
            tbl.search(e.target.value).draw();
        })
    </script>
@endsection
