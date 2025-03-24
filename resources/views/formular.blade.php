@include('partials/header')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.nocaptcha.sitekey') }}"></script>

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

    {{-- @include('partials/booking') --}}
    <section class="wellness-spa job-full">
        <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="cardd">
                    <h2 class="title-smaller">{{__('Application form')}}</h2>
                    <form action="{{url('formular')}}" id="snedfile" class="sned_file" method="POST" enctype="multipart/form-data">
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
                                <label for="tel">{{__('Mobile number')}}</label>
                                <input type="text" name="tel" id="tel" value="{{old('tel')}}" placeholder="Number goes here" {!! $errors->has('tel') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="transfer_date">{{__('Transfer date')}}</label>
                                <input type="date" id="transfer_date" id="transfer_date" value="{{old('transfer_date')}}" name="transfer_date" onload="getDate()"  {!! $errors->has('transfer_date') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-6">
                                <label for="transfer_time">{{__('Transfer time')}}</label>
                                <input type="time" id="transfer_time" value="{{old('transfer_time')}}" name="transfer_time" onload="getDate()"  {!! $errors->has('transfer_time') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
             
                            <div class="col-md-6">
                                <label for="flight_number">{{__('Flight number')}}</label>
                                <input type="text" id="flight_number" id="flight_number" value="{{old('flight_number')}}" placeholder="Flight number goes here" name="flight_number" onload="getDate()"  {!! $errors->has('flight_number') ? 'style="border:1px solid red;"' : '' !!}/>
                            </div>
                            <h3 class="mt-5">{{__('Passengers')}}</h3>
                            <div class="col-md-3">
                                <label for="adults">{{__('Adults')}}</label>
                                <input type="number" id="adults" id="adults" value="{{old('adults')}}" name="adults" placeholder="2" {!! $errors->has('adults') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-3">
                                <label for="children">{{__('Children')}}</label>
                                <input type="number" id="children" id="children" value="{{old('children')}}" name="children" placeholder="0" {!! $errors->has('children') ? 'style="border:1px solid red;"' : '' !!}/>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <br>
                                <label class="mb-5">{{__('Kids chair')}}	</label>
                                <div class="row">
                                    <div class="col-md-3 col-2">
                                        <input type="radio" id="chair1" id="chair" value="Da" name="chair" required/>
                                        <label style="text-align: center;justify-content: center;display: flex;" for="chair1">{{__('Yes')}}</label>
                                    </div>
                                    <div class="col-md-3 col-2">
                                        <input type="radio" id="chair2" id="chair" value="Ne" name="chair" required/>
                                        <label style="text-align: center;justify-content: center;display: flex;" for="chair2">{{__('No')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="mt-5" for="description">{{__('Commnet')}}</label>
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
