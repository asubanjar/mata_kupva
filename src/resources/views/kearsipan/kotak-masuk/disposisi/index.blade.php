     @extends('layouts.app')
     @section('title', 'Daftar Disposisi')
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
                                 Disposisi</h1>
                             <!--end::Title-->
                             <!--begin::Breadcrumb-->
                             <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item text-muted">
                                     <a href="../../demo42/dist/index.html"
                                         class="text-muted text-hover-primary">Kearsipan</a>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item">
                                     <span class="bullet w-5px h-2px bg-gray-400"></span>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item text-muted">Kotak Masuk</li>
                                 <li class="breadcrumb-item">
                                     <span class="bullet w-5px h-2px bg-gray-400"></span>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item text-muted">Diposisi</li>
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
                             <!--begin::Card toolbar-->
                             <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                     <!--begin::Filter-->
                                     <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                         data-kt-menu-placement="bottom-end">
                                         <i class="ki-outline ki-filter fs-2"></i>Filter</button>
                                     <!--begin::Menu 1-->
                                     <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                         <!--begin::Header-->
                                         <div class="px-7 py-5">
                                             <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                         </div>
                                         <!--end::Header-->
                                         <!--begin::Separator-->
                                         <div class="separator border-gray-200"></div>
                                         <!--end::Separator-->
                                         <!--begin::Content-->
                                         <div class="px-7 py-5" data-kt-user-table-filter="form">
                                             <!--begin::Input group-->
                                             <div class="mb-10">
                                                 <label class="form-label fs-6 fw-semibold">Tampilkan</label>
                                                 <select class="form-select form-select-solid fw-bold"
                                                     data-kt-select2="true" data-placeholder="Select option"
                                                     data-allow-clear="true" data-kt-user-table-filter="role"
                                                     data-hide-search="true">
                                                     <option></option>
                                                     <option selected="selected" value="BTL">Belum Tindak Lanjut</option>
                                                     <option value="ALL">Semua</option>
                                                     <option value="DONE">Sudah Tindak Lanjut</option>
                                                 </select>
                                             </div>
                                             <!--end::Input group-->
                                             <!--begin::Actions-->
                                             <div class="d-flex justify-content-end">
                                                 <button type="reset"
                                                     class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                     data-kt-menu-dismiss="true"
                                                     data-kt-user-table-filter="reset">Reset</button>
                                                 <button type="submit" class="btn btn-primary fw-semibold px-6"
                                                     data-kt-menu-dismiss="true"
                                                     data-kt-user-table-filter="filter">Apply</button>
                                             </div>
                                             <!--end::Actions-->
                                         </div>
                                         <!--end::Content-->
                                     </div>
                                     <!--end::Menu 1-->
                                     <!--end::Filter-->
                                     <!--begin::Export-->
                                     <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                         data-bs-target="#kt_modal_export_users">
                                         <i class="ki-outline ki-exit-up fs-2"></i>Export</button>
                                     <!--end::Export-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Group actions-->
                                 <div class="d-flex justify-content-end align-items-center d-none"
                                     data-kt-user-table-toolbar="selected">
                                     <div class="fw-bold me-5">
                                         <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                     </div>
                                     <button type="button" class="btn btn-danger"
                                         data-kt-user-table-select="delete_selected">Delete Selected</button>
                                 </div>
                                 <!--end::Group actions-->
                                 <!--begin::Modal - Adjust Balance-->
                                 <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                     <!--begin::Modal dialog-->
                                     <div class="modal-dialog modal-dialog-centered mw-650px">
                                         <!--begin::Modal content-->
                                         <div class="modal-content">
                                             <!--begin::Modal header-->
                                             <div class="modal-header">
                                                 <!--begin::Modal title-->
                                                 <h2 class="fw-bold">Export Users</h2>
                                                 <!--end::Modal title-->
                                                 <!--begin::Close-->
                                                 <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                     data-kt-users-modal-action="close">
                                                     <i class="ki-outline ki-cross fs-1"></i>
                                                 </div>
                                                 <!--end::Close-->
                                             </div>
                                             <!--end::Modal header-->
                                             <!--begin::Modal body-->
                                             <div class="modal-body scroll-y mx-xl-15 mx-5 my-7">
                                                 <!--begin::Form-->
                                                 <form id="kt_modal_export_users_form" class="form" action="#">
                                                     <!--begin::Input group-->
                                                     <div class="fv-row mb-10">
                                                         <!--begin::Label-->
                                                         <label class="fs-6 fw-semibold form-label mb-2">Select
                                                             Roles:</label>
                                                         <!--end::Label-->
                                                         <!--begin::Input-->
                                                         <select name="role" data-control="select2"
                                                             data-placeholder="Select a role" data-hide-search="true"
                                                             class="form-select form-select-solid fw-bold">
                                                             <option></option>
                                                             <option value="Administrator">Administrator</option>
                                                             <option value="Analyst">Analyst</option>
                                                             <option value="Developer">Developer</option>
                                                             <option value="Support">Support</option>
                                                             <option value="Trial">Trial</option>
                                                         </select>
                                                         <!--end::Input-->
                                                     </div>
                                                     <!--end::Input group-->
                                                     <!--begin::Input group-->
                                                     <div class="fv-row mb-10">
                                                         <!--begin::Label-->
                                                         <label class="required fs-6 fw-semibold form-label mb-2">Select
                                                             Export Format:</label>
                                                         <!--end::Label-->
                                                         <!--begin::Input-->
                                                         <select name="format" data-control="select2"
                                                             data-placeholder="Select a format" data-hide-search="true"
                                                             class="form-select form-select-solid fw-bold">
                                                             <option></option>
                                                             <option value="excel">Excel</option>
                                                             <option value="pdf">PDF</option>
                                                             <option value="cvs">CVS</option>
                                                             <option value="zip">ZIP</option>
                                                         </select>
                                                         <!--end::Input-->
                                                     </div>
                                                     <!--end::Input group-->
                                                     <!--begin::Actions-->
                                                     <div class="text-center">
                                                         <button type="reset" class="btn btn-light me-3"
                                                             data-kt-users-modal-action="cancel">Discard</button>
                                                         <button type="submit" class="btn btn-primary"
                                                             data-kt-users-modal-action="submit">
                                                             <span class="indicator-label">Submit</span>
                                                             <span class="indicator-progress">Please wait...
                                                                 <span
                                                                     class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                                         </button>
                                                     </div>
                                                     <!--end::Actions-->
                                                 </form>
                                                 <!--end::Form-->
                                             </div>
                                             <!--end::Modal body-->
                                         </div>
                                         <!--end::Modal content-->
                                     </div>
                                     <!--end::Modal dialog-->
                                 </div>
                                 <!--end::Modal - New Card-->
                             </div>
                             <!--end::Card toolbar-->
                         </div>
                         <!--end::Card header-->
                         <!--begin::Card body-->
                         <div class="card-body table-responsive py-4">
                             <!--begin::Table-->
                             <table class="table-row-dashed fs-6 gy-5 table align-middle" id="kt_table_users">
                                 <thead>
                                     <tr class="text-muted fw-bold fs-7 text-uppercase gs-0 text-start">
                                         <th class="min-w-125px">Tanggal</th>
                                         <th class="min-w-125px">Asal Naskah</th>
                                         <th class="min-w-125px">Nomor Naskah</th>
                                         <th class="min-w-225px">Hal</th>
                                         <th class="min-w-125px">Tujuan</th>
                                         <th class="min-w-125px">Keterangan</th>
                                         <th class="min-w-100px">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody class="fw-semibold text-gray-600">
                                     <tr>
                                         <td>04 Oktober 2023, 09:20
                                             <div class="badge badge-light-danger fw-bold mb-2">Belum Dibaca</div>
                                         </td>
                                         <td>Direktorat Hukum
                                         </td>
                                         <td>
                                             <div class="text-hover-primary mb-1 text-gray-800">T/668/TI.01/X/2023</div>
                                             <div class="badge badge-light-info fw-bold mb-2">Disposisi</div>
                                         </td>
                                         <td>
                                             <div class="text-hover-primary mb-2 text-gray-800">Penyampaian Peraturan
                                                 Tentang Tim Kerja SIPENDAR</div>
                                             <div class="badge badge-light-danger fw-bold mb-2">Sangat Rahasia</div>
                                             <div class="badge badge-light-danger fw-bold mb-2">Sangat Segera</div>
                                         </td>
                                         <td>Pusat Teknologi Informasi</td>
                                         <td>
                                             <div class="text-hover-primary mb-2 text-gray-800">Disposisi</div>
                                             <div class="badge badge-light-info fw-bold mb-2">Untuk Diketahui</div>
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
                                                     <a href="../../demo42/dist/apps/user-management/users/view.html"
                                                         class="menu-link px-3">History</a>
                                                 </div>
                                                 <div class="menu-item px-3">
                                                     <a href="../../demo42/dist/apps/user-management/users/view.html"
                                                         class="menu-link px-3">Edit</a>
                                                 </div>
                                                 <!--end::Menu item-->
                                                 <!--begin::Menu item-->
                                                 <div class="menu-item px-3">
                                                     <a href="#" class="menu-link px-3"
                                                         data-kt-users-table-filter="delete_row">Delete</a>
                                                 </div>
                                                 <!--end::Menu item-->
                                             </div>
                                             <!--end::Menu-->
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>21 Feb 2023, 14:40
                                             <div class="badge badge-light-success fw-bold mb-2">Sudah Dibaca</div>
                                         </td>
                                         <td>Biro Umum
                                         </td>
                                         <td>
                                             <div class="text-hover-primary mb-1 text-gray-800">T/412/TI.01/II/2023</div>
                                             <div class="badge badge-light-info fw-bold mb-2">Disposis</div>
                                         </td>
                                         <td>
                                             <div class="text-hover-primary mb-2 text-gray-800">Penyampaian Progres
                                                 Implementasi Aplikasi Website PPATK</div>
                                             <div class="badge badge-light-primary fw-bold mb-2">Rahasia</div>
                                             <div class="badge badge-light-warning fw-bold mb-2">Segera</div>
                                         </td>
                                         <td>Pusat Teknologi Informasi</td>
                                         <td>
                                             <div class="text-hover-primary mb-2 text-gray-800">Disposisi</div>
                                             <div class="badge badge-light-info fw-bold mb-2">Untuk Dihadiri</div>
                                             <div class="badge badge-light-info fw-bold mb-2">Untuk Diketahui</div>
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
                                                     <a href="../../demo42/dist/apps/user-management/users/view.html"
                                                         class="menu-link px-3">History</a>
                                                 </div>
                                                 <div class="menu-item px-3">
                                                     <a href="../../demo42/dist/apps/user-management/users/view.html"
                                                         class="menu-link px-3">Edit</a>
                                                 </div>
                                                 <!--end::Menu item-->
                                                 <!--begin::Menu item-->
                                                 <div class="menu-item px-3">
                                                     <a href="#" class="menu-link px-3"
                                                         data-kt-users-table-filter="delete_row">Delete</a>
                                                 </div>
                                                 <!--end::Menu item-->
                                             </div>
                                             <!--end::Menu-->
                                         </td>
                                     </tr>

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

     @endsection
