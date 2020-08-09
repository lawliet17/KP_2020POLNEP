@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <img src="{{asset('storage/galleries/'. $post->thumbnail)}}" class="img-fluid" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">

                <div class="post-heading">
                  <h3>{{$post->title}}</h3>
                  <span class="meta">Posted by
                    <a href="#">{{$post->user->name}}</a>
                    on {{date('M d, Y', strtotime($post->created_at))}}</span>
                </div>
                <br>
                {!! $post->details!!}
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Related articles</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
@endsection