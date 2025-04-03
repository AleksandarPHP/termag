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
                    <h4>{{$settings->title}}</h4>
                    <p>
                        @isset($settings->address)
                        {{$settings->address}}
                        @endisset <br />
                        Bosna i Hercegovina
                    </p>
                    <div>
                        <a href="https://secure.phobs.net/book.php?page=availability&companyid=822&hotelid=4791&checkin=2024-12-12&checkout=2024-12-13&crcid=a18a7f494542089c9fdb88aa5348bf6f">{{__('Book now')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <a href="https://maps.app.goo.gl/VxJB2sWoA1AwoTRM7" target="_blank">
                    <img
                    src="{{ asset('assets/images/mapa.webp') }}"
                    alt="mapa"
                    class="img-fluid"
                    />
                </a>
            </div>
            <div class="col-lg-3">
                <h5>{{__("Let's be in")}}</h5>
                <h2>{{__('Contact')}}</h2>

                <div class="cta-wrapper">
                    <img
                        src="{{ asset('assets/images/call.svg') }}"
                        alt="call"
                        class="img-fluid"
                    />
                    <p>
                        {{__('CALL')}}
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
                        {{__('Send an EMAIL')}}
                        <a href="mailto:info@termaghotel.com"
                            >info@termaghotel.com</a
                        >
                    </p>
                </div>

                <div class="cta-links">
                    <a href="https://secure.phobs.net/book.php?page=availability&companyid=822&hotelid=4791&checkin=2024-12-12&checkout=2024-12-13&crcid=a18a7f494542089c9fdb88aa5348bf6f">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{__('Book now')}}
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{__('Rooms and Prices')}}
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{__('Packages')}}
                    </a>
                    <a href="#">
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{__('Services')}}
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
