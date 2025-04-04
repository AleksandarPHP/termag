<section class="socials">
    <div class="bg center" style="background-image: url('{{asset("assets/images/socials-bg.jpg")}}');"></div>
    <div class="container">
        <div class="wrapper">
            @if ($settings->instagram)
                <a href="{{$settings->instagram}}" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" target="_blanck">
                    <img class="img-fluid" src="{{asset('assets/images/Instagram.svg')}}" alt="instagram" />
                </a>
            @endif
            @if ($settings->facebook)
            <a href="{{$settings->facebook}}" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500" target="_blanck">
                <img class="img-fluid" src="{{asset('assets/images/Facebook.svg')}}" alt="Facebook" />
            </a>
            @endif
            @if ($settings->google)
            <a href="{{$settings->google}}" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700" target="_blanck">
                <img class="img-fluid" src="{{asset('assets/images/Gmail.svg')}}" alt="Gmail" />
            </a>
            @endif
            <a href="{{Helper::url('visina-snega')}}" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700" target="_blanck">
                <img class="img-fluid" src="{{asset('assets/images/camera.svg')}}" alt="Gmail" />
            </a>
        </div>
    </div>
</section>