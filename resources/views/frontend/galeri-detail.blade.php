@extends('frontend.master.app')
@section('konten')

    <!--Main layout-->
  <main class="pt-5">
    <!-- Page Content -->

    <div class="container">
      <div class="row">
        @foreach ($galleries as $gallery)
        <div class="col-lg-4 col-md-6 mb-3" data-toggle="modal" data-target="#modal">
          <div class="custom-img" data-ripple-color="light">
            <a href="#lightbox" data-slide-to="{{ $loop->index}}"><img src="{{ asset('storage/galleries/'. $gallery->image_url) }}" class="w-100"></a>        </a>
          </div>
            
        </div>    
        @endforeach
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="10000" data-keyboard="true">
              <div class="carousel-inner">
                @foreach ($galleries as $gallery)
                <div class="carousel-item {{$loop->last ? 'active' : ''}}"><img src="{{ asset('storage/galleries/'. $gallery->image_url) }}" class="w-100"
                   alt="">
                  </div>
                @endforeach

              </div>
              <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
              <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection