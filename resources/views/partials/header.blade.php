<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
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

        <title>Termag</title>
    </head>
    <body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg">
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
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Hotel Termag
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Apartmani</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Villa Termag</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Hotelski Restoran</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Kamin Sala</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Koliba restoran</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Igraonica</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Brošure</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Galerija</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Video</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Shuttle</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Newslletter</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Smeštaj
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Book Online</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sobe</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Apartmani</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Vila Termag</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Monterra Apartmani</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Restoran
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Kamin Sala</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Koliba</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Monterra</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Ponude
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Romantični Paket</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Relax Paket</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Porodični paket</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Back to nature</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Termag ljeto</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Dnevni izleti</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Atrakcije oko nas</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                MICE
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Konferencije i Seminari</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Seminar Sale</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Tehnička Opremljenost</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Svadbe</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Wellness & Spa
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Masaže</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Tretmani</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Bazen</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sauna</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Jacuzzi</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >BABOR kozmetika</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Skijanje
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ski Staze</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ski pass</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ski škola
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ski rental</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ski info</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Visina snijega</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Prognoza</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Kamere</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Sport
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Team Building</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Termag Challenge Race</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Mountainike marathon</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Termag OCR triatlon</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Quad safari</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Biciklizam</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Kuglana</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Bilijar</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Igraonica</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Termag Concept
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Istorija</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Termag</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Monterra</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >ECO friendly</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Organic facts</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Nagrade</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Termag blog</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div>
                        <a href="/kontakt" type="button">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
