<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <a href="#">
                    <img
                        src="{{ asset('assets/images/footer-logo.svg') }}"
                        alt="logo"
                        class="img-fluid"
                    />
                </a>

                <div>
                    <h4>HOTEL TERMAG</h4>
                    <p>
                        Olimpijska 4 <br />
                        Bosna i Hercegovina
                    </p>
                    <div>
                        <a href="#">Book now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <a href="https://maps.app.goo.gl/VxJB2sWoA1AwoTRM7" target="_blank">
                    <img
                    src="{{ asset('assets/images/mapa.png') }}"
                    alt="mapa"
                    class="img-fluid"
                    />
                </a>
            </div>
            <div class="col-lg-3">
                <h5>Budimo u</h5>
                <h2>Kontaktu</h2>

                <div class="cta-wrapper">
                    <img
                        src="{{ asset('assets/images/call.svg') }}"
                        alt="call"
                        class="img-fluid"
                    />
                    <p>
                        POZOVITE
                        @isset($settings->phone)
                            <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                        @endisset
                    </p>
                </div>
                <div class="cta-wrapper">
                    <img
                        src="{{ asset('assets/images/mail.svg') }}"
                        alt="mail"
                        class="img-fluid"
                    />
                    <p>
                        Pošaljite MEJL
                        <a href="mailto:info@termaghotel.com"
                            >info@termaghotel.com</a
                        >
                    </p>
                </div>

                <div class="cta-links">
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Bukiraj
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Sobe i Cijene
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Paketi
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Usluge
                    </a>
                </div>
            </div>
        </div>
    </div>

    <p class="lastline">
        Copyright 2024 © Hotel Termag. Sva prava zadržana. Created by 
        <a href="https://soft4tech.com/">SoftTech</a>
    </p>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script
    type="text/javascript"
    src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
    type="text/javascript"
    src="{{ asset('assets/slick-1.8.1/slick/slick.min.js') }}"
></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
<script src="{{ asset('assets/javascripts/main.js') }}"></script>
