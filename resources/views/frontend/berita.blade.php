@extends('frontend.master.app')
@section('konten')

<main class="mt-5 pt-5">
  <div class="container">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-9 mb-4">
        <!--Section: Content-->
        <section>
          <!-- Post -->
          @foreach ($posts as $post)
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-ripple-color="light">
                <img src="{{asset('storage/galleries/'.$post->thumbnail)}}" class="img-fluid">
                <a href="{{url('post/'. $post->id)}}">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

              <div class="col-md-8 mb-4">
              <a href="{{url('post/'. $post->id)}}">
                <h5>{{$post->title}}</h5>
              </a>
              <!-- Excerpt -->
          <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
            quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
            et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
              <div class="row mb-3">
                <div class="col-6">
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
          </div>
          @endforeach
          

        </section>
        <!--Section: Content-->
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 mb-4">
        <!--Section: Sidebar-->
        <section class="container card sticky-top" style="top: 80px;">
          <h3 class="mt-3 text-center"><span>CATEGORIES</span></h3>
          <ul class="list-group list-group-flush shadow-5 p-4 mb-4">
              
              <li><a href="" class="text-muted">
                Kategori
                <span class="badge bg-primary rounded-pill float-right">14</span>
              </li>
              
            </ul>
        </section>
        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->

    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</main>
@endsection