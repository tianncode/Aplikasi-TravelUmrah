@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-lg-column py-3 py-lg-6 ">



            <!--begin::Page title-->
            <div class="page-title d-flex align-items-center gap-1 me-3" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                <!--begin::Title-->
                <h1 class="text-gray-900 fw-bolder fs-2x mb-1 lh-1">
                    Account
                </h1>
                <!--end::Title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3">


                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="index708f.html?page=index" class="text-gray-700 text-hover-primary">
                            <i class="ki-duotone ki-home fs-3 text-gray-500 ms-2"></i>
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                    </li>
                    <!--end::Item-->



                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        Account </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                    </li>
                    <!--end::Item-->



                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">
                        Overview </li>
                    <!--end::Item-->


                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active"
                        href="index708f.html?page=index">
                        Overview </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index1477.html?page=account/settings">
                        Settings </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexbbde.html?page=account/security">
                        Security </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index93d4.html?page=account/billing">
                        Billing </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index28ff.html?page=account/statements">
                        Statements </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexe638.html?page=account/referrals">
                        Referrals </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index93a9.html?page=account/api-keys">
                        API Keys </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexcf4a.html?page=account/logs">
                        Logs </a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->

            <!--begin::Separator-->
            <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
            <!--end::Separator-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container">

            <div class="header-card">
                <div class="header-content">
                    <div>
                        <h1 class="header-title">Paket Perjalanan Tersedia 📦</h1>
                        <p class="header-subtitle">Kelola dan pilih paket perjalanan terbaik untuk Anda</p>
                    </div>

                    {{-- Hanya tampilkan tombol Add jika tipe bukan haji atau umrah --}}
                    @if (!in_array($type, ['haji', 'umrah']))
                        <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#modalAddPackage">
                            <i class="ki-duotone ki-plus fs-2"></i> Tambah Paket
                        </button>
                    @endif
                </div>
            </div>


            <!-- Package Cards Container -->
            <div class="packages-container">

                {{-- ── Package List ── --}}
                <div class="packages-header">
                    <div class="packages-info">
                        <h2 class="packages-title">Semua Paket</h2>
                        <p class="packages-desc">Temukan paket perjalanan terbaik sesuai kebutuhan Anda</p>
                    </div>
                    <div class="packages-actions">
                        <div class="search-box">
                            <input type="text" id="searchPackages" placeholder="Cari paket...">
                            <i class="ki-duotone ki-magnifier fs-3"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <button class="btn-filter">
                            <i class="ki-duotone ki-filter fs-3"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Filter
                        </button>
                    </div>
                </div>

                {{-- ── Cards Grid ── --}}
                <div class="haji-cards-grid">
                    @foreach ($packages as $package)
                        @php
                            $availableSeat = $package->quota - $package->quota_used;
                            $isScarce = $availableSeat <= 10;

                            $gradient = match (true) {
                                $package->type === 'VIP' => 'linear-gradient(140deg, #6D28D9 0%, #4F46E5 100%)',
                                $package->type === 'Haji Plus' => 'linear-gradient(140deg, #92400E 0%, #C4973B 100%)',
                                default => 'linear-gradient(140deg, #0D7377 0%, #1A6B52 100%)',
                            };
                        @endphp

                        <div class="haji-package-card">

                            {{-- Banner --}}
                            <div class="haji-card-banner" style="background: {{ $gradient }};">
                                <div class="haji-banner-pattern"></div>

                                {{-- Badges --}}
                                <div class="haji-badge-container">
                                    <span class="haji-badge primary">{{ strtoupper($package->type) }}</span>
                                    <span class="haji-badge gold">DP {{ number_format($package->dp / 1000000, 1) }}
                                        JT</span>
                                </div>

                                {{-- Program & Title --}}
                                <div class="haji-program-label">
                                    <i class="ki-duotone ki-calendar"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Program {{ $package->program_days }} Hari
                                </div>

                                <h2 class="haji-package-title">{{ $package->name }} {{ $package->year }}</h2>

                                <div class="haji-departure-date">
                                    <i class="ki-duotone ki-airplane-square"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Keberangkatan:
                                    {{ \Carbon\Carbon::parse($package->departure_date)->translatedFormat('d F Y') }}
                                </div>

                                {{-- Price Strip --}}
                                <div class="haji-price-boxes">
                                    @foreach ([['Quad', $package->price], ['Triple', $package->price_triple], ['Double', $package->price_double]] as [$label, $price])
                                        <div class="haji-price-box">
                                            <div class="haji-price-type">{{ $label }}</div>
                                            <div class="haji-price">{{ number_format($price / 1000000, 1) }} Jt</div>
                                            <div class="haji-price-unit">/pax</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Info Body --}}
                            <div class="haji-card-body">
                                <div class="haji-info-grid">

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-calendar-tick"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Jadwal Berangkat</div>
                                            <div class="haji-info-value">
                                                {{ \Carbon\Carbon::parse($package->departure_date)->translatedFormat('d F Y') }},
                                                {{ \Carbon\Carbon::parse($package->departure_time)->format('H:i') }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-time"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Durasi Perjalanan</div>
                                            <div class="haji-info-value">{{ $package->duration_days }} Hari</div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-home-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Kelas Hotel</div>
                                            <div class="haji-info-value">
                                                {!! str_repeat('<span class="star-filled">★</span>', $package->hotel_rating) .
                                                    str_repeat('<span class="star-empty">★</span>', 5 - $package->hotel_rating) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-people"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Total Seat</div>
                                            <div class="haji-info-value">{{ $package->quota }} pax</div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-status"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Available Seat</div>
                                            <div class="haji-info-value">
                                                <span
                                                    class="haji-availability-badge {{ $isScarce ? 'limited' : 'available' }}">
                                                    {{ $availableSeat }} pax {{ $isScarce ? 'tersisa' : 'tersedia' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-geolocation"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Berangkat dari</div>
                                            <div class="haji-info-value">{{ $package->departure_city }}</div>
                                        </div>
                                    </div>

                                    <div class="haji-info-row">
                                        <div class="haji-info-icon">
                                            <i class="ki-duotone ki-airplane"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <div class="haji-info-content">
                                            <div class="haji-info-label">Maskapai</div>
                                            <div class="haji-info-value">{{ $package->airline }}</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="haji-status-bar">
                                <form method="POST"
                                    action="{{ route('package.set-status', [$package->type, $package->id]) }}">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit" name="status" value="draft"
                                        class="haji-status-btn draft {{ $package->status === 'draft' ? 'active' : '' }}">
                                        <span class="status-dot"></span> Draft
                                    </button>

                                    <button type="submit" name="status" value="published"
                                        class="haji-status-btn publish {{ $package->status === 'published' ? 'active' : '' }}">
                                        <span class="status-dot"></span> Publish
                                    </button>

                                    <button type="submit" name="status" value="closed"
                                        class="haji-status-btn close {{ $package->status === 'closed' ? 'active' : '' }}">
                                        <span class="status-dot"></span> Closed
                                    </button>

                                </form>
                            </div>

                            {{-- Detail Button --}}
                            <div class="haji-card-footer">
                                <a href="{{ route('package.view', [$package->type, $package->id]) }}"
                                    class="haji-btn-detail">
                                    Lihat Detail
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>

                {{-- ── Pagination ── --}}
                <div class="packages-footer">
                    <div class="pagination-info">
                        Menampilkan <b>{{ $packages->firstItem() }}</b> sampai <b>{{ $packages->lastItem() }}</b>
                        dari <b>{{ $packages->total() }}</b> paket
                    </div>
                    <nav class="pagination">
                        <button class="page-btn {{ $packages->onFirstPage() ? 'disabled' : '' }}"
                            onclick="{{ $packages->onFirstPage() ? '' : 'window.location=\'' . $packages->previousPageUrl() . '\'' }}">
                            Previous
                        </button>

                        @foreach ($packages->getUrlRange(1, $packages->lastPage()) as $page => $url)
                            <button class="page-btn {{ $page == $packages->currentPage() ? 'active' : '' }}"
                                onclick="window.location='{{ $url }}'">
                                {{ $page }}
                            </button>
                        @endforeach

                        <button class="page-btn {{ !$packages->hasMorePages() ? 'disabled' : '' }}"
                            onclick="{{ $packages->hasMorePages() ? 'window.location=\'' . $packages->nextPageUrl() . '\'' : '' }}">
                            Next
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Modal Add Package -->
            <div class="modal fade" id="modalAddPackage" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content modern-modal">
                        <!-- Header -->
                        <div class="modern-modal-header">
                            <div class="modal-header-content">
                                <div class="modal-icon-wrapper">
                                    <i class="ki-duotone ki-package fs-2x text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <div>
                                    <h3 class="modal-title">Tambah Paket Baru</h3>
                                    <p class="modal-subtitle">Lengkapi informasi paket Haji atau Umroh</p>
                                </div>
                            </div>
                            <button type="button" class="btn-modal-close" data-bs-dismiss="modal">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="modern-modal-body">
                            <form id="addPackageForm" method="POST">
                                @csrf

                                <!-- Informasi Dasar Paket -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-information fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <h6 class="section-title">Informasi Dasar Paket</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Type -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Tipe Paket
                                                <span class="required">*</span>
                                            </label>
                                            <select name="type" id="packageType" class="modern-select" required>
                                                <option value="">Pilih Tipe</option>
                                                <option value="umrah">Umrah</option>
                                                <option value="haji">Haji</option>
                                            </select>
                                        </div>

                                        <!-- Code -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Kode Paket
                                            </label>
                                            <input type="text" id="packageCodePreview" class="modern-input" readonly>
                                            <input type="hidden" name="code" id="packageCodeReal">
                                        </div>

                                        <!-- Status -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Status Paket
                                                <span class="required">*</span>
                                            </label>
                                            <select name="status" class="modern-select" required>
                                                <option value="">Pilih Status</option>
                                                <option value="draft">Draft</option>
                                                <option value="published">Published</option>
                                                <option value="closed">Closed</option>
                                            </select>
                                        </div>

                                        <!-- Name -->
                                        <div class="col-12">
                                            <label class="modern-label">
                                                Nama Paket
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-tag input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <input type="text" name="name" id="packageName"
                                                    class="modern-input has-icon"
                                                    placeholder="Contoh: Paket Haji Reguler 1446H" required>
                                            </div>
                                        </div>

                                        <!-- Slug (Auto Generated) -->
                                        <div class="col-12">
                                            <label class="modern-label">Slug (URL)</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-link input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" name="slug" id="packageSlug"
                                                    class="modern-input has-icon"
                                                    placeholder="Auto-generated dari nama paket" readonly>
                                            </div>
                                            <small class="form-hint">Otomatis dibuat dari nama paket</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Harga & Kuota -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-dollar fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <h6 class="section-title">Harga & Kuota</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Price Quad -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Harga Quad (4 Orang)
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-wallet input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <input type="number" name="price" class="modern-input has-icon"
                                                    placeholder="45500000" required min="0" step="100000">
                                            </div>
                                            <small class="form-hint">Harga per orang (Quad)</small>
                                        </div>

                                        <!-- Price Triple -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Harga Triple (3 Orang)
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-wallet input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <input type="number" name="price_triple" class="modern-input has-icon"
                                                    placeholder="47200000" required min="0" step="100000">
                                            </div>
                                            <small class="form-hint">Harga per orang (Triple)</small>
                                        </div>

                                        <!-- Price Double -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Harga Double (2 Orang)
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-wallet input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <input type="number" name="price_double" class="modern-input has-icon"
                                                    placeholder="49800000" required min="0" step="100000">
                                            </div>
                                            <small class="form-hint">Harga per orang (Double)</small>
                                        </div>

                                        <!-- DP -->
                                        <div class="col-md-12">
                                            <label class="modern-label">
                                                DP (Down Payment)
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-dollar input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <input type="number" name="dp" class="modern-input has-icon"
                                                    placeholder="5000000" required min="0" step="100000">
                                            </div>
                                            <small class="form-hint">Minimal pembayaran awal per orang</small>
                                        </div>


                                        <!-- Quota -->
                                        <div class="col-md-6">
                                            <label class="modern-label">
                                                Kuota Total
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-people input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                                <input type="number" name="quota" class="modern-input has-icon"
                                                    placeholder="120" required min="1">
                                            </div>
                                            <small class="form-hint">Jumlah seat yang tersedia</small>
                                        </div>

                                        <!-- Quota Used -->
                                        <div class="col-md-6">
                                            <label class="modern-label">Kuota Terpakai</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-user-tick input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <input type="number" name="quota_used" class="modern-input has-icon"
                                                    placeholder="0" value="0" min="0">
                                            </div>
                                            <small class="form-hint">Jumlah yang sudah terdaftar</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jadwal & Durasi -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-calendar fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <h6 class="section-title">Jadwal & Durasi</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Departure Date -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Tanggal Keberangkatan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-calendar-tick input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="date" name="departure_date" id="departureDate"
                                                    class="modern-input has-icon" required>
                                            </div>
                                        </div>

                                        <!-- Departure Time -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Waktu Keberangkatan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-clock input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="time" name="departure_time" class="modern-input has-icon"
                                                    required>
                                            </div>
                                            <small class="form-hint">Format 24 jam (contoh: 08:00)</small>
                                        </div>

                                        <!-- Duration Days -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Durasi (Hari)
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-time input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="number" name="duration_days" id="durationDays"
                                                    class="modern-input has-icon" placeholder="9" required
                                                    min="1">
                                            </div>
                                            <small class="form-hint">Lama perjalanan dalam hari</small>
                                        </div>

                                        <!-- Return Date (Auto Calculated) -->
                                        <div class="col-md-6">
                                            <label class="modern-label">
                                                Tanggal Kepulangan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-calendar-add input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="date" name="return_date" id="returnDate"
                                                    class="modern-input has-icon" required>
                                            </div>
                                            <small class="form-hint">Otomatis dihitung dari tanggal berangkat +
                                                durasi</small>
                                        </div>

                                        <!-- Return Time -->
                                        <div class="col-md-6">
                                            <label class="modern-label">
                                                Waktu Kepulangan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-clock input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="time" name="return_time" class="modern-input has-icon"
                                                    required>
                                            </div>
                                            <small class="form-hint">Estimasi waktu tiba kembali</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transportasi -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-airplane fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <h6 class="section-title">Transportasi</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Departure City -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Kota Keberangkatan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-geolocation input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" name="departure_city" class="modern-input has-icon"
                                                    placeholder="Jakarta (CGK)" required>
                                            </div>
                                        </div>

                                        <!-- Destination City -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Kota Tujuan
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-map-marker input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <input type="text" name="destination_city"
                                                    class="modern-input has-icon" placeholder="Jeddah (JED)" required>
                                            </div>
                                            <small class="form-hint">Bandara tujuan pertama</small>
                                        </div>

                                        <!-- Airline -->
                                        <div class="col-md-4">
                                            <label class="modern-label">
                                                Maskapai
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-airplane-square input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" name="airline" class="modern-input has-icon"
                                                    placeholder="Garuda Indonesia" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Akomodasi Hotel -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-home-1 fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <h6 class="section-title">Akomodasi Hotel</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Hotel Makkah -->
                                        <div class="col-md-5">
                                            <label class="modern-label">
                                                Hotel Makkah
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-home-2 input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" name="hotel_makkah" class="modern-input has-icon"
                                                    placeholder="Nama Hotel Makkah" required>
                                            </div>
                                            <small class="form-hint">Contoh: Hilton Makkah Convention</small>
                                        </div>

                                        <!-- Hotel Madinah -->
                                        <div class="col-md-5">
                                            <label class="modern-label">
                                                Hotel Madinah
                                                <span class="required">*</span>
                                            </label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-home-2 input-icon">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" name="hotel_madinah" class="modern-input has-icon"
                                                    placeholder="Nama Hotel Madinah" required>
                                            </div>
                                            <small class="form-hint">Contoh: Pullman Madinah Central</small>
                                        </div>

                                        <!-- Hotel Rating -->
                                        <div class="col-md-2">
                                            <label class="modern-label">
                                                Rating
                                                <span class="required">*</span>
                                            </label>
                                            <select name="hotel_rating" class="modern-select" required>
                                                <option value="">★</option>
                                                <option value="3">★★★</option>
                                                <option value="4">★★★★</option>
                                                <option value="5">★★★★★</option>
                                            </select>
                                            <small class="form-hint">Bintang</small>
                                        </div>

                                        <!-- Info Room Type -->
                                        <div class="col-12">
                                            <div class="room-type-info">
                                                <i class="ki-duotone ki-information-4 fs-4 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <span>Tipe kamar <b>(Quad / Triple / Double)</b> akan dipilih oleh jamaah
                                                    saat proses <b>booking</b>, sesuai dengan harga yang telah diinput di
                                                    atas.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Detail Paket (Optional) -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-document fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <h6 class="section-title">Detail Paket (Opsional)</h6>
                                    </div>
                                    <div class="row g-3">
                                        <!-- Description -->
                                        <div class="col-12">
                                            <label class="modern-label">Deskripsi Paket</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-text-align-left input-icon-textarea">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <textarea name="description" class="modern-textarea has-icon-textarea" rows="3"
                                                    placeholder="Deskripsi singkat tentang paket ini..."></textarea>
                                            </div>
                                        </div>

                                        <!-- Includes -->
                                        <div class="col-md-6">
                                            <label class="modern-label">Fasilitas Termasuk</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-check-circle input-icon-textarea">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <textarea name="includes" class="modern-textarea has-icon-textarea" rows="4"
                                                    placeholder="- Tiket pesawat PP&#10;- Hotel bintang 4&#10;- Makan 3x sehari&#10;- Visa&#10;- Perlengkapan"></textarea>
                                            </div>
                                            <small class="form-hint">Pisahkan dengan enter atau dash (-)</small>
                                        </div>

                                        <!-- Excludes -->
                                        <div class="col-md-6">
                                            <label class="modern-label">Tidak Termasuk</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-cross-circle input-icon-textarea">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <textarea name="excludes" class="modern-textarea has-icon-textarea" rows="4"
                                                    placeholder="- Kelebihan bagasi&#10;- Pengeluaran pribadi&#10;- Tips"></textarea>
                                            </div>
                                            <small class="form-hint">Pisahkan dengan enter atau dash (-)</small>
                                        </div>

                                        <!-- Terms -->
                                        <div class="col-12">
                                            <label class="modern-label">Syarat & Ketentuan</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-security-user input-icon-textarea">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <textarea name="terms" class="modern-textarea has-icon-textarea" rows="3"
                                                    placeholder="Syarat dan ketentuan untuk paket ini..."></textarea>
                                            </div>
                                        </div>

                                        <!-- Notes -->
                                        <div class="col-12">
                                            <label class="modern-label">Catatan Tambahan</label>
                                            <div class="input-with-icon">
                                                <i class="ki-duotone ki-notepad input-icon-textarea">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                                <textarea name="notes" class="modern-textarea has-icon-textarea" rows="2"
                                                    placeholder="Catatan penting atau informasi tambahan..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Itinerary Perjalanan -->
                                <div class="form-section">
                                    <div class="section-header">
                                        <i class="ki-duotone ki-map fs-3 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <h6 class="section-title">Itinerary Perjalanan (Opsional)</h6>
                                    </div>

                                    <div id="itineraryContainer">
                                        <!-- Itinerary Item 1 (Default) -->
                                        <div class="itinerary-item" data-day="1">
                                            <div class="itinerary-header">
                                                <span class="itinerary-day-badge">Hari 1</span>
                                                <button type="button" class="btn-remove-itinerary"
                                                    onclick="removeItinerary(1)" style="display: none;">
                                                    <i class="ki-duotone ki-trash">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                    Hapus
                                                </button>
                                            </div>
                                            <div class="row g-3">
                                                <input type="hidden" name="itinerary[0][day_number]" value="1">

                                                <div class="col-md-12">
                                                    <label class="modern-label">Judul Kegiatan</label>
                                                    <div class="input-with-icon">
                                                        <i class="ki-duotone ki-pencil input-icon">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <input type="text" name="itinerary[0][title]"
                                                            class="modern-input has-icon"
                                                            placeholder="Contoh: Keberangkatan dari Jakarta">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label class="modern-label">Deskripsi Kegiatan</label>
                                                    <div class="input-with-icon">
                                                        <i class="ki-duotone ki-message-text input-icon-textarea">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                        <textarea name="itinerary[0][description]" class="modern-textarea has-icon-textarea" rows="3"
                                                            placeholder="Deskripsi detail kegiatan hari ini..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn-add-itinerary" onclick="addItinerary()">
                                        <i class="ki-duotone ki-plus-circle">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Tambah Hari Berikutnya
                                    </button>
                                </div>

                            </form>
                        </div>

                        <!-- Footer -->
                        <div class="modern-modal-footer">
                            <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">
                                <i class="ki-duotone ki-cross-circle fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                Batal
                            </button>
                            <button type="submit" class="btn-modal-submit" form="addPackageForm">
                                <i class="ki-duotone ki-check-circle fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                Simpan Paket
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail Package -->
            <div class="modal fade" id="modalDetailPackage" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content modern-modal">

                        <!-- Header -->
                        <div class="modern-modal-header">
                            <div class="modal-header-content">
                                <div class="modal-icon-wrapper">
                                    <i class="ki-duotone ki-package fs-2x text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <div>
                                    <h3 class="modal-title" id="detailPackageName">Nama Paket</h3>
                                    <p class="modal-subtitle">Informasi lengkap paket Haji / Umroh</p>
                                </div>
                            </div>
                            <button type="button" class="btn-modal-close" data-bs-dismiss="modal">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="modern-modal-body">
                            <div class="row g-3">

                                <!-- Informasi Dasar -->
                                <div class="col-md-6">
                                    <strong>Tipe Paket:</strong>
                                    <p id="detailPackageType"></p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Status Paket:</strong>
                                    <p id="detailPackageStatus"></p>
                                </div>
                                <div class="col-md-12">
                                    <strong>Slug (URL):</strong>
                                    <p id="detailPackageSlug"></p>
                                </div>
                                <div class="col-md-12">
                                    <strong>Deskripsi Paket:</strong>
                                    <p id="detailPackageDescription"></p>
                                </div>

                                <!-- Harga & Kuota -->
                                <div class="col-md-3">
                                    <strong>Harga Quad:</strong>
                                    <p id="detailPackagePrice"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>Harga Triple:</strong>
                                    <p id="detailPackagePriceTriple"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>Harga Double:</strong>
                                    <p id="detailPackagePriceDouble"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>DP:</strong>
                                    <p id="detailPackageDP"></p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Kuota Total:</strong>
                                    <p id="detailPackageQuota"></p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Kuota Terpakai:</strong>
                                    <p id="detailPackageQuotaUsed"></p>
                                </div>

                                <!-- Jadwal & Durasi -->
                                <div class="col-md-4">
                                    <strong>Tanggal Keberangkatan:</strong>
                                    <p id="detailPackageDepartureDate"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Waktu Keberangkatan:</strong>
                                    <p id="detailPackageDepartureTime"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Durasi (Hari):</strong>
                                    <p id="detailPackageDuration"></p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Tanggal Kepulangan:</strong>
                                    <p id="detailPackageReturnDate"></p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Waktu Kepulangan:</strong>
                                    <p id="detailPackageReturnTime"></p>
                                </div>

                                <!-- Transportasi -->
                                <div class="col-md-4">
                                    <strong>Kota Keberangkatan:</strong>
                                    <p id="detailPackageDepartureCity"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Kota Tujuan:</strong>
                                    <p id="detailPackageDestinationCity"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Maskapai:</strong>
                                    <p id="detailPackageAirline"></p>
                                </div>

                                <!-- Hotel -->
                                <div class="col-md-5">
                                    <strong>Hotel Makkah:</strong>
                                    <p id="detailPackageHotelMakkah"></p>
                                </div>
                                <div class="col-md-5">
                                    <strong>Hotel Madinah:</strong>
                                    <p id="detailPackageHotelMadinah"></p>
                                </div>
                                <div class="col-md-2">
                                    <strong>Rating:</strong>
                                    <p id="detailPackageHotelRating"></p>
                                </div>

                                <!-- Fasilitas & Ketentuan -->
                                <div class="col-md-4">
                                    <strong>Fasilitas Termasuk:</strong>
                                    <p id="detailPackageIncludes"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Tidak Termasuk:</strong>
                                    <p id="detailPackageExcludes"></p>
                                </div>
                                <div class="col-md-4">
                                    <strong>Syarat & Ketentuan:</strong>
                                    <p id="detailPackageTerms"></p>
                                </div>
                                <div class="col-md-12">
                                    <strong>Catatan Tambahan:</strong>
                                    <p id="detailPackageNotes"></p>
                                </div>

                                <!-- Itinerary -->
                                <div class="col-md-12">
                                    <strong>Itinerary Perjalanan:</strong>
                                    <ul id="detailPackageItinerary" class="list-group list-group-flush mt-2"></ul>
                                </div>

                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modern-modal-footer">
                            <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">
                                <i class="ki-duotone ki-cross-circle fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                Tutup
                            </button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        // Auto-generate slug from package name
        document.getElementById('packageName').addEventListener('input', function(e) {
            const name = e.target.value;
            const slug = name
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('packageSlug').value = slug;
        });

        // Auto-calculate return date
        function calculateReturnDate() {
            const departureDate = document.getElementById('departureDate').value;
            const durationDays = parseInt(document.getElementById('durationDays').value);

            if (departureDate && durationDays) {
                const departure = new Date(departureDate);
                const returnDate = new Date(departure);
                returnDate.setDate(departure.getDate() + durationDays - 1); // -1 karena hari keberangkatan dihitung

                // Format to YYYY-MM-DD
                const formattedDate = returnDate.toISOString().split('T')[0];
                document.getElementById('returnDate').value = formattedDate;
            }
        }

        document.getElementById('departureDate').addEventListener('change', calculateReturnDate);
        document.getElementById('durationDays').addEventListener('input', calculateReturnDate);

        // Itinerary Management
        let itineraryCount = 1;

        function addItinerary() {
            itineraryCount++;
            const container = document.getElementById('itineraryContainer');

            const itineraryHTML = `
        <div class="itinerary-item" data-day="${itineraryCount}">
            <div class="itinerary-header">
                <span class="itinerary-day-badge">Hari ${itineraryCount}</span>
                <button type="button" class="btn-remove-itinerary" onclick="removeItinerary(${itineraryCount})">
                    <i class="ki-duotone ki-trash">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                    Hapus
                </button>
            </div>
            <div class="row g-3">
                <input type="hidden" name="itinerary[${itineraryCount - 1}][day_number]" value="${itineraryCount}">
                
                <div class="col-md-12">
                    <label class="modern-label">Judul Kegiatan</label>
                    <div class="input-with-icon">
                        <i class="ki-duotone ki-pencil input-icon">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" name="itinerary[${itineraryCount - 1}][title]" class="modern-input has-icon" 
                               placeholder="Contoh: Tawaf & Sai">
                    </div>
                </div>

                <div class="col-12">
                    <label class="modern-label">Deskripsi Kegiatan</label>
                    <div class="input-with-icon">
                        <i class="ki-duotone ki-message-text input-icon-textarea">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <textarea name="itinerary[${itineraryCount - 1}][description]" class="modern-textarea has-icon-textarea" rows="3"
                            placeholder="Deskripsi detail kegiatan hari ini..."></textarea>
                    </div>
                </div>
            </div>
        </div>
    `;

            container.insertAdjacentHTML('beforeend', itineraryHTML);

            // Show remove button on first item if there's more than 1
            if (itineraryCount > 1) {
                const firstRemoveBtn = document.querySelector('.itinerary-item[data-day="1"] .btn-remove-itinerary');
                if (firstRemoveBtn) {
                    firstRemoveBtn.style.display = 'flex';
                }
            }
        }

        function removeItinerary(dayNumber) {
            const item = document.querySelector(`.itinerary-item[data-day="${dayNumber}"]`);
            if (item) {
                item.remove();
                itineraryCount--;

                // Reorder remaining items
                const items = document.querySelectorAll('.itinerary-item');
                items.forEach((item, index) => {
                    const actualDay = index + 1;
                    item.setAttribute('data-day', actualDay);
                    item.querySelector('.itinerary-day-badge').textContent = `Hari ${actualDay}`;
                    item.querySelector('input[type="hidden"]').value = actualDay;
                    item.querySelector('input[type="hidden"]').name = `itinerary[${index}][day_number]`;
                    item.querySelector('input[type="text"]').name = `itinerary[${index}][title]`;
                    item.querySelector('textarea').name = `itinerary[${index}][description]`;

                    // Update remove button onclick
                    const removeBtn = item.querySelector('.btn-remove-itinerary');
                    if (removeBtn) {
                        removeBtn.setAttribute('onclick', `removeItinerary(${actualDay})`);
                    }
                });

                // Hide remove button on first item if only 1 remains
                if (items.length === 1) {
                    const firstRemoveBtn = items[0].querySelector('.btn-remove-itinerary');
                    if (firstRemoveBtn) {
                        firstRemoveBtn.style.display = 'none';
                    }
                }

                itineraryCount = items.length;
            }
        }

        // Form validation and submission
        document.getElementById('addPackageForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Add your validation logic here
            const formData = new FormData(this);

            // Example: Check if quota_used is not greater than quota
            const quota = parseInt(formData.get('quota'));
            const quotaUsed = parseInt(formData.get('quota_used'));

            if (quotaUsed > quota) {
                alert('Kuota terpakai tidak boleh lebih dari kuota total!');
                return;
            }

            // Submit the form
            this.submit();
        });

        document.getElementById('packageName').addEventListener('input', function() {
            let slug = this.value.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
            document.getElementById('packageSlug').value = slug;
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const typeSelect = document.getElementById("packageType");
            const previewInput = document.getElementById("packageCodePreview");
            const realInput = document.getElementById("packageCodeReal");

            typeSelect.addEventListener("change", function() {

                let type = this.value;

                if (!type) {
                    previewInput.value = "";
                    realInput.value = "";
                    return;
                }

                fetch("{{ url('/package/get-next-code') }}/" + type)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response not ok");
                        }
                        return response.json();
                    })
                    .then(data => {
                        previewInput.value = data.code ?? "";
                        realInput.value = data.code ?? "";
                    })
                    .catch(error => {
                        console.error("Fetch error:", error);
                    });

            });

        });
    </script>
    <script>
        document.getElementById('packageType').addEventListener('change', function() {
            let type = this.value;

            if (type) {
                let form = document.getElementById('addPackageForm');
                form.action = "/package/" + type + "/store";
            }
        });
    </script>
@endsection
