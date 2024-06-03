<html>

<style>
.menu-title,
[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-heading,
[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-link .menu-icon,
[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-link .menu-icon,
[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-link .menu-icon .svg-icon,
[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-link .menu-icon i {
    color: #fff !important;
}

[data-kt-app-layout="light-sidebar"] .app-sidebar .menu .menu-item .menu-link.active {
    background-color: revert !important;
}
</style>
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
    style="background-color: #5655FA;">
    <!--begin::Logo-->
    <div class="app-sidebar-logo" id="kt_app_sidebar_logo" style="border-bottom: none !important">
        <!--begin::Logo image-->
        <a href="<?php echo e(url('/dashboard')); ?>">
            <img alt="Logo" src="<?php echo e(asset('assets/media/logos/hackathon-line-white.svg')); ?>"
                class="h-90px app-sidebar-logo-default px-8" />
            <img alt="Logo" src="<?php echo e(asset('assets/media/logos/hackathon-logo-small.svg')); ?>"
                class="h-20px app-sidebar-logo-minimize px-6" />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu flex-column-fluid overflow-hidden">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y mx-3 my-5" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">

                    <!--begin:Menu item-->

                    <!--MONITORING PIMPINAN -->
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">WATCHLIST</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu item-->
                        <a class="menu-link <?php echo e(request()->is('watchlists') ? 'active' : ''); ?>"
                            href="<?php echo e(url('/watchlists')); ?>">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-note-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Watchlist</span>
                        </a>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu item-->

                    <!--ADMINISTRATOR -->
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Administrator</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-user-tick fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Pengelolaan Pengguna</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link <?php echo e((request()->is('user') ? 'active' : request()->is('user*')) ? 'active' : ''); ?>"
                                    href="<?php echo e(url('/user')); ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Daftar</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-folder-added fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                            <span class="menu-title">Master</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link <?php echo e((request()->is('master/subject-type') ? 'active' : request()->is('master/subject-type/*')) ? 'active' : ''); ?>"
                                    href="<?php echo e(url('/master/subject-type')); ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Jenis Subjek</span>
                                </a>
                                <a class="menu-link <?php echo e((request()->is('master/sifat') ? 'active' : request()->is('master/sifat/*')) ? 'active' : ''); ?>"
                                    href="<?php echo e(url('/master/sifat')); ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Jenis Valuta Asing</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">

    </div>
    <!--end::Footer-->
</div>
<!--end::Sidebar-->

</html><?php /**PATH C:\laragon\www\hackathon-bi\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>