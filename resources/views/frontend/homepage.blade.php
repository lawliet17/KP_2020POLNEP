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
          Pesan Direktur
        </a></div>
        <div class="col-12">
          <div class="profile-pic float-left mr-3">

            <figure class="profilecard">
        
              <img src="http://neo.polnep.ac.id/public/assets/images/upload/Dir.jpg" />
        
              <figcaption>Ir. H. Muhammad Toasin A., M.Si</figcaption>
        
            </figure>
        
          </div>
            <p style="text-align: justify;">
            Assalamualaikum Warahmatullahi Wabarakatuh. Kita tidak dapat memungkiri, bahwa teknologi berkembang sangat cepat, bahkan mungkin lebih cepat dari kemampuan manusia untuk menguasainya. Demikian pula dengan pengaruh dari teknologi terhadap segala aspek kehidupan manusia, tentunya sangatlah besar.
            <br><br>
            Sebagai penyedia jasa pendidikan, Politeknik Negeri Pontianak saat ini punya tantangan, yaitu “Menjadikan peserta didik saat ini menjadi pemimpin babak dua dari abad 21 serta, Bagaimana dapat menyiapkan peserta didik untuk menghadapi Dunia dimasa depan.
            Yaitu dunia yang diantara hari-harinya diisi dengan hal-hal sebagai berikut :
            Perkembangan yang sangat pesat dari informasi dan komunikasi,
            Penemuan produk dan jasa baru setiap saat,
            Penggunaan komputer dan internet yang sangat luas,
            Pengetahuan dan penguasaan terhadap teknologi adalah keahlian yang mendasar.
            <br><br>
            Maka selayaknyalah POLNEP membawa peserta didiknya ke lingkungan belajar yang lebih dekat dengan keseharian mereka, lingkungan belajar dengan teknologi informasi dan komunikasi sebagai medianya. Selain itu, kami di POLNEP berupaya untuk menyebarluaskan potensi dan pemikiran yang dimiliki melalui kehadiran situs web ini. Yang selanjutnya, diharapkan dapat diikuti dengan menyatukan potensi dan kekuatan yang ada melalui suatu hubungan mutual dari semua pihak yang dapat mengaksesnya, sehingga insyaallah dapat menciptakan akses yang luas terhadap segala sumberdaya dan informasi yang dimiliki oleh semua pihak agar dapat diberdayakan secara bersama-sama untuk kepentingan masyarakat khususnya dunia pendidikan di KALBAR ini.         
          </p>
        </div>
      </section>
      <!--Section: Products v.3-->
      </div>

      <!--Section: Products v.3-->
      <section class="bgw">
        <div class="container py-4">
        <div class="h3 text-center mb-5"><a class="heading-hover type1">
          Berita
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
            Jurusan dan Prodi
          </a></div>
          
          <div id="flex-container" class="testimonials">
            <div id="left-zone">
              <ul class="list">
                <li class="item">
                  <input type="radio" id="radio_testimonial-1" name="basic_carousel" checked="checked" />
                  <label class="label_testimonial-1" for="radio_testimonial-1">Teknik Sipil</label>
                  <div class="content-test content_testimonial-1">
                    <h1>Teknik Sipil</h1>
                    <p>Jurusan Teknik Sipil dan Perencanaan terbagi menjadi dua Program Studi yaitu Program Studi Teknik Sipil (D3) dan Program Studi Perencanaan Perumahan Dan Pemukiman (D4)</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-2" name="basic_carousel" />
                  <label class="label_testimonial-2" for="radio_testimonial-2">Teknik Mesin</label>
                  <div class="content-test content_testimonial-2">
                    <h1>Teknik Mesin</h1>
                    <p>Jurusan Teknik Mesin terbagi menjadi tiga Program Studi yaitu Program Studi Teknik Mesin (D4), Program Studi Teknik Mesin (D3) dan Program Studi Operator & Peralatan Alat Berat (D1)</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-3" name="basic_carousel" />
                  <label class="label_testimonial-3" for="radio_testimonial-3">Teknik Elektro</label>
                  <div class="content-test content_testimonial-3">
                    <h1>Teknik Elektro</h1>
                    <p>Jurusan Teknik Elektro menyelenggarakan pendidikan Diploma 3 (D3) yang mencakup tiga progam studi yaitu Program Studi Teknik Listrik, Program Studi Teknik Elektronika dan Program Studi Teknik Informatika</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-4" name="basic_carousel" />
                  <label class="label_testimonial-4" for="radio_testimonial-4">Akuntansi</label>
                  <div class="content-test content_testimonial-4">
                    <h1>Akuntansi</h1>
                    <p>Jurusan Akuntansi mempunyai 2 (dua) program studi, yaitu Diploma III Program Studi Akuntansi dan Diploma IV Program Studi Akuntansi</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-5" name="basic_carousel" />
                  <label class="label_testimonial-5" for="radio_testimonial-5">Administrasi Bisnis</label>
                  <div class="content-test content_testimonial-5">
                    <h1>Administrasi Bisnis</h1>
                    <p>Jurusan Adminsitrasi Bisnis saat ini mempunyai 2 (dua) program studi, yaitu Diploma III Program Studi Administrasi Bisnis dan Diploma IV Program Studi Administrasi Negara</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-6" name="basic_carousel" />
                  <label class="label_testimonial-6" for="radio_testimonial-6">Teknologi Pertanian</label>
                  <div class="content-test content_testimonial-6">
                    <h1>Teknologi Pertanian</h1>
                    <p>Jurusan Teknologi Pertanian terbagi menjadi tiga Program Studi yaitu Program Studi Teknologi Pengolahan Hasil Perkebunan (D3), Program Studi Manajemen Perkebunan (D4), dan Program Studi Budidaya Tanaman Perkebunan (D4)</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-7" name="basic_carousel" />
                  <label class="label_testimonial-7" for="radio_testimonial-7">Ilmu Kelautan dan Perikanan</label>
                  <div class="content-test content_testimonial-7">
                    <span class="picto"></span>
                    <h1>Ilmu Kelautan dan Perikanan</h1>
                    <p>Jurusan Ilmu Kelautan dan Perikanan terbagi menjadi tiga program studi yaitu : Budidaya Perikanan (D3), Teknologi Penangkapan Ikan (D3), dan Teknologi Pengolahan Hasil Perikanan (D3)</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_testimonial-8" name="basic_carousel" />
                  <label class="label_testimonial-8" for="radio_testimonial-8">Teknik Arsitektur</label>
                  <div class="content-test content_testimonial-8">
                    <span class="picto"></span>
                    <h1>Teknik Arsitektur</h1>
                    <p>Jurusan Teknik Arsitektur memiliki tiga Program Studi yaitu Program Studi Arsitektur (D3), Program Studi Arsitektur Bangunan Gedung (D4) dan Program Studi Desain Kawasan Binaan (D4)</p>
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
