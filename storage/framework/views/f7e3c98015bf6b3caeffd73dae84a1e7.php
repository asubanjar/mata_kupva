<?php $__env->startSection('title', 'Statistic Action'); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Statistik
                        Rencana Aksi</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="<?php echo e(url('/monitoring-pimpinan/dashboard/')); ?>"
                                class="text-muted text-hover-primary">Beranda</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="#">Statistik Rencana Aksi</a></li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Primary button-->
                    <a href="<?php echo e(url('/monitoring-pimpinan/dashboard/')); ?>"
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
                                <!--begin::Info-->
                                <div class="d-flex justify-content-start flex-wrap">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
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
                                                    data-kt-countup-value="<?php echo e($actions->count()); ?>">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Jumlah Rencana Aksi</div>
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
                                                    data-kt-countup-value="<?php echo e($action_pendings->count()); ?>">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Jumlah Rencana Aksi Dalam Proses
                                            </div>
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
                                    class="form-control form-control-solid w-250px ps-13" placeholder="Search Jabatan" />
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
                                        <?php $__currentLoopData = $statistic_actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic_action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($statistic_action->description); ?>">
                                                <?php echo e($statistic_action->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Filter-->
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
                                    <th></th>
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">Nama</th>
                                    <th class="min-w-50px">Total</th>
                                    <th class="min-w-50px">Selesai</th>
                                    <th class="min-w-50px">Dalam Proses</th>
                                    <th class="min-w-50px">Persentase</th>
                                    <th class="min-w-70px text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php $__currentLoopData = $statistic_actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic_action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo e($statistic_action->description); ?>

                                        </td>
                                        <td>
                                            <div class="badge badge-light-primary">
                                                <?php echo e($statistic_action->total_action); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-light-success">
                                                <?php echo e($statistic_action->total_action_finish); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-light-danger">
                                                <?php echo e($statistic_action->total_action_pending); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-light-warning">
                                                <?php echo e(number_format(
                                                    $statistic_action->total_action_finish
                                                        ? ($statistic_action->total_action_finish / $statistic_action->total_action) * 100
                                                        : 0,
                                                    2,
                                                    '.',
                                                    '',
                                                )); ?>%
                                            </div>
                                        </td>
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
                                                    <a href="#" class="menu-link px-3" data-id=""
                                                        data-csrf="" data-table-filter="delete_row">Lihat</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <!--end::Table body-->
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        "use strict";
        const List = (function() {
            var t,
                e,
                o = () => {
                    e.querySelectorAll('[data-table-filter="delete_row"]').forEach(
                        (e) => {
                            e.addEventListener("click", function(e) {
                                e.preventDefault();
                                const o = e.target.closest("tr"),
                                    n = o.querySelectorAll("td")[2].innerText;
                                let check_id = $(this).data("id");
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
                                                url: `/monitoring-pimpinan/monitoring/check/${check_id}`,
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
                                    targets: 7
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
                                "all" === o && (o = ""), t.column(2).search(o).draw();
                            });
                        })());
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            List.init();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hackathon-bi\resources\views/monitoring-pimpinan/statistic/action.blade.php ENDPATH**/ ?>