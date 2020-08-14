  <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Navbar brand -->
      <a class="navbar-brand d-flex justify-content-start" href="/">
        <img
          src="http://polnep.ac.id/public/assets/images/theme/logotop.png"
          height=""
          alt width="100%"
          loading="lazy"
          style="margin-top: -3px;"
        />
      </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            @if($public_menu)
              @foreach($public_menu as $menu)
                <li class="nav-item @if($menu['child']) dropdown @endif">
                  <a href="{{ $menu['link'] }}" title="" class="nav-link @if($menu['child']) dropdown-toggle @endif" @if($menu['child'])  role="button" data-toggle="dropdown" @endif>{{ $menu['label'] }}</a>
                  @if( $menu['child'] )
                    <div class="dropdown-menu dropdown-menu-left">
                      @foreach( $menu['child'] as $child )
                        <a href="{{ $child['link'] }}" title="" class="dropdown-item">{{ $child['label'] }}</a>
                      @endforeach
                    </div><!-- /.sub-menu -->
                  @endif
                </li>
              @endforeach
            @endif
            <form class="form-inline my-2 my-lg-0 ml-2 active-cyan-4">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <!-- <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button> -->
            </form>
          </ul>
        </div>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <div class="onoffswitch1">
              <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
              <label class="onoffswitch1-label" for="myonoffswitch1">
                  <span class="onoffswitch1-inner"></span>
              </label>
              </div>
          </li>
          <li class="nav-item">
              <div class="toggle_switch">
                <input type="checkbox" class="switch_dark">
                <svg class="checkbox" xmlns="http://www.w3.org/2000/svg" style="isolation:isolate" viewBox="0 0 168 80">
                   <path class="outer-ring" d="M41.534 9h88.932c17.51 0 31.724 13.658 31.724 30.482 0 16.823-14.215 30.48-31.724 30.48H41.534c-17.51 0-31.724-13.657-31.724-30.48C9.81 22.658 24.025 9 41.534 9z" fill="none" stroke="#233043" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"/>
                   <path class="is_checked" d="M17 39.482c0-12.694 10.306-23 23-23s23 10.306 23 23-10.306 23-23 23-23-10.306-23-23z"/>
                  <path class="is_unchecked" d="M132.77 22.348c7.705 10.695 5.286 25.617-5.417 33.327-2.567 1.85-5.38 3.116-8.288 3.812 7.977 5.03 18.54 5.024 26.668-.83 10.695-7.706 13.122-22.634 5.418-33.33-5.855-8.127-15.88-11.474-25.04-9.23 2.538 1.582 4.806 3.676 6.66 6.25z"/>
                </svg>
              </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->