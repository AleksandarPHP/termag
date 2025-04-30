@include('partials/header')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.nocaptcha.sitekey') }}"></script>
<main>
    <section class="wellness-spa job-full">
        <div class="bg center" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="cardd">
                    <h2 class="title-smaller">Application form</h2>
                    <form action="{{url('formular-direktne-rezervacije')}}" id="snedfile" class="sned_file" method="POST" enctype="multipart/form-data">
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
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="Name goes here" {!! $errors->has('name') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Surname</label>
                                <input id="last_name" type="text" name="last_name" value="{{old('last_name')}}" placeholder="Surname goes here" {!! $errors->has('last_name') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="hello@gmail.com" {!! $errors->has('email') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="tel">Mobile number</label>
                                <input type="text" name="tel" id="tel" value="{{old('tel')}}" placeholder="Number goes here" {!! $errors->has('tel') ? 'style="border:1px solid red;"' : '' !!} required>
                            </div>
                            <div class="col-md-6">
                                <label for="check_in">Check in</label>
                                <input type="date" id="check_in" id="check_in" value="{{old('check_in')}}" name="check_in" onload="getDate()"  {!! $errors->has('check_in') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-6">
                                <label for="check_out">Check out</label>
                                <input type="date" id="check_out" id="check_out" value="{{old('check_out')}}" name="check_out" onload="getDate()"  {!! $errors->has('check_out') ? 'style="border:1px solid red;"' : '' !!} required/>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-5">
                                    <p>ACCOMODATION</p>
                                </div>
                                <table class="table formular-table">
                                    <thead>
                                      <tr>
                                        <th scope="col"><h3>Termag hotel</h3></th>
                                        <th>Service</th>
                                        <th>PRICE per person / per night</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Single room</td>
                                        <td>BB</td>
                                        <td>109,00 EUR</td>
                                        <td><input type="checkbox" name="accomodation[0]" value="Termag-Single room" @checked(old('accomodation.0') == "Termag-Single room") id="single-room"></td>
                                      </tr>
                                      <tr>
                                        <td>Double/Triple room</td>
                                        <td>BB</td>
                                        <td>89,00 EUR</td>
                                        <td><input type="checkbox" name="accomodation[1]" value="Termag-Double/Triple room" @checked(old('accomodation.1') == "Termag-Double/Triple room") id="double-Triple-room"></td>
                                      </tr>
                                    </tbody>

                                    <thead class="mt-5">
                                        <tr>
                                          <th scope="col"><h3>MONTERRA APARTHOTEL</h3></th>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Double / Triple suite </td>
                                          <td>BB</td>
                                          <td>85,00 EUR</td>
                                          <td><input type="checkbox" name="accomodation[2]" value="Monterra-Double/Triple suite" @checked(old('accomodation.2') == "Monterra-Double/Triple suite") id="double-triple-suite"></td>
                                        </tr>
                                      </tbody>
                                  </table>
                                  <p class="text-center fs-4">VAT included (17%)</p>
                            </div>

                            <div class="col-md-12 mt-5">
                                <p class="fs-4">*FOR GUEST STAYED AT MONTERRA APARTHOTEL MEALS ARE SERVED AT TERMAG HOTEL</p>
                                <p class="fs-4">Local tax is not included and it costs 1.60 EUR per person, per day.</p>

                                <h3 class="mt-5">Check-in / check out time</h3>
                                <p class="fs-4">The official check-in time is from 3:00 PM, check out time is till 11:00 AM.</p>
                                <p class="fs-4">If needs dictate and if the hotel is able to confirm, time of check-in/out can be corrected.</p>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btnn btn_primary w-100">BOOK NOW</button>
                            </div>
                            <div class="col-md-12 mt-5">
                                <p class="fs-4">If you need transport from / to airport please follow the link below.</p>

                                <a href="{{Helper::url('formular')}}" class=""><p>BOOK TRANSFER</p></a>
                            </div>
                            <script>
                                function onSubmit(token) {
                                  document.getElementById("demo-form").submit();
                                }
                            </script>
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
