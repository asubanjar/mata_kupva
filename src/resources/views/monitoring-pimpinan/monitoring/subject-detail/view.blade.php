@extends('layouts.app')
@section('title', 'Detail Subjek')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Detail
                        Aksi</h1>
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
                            <a href="{{ url('/monitoring-pimpinan/monitoring/subject') }}"
                                class="text-muted text-hover-primary">Daftar</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a
                                href="{{ url('/monitoring-pimpinan/monitoring/subject/' . $subject_detail->subject_id) }}"
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
                    <a href="{{ url('/monitoring-pimpinan/monitoring/subject/' . $subject_detail->subject_id) }}"
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
            <div id="kt_app_content_container" class="app-container container-xxl">
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

                                            <a href="{{ url('/monitoring-pimpinan/monitoring/subject/' . $subject_detail->subject_id) }}"
                                                class="badge badge-light-success me-auto">{{ $subject_detail->subject->name }}</a>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex fw-semibold fs-5 mb-4 flex-wrap text-gray-400">
                                            {{ $subject_detail->comment }}</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                            data-bs-target="#modal_edit_subject_detail">Ubah Subjek Detail</a>
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
                                                    data-kt-countup-value="{{ $diff_days }}">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Hari Tersisa</div>
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
                        <div class="card h-lg-100"
                            @if ($subject_detail->is_done) style="background: linear-gradient(112.14deg, #00cec9 0%, #00b894 100%)"
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
                                                    <span
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
                <!--begin::Modals-->
                <!--begin::Modal - Action - Edit-->
                <div class="modal fade" tabindex="-1" id="modal_edit_action">
                    <div class="modal-dialog modal-xl">
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
                            <form id="add_form" method="post"
                                action="{{ route('subject-detail.action', $subject_detail->id) }}"
                                class="needs-validation" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan Aksi</label>
                                        <textarea rows="10" class="form-control form-control-solid" name="action_comment">{{ $subject_detail->action_comment }}</textarea>
                                    </div>
                                    <div class="mb-10">
                                        <input class="form-check-input" type="checkbox" value="" name="is_done"
                                            {{ $subject_detail->is_done ? 'checked' : '' }} />
                                        <label class="form-check-label" for="is_done">
                                            Selesai
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
                <!--end::Modal - Action - Edit-->
                <!--begin::Modal - Action - Edit-->
                <div class="modal fade" tabindex="-1" id="modal_edit_subject_detail">
                    <div class="modal-dialog modal-xl">
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
                            <form id="add_form" method="post"
                                action="{{ route('subject-detail.update', $subject_detail->id) }}"
                                class="needs-validation" enctype="multipart/form-data" novalidate="">
                                @csrf
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                        <input type="text" class="form-control form-control-solid" name="name"
                                            value="{{ $subject_detail->name }}"
                                            placeholder="Nama Kegiatan atau Subjek" />
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1"
                                            class="required form-label">Keterangan</label>
                                        <textarea rows="10" class="form-control form-control-solid" name="comment">{{ $subject_detail->comment }}</textarea>
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
                                            Selesai
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
                <!--end::Modal - Action - Edit-->
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
@endsection
