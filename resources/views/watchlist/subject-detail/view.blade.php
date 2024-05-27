@extends('layouts.app')
@section('title', 'Detail Subjek Detail')
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
                    Subjek - Rencana Aksi</h1>
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
                        <a href="{{ url('/watchlist/subject') }}" class="text-muted text-hover-primary">Daftar</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet w-5px h-2px bg-gray-400"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a
                            href="{{ url('/watchlist/subject/' . $subject_detail->subject_id) }}"
                            class="text-muted text-hover-primary">Detail Subjek</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet w-5px h-2px bg-gray-400"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="#">Aksi</a></li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-lg-3 gap-2">
                <!--begin::Primary button-->
                <a href="{{ url('/watchlist/subject/' . $subject_detail->subject_id) }}"
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
            <div class="card mb-xl-9 mb-6">
                <div class="card-body pb-0 pt-9">
                    <!--begin::Details-->
                    <div class="d-flex flex-sm-nowrap mb-6 flex-wrap">
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1">
                            <!--begin::Head-->
                            <div class="d-flex justify-content-between align-items-start mb-2 flex-wrap">
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="text-hover-primary fs-2 fw-bold me-3 text-gray-800">
                                            {{ $subject_detail->name }}</div>
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Description-->
                                    <div class="d-flex fw-semibold fs-5 mb-4 flex-wrap text-gray-400">
                                        {{ $subject_detail->comment }}</div>
                                    <!--end::Description-->
                                    <!--begin::Parent-->
                                    <a href="{{ url('/watchlist/subject/' . $subject_detail->subject_id) }}"
                                        class="badge badge-light-success me-auto">{{ $subject_detail->subject->name }}</a>
                                    <!--end::Parent-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Actions-->
                                <div class="d-flex mb-4">
                                    <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#modal_edit_subject_detail">Ubah Subjek
                                        Detail</a>
                                    <!--begin::Menu-->
                                    <div class="me-0">
                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item my-1 px-3">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Head-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-start flex-wrap">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">{{ $subject_detail->start->format('d/m/Y') }}
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Tanggal Dimulai</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">
                                                {{ $subject_detail->end->format('d/m/Y') }}</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Target Penyelesaian</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true"
                                                data-kt-countup-value="{{ $subject_detail->actions->count() }}">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Jumlah Aksi</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true"
                                                data-kt-countup-value="{{ $diff_days }}">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Hari Tersisa</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="min-w-125px mb-3 me-6 rounded border border-dashed border-gray-300 px-4 py-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true"
                                                data-kt-countup-value="{{ $dist_jabatan_count }}">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Unit Terlibat</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Engage widget 9-->
                    <div class="card h-lg-100" @if ($subject_detail->finish) style="background:
                        linear-gradient(112.14deg, #00cec9 0%, #00b894 100%)"
                        @else
                        style="background: linear-gradient(112.14deg, #F1416C 0%, #d63031 100%)" @endif>
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Row-->
                            <div class="row align-items-center">
                                <!--begin::Col-->
                                <div class="col-sm-12 mb-sm-0 mb-5 pe-0">
                                    <!--begin::Wrapper-->
                                    <div
                                        class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                        <!--begin::Container-->
                                        <div class="mb-12">
                                            <!--begin::Title-->
                                            <div class="mb-6">
                                                <h3 class="fs-2x fw-semibold text-white">Keterangan Aksi</h3>
                                                <span style="white-space: pre-line"
                                                    class="fw-semibold text-white opacity-75">{{ $subject_detail->action_comment ? $subject_detail->action_comment : '-' }}</span>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Items-->
                                            <div class="d-flex align-items-center d-grid flex-wrap gap-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center me-xl-13 me-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <span class="symbol-label"
                                                            style="background: rgba(255, 255, 255, 0.15);">
                                                            <i class="ki-duotone ki-abstract-41 fs-4 text-white">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <div class="fs-8 text-white text-opacity-75">Tanggal Selesai
                                                        </div>
                                                        <span
                                                            class="fw-bold fs-7 d-block text-white">{{ $subject_detail->finish ? $subject_detail->finish->format('d/m/Y') : '-' }}</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Container-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <a href="#"
                                                class="btn btn-color-white bg-opacity-15 bg-hover-opacity-25 fw-semibold bg-white"
                                                data-bs-toggle="modal" data-bs-target="#modal_edit_action">Ubah
                                                Aksi</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--begin::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-5">
                                    <!--begin::Illustration-->
                                    <img src="assets/media/svg/illustrations/easy/7.svg"
                                        class="h-200px h-lg-250px my-n6" alt="" />
                                    <!--end::Illustration-->
                                </div>
                                <!--begin::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 9-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Card-->
            <div class="card">
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
                            <input type="text" data-table-filter="search"
                                class="form-control form-control-solid w-250px ps-13" placeholder="Search Aksi" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-table-toolbar="base">
                            <!--begin::Filter-->
                            <div class="w-150px me-3">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Unit Kerja" data-kt-unit-filter="unit">
                                    <option></option>
                                    <option value="all">All</option>
                                    @foreach ($dist_jabatan_names as $dist_jabatan_name)
                                    <option value="{{ $dist_jabatan_name->name }}">{{ $dist_jabatan_name->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Filter-->
                            <!--begin::Add Kegiatan/Subjek-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal_add">Tambah Aksi</button>
                            <!--end::Add Kegiatan/Subjek-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-table-select="delete_selected">Delete
                                Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table-row-dashed fs-6 gy-5 table align-middle" id="kt_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-400">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Nama</th>
                                <th class="min-w-125px">Deskripsi</th>
                                <th class="min-w-125px">Indikator Keberhasilan</th>
                                <th class="min-w-125px">Target</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Unit Kerja</th>
                                <th class="min-w-125px">Progres</th>
                                <th class="min-w-40px">Jumlah Ceklist</th>
                                <th class="min-w-70px text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @foreach ($subject_detail->actions as $action)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>{{ $action->name }}</td>
                                <td>{{ $action->comment }}</td>
                                <td>{{ $action->success_indicator }}</td>
                                <td>
                                    @if ($action->finish === null && $action->end < now()) <div
                                        class="badge badge-light-danger">
                                        {{ $action->start->format('d/m/Y') }} s/d
                                        {{ $action->end->format('d/m/Y') }}
                </div>
                @elseif ($action->finish != null || $action->end >= now())
                <div class="badge badge-light-success">
                    {{ $action->start->format('d/m/Y') }} s/d
                    {{ $action->end->format('d/m/Y') }}
                </div>
                @endif
                </td>
                <td>
                    @if ($action->finish)
                    <div class="badge badge-light-success">
                        {{ $action->finish->format('d/m/Y') }}</div>
                    @else
                    <div class="badge badge-light-danger">Dalam Proses</div>
                    @endif
                </td>
                <td>{{ $action->jabatan->name }}</td>
                <td>{{ number_format(
                                            $action->checks->whereNotNull('finish')->count()
                                                ? ($action->checks->whereNotNull('finish')->count() / $action->checks->count()) * 100
                                                : 0,
                                            2,
                                            '.',
                                            '',
                                        ) }}
                    %
                </td>
                <td>{{ $action->checks->count() }}</td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ url('/watchlist/subject/action/' . $action->id . '/check') }}"
                                data-toggle="tooltip" data-original-title="Lihat" class="menu-link px-3">Lihat</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-id="{{ $action->id }}"
                                data-csrf="{{ csrf_token() }}" data-table-filter="delete_row">Hapus</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
                </tr>
                @endforeach
                </tbody>
                <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modals-->
        <!--begin::Modal - Subject Detail Action - Edit-->
        <div class="modal fade" tabindex="-1" id="modal_edit_action">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Ubah Aksi</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <form id="add_form" method="post" action="{{ route('subject-detail.action', $subject_detail->id) }}"
                        class="needs-validation" enctype="multipart/form-data" novalidate="">
                        @csrf
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan Aksi</label>
                                <textarea rows="10" class="form-control form-control-solid"
                                    name="action_comment">{{ $subject_detail->action_comment }}</textarea>
                            </div>
                            <div class="mb-10">
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="is_done"
                                        {{ $subject_detail->finish ? 'checked' : '' }} />
                                    <span class="form-check-label fw-semibold text-muted">
                                        Selesai
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal - Subject Detail Action - Edit-->
        <!--begin::Modal - Subject Detail - Edit-->
        <div class="modal fade" tabindex="-1" id="modal_edit_subject_detail">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Ubah Subject Detail</h3>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <form id="add_form" method="post" action="{{ route('subject-detail.update', $subject_detail->id) }}"
                        class="needs-validation" enctype="multipart/form-data" novalidate="">
                        @csrf
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                <input type="text" class="form-control form-control-solid" name="name"
                                    value="{{ $subject_detail->name }}" placeholder="Nama Kegiatan atau Subjek" />
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Keterangan</label>
                                <textarea rows="10" class="form-control form-control-solid"
                                    name="comment">{{ $subject_detail->comment }}</textarea>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label">Start</label>
                                <div class="fv-row input-group mb-10" id="kt_td_picker_date_only_start"
                                    data-td-target-input="nearest" data-td-target-toggle="nearest">
                                    <input id="kt_td_picker_date_only_start" type="text" class="form-control"
                                        data-td-target="#kt_td_picker_date_only_start" name="start"
                                        value="{{ $subject_detail->start }}" />
                                    <span class="input-group-text" data-td-target="#kt_td_picker_date_only_start"
                                        data-td-toggle="datetimepicker">
                                        <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </span>
                                </div>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label">End</label>
                                <div class="fv-row input-group mb-10" id="kt_td_picker_date_only_end"
                                    data-td-target-input="nearest" data-td-target-toggle="nearest">
                                    <input id="kt_td_picker_date_only_end" type="text" class="form-control"
                                        data-td-target="#kt_td_picker_date_only_end" name="end"
                                        value="{{ $subject_detail->end }}" />
                                    <span class="input-group-text" data-td-target="#kt_td_picker_date_only_end"
                                        data-td-toggle="datetimepicker">
                                        <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-10">
                                <input class="form-check-input" type="checkbox" value="" name="active"
                                    {{ $subject_detail->active ? 'checked' : '' }} />
                                <label class="form-check-label" for="active">
                                    Aktif
                                </label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal - Subject Detail - Edit-->
        <!--begin::Modal - Action - Add-->
        <div class="modal fade" tabindex="-1" id="modal_add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Tambah Aksi</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <form id="add_form" method="post"
                        action="{{ route('subject-detail-store.action', $subject_detail->id) }}"
                        class="needs-validation" novalidate="">
                        @csrf
                        <div class="modal-body">
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                <input type="text" class="form-control form-control-solid" name="name"
                                    placeholder="Nama Aksi" />
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                <textarea class="form-control form-control-solid" name="comment"></textarea>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Jabatan</label>
                                <select class="form-select form-select-solid" aria-label="Select example"
                                    name="jabatan_id">
                                    <option>Pilih..</option>
                                    @foreach ($jabatans as $jabatan)
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->name }} -
                                        {{ $jabatan->description }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label required">Mulai</label>
                                <div class="fv-row input-group mb-10" id="kt_td_picker_date_only_start_action"
                                    data-td-target-input="nearest" data-td-target-toggle="nearest">
                                    <input id="kt_td_picker_date_only_start_action" type="text" class="form-control"
                                        data-td-target="#kt_td_picker_date_only_start_action" name="start" value="" />
                                    <span class="input-group-text" data-td-target="#kt_td_picker_date_only_start_action"
                                        data-td-toggle="datetimepicker">
                                        <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </span>
                                </div>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="form-label required">Target
                                    Berakhir</label>
                                <div class="fv-row input-group mb-10" id="kt_td_picker_date_only_end_action"
                                    data-td-target-input="nearest" data-td-target-toggle="nearest">
                                    <input id="kt_td_picker_date_only_end_action" type="text" class="form-control"
                                        data-td-target="#kt_td_picker_date_only_end_action" name="end" value="" />
                                    <span class="input-group-text" data-td-target="#kt_td_picker_date_only_end_action"
                                        data-td-toggle="datetimepicker">
                                        <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal - Action - Add-->
        <!--end::Modals-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection

@section('script')
<script>
"use strict";
var List = (function() {
    var t,
        e,
        o = () => {
            e.querySelectorAll('[data-table-filter="delete_row"]').forEach(
                (e) => {
                    e.addEventListener("click", function(e) {
                        e.preventDefault();
                        const o = e.target.closest("tr"),
                            n = o.querySelectorAll("td")[2].innerText;
                        let act_id = $(this).data("id");
                        let token = $(this).data("csrf");

                        Swal.fire({
                            text: "Apakah anda yakin akan menghapus " + n + " ?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Ya, hapus!",
                            cancelButtonText: "Tidak, batalkan",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary",
                            },
                        }).then(function(e) {
                            e.value ?
                                Swal.fire({
                                    text: "Kamu telah menghapus " + n + "!.",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Baik",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    },
                                }).then(function() {
                                    $.ajax({
                                        url: `/watchlist/action/${act_id}`,
                                        type: "DELETE",
                                        cache: false,
                                        data: {
                                            _token: token,
                                        },
                                    });

                                    window.location.reload();
                                }) :
                                "cancel" === e.dismiss &&
                                Swal.fire({
                                    text: n + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    },
                                });
                        });
                    });
                },
            );
        },
        n = () => {
            const o = e.querySelectorAll('[type="checkbox"]'),
                n = document.querySelector(
                    '[data-table-select="delete_selected"]',
                );
            o.forEach((t) => {
                    t.addEventListener("click", function() {
                        setTimeout(function() {
                            c();
                        }, 50);
                    });
                }),
                n.addEventListener("click", function() {
                    Swal.fire({
                        text: "Are you sure you want to delete selected customers?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary",
                        },
                    }).then(function(n) {
                        n.value ?
                            Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                },
                            }).then(function() {
                                o.forEach((e) => {
                                    e.checked &&
                                        t
                                        .row($(e.closest("tbody tr")))
                                        .remove()
                                        .draw();
                                });
                                e.querySelectorAll(
                                    '[type="checkbox"]',
                                )[0].checked = !1;
                            }) :
                            "cancel" === n.dismiss &&
                            Swal.fire({
                                text: "Selected customers was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                },
                            });
                    });
                });
        };
    const c = () => {
        const t = document.querySelector('[data-table-toolbar="base"]'),
            o = document.querySelector(
                '[data-table-toolbar="selected"]',
            ),
            n = document.querySelector(
                '[data-table-select="selected_count"]',
            ),
            c = e.querySelectorAll('tbody [type="checkbox"]');
        let r = !1,
            l = 0;
        c.forEach((t) => {
                t.checked && ((r = !0), l++);
            }),
            r ?
            ((n.innerHTML = l),
                t.classList.add("d-none"),
                o.classList.remove("d-none")) :
            (t.classList.remove("d-none"), o.classList.add("d-none"));
    };
    return {
        init: function() {
            (e = document.querySelector("#kt_table")) &&
            (e.querySelectorAll("tbody tr").forEach((t) => {
                    const e = t.querySelectorAll("td"),
                        o = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
                    e[2].setAttribute("data-order", o);
                }),
                (t = $(e).DataTable({
                    info: !1,
                    order: [],
                    columnDefs: [{
                            orderable: !1,
                            targets: 0
                        },
                        {
                            orderable: !1,
                            targets: 4
                        },
                    ],
                })).on("draw", function() {
                    n(), o(), c();
                }),
                n(),
                document
                .querySelector('[data-table-filter="search"]')
                .addEventListener("keyup", function(e) {
                    t.search(e.target.value).draw();
                }),
                o(),
                (() => {
                    const e = document.querySelector(
                        '[data-kt-unit-filter="unit"]',
                    );
                    $(e).on("change", (e) => {
                        let o = e.target.value;
                        "all" === o && (o = ""), t.column(6).search(o).draw();
                    });
                })());
        },
    };
})();
KTUtil.onDOMContentLoaded(function() {
    List.init();
});
</script>
<script>
new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only_start"), {
    localization: {
        format: "yyyy/MM/dd"
    }
});
</script>

<script>
new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only_end"), {
    localization: {
        format: "yyyy/MM/dd"
    }
});
</script>
<script>
new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only_start_action"), {
    localization: {
        format: "yyyy/MM/dd"
    }
});
</script>

<script>
new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only_end_action"), {
    localization: {
        format: "yyyy/MM/dd"
    }
});
</script>
<script>
new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_date_only_finish"), {
    localization: {
        format: "yyyy/MM/dd"
    }
});
</script>
@endsection