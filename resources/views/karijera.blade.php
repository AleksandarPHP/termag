@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/karijera-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Karijera</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    Naš posao je da ugostimo ljude sa svih strana Svijeta i
                    učinimo da se u hotelu Termag osjećaju kao kod kuće.
                </p>
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/belief-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Termag hotel vjeruje u tebe!</h2>
                <p class="txt mb-4">
                    Naš ambijent jeste udoban i privlačan ali ono što mu daje pravu toplinu jesu ljudi!
                    I, to ne bilo kakvi ljudi, već Termag Hotel TIM!
                    Veoma smo ponosni na naše zaposlene od kojih svaki daje svoj lični pečat hotelu Termag, te svojim trudom i zalaganjem predstavlja pravog ambasadora dobre usluge.
                    Ako nekada bacite pogled na našu Knjigu utisaka, tu možete da nađete samo pohvale za naše osoblje.
                    I to ništa nije slučajno. Studiozan odabir kadrova, gajenje dobrih međuljudskih odnosa, konstantno ulaganje u osoblje i ugodna radna atmosfera samo su neke od odlika hotela Termag koje su usmjerene prema našim kolegama.
                    Veoma smo ponosni na naše osoblje koje gosti već odavno znaju po imenima i sa kojima su postali čak i prijatelji.
                    Takve veze daju neprocjenjivu vrijednost i siguran su znak da smo na pravom putu!
                    Ako i ti želiš da postaneš dio, nadaleko poznatog i priznatog tima, dovoljno je da popuniš formular ispod i dođeš do nas na razgovor.
                    Bićemo sretni da baš tebi pružimo šansu, da pokažeš da možeš stajati rame uz rame sa najboljim.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="wellness-spa job-full">
        <div class="bg" style="background-image: url('{{asset("assets/images/job.jpg")}}');"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="cardd">
                    @if ($errors->any())
                        <h1>error</h1>
                    @endif
                    <h2 class="title-smaller">{{__('Apply easily')}}!</h2>
                    <form action="{{ url('kontakt') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">{{__('Name and surname')}}</label>
                                <input type="text" name="name" placeholder="Field text goes here">
                            </div>
                            <div class="col-md-6">
                                <label for="tel">{{__('Mobile number')}}</label>
                                    <input type="text" name="tel" placeholder="Number goes here">
                            </div>
                            <div class="col-md-6">
                                <label for="title">{{__('Date of Birth')}}</label>
                                <input type="date" id="birthdate" name="date" onload="getDate()"  value="" />
                            </div>
                            <div class="col-md-6">
                                <label for="title">{{__('')}}</label>
                                <input type="email" name="email" placeholder="hello@gmail.com">
                            </div>
                            <div class="col-md-12">
                                <label for="title">{{__('Short biography')}}</label>
                                <textarea name="description" id="" placeholder="Message text goes here" rows="5" cols="10"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="file">{{__('Attach File')}}</label>
                                {{-- <ul class="uploaded-files">  
                                    <li>
                                        <div>
                                            <img src="{{asset('assets/images/link.svg')}}" alt="">
                                            <p>imagename</p>
                                        </div>
                                        <button>
                                            <img src="{{asset('assets/images/delete.svg')}}" alt="">
                                        </button>
                                    </li>
                                </ul> --}}
                                <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
                                <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
                                <div class="dropzone" id="form-upload">
                                    <img src="{{asset('assets/images/upload.svg')}}" alt="upload" class="img-fluid">
                                    <h3>Drop here to attach or <span class="upload-btn">upload</span></h3>
                                    <p>Max size: 5MB</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btnn btn_primary w-100">{{__('Send')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('partials/socials')

</main>
<script>
    $(document).ready(function(e) {
      @if(session('status'))
      $.toast({
        heading: 'Uspijeh.',
        text: {!! json_encode(session('status')) !!},
        hideAfter: 6000,
        position: 'top-right',
        icon: 'success',
        loader: true,
        loaderBg: '#2492D1'
      });
      @endif
      @if($errors->any())
      $.toast({
        heading: 'Error.',
        text: [
          @foreach($errors->all() as $error)
          {!! json_encode($error) !!},
          @endforeach
        ],
        hideAfter: 7000,
        position: 'top-right',
        icon: 'error',
        loader: true,
        loaderBg: '#2492D1'
      });
      @endif
    })
    function getDate(){
        var today = new Date();
        document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
    }
</script>
@include('partials/footer')
