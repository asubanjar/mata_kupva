@extends('layouts.app')
@section('title', 'Daftar Subjek')
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Monitoring Pimpinan</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Beranda</li>
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
                <!--begin::Row-->
                <div class="row g-5 gx-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-xl-10 mb-5"
                            style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold lh-1 ls-n2 me-2 text-white">{{ $subjects->count() }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-white opacity-75">Subjek / Kegiatan Aktif</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column w-100 mt-3">
                                    <div
                                        class="d-flex justify-content-between fw-bold fs-6 w-100 mb-2 mt-auto text-white opacity-75">
                                        <span>{{ $subject_pendings->count() }} Dalam proses</span>
                                        <span>{{ $subject_finish_percentage }}%</span>
                                    </div>
                                    <div class="h-8px w-100 mx-3 rounded bg-white bg-opacity-50">
                                        <div class="h-8px rounded bg-white" role="progressbar"
                                            style="width: {{ $subject_finish_percentage }}%;" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 20-->
                        <!--begin::List widget 26-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title fw-bold text-gray-800">Unit aksi selesai</h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <a class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 me-n1 text-gray-400">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Aksi</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ url('/monitoring-pimpinan/statistic/action') }}"
                                                class="menu-link px-3">Lihat statistik</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ url('/monitoring-pimpinan/monitoring/action') }}"
                                                class="menu-link px-3">Lihat rencana aksi</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Laporan</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                @foreach ($statistic_jabatan_finishes as $statistic_jabatan_finish)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#"
                                            class="text-primary fw-semibold fs-6 me-2">{{ $statistic_jabatan_finish->name }}</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end h-auto w-auto">
                                            {{ $statistic_jabatan_finish->total_action_finish }} /
                                            {{ $statistic_jabatan_finish->total_action }}
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 17-->
                        <div class="card card-flush h-md-50 mb-xl-10 mb-5">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Subject Detail-->
                                        <span
                                            class="fs-2hx fw-bold text-dark lh-1 ls-n2 me-2">{{ $subject_details->count() }}</span>
                                        <!--end::Subject Detail-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>{{ number_format($subject_detail_finish_percentage, 2, '.', ',') }}%
                                            Selesai</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="fw-semibold fs-6 pt-1 text-gray-400">Detail Subjek Aktif</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-center flex-wrap pb-4 pt-2">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                        data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="flex-grow-1 me-4 text-gray-500">Selesai</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-xxl-end text-gray-700">
                                            {{ $subject_detail_finishes->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="flex-grow-1 me-4 text-gray-500">Dalam proses</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-xxl-end text-gray-700">
                                            {{ $subject_detail_pendings->count() }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 17-->
                        <!--begin::List widget 26-->
                        <div class="card card-flush h-lg-50">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title fw-bold text-gray-800">Unit aksi dalam proses</h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <a class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 me-n1 text-gray-400">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Aksi</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ url('/monitoring-pimpinan/statistic/action') }}"
                                                class="menu-link px-3">Lihat statistik</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ url('/monitoring-pimpinan/monitoring/action') }}"
                                                class="menu-link px-3">Lihat rencana aksi</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Laporan</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                @foreach ($statistic_jabatan_pendings as $statistic_jabatan_pending)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#"
                                            class="text-danger fw-semibold fs-6 me-2">{{ $statistic_jabatan_pending->name }}</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end h-auto w-auto">
                                            {{ $statistic_jabatan_pending->total_action_pending }} /
                                            {{ $statistic_jabatan_pending->total_action }}
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 26-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Chart widget 31-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header mb-7 pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Statistik Rencana Aksi</span>
                                    <span class="fw-semibold fs-6 mt-1 text-gray-400">Total
                                        {{ $statistic_jabatans->count() }} Jabatan</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                                        class="btn btn-sm btn-light">PDF Laporan</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_31_chart" class="w-100 h-400px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 31-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Chart widget 26-->
                        <div class="card card-flush h-xl-100 overflow-hidden">
                            <!--begin::Header-->
                            <div class="card-header mb-2 pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title fw-bold text-gray-800">Grafik Rencana Aksi</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-1 pt-0">
                                <!--begin::Info-->
                                <div class="mb-5 px-9">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Value-->
                                        <span
                                            class="fs-2hx fw-bold lh-1 ls-n2 me-2 text-gray-800">{{ $actions->count() }}</span>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span
                                            class="badge badge-success fs-base">{{ number_format($action_percentage, 2, '.', ',') }}%
                                            Selesai</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-400">Jumlah</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Chart-->
                                <div id="action_chart" class="min-h-auto pe-6 ps-4" data-kt-chart-info="Transactions"
                                    style="height: 600px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 26-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
    <script src="assets/js/custom/utilities/modals/create-account.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

    <script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script>
        var KTCardsWidget17 = function() {
            // Private methods
            var initChart = function() {
                var el = document.getElementById('kt_card_widget_17_chart');

                if (!el) {
                    return;
                }

                var options = {
                    size: el.getAttribute('data-kt-size') ? parseInt(el.getAttribute('data-kt-size')) : 70,
                    lineWidth: el.getAttribute('data-kt-line') ? parseInt(el.getAttribute('data-kt-line')) : 11,
                    rotate: el.getAttribute('data-kt-rotate') ? parseInt(el.getAttribute('data-kt-rotate')) :
                        145,
                    //percent:  el.getAttribute('data-kt-percent') ,
                }

                var canvas = document.createElement('canvas');
                var span = document.createElement('span');

                if (typeof(G_vmlCanvasManager) !== 'undefined') {
                    G_vmlCanvasManager.initElement(canvas);
                }

                var ctx = canvas.getContext('2d');
                canvas.width = canvas.height = options.size;

                el.appendChild(span);
                el.appendChild(canvas);

                ctx.translate(options.size / 2, options.size / 2); // change center
                ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI); // rotate -90 deg

                //imd = ctx.getImageData(0, 0, 240, 240);
                var radius = (options.size - options.lineWidth) / 2;

                var drawCircle = function(color, lineWidth, percent) {
                    percent = Math.min(Math.max(0, percent || 1), 1);
                    ctx.beginPath();
                    ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
                    ctx.strokeStyle = color;
                    ctx.lineCap = 'round'; // butt, round or square
                    ctx.lineWidth = lineWidth
                    ctx.stroke();
                };

                // Init 

                drawCircle(KTUtil.getCssVariableValue('--bs-primary'), options.lineWidth,
                    {{ $subject_detail_pendings->count() + $subject_detail_finishes->count() }} /
                    {{ $subject_details->count() }});

                @if ($subject_detail_finishes->count())
                    drawCircle(KTUtil.getCssVariableValue('--bs-success'), options.lineWidth,
                        {{ $subject_detail_finishes->count() }} /
                        {{ $subject_details->count() }});
                @endif
            }

            // Public methods
            return {
                init: function() {
                    initChart();
                }
            }
        }();

        // Webpack support
        if (typeof module !== 'undefined') {
            module.exports = KTCardsWidget17;
        }
    </script>
    <script>
        // Class definition
        var KTChartsWidget31 = (function() {
            // Private methods
            var initChart1 = function() {
                // Check if amchart library is included
                if (typeof am5 === "undefined") {
                    return;
                }

                var element = document.getElementById("kt_charts_widget_31_chart");

                if (!element) {
                    return;
                }

                var chart;
                var root;

                var init = function() {
                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    root = am5.Root.new(element);

                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root.setThemes([am5themes_Animated.new(root)]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    chart = root.container.children.push(
                        am5radar.RadarChart.new(root, {
                            panX: false,
                            panY: false,
                            wheelX: "panX",
                            wheelY: "zoomX",
                            innerRadius: am5.percent(40),
                            radius: am5.percent(70),
                            arrangeTooltips: false,
                        })
                    );

                    var cursor = chart.set(
                        "cursor",
                        am5radar.RadarCursor.new(root, {
                            behavior: "zoomX",
                        })
                    );

                    cursor.lineY.set("visible", false);

                    // Create axes and their renderers
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_axes
                    var xRenderer = am5radar.AxisRendererCircular.new(root, {
                        minGridDistance: 30,
                    });

                    xRenderer.labels.template.setAll({
                        textType: "radial",
                        radius: 10,
                        paddingTop: 0,
                        paddingBottom: 0,
                        centerY: am5.p50,
                        fontWeight: "400",
                        fontSize: 11,
                        fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-800")),
                    });

                    xRenderer.grid.template.setAll({
                        location: 0.5,
                        strokeDasharray: [2, 2],
                        stroke: KTUtil.getCssVariableValue('--bs-gray-400')
                    });

                    var xAxis = chart.xAxes.push(
                        am5xy.CategoryAxis.new(root, {
                            maxDeviation: 0,
                            categoryField: "name",
                            renderer: xRenderer,
                        })
                    );

                    var yRenderer = am5radar.AxisRendererRadial.new(root, {
                        minGridDistance: 30,
                    });

                    yRenderer.labels.template.setAll({
                        fontWeight: "500",
                        fontSize: 12,
                        fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-700")),
                    });

                    var yAxis = chart.yAxes.push(
                        am5xy.ValueAxis.new(root, {
                            renderer: yRenderer,
                        })
                    );

                    yRenderer.grid.template.setAll({
                        strokeDasharray: [2, 2],
                        stroke: KTUtil.getCssVariableValue('--bs-gray-400')
                    });

                    // Create series
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_series
                    var series1 = chart.series.push(
                        am5radar.RadarLineSeries.new(root, {
                            name: "Selesai",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value1",
                            categoryXField: "name",
                            fill: am5.color(KTUtil.getCssVariableValue("--bs-primary")),
                        })
                    );

                    series1.strokes.template.setAll({
                        strokeOpacity: 0,
                    });

                    series1.fills.template.setAll({
                        visible: true,
                        fill: am5.color(KTUtil.getCssVariableValue("--bs-primary")),
                        fillOpacity: 0.5,
                    });

                    var series2 = chart.series.push(
                        am5radar.RadarLineSeries.new(root, {
                            name: "Proses",
                            xAxis: xAxis,
                            yAxis: yAxis,
                            valueYField: "value2",
                            categoryXField: "name",
                            stacked: true,
                            tooltip: am5.Tooltip.new(root, {
                                labelText: "Selesai: {value1} \ Proses:{value2}",
                            }),
                            fill: am5.color(KTUtil.getCssVariableValue("--bs-success")),
                        })
                    );

                    series2.strokes.template.setAll({
                        strokeOpacity: 0,
                    });

                    series2.fills.template.setAll({
                        visible: true,
                        fill: am5.color(KTUtil.getCssVariableValue("--bs-primary")),
                        fillOpacity: 0.5,
                    });

                    var legend = chart.radarContainer.children.push(
                        am5.Legend.new(root, {
                            width: 150,
                            centerX: am5.p50,
                            centerY: am5.p50
                        })
                    );
                    legend.data.setAll([series1, series2]);

                    legend.labels.template.setAll({
                        fontWeight: "600",
                        fontSize: 13,
                        fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-700")),
                    });

                    // Set data
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Setting_data
                    var data = [
                        @foreach ($statistic_jabatans as $statistic_jabatan)
                            {
                                name: "{{ $statistic_jabatan->name }}",
                                value1: {{ $statistic_jabatan->total_action_finish }},
                                value2: {{ $statistic_jabatan->total_action - $statistic_jabatan->total_action_finish }},
                            },
                        @endforeach
                    ];

                    series1.data.setAll(data);
                    series2.data.setAll(data);
                    xAxis.data.setAll(data);

                    // Animate chart and series in
                    // https://www.amcharts.com/docs/v5/concepts/animations/#Initial_animation
                    series1.appear(1000);
                    series2.appear(1000);
                    chart.appear(1000, 100);
                }

                // On amchart ready
                am5.ready(function() {
                    init();
                }); // end am5.ready()

                // Update chart on theme mode change
                KTThemeMode.on("kt.thememode.change", function() {
                    // Destroy chart
                    root.dispose();

                    // Reinit chart
                    init();
                });
            };

            // Public methods
            return {
                init: function() {
                    initChart1();
                }
            };
        })();

        // Webpack support
        // if (typeof module !== "undefined") {
        //     module.exports = KTChartsWidget31;
        // }

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTChartsWidget31.init();
        });
    </script>

    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("action_chart");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: true,
                panY: false,
                wheelX: "panX",
                wheelY: "zoomX",
                layout: root.verticalLayout
            }));

            var data = [
                @foreach ($statistic_jabatans as $statistic_jabatan)
                    {
                        jabatan: "{{ $statistic_jabatan->name }}",
                        action_selesai: {{ $statistic_jabatan->total_action_finish }},
                        action_proses: {{ $statistic_jabatan->total_action - $statistic_jabatan->total_action_finish }},
                    },
                @endforeach
            ];

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
                minGridDistance: 70
            });

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                categoryField: "jabatan",
                renderer: xRenderer,
                tooltip: am5.Tooltip.new(root, {
                    themeTags: ["axis"],
                    animationDuration: 200
                })
            }));

            xRenderer.grid.template.setAll({
                location: 1
            })

            xAxis.data.setAll(data);

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                min: 0,
                renderer: am5xy.AxisRendererY.new(root, {
                    strokeOpacity: 0.1
                })
            }));

            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

            var series0 = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Income",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "action_selesai",
                categoryXField: "jabatan",
                clustered: false,
                tooltip: am5.Tooltip.new(root, {
                    labelText: "selesai: {valueY}"
                })
            }));

            series0.columns.template.setAll({
                fill: am5.color("#2ecc71"),
                width: am5.percent(80),
                tooltipY: 0,
                strokeOpacity: 0
            });

            series0.data.setAll(data);


            var series1 = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Income",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "action_proses",
                categoryXField: "jabatan",
                clustered: false,
                tooltip: am5.Tooltip.new(root, {
                    labelText: "proses: {valueY}"
                })
            }));

            series1.columns.template.setAll({
                fill: am5.color("#F1416C"),
                width: am5.percent(50),
                tooltipY: 0,
                strokeOpacity: 0
            });

            series1.data.setAll(data);

            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chart.appear(1000, 100);
            series0.appear();
            series1.appear();

        }); // end am5.ready()
    </script>

@endsection
