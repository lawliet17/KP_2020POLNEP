@extends('frontend.master.app')
@section('konten')

<main class="pt-5">
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
                @if ( Config::get('app.locale') == 'id')
                <a href="{{url('post/'. $post->id_slug)}}">
                @elseif ( Config::get('app.locale') == 'en')
                <a href="{{url('post/'. $post->en_slug)}}">
                @endif
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

              <div class="col-md-8 mb-4">
                @if ( Config::get('app.locale') == 'id')
                <a href="{{url('post/'. $post->id_slug)}}">
                @elseif ( Config::get('app.locale') == 'en')
                <a href="{{url('post/'. $post->en_slug)}}">
                @endif
                <h5>
                @if ( Config::get('app.locale') == 'id')
                  {{$post->id_title}}
                @elseif ( Config::get('app.locale') == 'en')
                  {{$post->en_title}}
                @endif
                </h5>
              </a>
              <!-- Excerpt -->
          <p class="text-justify">
            @if ( Config::get('app.locale') == 'id')
            {{ Str::limit($post->id_details, 200) }}
            @elseif ( Config::get('app.locale') == 'en')
            {{ Str::limit($post->en_details, 200) }}
            @endif
          </p>
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
              
              @foreach ($categories as $cat)
              <li><a href="" class="text-muted">
                {{$cat->name}}
                <span class="badge bg-primary rounded-pill float-right">{{$jumlah_post}}</span>
              </li>
              @endforeach

            </ul>
        </section>
        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->

    <!-- Pagination -->
    <div class="pagination pagination-circle justify-content-center" aria-label="...">
          {{ $posts->links() }}
    </div>
  </div>
</main>
@endsection