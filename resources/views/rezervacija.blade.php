@include('partials/header')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.nocaptcha.sitekey') }}"></script>

{{-- <script src="https://www.google.com/recaptcha/api.js?render=6LeIfqoqAAAAADO-AYxXMaO6Og7S7MkvmAHTIrsb"></script> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('cmsfiles/css/dropzone.css') }}" /> --}}

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/prevoz-jahorina-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{__('Transportation')}}</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {{__('Dear Sir/Madam, please fill out the form as thoroughly as possible to help us improve our service.')}}
                </p>
            </div>
        </div>
    </section>

    @include('partials/booking')
    <section class="wellness-spa job-full">
        {{-- <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div> --}}
        <div class="container">
            <script type="text/javascript">
                window.wbpSettings = window.wbpSettings || {};
                window.wbpSettings = {
                  'hotelId': '33635',
                  'language': 'ba',
                  'currency': 'BAM',
                  'showLogo': '0',
                  'showFooter': '0',
                  'darktheme': '0',
                   'showProperty': 0
                }
                </script>
              
              <script>
              fetch('https://booking.webbookingpro.com/asset-manifest.json')
                  .then((response) => response.json())
                  .then(({entrypoints}) => {
                      entrypoints.forEach(file => {
                          if (file.endsWith('.css')) {
                              var css = document.createElement('link');
                              css.rel = 'stylesheet';
                              css.href = 'https://booking.webbookingpro.com/' + file;
                              document.head.appendChild(css);
                          }
                          else if (file.endsWith('js')) {
                              var script = document.createElement('script');
                              script.src = 'https://booking.webbookingpro.com/' + file;
                              document.head.appendChild(script);
                          }
                      });
                  });
              </script>
                <div id="wbproot" ></div>
        </div>
    </section>
</main>
{{-- <script type="text/javascript" src="{{ asset('cmsfiles/js/dropzone.js') }}"></script> --}}
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
