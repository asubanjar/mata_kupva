<html>
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    <!--begin::Header-->
    <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
        data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
        data-kt-sticky-animation="false">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
            id="kt_app_header_container">
            <!--begin::Sidebar mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n3 me-md-2 me-1" title="Show sidebar menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Sidebar mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Header wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                <!--begin::Menu wrapper-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-lg-row my-lg-0 align-items-stretch fw-semibold px-lg-0 my-5 px-2"
                        id="kt_app_header_menu" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item here show menu-here-bg menu-lg-down-accordion me-lg-2 me-0">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Dashboards</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-850px p-0">
                                <!--begin:Dashboards menu-->
                                <div class="menu-state-bg menu-extended overflow-lg-visible overflow-hidden"
                                    data-kt-menu-dismiss="true">
                                    <!--begin:Row-->
                                    <div class="row">
                                        <!--begin:Col-->
                                        <div class="col-lg-8 mb-lg-0 py-lg-6 px-lg-6 mb-3 px-3 py-3">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/index.html" class="menu-link active">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-element-11 text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                                <span class="fs-7 fw-semibold text-muted">Reports &
                                                                    statistics</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/ecommerce.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-basket text-danger fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span
                                                                    class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                                <span class="fs-7 fw-semibold text-muted">Sales
                                                                    reports</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/projects.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-abstract-44 text-info fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                                                <span class="fs-7 fw-semibold text-muted">Tasts, graphs
                                                                    & charts</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/online-courses.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-color-swatch text-success fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                    <span class="path6"></span>
                                                                    <span class="path7"></span>
                                                                    <span class="path8"></span>
                                                                    <span class="path9"></span>
                                                                    <span class="path10"></span>
                                                                    <span class="path11"></span>
                                                                    <span class="path12"></span>
                                                                    <span class="path13"></span>
                                                                    <span class="path14"></span>
                                                                    <span class="path15"></span>
                                                                    <span class="path16"></span>
                                                                    <span class="path17"></span>
                                                                    <span class="path18"></span>
                                                                    <span class="path19"></span>
                                                                    <span class="path20"></span>
                                                                    <span class="path21"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">Online
                                                                    Courses</span>
                                                                <span class="fs-7 fw-semibold text-muted">Student
                                                                    progress</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/marketing.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-chart-simple text-dark fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span
                                                                    class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                                <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                    conversions</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/bidding.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-switch text-warning fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                                <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                    conversions</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/pos.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-abstract-42 text-danger fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">POS
                                                                    System</span>
                                                                <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                    conversions</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/dashboards/call-center.html"
                                                            class="menu-link">
                                                            <span
                                                                class="menu-custom-icon d-flex flex-center w-40px h-40px me-3 flex-shrink-0 rounded">
                                                                <i class="ki-duotone ki-call text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                    <span class="path6"></span>
                                                                    <span class="path7"></span>
                                                                    <span class="path8"></span>
                                                                </i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">Call
                                                                    Center</span>
                                                                <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                    conversions</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                            <div class="separator separator-dashed mx-5 my-5"></div>
                                            <!--begin:Landing-->
                                            <div class="d-flex flex-stack flex-lg-nowrap mx-5 flex-wrap gap-2">
                                                <div class="d-flex flex-column me-5">
                                                    <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                                                    <div class="fs-7 fw-semibold text-muted">Onpe page landing template
                                                        with pricing & others</div>
                                                </div>
                                                <a href="../../demo1/dist/landing.html"
                                                    class="btn btn-sm btn-primary fw-bold">Explore</a>
                                            </div>
                                            <!--end:Landing-->
                                        </div>
                                        <!--end:Col-->
                                        <!--begin:Col-->
                                        <div class="menu-more bg-light col-lg-4 py-lg-6 px-lg-6 rounded-end px-3 py-3">
                                            <!--begin:Heading-->
                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4 mt-3 text-gray-800">More
                                                Dashboards</h4>
                                            <!--end:Heading-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/logistics.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Logistics</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/website-analytics.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Website Analytics</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/finance-performance.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Finance Performance</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/store-analytics.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Store Analytics</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/social.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Social</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/delivery.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Delivery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/crypto.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Crypto</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/school.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">School</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item m-0 p-0">
                                                <!--begin:Menu link-->
                                                <a href="../../demo1/dist/dashboards/podcast.html"
                                                    class="menu-link py-2">
                                                    <span class="menu-title">Podcast</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Col-->
                                    </div>
                                    <!--end:Row-->
                                </div>
                                <!--end:Dashboards menu-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-2 me-0">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Pages</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                <!--begin:Pages menu-->
                                <div class="menu-active-bg px-lg-0 px-4">
                                    <!--begin:Tabs nav-->
                                    <div class="d-flex w-100 overflow-auto">
                                        <ul
                                            class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-lg-10 flex-grow-1 flex-nowrap p-0">
                                            <!--begin:Nav item-->
                                            <li class="nav-item mx-lg-1">
                                                <a class="nav-link py-lg-6 active text-active-primary py-3"
                                                    href="#" data-bs-toggle="tab"
                                                    data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                            </li>
                                            <!--end:Nav item-->
                                            <!--begin:Nav item-->
                                            <li class="nav-item mx-lg-1">
                                                <a class="nav-link py-lg-6 text-active-primary py-3" href="#"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                            </li>
                                            <!--end:Nav item-->
                                            <!--begin:Nav item-->
                                            <li class="nav-item mx-lg-1">
                                                <a class="nav-link py-lg-6 text-active-primary py-3" href="#"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                            </li>
                                            <!--end:Nav item-->
                                            <!--begin:Nav item-->
                                            <li class="nav-item mx-lg-1">
                                                <a class="nav-link py-lg-6 text-active-primary py-3" href="#"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                            </li>
                                            <!--end:Nav item-->
                                            <!--begin:Nav item-->
                                            <li class="nav-item mx-lg-1">
                                                <a class="nav-link py-lg-6 text-active-primary py-3" href="#"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                            </li>
                                            <!--end:Nav item-->
                                        </ul>
                                    </div>
                                    <!--end:Tabs nav-->
                                    <!--begin:Tab content-->
                                    <div class="tab-content py-lg-8 px-lg-7 py-4">
                                        <!--begin:Tab pane-->
                                        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-8">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile
                                                            </h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Overview</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/projects.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Projects</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/campaigns.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Campaigns</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/documents.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Documents</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/followers.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Followers</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/pages/user-profile/activity.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Activity</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate
                                                                </h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/about.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">About</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/team.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Our Team</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/contact.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Contact Us</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/licenses.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Licenses</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/sitemap.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Sitemap</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/careers/list.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Careers List</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/careers/apply.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Careers Apply</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/faq/classic.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">FAQ Classic</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/faq/extended.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">FAQ Extended</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/blog/home.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Blog Home</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/blog/post.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Blog Post</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/pricing.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Column Pricing</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/pricing/table.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Table Pricing</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/social/feeds.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Feeds</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/social/activity.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Activty</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/social/followers.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Followers</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/social/settings.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Settings</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-4">
                                                    <img src="assets/media/stock/600x600/img-82.jpg"
                                                        class="mw-100 rounded" alt="" />
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Tab pane-->
                                        <!--begin:Tab pane-->
                                        <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-5 mb-lg-0 mb-6">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/overview.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Overview</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/settings.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Settings</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/security.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Security</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/activity.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Activity</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/billing.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Billing</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-6">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/statements.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Statements</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/referrals.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Referrals</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/api-keys.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">API Keys</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item m-0 p-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/account/logs.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Logs</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-7">
                                                    <img src="assets/media/stock/900x600/46.jpg"
                                                        class="mw-100 rounded" alt="" />
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Tab pane-->
                                        <!--begin:Tab pane-->
                                        <div class="tab-pane w-lg-1000px"
                                            id="kt_app_header_menu_pages_authentication">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-3 mb-lg-0 mb-6">
                                                    <!--begin:Menu section-->
                                                    <div class="mb-6">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout
                                                        </h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-In</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-Up</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/corporate/two-factor.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Two-Factor</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/corporate/reset-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Reset Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/corporate/new-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">New Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                    <!--begin:Menu section-->
                                                    <div class="mb-0">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/overlay/sign-in.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-In</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/overlay/sign-up.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-Up</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/overlay/two-factor.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Two-Factor</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/overlay/reset-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Reset Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/overlay/new-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">New Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-3 mb-lg-0 mb-6">
                                                    <!--begin:Menu section-->
                                                    <div class="mb-6">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/creative/sign-in.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-in</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/creative/sign-up.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-up</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/creative/two-factor.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Two-Factor</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Reset Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/creative/new-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">New Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                    <!--begin:Menu section-->
                                                    <div class="mb-6">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/fancy/sign-in.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-In</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/fancy/sign-up.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Sign-Up</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/fancy/two-factor.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Two-Factor</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/fancy/reset-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Reset Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/layouts/fancy/new-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">New Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-3 mb-lg-0 mb-6">
                                                    <!--begin:Menu section-->
                                                    <div class="mb-0">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Multi-Steps Sign-Up</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/welcome.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Welcome Message</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/verify-email.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Verify Email</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/coming-soon.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Coming Soon</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/password-confirmation.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Password Confirmation</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/account-deactivated.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Account Deactivation</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/error-404.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Error 404</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/general/error-500.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Error 500</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-3 mb-lg-0 mb-6">
                                                    <!--begin:Menu section-->
                                                    <div class="mb-0">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/welcome-message.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Welcome Message</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/reset-password.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Reset Password</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/subscription-confirmed.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Subscription Confirmed</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/card-declined.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Credit Card Declined</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/promo-1.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Promo 1</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/promo-2.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Promo 2</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item m-0 p-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/authentication/email/promo-3.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Promo 3</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu section-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Tab pane-->
                                        <!--begin:Tab pane-->
                                        <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-7">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General
                                                                    Modals</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/general/invite-friends.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Invite Friends</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/general/view-users.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">View Users</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/general/select-users.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Select Users</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/general/upgrade-plan.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Upgrade Plan</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/general/share-earn.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Share & Earn</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/forms/new-target.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">New Target</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/forms/new-card.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">New Card</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/forms/new-address.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">New Address</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/forms/create-api-key.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create API Key</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/forms/bidding.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Bidding</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-6">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced
                                                                    Modals</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/create-app.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create App</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/create-campaign.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Campaign</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/create-account.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Business
                                                                            Acc</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/create-project.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Project</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Top Up Wallet</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Offer a Deal</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Two Factor Auth</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/search/horizontal.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Horizontal</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/search/vertical.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Vertical</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/search/users.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Users</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/search/select-location.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Select Location</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-lg-0 mb-6">
                                                            <!--begin:Menu section-->
                                                            <div class="mb-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/horizontal.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Horizontal</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/vertical.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Vertical</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/two-factor-authentication.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Two Factor Auth</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/create-app.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create App</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/create-campaign.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Campaign</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/create-account.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Account</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/create-project.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Create Project</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Top Up Wallet</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item m-0 p-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/utilities/wizards/offer-a-deal.html"
                                                                        class="menu-link">
                                                                        <span class="menu-title">Offer a Deal</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu section-->
                                                        </div>
                                                        <!--end:Col-->
                                                    </div>
                                                    <!--end:Row-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-5 pe-lg-5">
                                                    <img src="assets/media/stock/600x600/img-84.jpg"
                                                        class="mw-100 rounded" alt="" />
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Tab pane-->
                                        <!--begin:Tab pane-->
                                        <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-4 mb-lg-0 mb-6">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/lists.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Lists</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/statistics.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Statistics</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/charts.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Charts</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/mixed.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Mixed</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/tables.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Tables</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/widgets/feeds.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Feeds</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-8">
                                                    <img src="assets/media/stock/900x600/44.jpg"
                                                        class="mw-100 rounded" alt="" />
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Tab pane-->
                                    </div>
                                    <!--end:Tab content-->
                                </div>
                                <!--end:Pages menu-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-lg-2 me-0">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Apps</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-rocket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Projects</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">My Projects</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Project</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Targets</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Budget</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-handcart fs-2"></i>
                                        </span>
                                        <span class="menu-title">eCommerce</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Catalog</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Products</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Categories</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Add Product</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Edit Product</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Add Category</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Edit Category</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click"
                                            class="menu-item menu-accordion menu-sub-indention">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sales</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/listing.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Orders Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/details.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Order Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Add Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Edit Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click"
                                            class="menu-item menu-accordion menu-sub-indention">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customers</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/customers/listing.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Customers Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/customers/details.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Customers Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click"
                                            class="menu-item menu-accordion menu-sub-indention">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Reports</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Products Viewed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/sales.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sales</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/returns.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Returns</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Customer Orders</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Shipping</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-chart fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Support Center</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tickets</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tickets/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Ticket List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tickets/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Ticket View</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorials</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tutorials/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Tutorials List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tutorials/post.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Tutorials Post</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/faq.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">FAQ</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/licenses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Licenses</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Contact Us</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-shield-tick fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">User Management</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/users/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Users List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/users/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View User</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Roles</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/roles/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Roles List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/roles/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View Roles</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/user-management/permissions.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Permissions</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-phone fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Contacts</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/add-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/edit-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Edit Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/view-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-basket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Subscriptions</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/subscriptions/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/subscriptions/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Subscription List</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/subscriptions/add.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Subscription</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/subscriptions/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Subscription</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-briefcase fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Customers</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/customers/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customer Listing</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customer Details</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-credit-cart fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Invoice Management</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start"
                                            class="menu-item menu-lg-down-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Profile</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-1.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invoice 1</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-2.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invoice 2</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-3.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invoice 3</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create Invoice</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-file-added fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">File Manager</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/file-manager/folders.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Folders</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/file-manager/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/file-manager/blank.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Blank Directory</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/file-manager/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Inbox</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Messages</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-light-success">3</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Compose</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View & Reply</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-message-text-2 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Chat</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Private Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Group Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Drawer Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-calendar-8 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Calendar</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-2 me-0">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Layouts</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-900px w-xxl-950px p-0">
                                <!--begin:Dashboards menu-->
                                <div class="menu-active-bg py-lg-6 px-lg-6 px-3 pb-3 pt-1"
                                    data-kt-menu-dismiss="true">
                                    <!--begin:Row-->
                                    <div class="row">
                                        <!--begin:Col-->
                                        <div class="col-lg-7">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-4 mb-3">
                                                    <!--begin:Heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4 mt-3 text-gray-800">
                                                        Layouts</h4>
                                                    <!--end:Heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/layouts/light-sidebar.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Light Sidebar</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/layouts/dark-sidebar.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Dark Sidebar</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/layouts/light-header.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Light Header</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/layouts/dark-header.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Dark Header</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-4 mb-3">
                                                    <!--begin:Heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4 mt-3 text-gray-800">
                                                        Toolbars</h4>
                                                    <!--end:Heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/toolbars/classic.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Classic</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/toolbars/saas.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">SaaS</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/toolbars/accounting.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Accounting</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/toolbars/extended.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Extended</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/toolbars/reports.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Reports</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                                <!--begin:Col-->
                                                <div class="col-lg-4 mb-3">
                                                    <!--begin:Heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4 mt-3 text-gray-800">
                                                        Asides</h4>
                                                    <!--end:Heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/asides/aside-1.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Filters</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/asides/aside-2.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Segments</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/asides/aside-3.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Shipment History</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/asides/aside-4.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Courier Activity</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item m-0 p-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../../demo1/dist/asides/aside-5.html"
                                                            class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span
                                                                    class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                            </span>
                                                            <span class="menu-title">Calendar</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                            <div class="separator separator-dashed mx-lg-5 mb-6 mt-2"></div>
                                            <!--begin:Layout Builder-->
                                            <div
                                                class="d-flex flex-stack flex-lg-nowrap mb-lg-0 mx-lg-5 mb-5 flex-wrap gap-2">
                                                <div class="d-flex flex-column me-5">
                                                    <div class="fs-6 fw-bold text-gray-800">Layout Builder</div>
                                                    <div class="fs-7 fw-semibold text-muted">Customize, preview and
                                                        export</div>
                                                </div>
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                                    class="btn btn-sm btn-primary fw-bold">Try Builder</a>
                                            </div>
                                            <!--end:Layout Builder-->
                                        </div>
                                        <!--end:Col-->
                                        <!--begin:Col-->
                                        <div class="col-lg-5 py-lg-3 pe-lg-8 d-flex align-items-center mb-3">
                                            <img src="assets/media/stock/900x600/45.jpg" class="mw-100 rounded"
                                                alt="" />
                                        </div>
                                        <!--end:Col-->
                                    </div>
                                    <!--end:Row-->
                                </div>
                                <!--end:Dashboards menu-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-lg-2 me-0">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Help</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                        target="_blank"
                                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-rocket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Components</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs"
                                        target="_blank" title="Check out the complete documentation"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-26 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Documentation</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        target="_blank">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-code fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Changelog v8.2.0</span>
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
                <!--end::Menu wrapper-->
                <!--begin::Navbar-->
                <div class="app-navbar flex-shrink-0">
                    <!--begin::Search-->
                    <div class="app-navbar-item align-items-stretch ms-md-4 ms-1">
                        <!--begin::Search-->
                        <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                            data-kt-search-keypress="true" data-kt-search-min-length="2"
                            data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
                            data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                            data-kt-menu-placement="bottom-end">
                            <!--begin::Search toggle-->
                            <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                id="kt_header_search_toggle">
                                <div
                                    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
                                    <i class="ki-duotone ki-magnifier fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Search toggle-->
                            <!--begin::Menu-->
                            <div data-kt-search-element="content"
                                class="menu menu-sub menu-sub-dropdown w-325px w-md-375px p-7">
                                <!--begin::Wrapper-->
                                <div data-kt-search-element="wrapper">
                                    <!--begin::Form-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                        autocomplete="off">
                                        <!--begin::Icon-->
                                        <i
                                            class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-0 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text"
                                            class="search-input form-control form-control-flush ps-10"
                                            name="search" value="" placeholder="Search..."
                                            data-kt-search-element="input" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span
                                            class="search-spinner position-absolute top-50 translate-middle-y lh-0 d-none end-0 me-1"
                                            data-kt-search-element="spinner">
                                            <span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span
                                            class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 translate-middle-y lh-0 d-none end-0"
                                            data-kt-search-element="clear">
                                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Reset-->
                                        <!--begin::Toolbar-->
                                        <div class="position-absolute top-50 translate-middle-y end-0"
                                            data-kt-search-element="toolbar">
                                            <!--begin::Preferences toggle-->
                                            <div data-kt-search-element="preferences-show"
                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                data-bs-toggle="tooltip" title="Show search preferences">
                                                <i class="ki-duotone ki-setting-2 fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Preferences toggle-->
                                            <!--begin::Advanced search toggle-->
                                            <div data-kt-search-element="advanced-options-form-show"
                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                data-bs-toggle="tooltip" title="Show more search options">
                                                <i class="ki-duotone ki-down fs-2"></i>
                                            </div>
                                            <!--end::Advanced search toggle-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Separator-->
                                    <div class="separator mb-6 border-gray-200"></div>
                                    <!--end::Separator-->
                                    <!--begin::Recently viewed-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-350px">
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5"
                                                data-kt-search-element="category-title">Users</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Karina Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                    <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Ana Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                    <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                    <span class="fs-7 fw-semibold text-muted">System
                                                        Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5 pt-5"
                                                data-kt-search-element="category-title">Customers</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="assets/media/svg/brand-logos/volicity-9.svg"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="assets/media/svg/brand-logos/tvit.svg"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="assets/media/svg/misc/infography.svg"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                    <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="assets/media/svg/brand-logos/leaf.svg"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="assets/media/svg/brand-logos/tower.svg"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                    <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5 pt-5"
                                                data-kt-search-element="category-title">Projects</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-frame fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                        Discussion</span>
                                                    <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Recently viewed-->
                                    <div class="mb-5" data-kt-search-element="main">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-stack fw-semibold mb-4">
                                            <!--begin::Label-->
                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-325px">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">BoomApp
                                                        by Keenthemes</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">"Kept
                                                        API Project Meeting</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">"KPI
                                                        Monitoring App Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">Project
                                                        Reference FAQ</a>
                                                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-sms fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">"FitPro
                                                        App Development</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-bank fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">Shopix
                                                        Mobile App</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-semibold text-gray-800">"Landing
                                                        UI Design" Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="d-none text-center">
                                        <!--begin::Icon-->
                                        <div class="pb-10 pt-10">
                                            <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Message-->
                                        <div class="pb-15 fw-semibold">
                                            <h3 class="fs-5 mb-2 text-gray-600">No result found</h3>
                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="advanced-options-form" class="d-none pt-1">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text"
                                            class="form-control form-control-sm form-control-solid"
                                            placeholder="Contains the word" name="query" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type"
                                                    value="has" checked="checked" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type"
                                                    value="users" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type"
                                                    value="orders" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type"
                                                    value="projects" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="assignedto"
                                            class="form-control form-control-sm form-control-solid"
                                            placeholder="Assigned to" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="collaborators"
                                            class="form-control form-control-sm form-control-solid"
                                            placeholder="Collaborators" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment"
                                                    value="has" checked="checked" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
                                                    attachment</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment"
                                                    value="any" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <select name="timezone" aria-label="Select a Timezone"
                                            data-control="select2" data-dropdown-parent="#kt_header_search"
                                            data-placeholder="date_period"
                                            class="form-select form-select-sm form-select-solid">
                                            <option value="next">Within the next</option>
                                            <option value="last">Within the last</option>
                                            <option value="between">Between</option>
                                            <option value="on">On</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="number" name="date_number"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Lenght" value="" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="date_typer" aria-label="Select a Timezone"
                                                data-control="select2" data-dropdown-parent="#kt_header_search"
                                                data-placeholder="Period"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="days">Days</option>
                                                <option value="weeks">Weeks</option>
                                                <option value="months">Months</option>
                                                <option value="years">Years</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                            data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                        <a href="../../demo1/dist/pages/search/horizontal.html"
                                            class="btn btn-sm fw-bold btn-primary"
                                            data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="preferences" class="d-none pt-1">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="border-bottom pb-4">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span
                                                class="form-check-label fs-6 fw-semibold me-2 ms-0 text-gray-700">Projects</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="border-bottom py-4">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span
                                                class="form-check-label fs-6 fw-semibold me-2 ms-0 text-gray-700">Targets</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="border-bottom py-4">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span
                                                class="form-check-label fs-6 fw-semibold me-2 ms-0 text-gray-700">Affiliate
                                                Programs</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="border-bottom py-4">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span
                                                class="form-check-label fs-6 fw-semibold me-2 ms-0 text-gray-700">Referrals</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="border-bottom py-4">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span
                                                class="form-check-label fs-6 fw-semibold me-2 ms-0 text-gray-700">Users</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end pt-7">
                                        <button type="reset"
                                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                            data-kt-search-element="preferences-dismiss">Cancel</button>
                                        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                            Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Search-->
                    <!--begin::Activities-->
                    <div class="app-navbar-item ms-md-4 ms-1">
                        <!--begin::Drawer toggle-->
                        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                            id="kt_activities_toggle">
                            <i class="ki-duotone ki-messages fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </div>
                        <!--end::Drawer toggle-->
                    </div>
                    <!--end::Activities-->
                    <!--begin::Notifications-->
                    <div class="app-navbar-item ms-md-4 ms-1">
                        <!--begin::Menu- wrapper-->
                        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                            <i class="ki-duotone ki-notification-status fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                            data-kt-menu="true" id="kt_menu_notifications">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                <!--begin::Title-->
                                <h3 class="fw-semibold mb-6 mt-10 px-9 text-white">Notifications
                                    <span class="fs-8 ps-3 opacity-75">24 reports</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Tabs-->
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link opacity-state-100 pb-4 text-white opacity-75"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link opacity-state-100 active pb-4 text-white opacity-75"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link opacity-state-100 pb-4 text-white opacity-75"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Project
                                                        Alice</a>
                                                    <div class="fs-7 text-gray-400">Phase 1 development</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 hr</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-information fs-2 text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">HR
                                                        Confidential</a>
                                                    <div class="fs-7 text-gray-400">Confidential staff documents</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Company
                                                        HR</a>
                                                    <div class="fs-7 text-gray-400">Corporeate staff profiles</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Project
                                                        Redux</a>
                                                    <div class="fs-7 text-gray-400">New frontend admin theme</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Project
                                                        Breafing</a>
                                                    <div class="fs-7 text-gray-400">Product launch status update</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Banner
                                                        Assets</a>
                                                    <div class="fs-7 text-gray-400">Collection of banner images</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                            <span class="path6"></span>
                                                            <span class="path7"></span>
                                                            <span class="path8"></span>
                                                            <span class="path9"></span>
                                                            <span class="path10"></span>
                                                            <span class="path11"></span>
                                                            <span class="path12"></span>
                                                            <span class="path13"></span>
                                                            <span class="path14"></span>
                                                            <span class="path15"></span>
                                                            <span class="path16"></span>
                                                            <span class="path17"></span>
                                                            <span class="path18"></span>
                                                            <span class="path19"></span>
                                                            <span class="path20"></span>
                                                            <span class="path21"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-hover-primary fw-bold text-gray-800">Icon
                                                        Assets</a>
                                                    <div class="fs-7 text-gray-400">Collection of SVG icons</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">20 March</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="border-top py-3 text-center">
                                        <a href="../../demo1/dist/pages/user-profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                    role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column px-9">
                                        <!--begin::Section-->
                                        <div class="pb-0 pt-10">
                                            <!--begin::Title-->
                                            <h3 class="text-dark fw-bold text-center">Get Pro Access</h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold pt-1 text-center text-gray-600">Outlines keep you
                                                honest. They stoping you from amazing poorly about drive</div>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="mb-9 mt-5 text-center">
                                                <a href="#" class="btn btn-sm btn-primary px-6"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Illustration-->
                                        <div class="px-4 text-center">
                                            <img class="mw-100 mh-200px" alt="image"
                                                src="assets/media/illustrations/sketchy-1/1.png" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">New order</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Just now</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">New
                                                    customer</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Payment
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Search
                                                    query</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">API
                                                    connection</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 week</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Database
                                                    restore</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Mar 5</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">System
                                                    update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">May 15</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Server OS
                                                    update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Apr 3</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">API
                                                    rollback</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jun 30</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Refund
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jul 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Withdrawal
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Sep 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-hover-primary fw-semibold text-gray-800">Mail
                                                    tasks</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Dec 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="border-top py-3 text-center">
                                        <a href="../../demo1/dist/pages/user-profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Notifications-->
                    <!--begin::Chat-->
                    <div class="app-navbar-item ms-md-4 ms-1">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
                            id="kt_drawer_chat_toggle">
                            <i class="ki-duotone ki-message-text-2 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <span
                                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle start-50 animation-blink top-0"></span>
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Chat-->
                    <!--begin::My apps links-->
                    <div class="app-navbar-item ms-md-4 ms-1">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </div>
                        <!--begin::My apps-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px"
                            data-kt-menu="true">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">My Apps</div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-active-light-primary me-n3"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
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
                                                                    type="checkbox" value="1"
                                                                    checked="checked" name="notifications" />
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
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-5">
                                    <!--begin::Scroll-->
                                    <div class="mh-450px scroll-y me-n5 pe-5">
                                        <!--begin::Row-->
                                        <div class="row g-2">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/amazon.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">AWS</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/angular-icon-1.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">AngularJS</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/atica.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Atica</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/beats-electronics.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Music</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/codeigniter.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Codeigniter</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/bootstrap-4.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Bootstrap</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/google-tag-manager.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">GTM</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/disqus.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Disqus</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Dribble</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/google-play-store.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Play Store</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/google-podcasts.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Podcasts</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/figma-1.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Figma</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/github.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Github</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/gitlab.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Gitlab</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Instagram</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-hover-primary bg-hover-light mb-3 rounded px-3 py-4 text-center text-gray-800">
                                                    <img src="assets/media/svg/brand-logos/pinterest-p.svg"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Pinterest</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::My apps-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::My apps links-->
                    <!--begin::User menu-->
                    <div class="app-navbar-item ms-md-4 ms-1" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="symbol symbol-35px cursor-pointer"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" class="rounded-3"
                                alt="user" />
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                            <span
                                                class="badge badge-light-success fw-bold fs-8 ms-2 px-2 py-1">Pro</span>
                                        </div>
                                        <a href="#"
                                            class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->name }}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My
                                    Profile</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
                                    <span class="menu-text">My Projects</span>
                                    <span class="menu-badge">
                                        <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">My Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/referrals.html"
                                            class="menu-link px-5">Referrals</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/billing.html"
                                            class="menu-link px-5">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/statements.html"
                                            class="menu-link px-5">Payments</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/statements.html"
                                            class="menu-link d-flex flex-stack px-5">Statements
                                            <span class="lh-0 ms-2" data-bs-toggle="tooltip"
                                                title="View your statements">
                                                <i class="ki-duotone ki-information-5 fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox"
                                                    value="1" checked="checked" name="notifications" />
                                                <span class="form-check-label text-muted fs-7">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My
                                    Statements</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Mode
                                        <span class="position-absolute translate-middle-y top-50 end-0 ms-5">
                                            <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                            <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span></span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px py-4"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item my-0 px-3">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                    <span class="path7"></span>
                                                    <span class="path8"></span>
                                                    <span class="path9"></span>
                                                    <span class="path10"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Light</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item my-0 px-3">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item my-0 px-3">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">System</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Language
                                        <span
                                            class="fs-8 bg-light position-absolute translate-middle-y top-50 end-0 rounded px-3 py-2">English
                                            <img class="w-15px h-15px rounded-1 ms-2"
                                                src="assets/media/flags/united-states.svg"
                                                alt="" /></span></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/settings.html"
                                            class="menu-link d-flex active px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/united-states.svg"
                                                    alt="" />
                                            </span>English</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/settings.html"
                                            class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/spain.svg"
                                                    alt="" />
                                            </span>Spanish</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/settings.html"
                                            class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/germany.svg"
                                                    alt="" />
                                            </span>German</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/settings.html"
                                            class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/japan.svg"
                                                    alt="" />
                                            </span>Japanese</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/account/settings.html"
                                            class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/france.svg"
                                                    alt="" />
                                            </span>French</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item my-1 px-5">
                                <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account
                                    Settings</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html"
                                    class="menu-link px-5">Sign Out</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User menu-->
                    <!--begin::Header menu toggle-->
                    <div class="app-navbar-item d-lg-none me-n2 ms-2" title="Show header menu">
                        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                            id="kt_app_header_menu_toggle">
                            <i class="ki-duotone ki-element-4 fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--end::Header menu toggle-->
                    <!--begin::Aside toggle-->
                    <!--end::Header menu toggle-->
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>
    <!--end::Header-->
</html>
