<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="index, follow" />
    
        <meta name="keywords" content="{{ $settings->keywords }}" />
        <meta name="author" content="soft4tech.com" />
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}"/>
    
        @if (trim($__env->yieldContent('description')))
        <meta name="description" content="@yield('description')" />
        <meta property="og:description" content="@yield('description')" />
        <meta name="twitter:description" content="@yield('description')" />
        @else
        <meta name="description" content="{{ $settings->description }}" />
        <meta property="og:description" content="{{ $settings->description }}" />
        <meta name="twitter:description" content="{{ $settings->description }}" />
        @endif
    
        @if (trim($__env->yieldContent('shareimage')))
        <meta property="og:image" content="@yield('shareimage')" />
        <meta name="twitter:image" content="@yield('shareimage')" />
        @else
        <meta property="og:image" content="{{ asset('assets/images/share-image.jpg') }}"/>
        <meta name="twitter:image" content="{{ asset('assets/images/share-image.jpg') }}" />
        @endif
    
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->full() }}" />
        <meta property="og:site_name" content="{{ $settings->title }}" />
    
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="{{ $settings->title }}" />
        <meta name="twitter:creator" content="@soft4tech.com" />
        <meta name="twitter:url" content="{{ url()->full() }}" />
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        @if (trim($__env->yieldContent('title')))
        <meta property="og:title" content="@yield('title') | {{ $settings->title }}" />
        <meta name="twitter:title" content="@yield('title') | {{ $settings->title }}" />
        <title>@yield('title') | {{ $settings->title }}</title>
        @else
        <meta property="og:title" content="{{ $settings->title }}" />
        <meta name="twitter:title" content="{{ $settings->title }}" />
        
        <meta name="facebook-domain-verification" content="n7pz8phgrje8zoizrywj588mm2ft4k" />
        
        <title>{{ $settings->title }}</title>
        @endif
        <link rel="canonical" href="{{ url()->full() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="{{asset('favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/stylesheets/jquery.toast.css')}}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/slick-1.8.1/slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/slick-1.8.1/slick/slick-theme.css')}}"/>
        <link
            rel="stylesheet"
            href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css"
        />
        
        <link
            rel="stylesheet"
            href="{{ asset('assets/stylesheets/main.css') }}"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
        />
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
        <script src="{{asset('assets/javascripts/jquery.toast.js')}}"></script>

        <title>Termag</title>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RD3R690D0M"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RD3R690D0M');
        </script>
    </head>
    <body>
    <header>
    <nav class="navbar fixed-top navbar-expand-xxl">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img
                    src="{{ asset('assets/images/logo.svg') }}"
                    alt="logo"
                    class="img-fluid"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
            >
                <div class="offcanvas-header">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="offcanvas-body">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="logo" class="img-fluid">
                    </a>
                    <ul class="navbar-nav">
                        @foreach ($menuList as $menu)
                            {!! Helper::menu($menu->id, $menu->parent_id, $menu->title, $menu->link) !!}
                        @endforeach
                        @if(app()->getLocale() == 'sr')
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                BiH
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ url(Str::start(request()->path(), 'en/')) }}">ENG</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                ENG
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ url(Str::replaceFirst('en', '', request()->path())) }}">BiH</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                    </ul>
                    <div>
                        <a href="https://secure.phobs.net/book.php?page=availability&companyid=822&hotelid=4791&checkin=2024-12-12&checkout=2024-12-13&crcid=a18a7f494542089c9fdb88aa5348bf6f" type="button">{{__('Book now')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
