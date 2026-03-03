@extends('auth.Auth')

@section('title')
    <title>Login | Aplikasi</title>
@endsection

@section('form')
    <div class="d-flex flex-column flex-root" id="kt_app_root"
        style="background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%); min-height: 100vh; padding: 25px;">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid mx-auto w-100 overflow-hidden shadow-lg"
            style="height: fit-content; max-height: calc(100vh - 50px); border-radius: 20px;">

            <div class="d-flex flex-column flex-lg-row-fluid w-lg-60 bg-white"
                style="border-radius: 20px 0 0 20px; position: relative;">
                <!-- Modern Back Button -->
                <a href="{{ route('landingpage') }}"
                    class="position-absolute d-flex align-items-center justify-content-center"
                    style="top: 24px; left: 24px; width: 42px; height: 42px; border-radius: 50%; background: rgba(15, 76, 117, 0.08); backdrop-filter: blur(6px); 
                    transition: all 0.3s ease; text-decoration: none;"
                    onmouseover="this.style.background='rgba(15, 76, 117, 0.18)'; this.style.transform='translateX(-3px)'"
                    onmouseout="this.style.background='rgba(15, 76, 117, 0.08)'; this.style.transform='translateX(0)'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#0F4C75"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.498.498 0 0 1-.146-.35v-.008a.498.498 0 0 1 .146-.35l4-4a.5.5 0 1 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z" />
                    </svg>
                </a>
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 py-lg-15">
                    <div class="w-100" style="max-width: 480px;">

                        <div class="text-center mb-8">
                            <div class="d-flex flex-center">
                                <img alt="Logo" src="{{ asset('assets/media/auth/logo.png') }}" class="h-120px" />
                            </div>
                        </div>

                        <div class="text-center mb-10">
                            <h1 class="fs-1 mb-2" style="color: #0F4C75; font-weight: 800;">Sign Up</h1>
                            <div class="arabic-text mb-3" style="color: #1B6B93; font-size: 1.1rem; font-weight: 600;">
                                بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ
                            </div>

                            <div class="text-gray-400 fw-semibold fs-6">
                                Create your account to get started.
                                <div class="mt-2">
                                    Already have an account?
                                    <a href="/login" class="fw-bold" style="color: #0F4C75; text-decoration: none;">
                                        Sign in here
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-9">
                            <a href="#"
                                class="btn btn-flex btn-light-primary border-0 fw-bold px-6 py-4 w-100 flex-center"
                                style="background-color: #E8F4F8 !important; color: #181C32; border-radius: 12px;">
                                <img alt="Logo"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />
                                Sign In with Google
                            </a>
                        </div>

                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-200 w-100"></div>
                            <span class="fw-semibold text-gray-400 fs-7 mx-4 text-nowrap">Or sign in with e-mail</span>
                            <div class="border-bottom border-gray-200 w-100"></div>
                        </div>

                        <form class="form w-100" action="{{ route('jemaah.register.submit') }}" method="POST">
                            @csrf

                            <div class="fv-row mb-5">
                                <input type="text" name="username" placeholder="Username"
                                    class="form-control form-control-lg bg-light border-0"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; 
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                    required />
                            </div>

                            <div class="fv-row mb-5">
                                <input type="email" name="email" placeholder="Email Address"
                                    class="form-control form-control-lg bg-light border-0"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; 
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                    required />
                            </div>

                            <div class="fv-row mb-5">
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control form-control-lg bg-light border-0"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; 
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                    required />
                            </div>

                            <div class="fv-row mb-8">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                    class="form-control form-control-lg bg-light border-0"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; 
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                    required />
                            </div>

                            <button type="submit" class="btn btn-lg w-100 mb-8 py-4 shadow-sm"
                                style="background: linear-gradient(135deg, #0F4C75 0%, #1B6B93 100%); color: white; border-radius: 10px; font-weight: 700;">
                                Sign Up
                            </button>
                        </form>


                        <div class="text-center text-gray-400 fw-medium fs-8 px-5">
                            I agree to abide by templatana's <a href="#"
                                class="text-decoration-underline text-gray-500 fw-bold">Terms of Service</a>
                            and its <a href="#" class="text-decoration-underline text-gray-500 fw-bold">Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row-auto w-lg-40 position-relative overflow-hidden"
                style="background-image: url('{{ asset('assets/media/auth/imagelogin.png') }}'); 
                       background-size: cover; 
                       background-position: center center;
                       background-repeat: no-repeat;
                       border-radius: 0 20px 20px 0;
                       min-height: 600px;">

                <!-- Dark Overlay untuk readability text -->
                <div class="position-absolute w-100 h-100"
                    style="background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.15) 40%, rgba(0,0,0,0) 100%); z-index: 1;">
                </div>

                <div class="d-flex flex-center w-100 h-100 p-10 p-lg-15 position-relative" style="z-index: 3;">
                    <div class="d-flex flex-column align-items-center justify-content-end h-100 w-100 pb-10">

                        <!-- Islamic Quote -->
                        <div class="text-center px-4" style="max-width: 400px;">
                            <p class="mb-3 arabic-text"
                                style="color: #ffffff; font-size: 1.6rem; font-weight: 700; line-height: 1.9; text-shadow: 2px 2px 10px rgba(0,0,0,0.7);">
                                "إِنَّ مَعَ الْعُسْرِ يُسْرًا"
                            </p>
                            <p class="fs-6 fw-semibold" style="color: #ffffff; text-shadow: 1px 1px 6px rgba(0,0,0,0.7);">
                                "Indeed, with hardship comes ease."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        /* Import font Arabic yang lebih baik */
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');

        .arabic-text {
            font-family: 'Amiri', serif;
        }

        /* Background dengan padding */
        #kt_app_root {
            padding: 25px !important;
            display: flex;
            align-items: center;
        }

        @media (min-width: 992px) {
            #kt_app_root {
                padding: 40px !important;
            }

            /* Optimize for HD image display with portrait aspect ratio (736x1309) */
            .w-lg-40 {
                flex: 0 0 40%;
                max-width: 40%;
                /* Maintain aspect ratio for HD quality */
                background-size: cover !important;
                image-rendering: -webkit-optimize-contrast;
                image-rendering: crisp-edges;
            }

            .w-lg-60 {
                flex: 0 0 60%;
                max-width: 60%;
            }
        }

        /* Limit card height on desktop */
        @media (min-width: 992px) {
            #kt_app_root>div {
                max-height: calc(100vh - 80px);
                overflow: hidden;
            }
        }

        /* Scrollable form area if needed */
        @media (min-width: 992px) {
            .flex-column-fluid {
                overflow-y: auto;
                overflow-x: hidden;
                max-height: 100vh;
            }

            .flex-column-fluid::-webkit-scrollbar {
                width: 6px;
            }

            .flex-column-fluid::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .flex-column-fluid::-webkit-scrollbar-thumb {
                background: #0F4C75;
                border-radius: 3px;
            }

            .flex-column-fluid::-webkit-scrollbar-thumb:hover {
                background: #0D3D5C;
            }
        }

        /* Mobile adjustments */
        @media (max-width: 991px) {
            #kt_app_root {
                padding: 15px !important;
            }

            #kt_app_root>div {
                flex-direction: column;
                height: auto !important;
                min-height: calc(100vh - 30px);
                border-radius: 15px !important;
            }

            .w-lg-60,
            .w-lg-40 {
                width: 100% !important;
                max-width: 100% !important;
                min-height: 50vh;
            }

            .w-lg-60 {
                border-radius: 15px 15px 0 0 !important;
            }

            .w-lg-40 {
                border-radius: 0 0 15px 15px !important;
                background-position: center center !important;
            }
        }

        /* Button Hover Effects */
        .btn:hover {
            filter: brightness(1.1);
            transform: translateY(-2px);
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(15, 76, 117, 0.2);
        }

        a:hover {
            color: #0D3D5C !important;
            text-decoration: underline !important;
            transition: all 0.2s ease;
        }

        /* Input Focus Effect */
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(15, 76, 117, 0.15) !important;
            border-color: #0F4C75 !important;
        }

        /* Smooth Animations */
        .form-control,
        .btn {
            transition: all 0.3s ease;
        }

        /* Islamic Quote Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .text-center p {
            animation: fadeInUp 1s ease-out;
        }

        /* Ensure HD quality rendering */
        img,
        [style*="background-image"] {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
        }
    </style>
@endsection
