@if (session('success'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success">
            <strong>Uspeh!</strong><br>
            {{ session('success') }} <br>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger">
            <strong>Greška!</strong><br>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    </div>
</div>
@endif