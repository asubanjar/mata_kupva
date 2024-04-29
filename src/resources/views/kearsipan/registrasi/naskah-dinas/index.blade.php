     @extends('layouts.app')
     @section('title', 'Daftar Pencatatan Naskah Dinas')
     @section('content')
         <!--begin::Content wrapper-->
         <div class="d-flex flex-column flex-column-fluid">
             <!--begin::Toolbar-->
             <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
                 <!--begin::Toolbar container-->
                 <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                     <!--begin::Toolbar wrapper-->
                     <div class="app-toolbar-wrapper d-flex flex-stack w-100 flex-wrap gap-4">
                         <!--begin::Page title-->
                         <div class="page-title d-flex flex-column justify-content-center me-3 gap-1">
                             <!--begin::Title-->
                             <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                                 Pencatatan Naskah Dinas</h1>
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
                                     <a href="{{ url('/kearsipan') }}" class="text-muted text-hover-primary">Kearsiapan</a>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item">
                                     <span class="bullet w-5px h-2px bg-gray-400"></span>
                                 </li>
                                 <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item text-muted"><a href="#">Naskah Dinas</a></li>
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
                     <div class="card mb-xl-9 mb-6">
                         <!--begin::Card header-->
                         <div class="card-header border-0 pt-6">
                             <!--begin::Card title-->
                             <div class="card-title">

                                 <button id="refreshButton" class="btn btn-primary me-3"><i
                                         class="ki-outline ki-arrows-circle fs-3">
                                     </i></button>
                                 <!--begin::Search-->
                                 <div class="d-flex align-items-center position-relative my-1">
                                     <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                         <span class="path1"></span>
                                         <span class="path2"></span>
                                     </i>
                                     <input type="text" id="custom-search-box-datatable"
                                         class="form-control form-control-solid w-250px ps-13"
                                         placeholder="Search Naskah Dinas" />
                                 </div>
                                 <!--end::Search-->
                             </div>
                             <!--begin::Card title-->
                             <!--begin::Card toolbar-->
                             <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-table-toolbar="base">
                                     <!--end::Filter-->
                                     <!--begin::Add Lampiran-->
                                     <a href="{{ url('/kearsipan/registrasi/naskah-dinas/create') }}" type="button"
                                         class="btn btn-primary">Registrasi Naskah
                                         Dinas</a>
                                     <!--end::Add Lampiran-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Group actions-->
                                 <div class="d-flex justify-content-end align-items-center d-none"
                                     data-table-toolbar="selected">
                                     <div class="fw-bold me-5">
                                         <span class="me-2" data-table-select="selected_count"></span>Selected
                                     </div>
                                     <button type="button" class="btn btn-danger"
                                         data-table-select="delete_selected">Delete
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
                             <table class="table-row-dashed fs-6 gy-5 table align-middle" id="dataTables">
                                 <thead>
                                     <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-400">
                                         <th class="w-10px pe-2">
                                             No
                                         </th>
                                         <th class="min-w-125px">Tanggal</th>
                                         <th class="min-w-125px">Nomor</th>
                                         <th class="min-w-175px">Hal</th>
                                         <th class="min-w-125px">Penandatangan</th>
                                         <th class="min-w-125px">Keterangan</th>
                                         <th class="min-w-125px">Aksi</th>
                                     </tr>
                                 </thead>
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

         <script>
             $(function() {
                 var dataTable = $('#dataTables').DataTable({
                     processing: true,
                     serverSide: true,
                     searching: true,
                     ajax: "{{ route('kearsipan.naskah-dinas.data') }}",
                     columns: [{
                             data: null,
                             name: 'rownum',
                             searchable: false,
                             orderable: false,
                             render: function(data, type, row, meta) {
                                 return meta.row + meta.settings._iDisplayStart + 1;
                             }
                         },
                         {
                             data: 'registration_date',
                             name: 'registration_date',
                             searchable: true,
                             orderable: true,
                             render: function(data, type, row) {
                                 return moment(data).format('DD-MM-YYYY HH:mm');
                             }
                         },
                         {
                             data: null,
                             name: 'nomor_naskah',
                             searchable: true,
                             orderable: true,
                             render: function(data, type, row) {
                                 // Construct the HTML string using the data from the row
                                 return '<div class="text-hover-primary mb-1 text-gray-800">' + data
                                     .nomor_naskah + '</div>' +
                                     '<div class="badge badge-light-info fw-bold mb-2">' + data
                                     .jenis_naskah_name + '</div>';
                             },
                         },
                         {
                             data: 'hal',
                             name: 'hal',
                             searchable: true,
                             orderable: true,
                         },
                         {
                             data: null,
                             searchable: false,
                             orderable: false,
                             render: function(data, type, row) {
                                 var signer_status = data.penandatangan.name;

                                 // Conditionally render the status based on status_naskah
                                 if (data.status_naskah === '2') {
                                     signer_status +=
                                         '<div class="badge badge-light-success fw-bold mb-2">Distribusi</div>';
                                 } else if (data.status_naskah === '0') {
                                     signer_status +=
                                         '<div class="badge badge-light-warning fw-bold mb-2">Setujui</div>';
                                 } else if (data.status_naskah === '1') {
                                     signer_status +=
                                         '<div class="badge badge-light-danger fw-bold mb-2">Diajukan</div>';
                                 } else {
                                     signer_status +=
                                         '<div class="badge badge-light-info fw-bold mb-2">Draft</div>';
                                 }

                                 return signer_status;
                             },
                         },
                         {
                             data: 'note',
                             name: 'note',
                             searchable: true,
                             orderable: true,
                         },
                         {
                             data: null,
                             name: 'action',
                             orderable: false,
                             searchable: false,
                             render: function(data, type, row) {
                                 return '<button class="delete-button btn btn-icon btn-active-light-danger w-40px h-40px me-3" data-id="' +
                                     row.id +
                                     '" data-nomor="' +
                                     row.nomor_naskah +
                                     '"><i class="ki-solid ki-trash fs-1"></i></button> ' +
                                     '<button class="show-button btn btn-icon btn-active-light-warning w-40px h-40px me-3" data-id="' +
                                     row.id +
                                     '"><i class="ki-solid ki-eye fs-1"></i></button>';
                             }
                         }

                     ],
                     initComplete: function(settings, json) {
                         // Target the tbody element of the DataTable and add classes after the table has been initialized and data loaded
                         $('#dataTables tbody').addClass('fw-semibold text-gray-600');
                     }
                 });

                 //refresh Datatable
                 $('#refreshButton').on('click', function() {
                     dataTable.ajax.reload(); // Reload the data
                 });

                 //Search Datatable
                 $('#custom-search-box-datatable').keyup(function() {
                     dataTable.search($(this).val()).draw();
                 });

                 //Delete Datatable
                 $('#dataTables').on('click', '.delete-button', function() {
                     let id = $(this).data('id');
                     let nomor = $(this).data("nomor");

                     Swal.fire({
                         text: "Apakah Anda yakin akan menghapus naskah dinas nomor " + nomor +
                             "?",
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
                         if (e.value) {
                             $.ajaxSetup({
                                 headers: {
                                     'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                 }
                             });

                             $.ajax({
                                 url: '/kearsipan/registrasi/naskah-dinas/' + id,
                                 type: 'DELETE',
                                 success: function(response) {
                                     Swal.fire({
                                         text: "Data Berhasil Dihapus",
                                         icon: "success",
                                         buttonsStyling: !1,
                                         confirmButtonText: "OK",
                                         customClass: {
                                             confirmButton: "btn fw-bold btn-active-light-success",
                                         },
                                     }).then(function() {
                                         dataTable.ajax.reload(null, false);
                                     });
                                 },
                                 error: function(xhr, status, error) {
                                     var response = xhr.responseJSON;
                                     alert(response.error);
                                 }
                             });
                         }
                     });
                 });

                 //Show Datatable
                 $('#dataTables').on('click', '.show-button', function() {
                     let id = $(this).data('id');

                     let url = '/kearsipan/registrasi/naskah-dinas/' + id;

                     window.location.href = url;
                 });
             });
         </script>

     @endsection
