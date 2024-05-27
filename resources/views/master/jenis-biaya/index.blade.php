@extends('layouts.app')
@section('title', 'Master Jenis Biaya')
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Master
                        Jenis Biaya</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Master Jenis Biaya</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
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
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13"
                                    placeholder="Search Jenis Biaya" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-table-toolbar="base">
                                <!--begin::Add Jenis Biaya-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_add">Tambah Jenis Biaya</button>
                                <!--end::Add Jenis Biaya-->
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
                        <table class="table-row-dashed fs-6 gy-5 table align-middle" id="kt_urgensi_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-start text-gray-400">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_urgensi_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">Nama</th>
                                    <th class="min-w-125px">Pembiayaan</th>
                                    <th class="min-w-125px">Keterangan</th>
                                    <th class="min-w-125px">Tanggal Dibuat</th>
                                    <th class="min-w-70px text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($biayas as $biaya)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>{{ $biaya->nama }}</td>
                                        <td>{{ $biaya->pembiayaan }}</td>
                                        <td>{{ $biaya->keterangan }}</td>
                                        <td>{{ $biaya->created_at }}</td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                                        data-id="{{ $biaya->id }}" data-csrf="{{ csrf_token() }}"
                                                        data-original-title="Edit"
                                                        class="menu-link edit-biaya px-3">Ubah</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link delete-biaya px-3"
                                                        data-id="{{ $biaya->id }}" data-nama="{{ $biaya->nama }}"
                                                        data-csrf="{{ csrf_token() }}"
                                                        data-table-filter="delete_row">Hapus</a>
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
                <!--begin::Modal - Jenis Biaya - Add-->
                <div class="modal fade" tabindex="-1" id="modal_add">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Tambah Jenis Biaya</h3>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <form id="add_form" method="post" action="{{ url('/master/jenis-biaya') }}"
                                class="needs-validation" novalidate="">
                                @csrf
                                <div class="modal-body">
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                        <input type="text" class="form-control form-control-solid" name="nama"
                                            placeholder="Isi di sini" />
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1"
                                            class="required form-label">Pembiayaan</label>
                                        <select class="form-select form-select-solid" name="pembiayaan">
                                            <option value="" selected disabled>Pilih Pembiayaan</option>
                                            <option value="PPATK Pusat">PPATK Pusat</option>
                                            <option value="Pusdiklat APUPPT">Pusdiklat APUPPT</option>
                                            <option value="Non PPATK">Non PPATK</option>
                                        </select>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label for="exampleFormControlInput1"
                                            class="required form-label">Keterangan</label>
                                        <input type="text" class="form-control form-control-solid" name="keterangan"
                                            placeholder="Isi di sini" />
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
                <!--end::Modal - Jenis Biaya - Add-->

                <!--begin::Modal - Jenis Biaya - Edit-->
                <div class="modal fade" tabindex="-1" id="modal_edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Ubah Jenis Biaya</h3>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="csrf" value="{{ csrf_token() }}">
                                <input type="hidden" id="id">
                                <div class="mb-10">
                                    <label for="nama" class="required form-label">Nama</label>
                                    <input type="text" class="form-control form-control-solid" id="nama"
                                        name="nama" placeholder="Contoh: Isi di sini" value="" required />
                                </div>
                                <div class="mb-10">
                                    <label for="pembiayaan" class="required form-label">Pembiayaan</label>
                                    {{-- <input type="text" class="form-control form-control-solid" id="pembiayaan"
                                        name="pembiayaan" value="" required /> --}}
                                    <select class="form-select form-select-solid" name="pembiayaan" id="pembiayaan">
                                        <option value="" selected disabled>Pilih Pembiayaan</option>
                                        @foreach (['PPATK Pusat', 'Pusdiklat APUPPT', 'Non PPATK'] as $item)
                                            <option value="{{ $item }}"
                                                @if ($item == old('pembiayaan')) selected="selected" @endif>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="keterangan" class="required form-label">Keterangan</label>
                                    <input type="text" class="form-control form-control-solid" id="keterangan"
                                        name="keterangan" placeholder="Contoh: Isi di sini" value="" required />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="update">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal - Jenis Biaya - Edit-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script type="text/javascript">
        $('body').on('click', '.edit-biaya', function() {
            var id = $(this).data('id');

            $.get("{{ url('master/jenis-biaya') }}" + '/' + id + '/edit', function(data) {
                $('#modal_edit').modal('show');
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#pembiayaan').val(data.pembiayaan);
                $('#keterangan').val(data.keterangan);
            })

        });

        $('#update').click(function(e) {
            e.preventDefault();

            //define variable
            let id = $('#id').val();
            let nama = $('#nama').val();
            let pembiayaan = $('#pembiayaan').val();
            let keterangan = $('#keterangan').val();
            let token = $('#csrf').val();

            $.ajax({
                url: `/master/jenis-biaya/${id}`,
                method: "PUT",
                cache: false,
                data: {
                    "nama": nama,
                    "pembiayaan": pembiayaan,
                    "keterangan": keterangan,
                    "_token": token,
                    // "_method": "PUT",
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(response) {
                    window.location.reload();
                },
            });
        });

        $(document).on('click', '.delete-biaya', function(e) {
            e.preventDefault();

            let id = $(this).data("id");
            let nama = $(this).data("nama");
            let token = $(this).data("csrf");

            Swal.fire({
                text: "Apakah Anda yakin akan menghapus data " + nama + "?",
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
                    $.ajax({
                        url: `/master/jenis-biaya/${id}`,
                        cache: false,
                        method: "DELETE",
                        data: {
                            // _method: "DELETE",
                            _token: token,
                        },
                        success: function(response) {
                            window.location.reload();
                        },
                        error: function(response) {
                            window.location.reload();
                        },
                    })
                };
            })
        });
    </script>

    <script>
        "use strict";
        var List = (function() {
            var t,
                e,
                o = () => {},
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

            return {
                init: function() {
                    (e = document.querySelector("#kt_urgensi_table")) &&
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
                                '[data-kt-urgensi-status-filter="status"]',
                            );
                            $(e).on("change", (e) => {
                                let o = e.target.value;
                                "all" === o && (o = ""), t.column(3).search(o).draw();
                            });
                        })());
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            List.init();
        });
    </script>
@endsection
