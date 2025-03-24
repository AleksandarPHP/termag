@include('partials/header')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.nocaptcha.sitekey') }}"></script>

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/konf-sala-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{__('Conferences and Seminars')}}</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {{__('Dear Sir/Madam, please fill out the form as thoroughly as possible to help us improve our service.')}}
                </p>
            </div>
        </div>
    </section>

    {{-- @include('partials/booking') --}}
    <section class="wellness-spa job-full">
        <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="cardd">
                    <h2 class="title-smaller">{{__('Application form')}}</h2>
                    <form action="{{url('formular-seminari')}}" class="sned_file" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('{{ config('services.nocaptcha.sitekey') }}', {action: 'submit'}).then(function(token) {
                                    document.getElementById('g-recaptcha-response').value = token;
                                });
                            });
                        </script>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">{{__('Name')}}</label>
                                <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="Name goes here" {!! $errors->has('name') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">{{__('Surname')}}</label>
                                <input id="last_name" type="text" name="last_name" value="{{old('last_name')}}" placeholder="Surname goes here" {!! $errors->has('last_name') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">{{__('email')}}</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="hello@gmail.com" {!! $errors->has('email') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="company">{{__('Company')}}</label>
                                <input type="text" id="company" id="company" value="{{old('company')}}" placeholder="Company name" name="company" onload="getDate()"  {!! $errors->has('flight_number') ? 'style="border:1px solid red;"' : '' !!}/>
                            </div>
                            <div class="col-md-3">
                                <label for="check_in">{{__('Check in')}}</label>
                                <input type="date" id="check_in" id="check_in" value="{{old('check_in')}}" name="check_in" onload="getDate()"  {!! $errors->has('check_in') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-3">
                                <label for="check_out">{{__('Check out')}}</label>
                                <input type="date" id="check_out" value="{{old('check_out')}}" name="check_out" onload="getDate()"  {!! $errors->has('check_out') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3">
                                <label for="guest">{{__('Number of guests')}}</label>
                                <input type="number" id="guest" id="guest" value="{{old('guest')}}" name="guest" placeholder="2" {!! $errors->has('guest') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-3">
                                <label for="rooms">{{__('Required no of rooms')}}</label>
                                <input type="number" id="rooms" id="rooms" value="{{old('rooms')}}" name="rooms" placeholder="1" {!! $errors->has('rooms') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <br>
                                <label class="mb-5">{{__('Seminar hall required')}}	</label>
                                <div class="row">
                                    <div class="col-md-3 col-2">
                                        <input type="radio" id="hall1" id="hall" value="Da" name="hall" required/>
                                        <label style="text-align: center;justify-content: center;display: flex;" for="hall1">{{__('Yes')}}</label>
                                    </div>
                                    <div class="col-md-3 col-2">
                                        <input type="radio" id="hall2" id="hall" value="Ne" name="hall" required/>
                                        <label style="text-align: center;justify-content: center;display: flex;" for="hall2">{{__('No')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="mt-5" for="description">{{__('Aditional requests')}}</label>
                                <textarea name="description" id="description" placeholder="Message text goes here" rows="5" cols="10" {!! $errors->has('description') ? 'style="border:1px solid red;"' : '' !!}>{{old('description')}}</textarea>
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
