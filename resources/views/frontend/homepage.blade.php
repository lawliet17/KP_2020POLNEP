@extends('frontend.master.app')
@section('konten')

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

     <!--Section: Jumbotron-->
     <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

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
      <!-- Content -->
    </section>
    <!--Section: Jumbotron-->

      <hr class="my-5">
      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <h3 class="h3 text-center mb-5">Berita</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          @foreach ($posts as $post)
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card hoverable">

              <!--Card image-->
              <div class="view overlay">
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
                <a href="{{url('post/'. $post->id)}}" class="dark-grey-text">
                  <h5>{{$post->title}}</h5>
                </a>
                    <!-- Excerpt -->
          <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
            quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
            et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
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

      </section>
      <!--Section: Products v.3-->


      <hr class="my-5">


        <!--Section: More-->
        <section class="mb-5">
  
          <h2 class="my-5 h3 text-center">Jurusan dan Prodi</h2>
  
          <!--First row-->
          <div class="row features-small mt-5 wow fadeIn">
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5 class="feature-title font-bold mb-1">Teknik Sipil dan Perencanaan</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse01">
                  <p class="grey-text mt-2">Jurusan Teknik Sipil dan Perencanaan terbagi menjadi dua Program Studi yaitu Program Studi Teknik Sipil (D3) dan Program Studi Perencanaan Perumahan Dan Pemukiman (D4)
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5 class="feature-title font-bold mb-1">Teknik Mesin</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse02">
                  <p class="grey-text mt-2">Jurusan Teknik Mesin terbagi menjadi tiga Program Studi yaitu Program Studi Teknik Mesin (D4), Program Studi Teknik Mesin (D3) dan Program Studi Operator & Peralatan Alat Berat (D1)
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5 class="feature-title font-bold mb-1">Teknik Elektro</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse03">
                  <p class="grey-text mt-2">Jurusan Teknik Elektro menyelenggarakan pendidikan Diploma 3 (D3) yang mencakup tiga progam studi yaitu Program Studi Teknik Listrik, Program Studi Teknik Elektronika dan Program Studi Teknik Informatika
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5 class="feature-title font-bold mb-1">Administrasi Bisnis</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse04">
                  <p class="grey-text mt-2">Jurusan Adminsitrasi Bisnis saat ini mempunyai 2 (dua) program studi, yaitu Diploma III Program Studi Administrasi Bisnis dan Diploma IV Program Studi Administrasi Negara
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
          </div>
          <!--/First row-->
  
          <!--Second row-->
          <div class="row features-small wow fadeIn">
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5 class="feature-title font-bold mb-1">Akuntansi</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse05">
                  <p class="grey-text mt-2">Jurusan Akuntansi mempunyai 2 (dua) program studi, yaitu Diploma III Program Studi Akuntansi dan Diploma IV Program Studi Akuntansi
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5 class="feature-title font-bold mb-1">Teknologi Pertanian</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse06">
                  <p class="grey-text mt-2">Jurusan Teknologi Pertanian terbagi menjadi tiga Program Studi yaitu Program Studi Teknologi Pengolahan Hasil Perkebunan (D3), Program Studi Manajemen Perkebunan (D4), dan Program Studi Budidaya Tanaman Perkebunan (D4)
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5 class="feature-title font-bold mb-1">Ilmu Kelautan dan Perikanan</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse07">
                  <p class="grey-text mt-2">Jurusan Ilmu Kelautan dan Perikanan terbagi menjadi tiga program studi yaitu : Budidaya Perikanan (D3), Teknologi Penangkapan Ikan (D3), dan Teknologi Pengolahan Hasil Perikanan (D3)
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-graduation-cap fa-2x mb-1 blue-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <!-- Collapse buttons -->
                  <a data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5 class="feature-title font-bold mb-1">Teknik Arsitektur</h5>
                  </a>
                  <!-- / Collapse buttons -->
                  <!-- Collapsible element -->
                  <div class="collapse" id="collapse08">
                  <p class="grey-text mt-2">Jurusan Teknik Arsitektur memiliki tiga Program Studi yaitu Program Studi Arsitektur (D3), Program Studi Arsitektur Bangunan Gedung (D4) dan Program Studi Desain Kawasan Binaan (D4)
                  </p>
                  </div>
                  <!-- / Collapsible element -->
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
          </div>
          <!--/Second row-->
  
        </section>
        <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->
@endsection
