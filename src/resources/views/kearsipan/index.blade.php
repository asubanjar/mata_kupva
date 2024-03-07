@extends('layouts.app')
@section('title', 'Utama')
@section('content')

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid mt-15">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #f39c12; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/message-2-down.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Disposisi</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">69</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Tindak Lanjut</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span>43 Belum Dibaca</span>
                                    <span>72%</span>
                                </div>
                                <div class="h-8px w-100 mx-3 rounded bg-white bg-opacity-50">
                                    <div class="h-8px rounded bg-white" role="progressbar" style="width: 72%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #39cccc ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-text.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Pencatatan Naskah
                                    Dinas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Disetujui</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #00c0ef  ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/clipboard-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Dinas Belum
                                    Disetujui</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">5</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white"></span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #F1416C ; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/send-off.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div> <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Dinas Belum
                                    Dikirim</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">3</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white"></span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #01ff70; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/mailbox.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Naskah Masuk Internal</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">2</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Tindak Lanjut</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Card widget 20-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #1668c8; background-image: url('assets/media/patterns/vector-1.png'); background-position: right bottom; background-repeat: no-repeat; position: relative;">
                        <div class="card-logo"
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background-image: url('{{ asset('assets/media/icons/tabler/png/plane-tilt.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 0.1;">
                        </div>
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <span class="fw-semibold fs-6 mb-3 pt-1 text-white">Permohonan Surat Tugas</span>
                                <div class="d-flex">
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 mr-3 text-white">4</span>
                                    <span class="fw-semibold fs-6 pt-1 text-white">Belum Disetujui</span>
                                </div>

                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0" style="min-height: 80px">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column w-100 mt-3">
                                <div class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12">

                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Daftar Penugasan</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Category</div>
                                        <!--end::Label-->

                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent fs-7 lh-1 fw-bold select2-hidden-accessible w-auto py-0 ps-3 text-gray-900"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-select2-id="select2-data-1-46ma" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected=""
                                                data-select2-id="select2-data-3-0vdv">
                                                Show
                                                All</option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category B</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-2-iu0x"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent fs-7 lh-1 fw-bold w-auto py-0 ps-3 text-gray-900"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-pxfh-container"
                                                    aria-controls="select2-pxfh-container"><span
                                                        class="select2-selection__rendered" id="select2-pxfh-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->

                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Status</div>
                                        <!--end::Label-->

                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent fs-7 lh-1 fw-bold select2-hidden-accessible w-auto py-0 ps-3 text-gray-900"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-5="filter_status" data-select2-id="select2-data-4-lnw8"
                                            tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected=""
                                                data-select2-id="select2-data-6-l1fg">
                                                Show
                                                All</option>
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                            <option value="Low Stock">Low Stock</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-5-ep78"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent fs-7 lh-1 fw-bold w-auto py-0 ps-3 text-gray-900"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-naw2-container"
                                                    aria-controls="select2-naw2-container"><span
                                                        class="select2-selection__rendered" id="select2-naw2-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->

                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <div id="kt_table_widget_5_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table-row-dashed fs-6 gy-3 dataTable no-footer table align-middle"
                                        id="kt_table_widget_5_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-500">
                                                <th class="min-w-150px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                    aria-label="Item: activate to sort column ascending"
                                                    style="width: 150px;">
                                                    Hal</th>
                                                <th class="min-w-100px sorting_disabled pe-3 text-end" rowspan="1"
                                                    colspan="1" aria-label="Product ID" style="width: 100px;">Nomor
                                                </th>
                                                <th class="min-w-150px sorting pe-3 text-end" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                    aria-label="Date Added: activate to sort column ascending"
                                                    style="width: 150px;">Tanggal</th>
                                                <th class="min-w-100px sorting pe-3 text-end" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                    aria-label="Price: activate to sort column ascending"
                                                    style="width: 100px;">
                                                    Lokasi</th>
                                                <th class="min-w-100px sorting pe-3 text-end" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 100.35px;">Status</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">

                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="/metronic8/demo27/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-hover-primary text-gray-900">Diklat Elasticsearch</a>
                                                </td>
                                                <!--end::Item-->

                                                <!--begin::Product ID-->
                                                <td class="text-end">
                                                    RT.01/01.1/257/2022 </td>
                                                <!--end::Product ID-->

                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2024-04-20T00:00:00+07:00">
                                                    02 Apr, 2024 </td>
                                                <!--end::Date added-->

                                                <!--begin::Price-->
                                                <td class="text-end">
                                                    Jakarta Pusat </td>
                                                <!--end::Price-->

                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span
                                                        class="badge fs-7 badge-light-primary px-4 py-3">Persetujuan</span>
                                                </td>
                                                <!--end::Status-->

                                            </tr>
                                            <tr class="even">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="/metronic8/demo27/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-hover-primary text-gray-900">Kegiatan Ujicoba Modul
                                                        SIPANDAI</a>
                                                </td>
                                                <!--end::Item-->

                                                <!--begin::Product ID-->
                                                <td class="text-end">
                                                    RT.01/01.1/257/2024 </td>
                                                <!--end::Product ID-->

                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2024-04-20T00:00:00+07:00">
                                                    09 Apr, 2024 </td>
                                                <!--end::Date added-->

                                                <!--begin::Price-->
                                                <td class="text-end">
                                                    Depok </td>
                                                <!--end::Price-->

                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge fs-7 badge-light-warning px-4 py-3">Pengajuan</span>
                                                </td>
                                                <!--end::Status-->

                                            </tr>
                                            <tr class="odd">
                                                <td>
                                                    <a href="/metronic8/demo27/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-hover-primary text-gray-900">Diklat BSSN</a>
                                                </td>
                                                <!--end::Item-->

                                                <!--begin::Product ID-->
                                                <td class="text-end">
                                                    RT.01/01.1/267/2024 </td>
                                                <!--end::Product ID-->

                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2024-04-20T00:00:00+07:00">
                                                    02 Februari, 2024 </td>
                                                <!--end::Date added-->

                                                <!--begin::Price-->
                                                <td class="text-end">
                                                    Depok </td>
                                                <!--end::Price-->

                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge fs-7 badge-light-success px-4 py-3">Selesai</span>
                                                </td>
                                                <!--end::Status-->

                                            </tr>

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    </div>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->

@endsection
