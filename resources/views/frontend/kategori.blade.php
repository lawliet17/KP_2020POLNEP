@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <div class="container pt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">
  
      <!-- Section heading -->
      <h3 class="text-center font-weight-bold mb-4 pb-2">Kategori:{{$category->name}}</h3>
      
      @foreach ($posts as $post)
      <!-- Grid row -->
      <div class="row align-items-center">
  
        <!-- Grid column -->
        <div class="col-lg-5 col-xl-4">
  
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="{{asset('storage/galleries/'. $post->thumbnail)}}" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-7 col-xl-8">
  
          <!-- Post title -->
          @if ( Config::get('app.locale') == 'id')
                <a href="{{url('post/'. $post->id_slug)}}">
                @elseif ( Config::get('app.locale') == 'en')
                <a href="{{url('post/'. $post->en_slug)}}">
                @endif
          <h4 class="font-weight-bold mb-3">
            <strong>
              @if ( Config::get('app.locale') == 'id')
              {{$post->id_title}}
            @elseif ( Config::get('app.locale') == 'en')
              {{$post->en_title}}
            @endif
            </strong></h4>
          <!-- Excerpt -->
          <p class="text-justify">
            @if ( Config::get('app.locale') == 'id')
            {!! Str::limit($post->id_details, 500) !!}
            @elseif ( Config::get('app.locale') == 'en')
            {!! Str::limit($post->en_details, 500) !!}
            @endif
          </p>
          <!-- Post data -->
          <div class="row">
            <div class="col-6">
            <p>by <a class="font-weight-bold">{{$post->user->name}}</a></p>
            </div>

            <div class="col-6 text-right">
              <u>{{$post->created_at->diffForHumans()}}</u>
            </div>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
      <br>
      @endforeach
  
    </section>
    <!--Section: Content-->
  
  
  </div>
  <!--Main layout-->
  @endsection