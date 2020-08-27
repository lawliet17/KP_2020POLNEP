@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <main>
         <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    @foreach ($banners as $ban)
    <li data-target="#carousel-example-1z" data-slide-to="{{ $ban->id }}" class="active"></li>
    @endforeach
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @foreach ($banners as $ban)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

      <img class="d-block w-100" src="{{asset('storage/galleries/'. $ban->image)}}"
        alt="slide">
    </div>
    @endforeach
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    <div class="container">
      <!-- Content -->
      <!--Section: Products v.3-->
      <section class="row mb-4 my-5">
        <div class="col-12 h3 text-center mb-5"><a class="heading-hover type1">
          @lang('lang.secdir')
        </a></div>
        <div class="col-12">
          <div class="profile-pic float-left mr-3">

            <figure class="profilecard">
        
              <img src="http://neo.polnep.ac.id/public/assets/images/upload/Dir.jpg" />
        
              <figcaption>Ir. H. Muhammad Toasin A., M.Si</figcaption>
        
            </figure>
        
          </div>
            <p style="text-align: justify;">
            @lang('lang.pesandirektur')
          </p>
        </div>
      </section>
      <!--Section: Products v.3-->
      </div>

      <!--Section: Products v.3-->
      <section class="bgw">
        <div class="container py-4">
        <div class="h3 text-center mb-5"><a class="heading-hover type1">
          @lang('lang.secberita')
        </a></div>

        <!--Grid row-->
        <div class="row wow fadeIn">

          @foreach ($posts as $post)
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card hoverable" id="tv">

              <!--Card image-->
              <div class="view overlay wow bounce">
                <img src="{{asset('storage/galleries/'.$post->thumbnail)}}" class="card-img-top"
                  alt="Responsive image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-justify">
                <!--Category & Title-->

                @if ( Config::get('app.locale') == 'id')
                <a href="{{url('post/'. $post->id_slug)}}">
                @elseif ( Config::get('app.locale') == 'en')
                <a href="{{url('post/'. $post->en_slug)}}">
                @endif
                  <h5>
                    @if ( Config::get('app.locale') == 'id')
                      {{Str::limit($post->id_title, 50) }}
                    @elseif ( Config::get('app.locale') == 'en')
                      {{Str::limit($post->en_title, 50) }}
                    @endif
                  </h5>
                </a>
                    <!-- Excerpt -->
              <p>
                @if ( Config::get('app.locale') == 'id')
                {!! Str::limit($post->id_details, 100) !!}
                @elseif ( Config::get('app.locale') == 'en')
                {!! Str::limit($post->en_details, 100) !!}
                @endif
              </p>
                  <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6 text-left">
                  @foreach($post->categories as $category)
                  <a href="{{url('category/'. $category->id)}}" class="text-info">
                    {{$category->name}}
                    @endforeach
                  </a>
                </div>

                <div class="col-6 text-right">
                  <u>{{$post->created_at->diffForHumans()}}</u>
                </div>
              </div>
              </div>
              <!--Card content-->
            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
          @endforeach

        </div>
        <!--Grid row-->
      </div>
      </section>
      <!--Section: Products v.3-->

      <div class="container py-4">
        <!--Section: More-->
        <section class="mb-5">
  
          <div class="h3 text-center mb-5"><a class="heading-hover type1">
            @lang('lang.secdept')
          </a></div>
          
          <div id="flex-container" class="testimonials">
            <div id="left-zone">
              <ul class="list">
                <li class="item">
                  <input type="radio" id="radio_testimonial-1" name="basic_carousel" checked="checked" />
                  <label class="label_testimonial-1" for="radio_testimonial-1">@lang('lang.sipildept')</label>
                  <div class="content-test content_testimonial-1">
                    <h1>@lang('lang.sipildept')</h1>
                    <p>@lang('lang.sipildetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-2" name="basic_carousel" />
                  <label class="label_testimonial-2" for="radio_testimonial-2">@lang('lang.mesindept')</label>
                  <div class="content-test content_testimonial-2">
                    <h1>@lang('lang.mesindept')</h1>
                    <p>@lang('lang.mesindetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-3" name="basic_carousel" />
                  <label class="label_testimonial-3" for="radio_testimonial-3">@lang('lang.elektrodept')</label>
                  <div class="content-test content_testimonial-3">
                    <h1>@lang('lang.elektrodept')</h1>
                    <p>@lang('lang.elektrodetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-4" name="basic_carousel" />
                  <label class="label_testimonial-4" for="radio_testimonial-4">@lang('lang.akdept')</label>
                  <div class="content-test content_testimonial-4">
                    <h1>@lang('lang.akdept')</h1>
                    <p>@lang('lang.akdetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-5" name="basic_carousel" />
                  <label class="label_testimonial-5" for="radio_testimonial-5">@lang('lang.admdept')</label>
                  <div class="content-test content_testimonial-5">
                    <h1>@lang('lang.admdept')</h1>
                    <p>@lang('lang.admdetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-6" name="basic_carousel" />
                  <label class="label_testimonial-6" for="radio_testimonial-6">@lang('lang.tanidept')</label>
                  <div class="content-test content_testimonial-6">
                    <h1>@lang('lang.tanidept')</h1>
                    <p>@lang('lang.tanidetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-7" name="basic_carousel" />
                  <label class="label_testimonial-7" for="radio_testimonial-7">@lang('lang.ikpdept')</label>
                  <div class="content-test content_testimonial-7">
                    <h1>@lang('lang.ikpdept')</h1>
                    <p>@lang('lang.ikpdetail')</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-8" name="basic_carousel" />
                  <label class="label_testimonial-8" for="radio_testimonial-8">@lang('lang.arsdept')</label>
                  <div class="content-test content_testimonial-8">
                    <h1>@lang('lang.arsdept')</h1>
                    <p>@lang('lang.arsdetail')</p>
                  </div>
                </li>
              </ul>
            </div>
            <div id="right-zone"></div>
          </div>
        </section>
        <!--Section: More-->  
    </div>
  </main>
  <!--Main layout-->
@endsection
