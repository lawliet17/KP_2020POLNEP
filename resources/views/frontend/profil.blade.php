@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <main class="">
      <nav class="Quick-navigation">
        <a href="#A" class="Quick-navigation-item">@lang('lang.sejarah')</a>
        <a href="#B" class="Quick-navigation-item">@lang('lang.visi')</a>
        <a href="#C" class="Quick-navigation-item">@lang('lang.makna')</a>
        <a href="#D" class="Quick-navigation-item">@lang('lang.denah')</a>
      </nav>
      
      <section id="A" class="js-scroll-step">
        <div class="container">
          <div class="col-12 h3 text-center pt-5"><a class="heading-hover type1">
            @lang('lang.sejarah')
          </a></div>
          <div class="col-12 mt-5 text-justify" style="min-width: 300px; max-width: 500px;margin: auto;">
            <p class="timeline">
              @lang('lang.sejarah1')
            </p>
            <p class="timeline">
              @lang('lang.sejarah2')
            </p>
            <p class="timeline">
              @lang('lang.sejarah3')
             </p>
            <p class="timeline">
              @lang('lang.sejarah4')
            </p>
            <p class="timeline">
              @lang('lang.sejarah5')
            </p>
            <p class="timeline">
              @lang('lang.sejarah6')
            </p>       
            <p class="timeline">
              @lang('lang.sejarah7')
            </p>      
          </div>
        </div>
      </section>
      
      <section id="B"  class="js-scroll-step bgw">
        <div class="container mb-4">
          <div class="col-12 h3 text-center pt-5">
            <a class="heading-hover type1">
            @lang('lang.visi')
            </a></div>
          <div class="row">
          <div class="col-lg-3 col-md-12 mt-5">
            <div class="visi-misi text-justify">
              <span>
                <span>
                  <span>
                    <h3><b>@lang('lang.judulvisi')</b></h3>
                    <p>@lang('lang.vision')
                    </p>
                  </span>
                </span>
              </span>
            </div>            
          </div>
          <div class="col-lg-9 col-md-12 mt-5">
            <div class="visi-misi text-justify">
              <span>
                <span>
                  <span>
                    <h3><b>@lang('lang.judulmisi')</b></h3>
                    <p>
                      <ol>
                      @lang('lang.mission')
                      </ol>
                    </p>
                  </span>
                </span>
              </span>
            </div>            
          </div>
          </div>
        </div>
      </section>
      
      <section id="C" class="js-scroll-step bgw">
        <div class="container">
          <div class="col-12 h3 text-center pt-5"><a class="heading-hover type1">
            @lang('lang.makna')
          </a></div>
          <div class="row">
            <div class="col-lg-4 col-sm-8 mt-5">
                <img src="http://neo.polnep.ac.id/public/assets/images/upload/logopolnep.png" class="img-fluid">
            </div>
            <div class="col-lg-8 col-sm-12 mt-5">
              <div class="text-justify">
                        <ul>
                          @lang('lang.maknasimbol')
                        </ul>
              </div>            
            </div>
          </div>
        </div>
      </section>
      
      <section id="D" class="js-scroll-step">
        <div class="container">
          <div class="col-12 h3 text-center pt-5"><a class="heading-hover type1">
            @lang('lang.denah')
          </a></div>
          <div class="col-12 mt-5 mb-5">
            <div class="custom-img" data-ripple-color="light">
              <img src="http://neo.polnep.ac.id/public/assets/images/upload/denah.jpg" class="w-100">
            </div>
          </div>
        </div>
      </section>
      
      <button class="Scroll-to-top">^</button>
</main>
  <!--Main layout-->
@endsection