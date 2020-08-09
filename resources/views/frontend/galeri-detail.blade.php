@extends('frontend.master.app')
@section('konten')

    <!--Main layout-->
  <main class="mt-5 pt-5">
    <!-- Page Content -->
<div class="container gallery">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-left">

      @foreach ($galleries as $gallery)
      <div class="col-lg-4 col-md-6 mb-3" data-toggle="modal" data-target="#modal">
        <a href="#lightbox" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('storage/galleries/'. $gallery->image_url)}}" alt="">
            </a>
      </div>
      @endforeach
    </div>
  
  </div>
  <!-- /.container -->

  <!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
					<div class="carousel-inner">

            @foreach ($galleries as $gallery)
            <div class="carousel thumbnail"><img src="{{asset('storage/galleries/'. $gallery->image_url)}}" class="w-100"
               alt="">
            </div>
            @endforeach
			</div>
		</div>
	</div>
</div>
  </main>
  <!--Main layout-->
  @endsection