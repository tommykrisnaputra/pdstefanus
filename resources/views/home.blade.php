@extends('master')

@section('title')
	PD Stefanus
@endsection

@section('css')
	@parent
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('navbar')
	@parent
@endsection

@section('home-message')
@endsection

@section('content')
    <div id="main-section" class="home-main">
        <div class="home-main-container">
            @include('home/temabanner')
            <div class="home-hero">
                  <div class="home-content-container">
                      <div class="home-content-title">
                        Come And Join Us<br>
                        And Lets Grow Together in God
                      </div>
                      <div class="home-content-grid">
                          <div class="home-content-grid-item">
                            <i class="fa-solid fa-clock"></i><br>
                            <span class="home-content-text">Every Thursday 19.00</span>
                          </div>
                          <div class="home-content-grid-item">
                            <i class="fa fa-home"></i><br>
                            <span class="home-content-text">Aula St.Kristoforus Grogol</span>
                          </div>
                          <div class="home-content-grid-item">
                            <i class="fa fa-signal"></i><br>
                            <span class="home-content-text">Or join us live on ig @pdstefanus</span>
                          </div>
                      </div>
                  </div>
            </div>
            @if (count($events) > 0)
                <h1>Kegiatan PD</h1>
            @endif
            <div class="home-cards-container">
                @foreach ($events as $key => $data)
                    <div class="place-card-container home-card">
                        <div class="place-card-container1">
                           <span class="place-card-text">
                               <span>{{ $data->title }}</span><br>
                           </span>
                           <span class="place-card-text1">
                               <span>
                                   {!! nl2br(e($data->description)) !!}
                               </span>
                           </span>
                         </div>
                        <img alt="image" src={{ $data->media }} class="place-card-image" />
                    </div>
                @endforeach
          </div>
      </div>
    </div>
    @include('footer')
@endsection

@section('js')
@endsection
