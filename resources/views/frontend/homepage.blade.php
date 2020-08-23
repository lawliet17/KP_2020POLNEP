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

      <!--Section: Products v.3-->
      <section class="text-center mb-4 my-5">
        <h3 class="h3 text-center mb-5"><a class="heading-hover type1">
          Berita
        </a></h3>

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
                {{ Str::limit($post->id_details, 100) }}
                @elseif ( Config::get('app.locale') == 'en')
                {{ Str::limit($post->en_details, 100) }}
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

      </section>
      <!--Section: Products v.3-->


      <hr class="my-5">


        <!--Section: More-->
        <section class="mb-5">
  
          <h3 class="h3 text-center mb-5"><a class="heading-hover type1">
            Jurusan dan Prodi
          </a></h3>
  
          <!--First row-->
          <div class="row features-small mt-5 wow fadeIn">
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box"> 
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Teknik Sipil
                    </p>
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Teknik Mesin
                    </p>
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Teknik Elektro
                    </p>
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Administrasi Bisnis
                    </p>
                
                  </div>
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
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Akuntansi
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Teknologi Pertanian
                    </p>
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Ilmu Kelautan dan Perikanan
                    </p>
                
                  </div>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->
  
            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="super-box">
                  <div class="container-box">
                    <div class="box">
                      <div class="icon_bg"></div>
                    </div>
                
                      <div class="icon-box">
                  
                        <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                    <stop stop-color="#648CFF" offset="0%"></stop>
                                    <stop stop-color="#4575FB" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="漏洞监控" transform="translate(-227.000000, -3528.000000)">
                                    <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                                    <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                        <g id="1" transform="translate(25.000000, 0.000000)">
                                            <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                                <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                                    <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                        <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                                    </g>
                                                    <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                                    <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                                    <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                      </div>
                
                  </div>
                
                  <div class="text-box">
                    <p class="title-box">
                      Teknik Arsitektur
                    </p>
                
                  </div>
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
