@extends('system.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('system') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
</ol>
<h1>{{ $title }}</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <form method="post" action="@if(!$editing) {{ url('system/'.$route) }} @else {{ url('system/'.$route.'/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->title) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Adresa</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="Adresa" value="{{ old('address', $item->address) }}" {!! $errors->has('address') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="zip">Poštanski broj</label>
                        <input name="zip" type="text" class="form-control" id="zip" placeholder="Poštanski broj" value="{{ old('zip', $item->zip) }}" {!! $errors->has('zip') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="city">Grad</label>
                        <input name="city" type="text" class="form-control" id="city" placeholder="Grad" value="{{ old('city', $item->city) }}" {!! $errors->has('city') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email adresa</label>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email adresa" value="{{ old('email', $item->email) }}" {!! $errors->has('email') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon" value="{{ old('phone', $item->phone) }}" {!! $errors->has('phone') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('worktime') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="worktime">Radno vrijeme</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime1" type="text" class="form-control" id="worktime1" placeholder="Radno vrijeme 1" value="{{ old('worktime1', $item->worktime1) }}" {!! $errors->has('worktime1') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime2" type="text" class="form-control" id="worktime2" placeholder="Radno vrijeme 2" value="{{ old('worktime2', $item->worktime2) }}" {!! $errors->has('worktime2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime3" type="text" class="form-control" id="worktime3" placeholder="Radno vrijeme 3" value="{{ old('worktime3', $item->worktime3) }}" {!! $errors->has('worktime3') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime4" type="text" class="form-control" id="worktime4" placeholder="Radno vrijeme 4" value="{{ old('worktime4', $item->worktime4) }}" {!! $errors->has('worktime4') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime5" type="text" class="form-control" id="worktime5" placeholder="Radno vrijeme 5" value="{{ old('worktime5', $item->worktime5) }}" {!! $errors->has('worktime5') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime6" type="text" class="form-control" id="worktime6" placeholder="Radno vrijeme 6" value="{{ old('worktime6', $item->worktime6) }}" {!! $errors->has('worktime6') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address2">Adresa 2</label>
                        <input name="address2" type="text" class="form-control" id="address2" placeholder="Adresa 2" value="{{ old('address2', $item->address2) }}" {!! $errors->has('address2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="zip2">Poštanski broj 2</label>
                        <input name="zip2" type="text" class="form-control" id="zip2" placeholder="Poštanski broj 2" value="{{ old('zip2', $item->zip2) }}" {!! $errors->has('zip2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="city2">Grad 2</label>
                        <input name="city2" type="text" class="form-control" id="city2" placeholder="Grad 2" value="{{ old('city2', $item->city2) }}" {!! $errors->has('city2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email2">Email adresa 2</label>
                        <input name="email2" type="text" class="form-control" id="email2" placeholder="Email adresa 2" value="{{ old('email2', $item->email2) }}" {!! $errors->has('email2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="phone2">Telefon 2</label>
                        <input name="phone2" type="text" class="form-control" id="phone2" placeholder="Telefon 2" value="{{ old('phone2', $item->phone2) }}" {!! $errors->has('phone2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('worktime') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="worktime">Radno vrijeme 2</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime12" type="text" class="form-control" id="worktime12" placeholder="Radno vrijeme 1 - 2" value="{{ old('worktime12', $item->worktime12) }}" {!! $errors->has('worktime12') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime22" type="text" class="form-control" id="worktime22" placeholder="Radno vrijeme 2 - 2" value="{{ old('worktime22', $item->worktime22) }}" {!! $errors->has('worktime22') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime32" type="text" class="form-control" id="worktime32" placeholder="Radno vrijeme 3 - 2" value="{{ old('worktime32', $item->worktime32) }}" {!! $errors->has('worktime32') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime42" type="text" class="form-control" id="worktime42" placeholder="Radno vrijeme 4 - 2" value="{{ old('worktime42', $item->worktime42) }}" {!! $errors->has('worktime42') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime52" type="text" class="form-control" id="worktime52" placeholder="Radno vrijeme 5 - 2" value="{{ old('worktime52', $item->worktime52) }}" {!! $errors->has('worktime52') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="worktime62" type="text" class="form-control" id="worktime62" placeholder="Radno vrijeme 6 - 2" value="{{ old('worktime62', $item->worktime62) }}" {!! $errors->has('worktime62') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="keywords">Ključne riječi</label>
                        <textarea name="keywords" id="keywords" placeholder="Ključne riječi" rows="5" class="form-control" {!! $errors->has('keywords') ? 'style="border-color:red;"' : '' !!}>{{ old('keywords', $item->keywords) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Opis</label>
                        <textarea name="description" id="description" placeholder="Opis" rows="5" class="form-control" {!! $errors->has('description') ? 'style="border-color:red;"' : '' !!}>{{ old('description', $item->description) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input name="facebook" type="text" class="form-control" id="facebook" placeholder="Facebook" value="{{ old('facebook', $item->facebook) }}" {!! $errors->has('facebook') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input name="instagram" type="text" class="form-control" id="instagram" placeholder="Instagram" value="{{ old('instagram', $item->instagram) }}" {!! $errors->has('instagram') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="analytics">Google Analytics</label>
                        <textarea name="analytics" id="analytics" placeholder="Google Analytics" rows="5" class="form-control" {!! $errors->has('analytics') ? 'style="border-color:red;"' : '' !!}>{{ old('analytics', $item->analytics) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shipping">Cijena dostave</label>
                        <input name="shipping" type="number" min="0" step="1" class="form-control" id="shipping" placeholder="Cijena dostave" value="{{ old('shipping', $item->shipping) }}" {!! $errors->has('shipping') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="free_shipping" value="1" {{ (($errors->any() && old('free_shipping') || (!$errors->any() && $item->free_shipping))) ? 'checked' : '' }}> Besplatna dostava na iznos veći od?
                        </label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="free_shipping_if">Iznos</label>
                        <input name="free_shipping_if" type="number" min="0" step="1" class="form-control" id="free_shipping_if" placeholder="Iznos" value="{{ old('free_shipping_if', $item->free_shipping_if) }}" {!! $errors->has('free_shipping_if') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                <?php $slike = array('Copyright 93x15px' => 'copyright', 'Logo 182x48px' => 'logo', 'Favicon 128x128px' => 'favicon'); ?>
                <?php foreach($slike as $key => $i) { ?>
                    <div class="input-file-container" {!! $errors->has($i) ? 'style="border-color:red;"' : '' !!}>
                      <span class="img-placeholder">
                              @if(is_null($item[$i]))
                              <a href="{{ asset('systemfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('systemfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$item[$i]) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item[$i]) }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="{{ $i }}" class="input-file input-file{{ $i }}" id="my-file{{ $i }}" type="file">
                    <label tabindex="0" for="my-file{{ $i }}" class="input-file-trigger input-file-trigger{{ $i }}">{{ $key }}...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file{{ $i }}"),
                            button = document.querySelector(".input-file-trigger{{ $i }}");

                        button.addEventListener("keydown", function (event) {
                            if (event.keyCode == 13 || event.keyCode == 32) {
                                fileInput.focus();
                            }
                        });
                        button.addEventListener("click", function () {
                            fileInput.focus();
                            return false;
                        });
                    </script>
                <?php } ?>
                </div>
                <div class="col-md-12"><hr></div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="phone2">Podesavanja karticnog placanja (store key)</label>
                        <input name="clientid" type="text" class="form-control" id="clientid" placeholder="Id" value="{{ old('clientid', $item->clientid) }}" {!! $errors->has('clientid') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="phone2">Tip transakcije </label>
                        <select class="custom-select" name="auth" id="">
                            <option value="1" {{ $item->auth == 1 ? 'selected' : '' }}>Prosta prodaja(Autorizacija)</option>
                            <option value="0" {{ $item->auth == 0 ? 'selected' : '' }}>Rezervacija novca (Pre-Autorizacija)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="link">Podesavanja testnog i produkcionog linka placanja</label>
                        <select class="form-control" name="link" id="">
                            <option value="1" {{ $item->link == 1 ? 'selected' : '' }}>Testni link</option>
                            <option value="0" {{ $item->link == 0 ? 'selected' : '' }}>Produkcioni link</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="link">Produkcioni link:</label>
                        <input name="prod_link" type="text" class="form-control" id="prod_link" placeholder="Produkcioni link" value="{{ old('prod_link', $item->prod_link) }}" {!! $errors->has('prod_link') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
            </div>
            <button type="submit" class="btn btn-danger mb-3">Sačuvaj</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('input[type="file"]').change(function() {        
        readURL(this, $(this).parent().find('img'));
    });
</script>
@endsection