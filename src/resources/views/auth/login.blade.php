<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->

    <head>
        <base href="../../../" />
        <title>DINAMIS - Login</title>
        <meta charset="utf-8" />
        <meta name="description"
            content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords"
            content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('assets/img/ppatk.ico') }}" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
        </script>
    </head>
    <!--end::Head-->
    <!--begin::Body-->

    <body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
            <style>
                body {
                    background-image: url('assets/media/auth/bg10.jpeg');
                }

                [data-bs-theme="dark"] body {
                    background-image: url('assets/media/auth/bg10-dark.jpeg');
                }
            </style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center pb-lg-10 w-100 p-10 pb-0">
                        <!--begin::Image-->
                        <img class="theme-light-show mw-100 w-150px w-lg-300px mb-lg-20 mx-auto mb-10"
                            src="assets/media/auth/agency.png" alt="" />
                        <img class="theme-dark-show mw-100 w-150px w-lg-300px mb-lg-20 mx-auto mb-10"
                            src="assets/media/auth/agency-dark.png" alt="" />
                        <!--end::Image-->
                        <!--begin::Title-->
                        <h1 class="fs-2qx fw-bold mb-7 text-center text-gray-800">Efisien dan Produktif</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-base fw-semibold text-center text-gray-600">In this kind of post,
                            <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a
                            person
                            they’ve interviewed
                            <br />and provides some background information about
                            <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
                            <br />work following this is a transcript of the interview.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Aside-->
                <!--begin::Body-->
                <div
                    class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                    <!--begin::Wrapper-->
                    <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                        <!--begin::Content-->
                        <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                                <!--begin::Form-->
                                <form class="form w-100" novalidate="novalidate" method="POST"
                                    action="{{ route('login.custom') }}">
                                    @csrf
                                    <!--begin::Heading-->
                                    <div class="mb-11 text-center">
                                        <!--begin::Title-->
                                        <h1 class="text-dark fw-bolder mb-3">Masuk</h1>
                                        <!--end::Title-->
                                        <!--begin::Subtitle-->
                                        <div class="fw-semibold fs-6 text-gray-500">Arsip Digital dan Monitoring Tindak
                                            Lanjut</div>
                                        <!--end::Subtitle=-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Username-->
                                        <input id="username" type="text" placeholder="Username" name="username"
                                            autocomplete="off"
                                            class="form-control @error('username') is-invalid @enderror bg-transparent" />
                                        <!--end::Username-->
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-3">
                                        <!--begin::Password-->
                                        <input id="password" type="password" placeholder="Password" name="password"
                                            autocomplete="off"
                                            class="form-control @error('password') is-invalid @enderror bg-transparent" />
                                        <!--end::Password-->
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack fs-base fw-semibold mb-8 flex-wrap gap-3">
                                        @if (session('status'))
                                            <!--begin::Alert-->
                                            <div
                                                class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column px-lg-20 mb-10 px-10 py-10">
                                                <!--begin::Close-->
                                                <button type="button"
                                                    class="position-absolute btn btn-icon btn-icon-danger end-0 top-0 m-2"
                                                    data-bs-dismiss="alert">
                                                    <i class="ki-duotone ki-cross fs-1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </button>
                                                <!--end::Close-->

                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                                <!--end::Icon-->

                                                <!--begin::Wrapper-->
                                                <div class="text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold mb-5">Gagal Masuk</h1>
                                                    <!--end::Title-->

                                                    <!--begin::Separator-->
                                                    <div
                                                        class="separator separator-dashed border-danger mb-5 opacity-25">
                                                    </div>
                                                    <!--end::Separator-->

                                                    <!--begin::Content-->
                                                    <div class="text-dark mb-9">
                                                        Username Atau Password Anda Salah. Apabila username dan password
                                                        sudah sesuai, mohon dipastikan user domain tidak dalam status
                                                        "expired".
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Alert-->
                                        @endif
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Sign In</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--begin::Sign up-->
                            <div class="fw-semibold fs-6 text-center text-gray-500">Copyright &copy; 2024. Pusat
                                Teknologi Informasi - PPATK</p>
                            </div>
                            <!--end::Sign up-->
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->

</html>
