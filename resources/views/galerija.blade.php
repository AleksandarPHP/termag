@include('partials/header')

<main>
    <section class="weather gallery-intro">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="wrapper">
                <h1 class="title-larger">Galerija</h1>
                <p class="txt">
                    Pogledajte našu galeriju fotografija i zavirite u svaki kutak hotela. Doživite raskoš i eleganciju koju vam nudimo i uvjerite se u luksuz i udobnost Termaga.
                </p>
            </div>
        </div>
    </section>
    @php
        $gallerise = Helper::galery();
    @endphp
    <section class="gallery">
        <div class="container-fluid">
            <div class="gallery-wrapper">
                @foreach ($gallerise as $gallery)
                    <a href="{{asset('storage/'. $gallery->image)}}" data-fancybox="gallery">
                        <img class="img-gallery" src="{{asset('storage/'. $gallery->image)}} " width="250px" height="250px"/>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/ponude-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Ponude</h2>
                    <p class="txt mb-4">
                        Vizuelno istražite posebne ponude i aranžmane koje smo pripremili za vas, kao i raznovrsnost iskustava koje vam nudimo. U našoj galeriji možete pronaći inspiraciju za planiranje savršenog odmora za vas.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
