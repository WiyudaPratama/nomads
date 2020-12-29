@extends('layouts.app')

@section('title', 'NOMADS')

@section('content')
<!-- Header -->
<header class="text-center">
  <h1>Explore The Beautiful World <br> As Easy One Click</h1>
  <p class="mt-3">You will see beautiful <br> moment you never see before</p>
  <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<main>
  <div class="container">
    <section class="section-stats row justify-content-center">
      <div class="col-3 col-md-2 detail-stats">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 detail-stats">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 detail-stats">
        <h2>3K</h2>
        <p>Hotels</p>
      </div>
      <div class="col-3 col-md-2 detail-stats">
        <h2>12K</h2>
        <p>Partners</p>
      </div>
    </section>
  </div>

  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2>Wisata Popular</h2>
          <p>Something that you never tyr <br>before in this world</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-popular-content" id="popularTravel">
    <div class="container">
      <div class="row section-popular-travel justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ url('frontend/images/travel-1.jpg') }}');">
            <div class="travel-country">INDONESIA</div>
            <div class="travel-location">DERATAN, BALI</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ url('frontend/images/travel-2.jpg') }}');">
            <div class="travel-country">INDONESIA</div>
            <div class="travel-location">BROMO, MALANG</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ url('frontend/images/travel-3.jpg') }}');">
            <div class="travel-country">INDONESIA</div>
            <div class="travel-location">NUSA PENINDA</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ url('frontend/images/travel-4.jpg') }}');">
            <div class="travel-country">MIDDLE EAST</div>
            <div class="travel-location">DUBAI</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-networks" id="networks">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Networks</h2>
          <p>Companies are trusted us <br>more than just a trip</p>
        </div>
        <div class="col-md-8 text-center">
          <img src="{{ url('frontend/images/partner.png') }}" alt="Logo Partner" class="img-partner">
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>They Are Loving Us</h2>
          <p>Moments were giving them <br>the best experience</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-tetimonial-content" id="testimonialContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-ms-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="{{ url('frontend/images/avatar-1.png') }}" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Angga Risky</h3>
              <p class="testimonial">"It was glorius and i could not stop to say whoooo for every single moment Dankeeee.</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Ubud</p>
          </div>
        </div>
        <div class="col-sm-6 col-ms-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="{{ url('frontend/images/avatar-2.png') }}" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Shayna</h3>
              <p class="testimonial">"The trip wa amaizing and i saw something beautiful in that island that makes me want to learn more.</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Nusa Penisa</p>
          </div>
        </div>
        <div class="col-sm-6 col-ms-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="{{ url('frontend/images/avatar-3.png') }}" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Sabrina</h3>
              <p class="testimonial">"I love it when the waves was shaking harder - I was scared to.</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Karimun Jawa</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
          <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection