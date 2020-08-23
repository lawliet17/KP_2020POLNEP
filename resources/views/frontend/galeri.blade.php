@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <main class="pt-5">
    <div class="container">
            <!--Section: Images-->
            <section class="text-center">

                <!-- Grid row -->
                <div class="row">

                    @foreach ($choices as $choice)
                    <!-- Grid column -->
                    <div class="col-md-6 mb-3">

                        <!--Zoom effect-->
                        <div class="view overlay zoom z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Others/documentation/2.jpg" class="img-fluid " alt="zoom">
                            <a href="{{url('galeri/'. $choice->name)}}"><div class="mask flex-center waves-effect waves-light">
                                <p class="white-text">
                                    {{ $choice->name }}
                                </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->
                    @endforeach

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Images-->

      <hr class="my-5">
    </div>
  </main>
  <!--Main layout-->
  @endsection