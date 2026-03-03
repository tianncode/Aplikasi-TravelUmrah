<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: OpenProduct Version: 1.0.4
Purchase: https://keenthemes.com/products/open-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/open-html-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Feb 2026 10:38:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Rizqia Travel Umrah & Haji</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Open admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Open theme, bootstrap, bootstrap 5, admin themes, laravel, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Open HTML Pro- Bootstrap 5 HTML & Laravel Multipurpose Admin Dashboard Theme by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/products/open-html-pro" />
    <meta property="og:site_name" content="Open HTML Pro by Keenthemes" />
    <link rel="canonical" href="http://preview.keenthemes.com/#" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" />
    {{-- ← tambahkan ini --}}
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">
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


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header " data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}" data-kt-sticky-animation="false">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch flex-stack "
                    id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px me-1"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>

                        <!--begin::Logo image-->
                        <a href="index708f.html?page=index">
                            <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}"
                                class="h-30px" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Sidebar toggle-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-center flex-lg-grow-1 me-2 me-lg-0">

                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px"
                                data-kt-search-keypress="true" data-kt-search-min-length="2"
                                data-kt-search-enter="enter" data-kt-search-layout="menu"
                                data-kt-search-responsive="true" data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex ">
                                        <i class="ki-duotone ki-magnifier fs-1 "><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->

                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                <form data-kt-search-element="form"
                                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden" />
                                    <!--end::Hidden input-->

                                    <!--begin::Icon-->
                                    <i
                                        class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span
                                            class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text"
                                        class="search-input form-control form-control rounded-1  ps-13" name="search"
                                        value="" placeholder="Search..." data-kt-search-element="input" />
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span
                                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span
                                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                        data-kt-search-element="clear">
                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                class="path1"></span><span class="path2"></span></i> </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                    class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0  pb-5"
                                                    data-kt-search-element="category-title">
                                                    Users </h3>
                                                <!--end::Category title-->




                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="{{ asset('assets/media/avatars/300-6.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Karina Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing
                                                            Manager</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                        <span class="fs-7 fw-semibold text-muted">Software
                                                            Engineer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="{{ asset('assets/media/avatars/300-9.jpg') }}"
                                                            alt="" />
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="{{ asset('assets/media/avatars/300-14.jpg') }}"
                                                            alt="" />
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="{{ asset('assets/media/avatars/300-11.jpg') }}"
                                                            alt="" />
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
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">
                                                    Customers </h3>
                                                <!--end::Category title-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg') }}"
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="{{ asset('assets/media/svg/brand-logos/tvit.svg') }}"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                        <span class="fs-7 fw-semibold text-muted">Web
                                                            Development</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="{{ asset('assets/media/svg/misc/infography.svg') }}"
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="{{ asset('assets/media/svg/brand-logos/leaf.svg') }}"
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="{{ asset('assets/media/svg/brand-logos/tower.svg') }}"
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
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">
                                                    Projects </h3>
                                                <!--end::Category title-->


                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Si-Fi Project by AU
                                                            Themes</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Shopix Mobile App
                                                            Planning</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i>
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
                                                    class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Dashboard Analitics
                                                            Launch</span>
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
                                        <div class="" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Label-->
                                                <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                <!--end::Label-->

                                                <!--begin::Toolbar-->
                                                <div class="d-flex" data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2"
                                                        data-bs-toggle="tooltip" title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Preferences toggle-->

                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-laptop fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
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
                                                            <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
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
                                                            <i class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
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
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
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
                                                            <i class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
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
                                                            <i class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
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
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
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
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                <div class="text-muted fs-7">Please try again with a different query
                                                </div>
                                            </div>
                                            <!--end::Message-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
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
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                        All
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type"
                                                        value="users" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Users
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type"
                                                        value="orders" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Orders
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type"
                                                        value="projects" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Projects
                                                    </span>
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
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                        Has attachment
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment"
                                                        value="any" />
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Any
                                                    </span>
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

                                            <a href="indexded4.html?page=utilities/search/horizontal"
                                                class="btn btn-sm fw-bold btn-primary"
                                                data-kt-search-element="advanced-options-form-search">Search</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                        <!--end::Heading-->

                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Projects
                                                </span>

                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Targets
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Affiliate Programs
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Referrals
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Users
                                                </span>
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

                        <!--begin::Actions-->
                        <div class="d-flex align-self-center flex-center flex-shrink-0">
                            <a href="#" class="btn btn-sm btn-secondary d-flex flex-center ms-3 px-4 py-3"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-plus-square fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                <span>Invite</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-success ms-3 px-4 py-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app">Create App</a>
                        </div>
                        <!--end::Actions-->

                        <!--begin::Header menu toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="300px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                    <!--begin::Header-->
                    <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
                        <!--begin::Brand-->
                        <div class="d-flex flex-stack d-none d-lg-flex mb-13">
                            <!--begin::Logo-->
                            <a href="index708f.html?page=index" class="app-sidebar-logo">
                                <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}"
                                    class="h-30px app-sidebar-logo-default" />
                            </a>
                            <!--end::Logo-->

                            <!--begin::Chat-->
                            <div class="d-flex align-items-center ">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon w-15px h-15px w-lg-20px h-lg-20px btn-color-success position-relative"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
                                    <i class="ki-duotone ki-notification-status fs-2"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle ms-7 mb-3 animation-blink">
                                    </span>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                        data-kt-menu="true" id="kt_menu_notifications">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                            style="background-image:url('{{ asset('assets/media/misc/menu-header-bg.jpg') }}">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                                Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Tabs-->
                                            <ul
                                                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_2">Updates</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-28 fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Alice</a>
                                                                <div class="text-gray-500 fs-7">Phase 1 development
                                                                </div>
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
                                                                    <i
                                                                        class="ki-duotone ki-information fs-2 text-danger"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                                    Confidential</a>
                                                                <div class="text-gray-500 fs-7">Confidential staff
                                                                    documents</div>
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
                                                                    <i
                                                                        class="ki-duotone ki-briefcase fs-2 text-warning"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                                    HR</a>
                                                                <div class="text-gray-500 fs-7">Corporeate staff
                                                                    profiles</div>
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
                                                                    <i
                                                                        class="ki-duotone ki-abstract-12 fs-2 text-success"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Redux</a>
                                                                <div class="text-gray-500 fs-7">New frontend admin
                                                                    theme</div>
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
                                                                    <i
                                                                        class="ki-duotone ki-colors-square fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Breafing</a>
                                                                <div class="text-gray-500 fs-7">Product launch status
                                                                    update</div>
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
                                                                    <i class="ki-duotone ki-picturefs-2 text-info"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                                    Assets</a>
                                                                <div class="text-gray-500 fs-7">Collection of banner
                                                                    images</div>
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
                                                                    <i
                                                                        class="ki-duotone ki-color-swatch fs-2 text-warning"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span><span
                                                                            class="path5"></span><span
                                                                            class="path6"></span><span
                                                                            class="path7"></span><span
                                                                            class="path8"></span><span
                                                                            class="path9"></span><span
                                                                            class="path10"></span><span
                                                                            class="path11"></span><span
                                                                            class="path12"></span><span
                                                                            class="path13"></span><span
                                                                            class="path14"></span><span
                                                                            class="path15"></span><span
                                                                            class="path16"></span><span
                                                                            class="path17"></span><span
                                                                            class="path18"></span><span
                                                                            class="path19"></span><span
                                                                            class="path20"></span><span
                                                                            class="path21"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                                    Assets</a>
                                                                <div class="text-gray-500 fs-7">Collection of SVG icons
                                                                </div>
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
                                                <div class="py-3 text-center border-top">
                                                    <a href="indexa35e.html?page=pages/user-profile/activity"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
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
                                                    <div class="pt-10 pb-0">
                                                        <!--begin::Title-->
                                                        <h3 class="text-gray-900 text-center fw-bold">
                                                            Get Pro Access
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Text-->
                                                        <div class="text-center text-gray-600 fw-semibold pt-1">
                                                            Outlines keep you honest. They stoping you from amazing
                                                            poorly about drive
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Action-->
                                                        <div class="text-center mt-5 mb-9">
                                                            <a href="#" class="btn btn-sm btn-primary px-6"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img class="mw-100 mh-200px" alt="image"
                                                            src="{{ asset('assets/media/illustrations/dozzy-1/1.png') }}" />
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->

                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_3"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                order</a>
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
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
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
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Payment
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
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Search
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
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
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
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Database
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
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">System
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
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Server
                                                                OS update</a>
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
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
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
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Refund
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
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
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
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Mail
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
                                                <div class="py-3 text-center border-top">
                                                    <a href="indexa35e.html?page=pages/user-profile/activity"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                        </div>
                        <!--end::Brand-->

                        <!--begin::User-->
                        <div class="d-flex btn btn-outline btn-custom align-items-center w-200 mb-2"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-start">
                            <!--begin::User-->
                            <div class="cursor-pointer symbol symbol-35px symbol-lg-40px me-3 ms-n2">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="user" />
                            </div>
                            <!--end::User-->

                            <!--begin:Info-->
                            <div class="d-flex flex-column align-items-start flex-grow-1">
                                <a href="#" class="btn-title fs-6 fw-bold">
                                    {{ Auth::user()->username }}
                                </a>

                                <a href="#" class="btn-desc fs-7 fw-bold d-block">
                                    {{ Auth::user()->email }}
                                </a>
                            </div>
                            <!--end:Info-->

                            <i class="ki-duotone ki-dots-square-vertical fs-2 me-n4"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i>
                        </div>


                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{ asset('assets/media/avatars/300-3.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            Johnson <span
                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                        </div>

                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                            React Developer </a>
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
                                <a href="index3164.html?page=account/overview" class="menu-link px-5">
                                    My Profile
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="index99a6.html?page=apps/projects/list" class="menu-link px-5">
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
                                        <a href="indexe638.html?page=account/referrals" class="menu-link px-5">
                                            Referrals
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index93d4.html?page=account/billing" class="menu-link px-5">
                                            Billing
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index28ff.html?page=account/statements" class="menu-link px-5">
                                            Payments
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index28ff.html?page=account/statements"
                                            class="menu-link d-flex flex-stack px-5">
                                            Statements

                                            <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                title="View your statements">
                                                <i class="ki-duotone ki-information-5 fs-5"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </a>
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
                                                <span class="form-check-label text-muted fs-7">
                                                    Notifications
                                                </span>
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
                                <a href="index28ff.html?page=account/statements" class="menu-link px-5">
                                    My Statements
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">
                                        Mode

                                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                            <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span></i> <i
                                                class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                    </span>
                                </a>

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span><span
                                                        class="path7"></span><span class="path8"></span><span
                                                        class="path9"></span><span class="path10"></span></i> </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i> </span>
                                            <span class="menu-title">
                                                System
                                            </span>
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
                                    <span class="menu-title position-relative">
                                        Language

                                        <span
                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                            English <img class="w-15px h-15px rounded-1 ms-2"
                                                src="{{ asset('assets/media/flags/united-states.svg') }}"
                                                alt="" />
                                        </span>
                                    </span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index1477.html?page=account/settings"
                                            class="menu-link d-flex px-5 active">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1"
                                                    src="{{ asset('assets/media/flags/united-states.svg') }}"
                                                    alt="" />
                                            </span>
                                            English
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index1477.html?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1"
                                                    src="{{ asset('assets/media/flags/spain.svg') }}"
                                                    alt="" />
                                            </span>
                                            Spanish
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index1477.html?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1"
                                                    src="{{ asset('assets/media/flags/germany.svg') }}"
                                                    alt="" />
                                            </span>
                                            German
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index1477.html?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1"
                                                    src="{{ asset('assets/media/flags/japan.svg') }}"
                                                    alt="" />
                                            </span>
                                            Japanese
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index1477.html?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1"
                                                    src="{{ asset('assets/media/flags/france.svg') }}"
                                                    alt="" />
                                            </span>
                                            French
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="index1477.html?page=account/settings" class="menu-link px-5">
                                    Account Settings
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('logout') }}" class="menu-link px-5"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                        <!--end::User-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Navs-->
                    <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
                        <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2 mx-4" data-kt-scroll="true"
                            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_header"
                            data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">

                            <!--begin::Sidebar menu-->
                            @auth
                                @php
                                    $roles = auth()->user()->roles->pluck('name')->toArray();
                                @endphp

                                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                                    class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7">

                                    {{-- ================= ADMIN ONLY ================= --}}
                                    @if (in_array('admin', $roles))
                                        <!--begin:Menu item-->
                                        <div class="menu-item pt-5">
                                            <div class="menu-content">
                                                <span class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span>
                                            </div>
                                        </div>
                                        <!--end:Menu item-->

                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <a class="menu-link active" href="/dashboard">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-element-11 fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Landing Page</span>
                                            </a>
                                        </div>
                                        <!--end:Menu item-->

                                        <!--begin:Menu item-->
                                        <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-some-files fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Management Users</span>
                                                <span class="menu-arrow"></span>
                                            </span>

                                            <div class="menu-sub menu-sub-accordion">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('agent.tabel') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Agent</span>
                                                    </a>
                                                </div>

                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('jemaah.tabel') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Jemaah</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:Menu item-->

                                        <!--begin:Menu item-->
                                        <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-some-files fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Management Paket</span>
                                                <span class="menu-arrow"></span>
                                            </span>

                                            <div class="menu-sub menu-sub-accordion">
                                                <div class="menu-item">
                                                    <a class="menu-link {{ request()->route('type') ? '' : 'active' }}"
                                                        href="{{ route('package.tabel') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Package</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:Menu item-->
                                    @endif


                                    {{-- ================= LIST PAKET (ADMIN + AGENT + JEMAAH) ================= --}}
                                    @if (array_intersect(['admin', 'agent', 'jemaah'], $roles))
                                        <!--begin:Menu item-->
                                        <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-some-files fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">List Paket</span>
                                                <span class="menu-arrow"></span>
                                            </span>

                                            <div class="menu-sub menu-sub-accordion">
                                                <div class="menu-item">
                                                    <a class="menu-link {{ request()->route('type') == 'umrah' ? 'active' : '' }}"
                                                        href="{{ route('package.tabel', 'umrah') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Umrah</span>
                                                    </a>
                                                </div>

                                                <div class="menu-item">
                                                    <a class="menu-link {{ request()->route('type') == 'haji' ? 'active' : '' }}"
                                                        href="{{ route('package.tabel', 'haji') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Haji</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:Menu item-->
                                    @endif


                                    {{-- ================= LIST BOOKING (ADMIN + AGENT) ================= --}}
                                    @if (array_intersect(['admin', 'agent'], $roles))
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-rescue fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">List Booking</span>
                                            </a>
                                        </div>
                                        <!--end:Menu item-->
                                    @endif

                                </div>

                            @endauth

                            <!--end::Sidebar menu-->
                        </div>
                    </div>
                    <!--end::Navs-->

                </div>
                <!--end::Sidebar-->


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        @yield('content')
                    </div>
                    <!--end::Content wrapper-->


                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer ">



                        <!--begin::Footer container-->
                        <div
                            class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2026&copy;</span>
                                <a href="https://keenthemes.com/" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://keenthemes.com/products/open-html-pro"
                                        target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->


            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="../../cdn.amcharts.com/lib/5/index.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/map.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/open-html-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Feb 2026 10:38:00 GMT -->

</html>
