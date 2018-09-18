@extends('template')
@section('title','resume')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
    <h1>Gallery</h1>

      <main>
		<div class="gallery">
			<h1>Gallery </h1>
		<figure>
			<img src="{{asset('img/cactus.jpg')}}" alt="Cactus Plant">
			<figcaption>A cactus plant</figcaption>
		</figure>

		<figure>
			<img src="{{asset('img/arrangement.jpg')}}" alt="A flower">
			<figcaption>Flowers</figcaption>
		</figure>

		<figure>
			<img src="{{asset('img/beach.jpg')}}" alt="A beach">
			<figcaption>A beautiful beach</figcaption>
		</figure>

		<figure>
			<img src="{{asset('img/clock.svg')}}" alt="A Clock">
			<figcaption>A Clock</figcaption>
		</figure>

		<figure>
			<img src="{{asset('img/mobile-phone.jpg')}}" alt="A mobile phone">
			<figcaption>A Mobile Phone</figcaption>
		</figure>

		<figure>
			<img src="{{asset('img/mobile.jpg')}}" alt="A Mobile">
			<figcaption>Another Mobile</figcaption>
		</figure>	
		</div>
		
	</main>

@endsection

@section('footer')
    @include('partials.footer')    
@endsection
