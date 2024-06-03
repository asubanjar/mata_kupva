@extends('layouts.app')
@section('title', 'Watchlist')
@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::About card-->
                <div class="card">

                    <!--begin::Body-->
                    <div class="card-body p-lg-17">
                        <!--begin::About-->
                        <div class="card-title  mb-10">
                            <h1
                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                MATA KUPVA</h1>
                        </div>
                        <div class="mb-18">
                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold text-gray-600">
                                <!--begin::Text-->
                                <p class="mb-8">MATA KUPVA adalah sebuah solusi inovatif yang dirancang untuk memperkuat
                                    pengawasan dan kepatuhan dalam kegiatan usaha pedagang valuta asing (KUPVA) di
                                    Indonesia. Dalam era di mana ekonomi digital dan keuangan menjadi tulang punggung
                                    perekonomian, kemampuan untuk memantau dan mengendalikan aktivitas keuangan dengan
                                    cepat dan akurat adalah kunci sukses. MATA KUPVA memanfaatkan kecerdasan buatan (AI)
                                    dan pembelajaran mesin (ML) untuk memberikan pengawasan real-time, deteksi anomali,
                                    dan peringatan dini terhadap potensi pelanggaran.
                                </p>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <p class="mb-8">Pengawasan terhadap kegiatan usaha pedagang valas (PVA) sangat penting
                                    untuk memastikan kepatuhan terhadap regulasi, meminimalkan risiko pelanggaran, dan
                                    menjaga stabilitas nilai tukar rupiah serta perekonomian nasional. Pengawasan
                                    konvensional seringkali terbentur oleh keterbatasan seperti proses manual yang
                                    memakan waktu dan sumber daya, kesulitan dalam mengidentifikasi pola tersembunyi,
                                    serta kurangnya responsivitas terhadap perubahan modus operandi pelaku pelanggaran.
                                    MATA KUPVA hadir sebagai solusi untuk mengatasi tantangan ini melalui penerapan AI
                                    dan ML.
                                </p>
                                <!--end::Text-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::About-->
                        <div class="overlay">
                            <!--begin::Image-->
                            <img class="w-100 card-rounded" src="{{asset ('assets/media/stock/7.svg') }}" alt="" />
                            <!--end::Image-->

                        </div>
                        <div class="overlay">
                            <!--begin::Image-->
                            <img class="w-100 card-rounded" src="{{asset ('assets/media/stock/10.svg') }}" alt="" />
                            <!--end::Image-->

                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::About card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endsection