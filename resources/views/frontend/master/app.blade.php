<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>POLITEKNIK NEGERI PONTIANAK</title>
    <!-- MDB icon -->
    <link rel="icon" href="http://polnep.ac.id/public/assets/images/theme/icon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- Bootstrap core CSS -->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset("assets/css/mdb.min.css")}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset("assets/css/style.min.css")}}" rel="stylesheet">
    
  <style>
      body {
        --text-color: #cccccc;
        --bg-color: #121212;

      }
      body.light-theme {
        --text-color: #313131;
        --bg-color: #fff;

      }
      body.dark-theme img {
      filter: brightness(.8) contrast(1.2);
      }
    
    * {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    body {
      background: var(--bg-color);
      

    }
    
    h1,h2,h3,h4,h5,p,u {
      color: var(--text-color);
    }
    /* Switch 3 Specific Style Start */
    .toggle_switch{
      width: 50px;
      height: 25px;
      position: relative;
    }

    input[type="checkbox"].switch_dark{
      -webkit-appearance: none;
        -moz-appearance: none;
              appearance: none;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      outline: 0;
      z-index: 1;
    }

    svg.checkbox .outer-ring{
      stroke-dasharray: 375;
      stroke-dashoffset: 375;
      -webkit-animation: resetRing .35s ease-in-out forwards;
              animation: resetRing .35s ease-in-out forwards;
    }

    input[type="checkbox"].switch_dark:checked + svg.checkbox .outer-ring{
      -webkit-animation: animateRing .35s ease-in-out forwards;
              animation: animateRing .35s ease-in-out forwards;
    }

    input[type="checkbox"].switch_dark:checked + svg.checkbox .is_checked{
      opacity: 1;
      -webkit-transform: translateX(0) rotate(0deg);
              transform: translateX(0) rotate(0deg);
    }

    input[type="checkbox"].switch_dark:checked + svg.checkbox .is_unchecked{
      opacity: 0;
      -webkit-transform: translateX(-200%) rotate(180deg);
              transform: translateX(-200%) rotate(180deg);
    }


    svg.checkbox{
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    svg.checkbox .is_checked{
      opacity: 0;
      fill: yellow;
      -webkit-transform-origin: 50% 50%;
              transform-origin: 50% 50%;
      -webkit-transform: translateX(200%) rotate(45deg);
              transform: translateX(200%) rotate(45deg);
      -webkit-transition: all .35s;
      transition: all .35s;
    }

    svg.checkbox .is_unchecked{
      opacity: 1;
      fill: #fff;
      -webkit-transform-origin: 50% 50%;
              transform-origin: 50% 50%;
      -webkit-transform: translateX(0) rotate(0deg);
              transform: translateX(0) rotate(0deg);
      -webkit-transition: all .35s;
      transition: all .35s;
    }

    @-webkit-keyframes animateRing{
      to{
        stroke-dashoffset: 0;
        stroke: #b0aa28;
      }
    }

    @keyframes animateRing{
      to{
        stroke-dashoffset: 0;
        stroke: #b0aa28;
      }
    }

    @-webkit-keyframes resetRing{
      to{
        stroke-dashoffset: 0;
        stroke: #233043;
      }
    }

    @keyframes resetRing{
      to{
        stroke-dashoffset: 0;
        stroke: #233043;
      }
    }

    /* Switch 3 Specific Style End */
  </style>
  </head>
  <body>

    @include('frontend.master.navbar')

    @yield('konten')

    @include('frontend.master.footer')

    
  </body>

    <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset("assets/js/jquery-3.4.1.min.js")}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset("assets/js/popper.min.js")}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset("assets/js/bootstrap.min.js")}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset("assets/js/mdb.min.js")}}"></script>
  <script type="text/javascript">

      //Lightbox
      $(document).on("click", '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
      //Lightbox
  const btn = document.querySelector(".switch_dark");
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

  const currentTheme = localStorage.getItem("theme");
  if (currentTheme == "dark") {
    document.body.classList.toggle("dark-theme");
  } else if (currentTheme == "light") {
    document.body.classList.toggle("light-theme");
  }

  btn.addEventListener("click", function () {
    if (prefersDarkScheme.matches) {
      document.body.classList.toggle("light-theme");
      var theme = document.body.classList.contains("light-theme")
        ? "light"
        : "dark";
    } else {
      document.body.classList.toggle("dark-theme");
      var theme = document.body.classList.contains("dark-theme")
        ? "dark"
        : "light";
    }
    localStorage.setItem("theme", theme);
  });
  </script>
</html>
