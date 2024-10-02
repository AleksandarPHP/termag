@extends('layout')
@section('content')
<section class="container">


  <div class="err404">
      <h1 class="err404-ttl">404</h1>
      <p class="err404-subttl">
          Greska. Stranica nije pronadjena.
      </p>
      <div class="err404-menus">
          <ul>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('prodaja') }}">Catalog</a></li>
              <li><a href="{{ url('elements') }}">Elements</a></li>
              <li><a href="{{ url('kontakt') }}">Contacts</a></li>
              <li><a href="{{ url('blog') }}">Blog</a></li>
          </ul>
          <ul>
              <li><a href="{{ url('') }}">Women</a></li>
              <li><a href="{{ url('') }}">Men</a></li>
              <li><a href="{{ url('') }}">Kids</a></li>
              <li><a href="{{ url('') }}">Shoes</a></li>
              <li><a href="{{ url('') }}">Accessories</a></li>
          </ul>
          <ul>
              <li><a href="{{ url('') }}">Blog</a></li>
              <li><a href="{{ url('') }}">News</a></li>
              <li><a href="{{ url('') }}">Reviews</a></li>
              <li><a href="{{ url('') }}">Contacts</a></li>
              <li><a href="{{ url('') }}">Articles</a></li>
          </ul>
          <ul>
              <li><a href="{{ url('') }}">About us</a></li>
              <li><a href="{{ url('') }}">Delivery</a></li>
              <li><a href="{{ url('') }}">Guarantees</a></li>
              <li><a href="{{ url('') }}">How to buy</a></li>
              <li><a href="{{ url('') }}">Contacts</a></li>
          </ul>

      </div>
  </div>

</section>
@endsection