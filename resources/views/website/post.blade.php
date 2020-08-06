@extends('website.template.master')

@section('content')
<header class="masthead" style="background-image: url({{asset('storage/galleries/'. $post->thumbnail)}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$post->title}}</h1>
            <span class="meta">Posted by
              <a href="#">{{$post->user->name}}</a>
              on {{date('M d, Y', strtotime($post->created_at))}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {!! $post->details!!}
        </div>
      </div>
    </div>
  </article>
@endsection()