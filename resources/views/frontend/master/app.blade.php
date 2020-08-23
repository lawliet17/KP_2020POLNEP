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
    <!-- MDBootstrap flags -->
    <link href="{{asset("assets/css/addons/flag.min.css")}}" rel="stylesheet">
    
  <style>
    /* Theme */
    :root {
    --primary-color: #005c91;
    --secondary-color: #536390;
    --font-color: #424242;
    --bg-color: #f0f0f0;
    --heading-color: #292922;
    --card-color: #ffffff;
    --hover: #1bf2b5; 
    }
    [data-theme="dark"] {
    --primary-color: #9A97F3;
    --secondary-color: #818cab;
    --font-color: #cdcdec;
    --bg-color: #1e1e29;
    --heading-color: #818cab;
    --card-color: #2f2f3a;
    --hover: #1bf2b58e;
    }
    body,.navbar {
    background-color: var(--bg-color);
    color: var(--font-color);
    }
    h1, {
    color: var(--secondary-color);
    }
    a,p {
    color: var(--font-color);
    }
    a:hover, a:active {
      color: var(--hover);
    }
    .carousel-control,{
      color: var(--primary-color);
      background-color: #ffffff00;
    }
    .dropdown-menu,.card,.form,.form-control{
      background-color: var(--card-color);
    }
    
    /* Theme */

    /* Switch Theme */
    .toggle-switch{
      width: 50px;
      height: 25px;
      position: relative;
    }

    input[type="checkbox"].theme-switch{
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

    input[type="checkbox"].theme-switch:checked + svg.checkbox .outer-ring{
      -webkit-animation: animateRing .35s ease-in-out forwards;
              animation: animateRing .35s ease-in-out forwards;
    }

    input[type="checkbox"].theme-switch:checked + svg.checkbox .is_checked{
      opacity: 1;
      -webkit-transform: translateX(0) rotate(0deg);
              transform: translateX(0) rotate(0deg);
    }

    input[type="checkbox"].theme-switch:checked + svg.checkbox .is_unchecked{
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
    /* Switch Theme */

    .map-container{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }
    .map-container iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }

    /* BoX */
    .container-box {
    width: 220px;
    height: 220px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    }

    .box {
        position: absolute;
        width: 220px;
        height: 220px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        border-radius: 3px;
        overflow: hidden;
        -webkit-transition: -webkit-box-shadow ease 1s;
        transition: -webkit-box-shadow ease 1s;
        transition: box-shadow ease 1s;
        transition: box-shadow ease 1s, -webkit-box-shadow ease 1s;
    }

    .icon-box {
        position: relative;
        margin-top: 8px;
        -webkit-transition: all 0.6s ease;
        transition: all 0.6s ease;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
        will-change: transform;
    }

    .icon_bg {
        width: 80px;
        height: 80px;
        border-radius: 100%;
        border: 1px solid rgba(225, 227, 232, 0.18);
        -webkit-box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
        box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
        background-color: var(--card-color);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transition: all 0.6s ease;
        transition: all 0.6s ease;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
        will-change: transform;
    }

    .title-box-box {
        position: relative;
    }

    .super-box:hover .box {
        /*   border: 1px solid rgba(225, 227, 232, 0.18); */
        -webkit-box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
        box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
    }

    .super-box:hover .icon_bg {
        -webkit-transform: translateY(-32px) scale(6);
        transform: translateY(-32px) scale(6);
    }

    .super-box:hover .icon-box {
        -webkit-transform: translateY(-48px) scale(1.4);
        transform: translateY(-48px) scale(1.4);
    }

    .super-box {
        width: 220px;
        height: 220px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .text-box {
        position: relative;
        top: -32px;
        width: 200px;
        text-align: center;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
    }

    .super-box:hover .text-box {
        opacity: 0;
        -webkit-transform: translateY(-4px) scale(.8);
        transform: translateY(-4px) scale(.8);

    }

    .box::after {
        content: "";
        position: absolute;
        width: 170px;
        top: 111px;
        opacity: 0;
        font-size: 13px;
        color: #5d6494;
        line-height: 20px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
    }

    .super-box:hover .box::after {
        opacity: 1;
    }

    /* Image Hover */
    * {
  box-sizing: border-box;
}
.custom-img {
  background-color: #fff;
  border: 1px solid #eee;
  display: flex;
  height: 100%px;
  position: relative;
  width: 100%px;
  z-index: 1000;
}
.custom-img img {
  object-fit: cover;
  height: 100%px;
  width: 100%px;
}
.custom-img::before, .custom-img::after {
  background-image: linear-gradient(-180deg, #A1DEFF 0%, #5EA3DB 97%);
  content: '';
  height: 100%;
  position: absolute;
  transition: all 0.2s;
  transition-delay: 0.2s;
  transform: translateY(0px) translateX(0px);
  width: 100%;
  z-index: -1;
}
.custom-img::after {
  background-image: linear-gradient(0deg, #FFCF70 0%, #FFAE3D 97%);
}
.custom-img:hover {
  animation-name: hoverPop;
  animation-duration: 0.4s;
  animation-fill-direction: forward;
}
.custom-img:hover img {
  box-shadow: 2px 2px 4px 0px rgba(10, 12, 15, 0.27);
  box-shadow: 0px 0px 30px 0px rgba(10, 12, 15, 0.27);
}
.custom-img:hover::before {
  animation: slick-hover-2 3s 0.4s linear infinite;
  transform: translateY(-20px) translateX(-20px);
}
.custom-img:hover::after {
  animation: slick-hover 3s 0.4s linear infinite reverse;
  transform: translateY(20px) translateX(20px);
}
@keyframes hoverPop {
  0%, 100% {
    transform: scale(1);
  }
  33% {
    transform: scale(1.05);
  }
  66% {
    transform: scale(0.9);
  }
}
@keyframes slick-hover {
  0% {
    transform: translateY(20px) translateX(20px);
  }
  16.67% {
    transform: translateY(-13px) translateX(-9px);
  }
  33.33% {
    transform: translateY(4px) translateX(12px);
  }
  50% {
    transform: translateY(20px) translateX(-20px);
  }
  66.67% {
    transform: translateY(-3px) translateX(8px);
  }
  83.33% {
    transform: translateY(-15px) translateX(-11px);
  }
  100% {
    transform: translateY(20px) translateX(20px);
  }
}
@keyframes slick-hover-2 {
  0% {
    transform: translateY(-20px) translateX(-20px);
  }
  16.67% {
    transform: translateY(3px) translateX(-5px);
  }
  33.33% {
    transform: translateY(18px) translateX(-10px);
  }
  50% {
    transform: translateY(-20px) translateX(20px);
  }
  66.67% {
    transform: translateY(15px) translateX(-4px);
  }
  83.33% {
    transform: translateY(-1px) translateX(15px);
  }
  100% {
    transform: translateY(-20px) translateX(-20px);
  }
}
/* Button Top */
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: var(--primary-color); /* Set a background color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

.to-top{
	color:var(--bg-color);
	padding-top:1em;
	display:inline-block;/* or block */
	position:relative;
	border-color:white;
	text-decoration:none;
	transition:all .3s ease-out;
}
.to-top:before{
	content:'▲';
	font-size:.9em;
	position:absolute;
	top:0;
	left:50%;
	margin-left:-.7em;
	border:solid .13em white;
	border-radius:10em;
	width:1.4em;
	height:1.4em;
	line-height:1.3em;
	border-color:inherit;
	transition:transform .5s ease-in;
}
.to-top:hover{
	color:pink;
	border-color:pink;
}
.to-top:hover:before{
	transform: rotate(360deg);
}

#tv {
  position: relative;
  border-radius: 0% 0% 0% 0% / 0% 0% 0% 0% ;
  box-shadow: 20px 20px rgba(0,0,0,.15);
  transition: all .4s ease;
}
#tv:hover {
  border-radius: 0% 0% 50% 50% / 0% 0% 5% 5% ;
  box-shadow: 10px 10px rgba(0,0,0,.25);
}

/* Social Media Button */
a .fab {
  width: 100%;
  height:100%;
  display:block;
  margin:0 2px;
  padding: 3px;
  font-size:20px;
  color: var(--text-color);
}

a:hover .fab {
  color: var(--hover);
}

/* Profile Hover */
.abs,
h2:after,
.profile-pic .profilecard figcaption,
.profile-pic .profilecard:after {
  position: absolute;
}
.rel,
h2,
h2 strong,
.profile-pic .profilecard {
  position: relative;
}
.fix {
  position: fixed;
}
.dfix {
  display: inline;
}
.dib {
  display: inline-block;
}
.db {
  display: block;
}
.dn {
  display: none;
}
.df,
.profile-pic {
  display: flex;
}
.dif {
  display: inline-flex;
}
.dg {
  display: grid;
}
.dig {
  display: inline-grid;
}
.vm,
h2,
h2 strong,
h2 span {
  vertical-align: middle;
}
h2 {
  padding: 6px;
  padding-left: 20px;
  color: #ccc;
  margin: 0;
}
h2 strong {
  z-index: 2;
  background: #24282f;
  padding: 4px 8px;
}
h2 span {
  font-size: 0.7em;
  color: #aaa;
  margin-left: 5px;
}
h2:after {
  content: '';
  z-index: 1;
  bottom: 50%;
  margin-bottom: -2px;
  height: 2px;
  left: 0;
  right: 0;
  background: #373d47;
}
.profile-pic {
  flex-flow: row wrap;
}
.profile-pic .profilecard {
  margin: 1px;
  width: 200px;
  height: 270px;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0,0.8);
  transform-origin: center top;
  transform-style: preserve-3d;
  transform: translateZ(0);
  transition: 0.3s;
}
.profile-pic .profilecard img {
  width: 100%;
  min-height: 100%;
}
.profile-pic .profilecard figcaption {
  bottom: 0;
  left: 0;
  right: 0;
  padding: 20px;
  padding-bottom: 10px;
  font-size: 20px;
  background: none;
  color: #fff;
  transform: translateY(100%);
  transition: 0.3s;
}
.profile-pic .profilecard:after {
  content: '';
  z-index: 10;
  width: 200%;
  height: 100%;
  top: -90%;
  left: -20px;
  opacity: 0.1;
  transform: rotate(45deg);
  background: linear-gradient(to top, transparent, #fff 15%, rgba(255,255,255,0.5));
  transition: 0.3s;
}
.profile-pic .profilecard:hover,
.profile-pic .profilecard:focus,
.profile-pic .profilecard:active {
  box-shadow: 0 8px 16px 3px rgba(0,0,0,0.6);
  transform: translateY(-3px) scale(1.05) rotateX(15deg);
}
.profile-pic .profilecard:hover figcaption,
.profile-pic .profilecard:focus figcaption,
.profile-pic .profilecard:active figcaption {
  transform: none;
}
.profile-pic .profilecard:hover:after,
.profile-pic .profilecard:focus:after,
.profile-pic .profilecard:active:after {
  transform: rotate(25deg);
  top: -40%;
  opacity: 0.15;
}

/* Heading Hover */
.heading-hover {
	position: relative;
	padding: 1em 1.5em;
	border: none;
	background-color: transparent;
	cursor: pointer;
	outline: none;
	font-size: 18px;
	margin: 1em 0.8em;
}

.heading-hover.type1 {
	color: #566473;
}

.heading-hover.type1.type1::after, .heading-hover.type1.type1::before {
	content: '';
	display: block;
	position: absolute;
	width: 20%;
	height: 20%;
	border: 2px solid;
	transition: all 0.6s ease;
	border-radius: 2px;
}

.heading-hover.type1.type1::after {
	bottom: 0;
	right: 0;
	border-top-color: transparent;
	border-left-color: transparent;
	border-bottom-color: #566473;
	border-right-color: #566473;
}

.heading-hover.type1.type1::before {
	top: 0;
	left: 0;
	border-bottom-color: transparent;
	border-right-color: transparent;
	border-top-color: #566473;
	border-left-color: #566473;
}

.heading-hover.type1.type1:hover:after, .heading-hover.type1.type1:hover:before {
	width: 100%;
	height: 100%;
}

/* profile */
#A,#B,#C,#D,#E {
  display: flex;
  justify-content: center;
  font-size: 1rem;
  min-height: 100%;
}
.Quick-navigation {
  position: fixed;
  z-index: 1;
  margin: 0;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
}
.Quick-navigation-item {
  color: var(--font-color));
  text-decoration: none;
  font-size: 1.3em;
  transition: color 0.3s;
  padding: 0.5em;
  display: block;
}
.Quick-navigation-item:hover,
.Quick-navigation-item.current {
  color: var(--hover);
}
.Scroll-to-top {
  position: fixed;
  right: 20px;
  bottom: 0;
  background-color: rgba(0,0,0,0.2);
  border: none;
  color: rgba(255,255,255,0.5);
  font-size: 1.5rem;
  padding: 0.5em;
  cursor: pointer;
  opacity: 0;
  transform: translateY(100%);
  transition: all 0.3s;
  outline: none;
}
.Scroll-to-top.visible {
  opacity: 1;
  transform: translateY(0);
}
.Scroll-to-top:hover {
  color: rgba(255,255,255,0.9);
}
/* timeline */

.timeline {
  font-size: 1em;
  line-height: 1.75em;
  border-top: 3px solid;
  border-image: linear-gradient(to right, #743ad5 0%, #d53a9d 100%);
  border-image-slice: 1;
  border-width: 3px;
  margin: 0;
  padding: 40px;
  counter-increment: section;
  position: relative;
}
.timeline:before {
  content: counter(section);
  position: absolute;
  border-radius: 50%;
  padding: 10px;
  height: 2.25em;
  width: 2.25em;
  background-color: #34435E;
  text-align: center;
  line-height: 1.25em;
  color: #ffffff;
  font-size: 1em;
}
.timeline:nth-child(odd) {
  border-right: 3px solid;
  padding-left: 0;
}
.timeline:nth-child(odd):before {
  left: 100%;
  margin-left: -20px;
}
.timeline:nth-child(even) {
  border-left: 3px solid;
  padding-right: 0;
}
.timeline:nth-child(even):before {
  right: 100%;
  margin-right: -20px;
}
.timeline:first-child {
  border-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.timeline:last-child {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
/* visi misi */
.visi-misi {
  position: relative;
  display: inline-block;
  padding: 0.5em 2em;
  cursor: pointer;
  overflow: hidden;
}
.visi-misi:before, .visi-misi:after {
  content: "";
  position: absolute;
  left: 0;
  height: 2px;
  width: 100%;
  background-color: #252525;
}
.visi-misi:before {
  top: 0;
}
.visi-misi:after {
  bottom: 0;
}
.visi-misi:hover > * > *:before, .visi-misi:hover > * > *:after {
  transform: translate3d(0, 0, 0);
}
.visi-misi:hover > * > * > *:before, .visi-misi:hover > * > * > *:after {
  transform: translate3d(0, 0, 0);
}
.visi-misi > *:before, .visi-misi > *:after {
  content: "";
  position: absolute;
  top: 0;
  height: 100%;
  width: 2px;
  background-color: #252525;
}
.visi-misi > *:before {
  left: 0;
}
.visi-misi > *:after {
  right: 0;
}
.visi-misi > * > *:before, .visi-misi > * > *:after {
  content: "";
  position: absolute;
  left: 0;
  z-index: 9;
  height: 2px;
  width: 100%;
  background-color: #168dff;
}
.visi-misi > * > *:before {
  top: 0;
  transform: translate3d(-105%, 0, 0);
  transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}
.visi-misi > * > *:after {
  bottom: 0;
  transform: translate3d(105%, 0, 0);
  transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}
.visi-misi > * > * > *:before, .visi-misi > * > * > *:after {
  content: "";
  position: absolute;
  top: 0;
  z-index: 9;
  height: 100%;
  width: 2px;
  background-color: #168dff;
}
.visi-misi > * > * > *:before {
  left: 0;
  transform: translate3d(0, 105%, 0);
  transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}
.visi-misi > * > * > *:after {
  right: 0;
  transform: translate3d(0, -105%, 0);
  transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}


</style>
  </head>
  <body>

    @include('frontend.master.navbar')

    @yield('konten')

    @include('frontend.master.footer')

    <button onclick="topFunction()" id="myBtn" title="Go to top"><a href="#" class="to-top"></a></button>
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

      //Theme Switch
      const toggleSwitch = document.querySelector('.theme-switch');

      function switchTheme(e) {
          if (e.target.checked) {
              document.documentElement.setAttribute('data-theme', 'light');
              localStorage.setItem('theme', 'light');
          }
          else {
              document.documentElement.setAttribute('data-theme', 'dark');
              localStorage.setItem('theme', 'dark');
          }    
      }
      toggleSwitch.addEventListener('change', switchTheme, false);

      const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
      if (currentTheme) {
          document.documentElement.setAttribute('data-theme', currentTheme);

          if (currentTheme === 'light') {
              toggleSwitch.checked = true;
          }
      }
      // Theme Switch
      $( document ).ready(function() {
        new WOW().init();
      });

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// profile
(function () {
		
    //////////////////////
   // Utils
   //////////////////////
     function throttle(fn, delay, scope) {
         // Default delay
         delay = delay || 250;
         var last, defer;
         return function () {
             var context = scope || this,
                 now = +new Date(),
                 args = arguments;
             if (last && now < last + delay) {
                 clearTimeout(defer);
                 defer = setTimeout(function () {
                     last = now;
                     fn.apply(context, args);
                 }, delay);
             } else {
                 last = now;
                 fn.apply(context, args);
             }
         }
     }
 
     function extend(destination, source) {
         for (var k in source) {
             if (source.hasOwnProperty(k)) {
                 destination[k] = source[k];
             }
         }
         return destination;
     }
   
    //////////////////////
   // END Utils
   //////////////////////
   
    //////////////////////
    // Scroll Module
    //////////////////////
 
     var ScrollManager = (function () {
 
         var defaults = {
 
                 steps: null,
                 navigationContainer: null,
                 links: null,
                 scrollToTopBtn: null,
 
                 navigationElementClass: '.Quick-navigation',
                 currentStepClass: 'current',
                 smoothScrollEnabled: true,
                 stepsCheckEnabled: true,
 
                 // Callbacks
                 onScroll: null,
 
                 onStepChange: function (step) {
                     var self = this;
                     var relativeLink = [].filter.call(options.links, function (link) {
                         link.classList.remove(self.currentStepClass);
                         return link.hash === '#' + step.id;
                     });
                     relativeLink[0].classList.add(self.currentStepClass);
                 },
 
                 // Provide a default scroll animation
                 smoothScrollAnimation: function (target) {
                     $('html, body').animate({
                         scrollTop: target
                     }, 'slow');
                 }
             },
 
             options = {};
 
         // Privates
         var _animation = null,
             currentStep = null,
             throttledGetScrollPosition = null;
 
         return {
 
             scrollPosition: 0,
 
             init: function (opts) {
 
                 options = extend(defaults, opts);
 
                 if (options.steps === null) {
                     console.warn('Smooth scrolling require some sections or steps to scroll to :)');
                     return false;
                 }
 
                 // Allow to customize the animation engine ( jQuery / GSAP / velocity / ... )
                 _animation = function (target) {
                     target = typeof target === 'number' ? target : $(target).offset().top;
                     return options.smoothScrollAnimation(target);
                 };
 
                 // Activate smooth scrolling
                 if (options.smoothScrollEnabled)  this.smoothScroll();
 
                 // Scroll to top handling
                 if (options.scrollToTopBtn) {
                     options.scrollToTopBtn.addEventListener('click', function () {
                         options.smoothScrollAnimation(0);
                     });
                 }
 
                 // Throttle for performances gain
                 throttledGetScrollPosition = throttle(this.getScrollPosition).bind(this);
                 window.addEventListener('scroll', throttledGetScrollPosition);
                 window.addEventListener('resize', throttledGetScrollPosition);
 
                 this.getScrollPosition();
             },
 
             getScrollPosition: function () {
                 this.scrollPosition = window.pageYOffset || window.scrollY;
                 if (options.stepsCheckEnabled) this.checkActiveStep();
                 if (typeof  options.onScroll === 'function') options.onScroll(this.scrollPosition);
             },
 
             scrollPercentage: function () {
                 var body = document.body,
                     html = document.documentElement,
                     documentHeight = Math.max(body.scrollHeight, body.offsetHeight,
                         html.clientHeight, html.scrollHeight, html.offsetHeight);
 
                 var percentage = Math.round(this.scrollPosition / (documentHeight - window.innerHeight) * 100);
                 if (percentage < 0)  percentage = 0;
                 if (percentage > 100)  percentage = 100;
                 return percentage;
             },
 
             doSmoothScroll: function (e) {
                 if (e.target.nodeName === 'A') {
                     e.preventDefault();
                     if (location.pathname.replace(/^\//, '') === e.target.pathname.replace(/^\//, '') && location.hostname === e.target.hostname) {
                         var targetStep = document.querySelector(e.target.hash);
                         targetStep ? _animation(targetStep) : console.warn('Hi! You should give an animation callback function to the Scroller module! :)');
                     }
                 }
             },
 
             smoothScroll: function () {
                 if (options.navigationContainer !== null) options.navigationContainer.addEventListener('click', this.doSmoothScroll);
             },
 
             checkActiveStep: function () {
                 var scrollPosition = this.scrollPosition;
 
                 [].forEach.call(options.steps, function (step) {
                     var bBox = step.getBoundingClientRect(),
                         position = step.offsetTop,
                         height = position + bBox.height;
 
                     if (scrollPosition >= position && scrollPosition < height && currentStep !== step) {
                         currentStep = step;
                         step.classList.add(self.currentStepClass);
                         if (typeof options.onStepChange === 'function') options.onStepChange(step);
                     }
                     step.classList.remove(options.currentStepClass);
                 });
             },
 
             destroy: function () {
                 window.removeEventListener('scroll', throttledGetScrollPosition);
                 window.removeEventListener('resize', throttledGetScrollPosition);
                 options.navigationContainer.removeEventListener('click', this.doSmoothScroll);
             }
         }
     })();
      //////////////////////
      // END scroll Module
      //////////////////////
   
   
     //////////////////////
     // APP init
     //////////////////////
 
     var scrollToTopBtn = document.querySelector('.Scroll-to-top'),
         steps = document.querySelectorAll('.js-scroll-step'),
         navigationContainer = document.querySelector('.Quick-navigation'),
         links = navigationContainer.querySelectorAll('a'),
         progressIndicator = document.querySelector('.Scroll-progress-indicator');
 
     ScrollManager.init({
         steps: steps,
         scrollToTopBtn: scrollToTopBtn,
         navigationContainer: navigationContainer,
         links: links,
       
         // Customize onScroll behavior
         onScroll: function () {
             var percentage = ScrollManager.scrollPercentage();
             percentage >= 90 ? scrollToTopBtn.classList.add('visible') : scrollToTopBtn.classList.remove('visible');
 
             if (percentage >= 10) {
                 progressIndicator.innerHTML = percentage + "%";
                 progressIndicator.classList.add('visible');
             } else {
                 progressIndicator.classList.remove('visible');
             }
         },
       
     // Behavior when a step changes
     // default : highlight links 
       
     // onStepChange: function (step) {},
       
     // Customize the animation with jQuery, GSAP or velocity 
      // default : jQuery animate()
      // Eg with GSAP scrollTo plugin
       
     //smoothScrollAnimation: function (target) {
     //		TweenLite.to(window, 2, {scrollTo:{y:target}, ease:Power2.easeOut});
      //}
       
     });
   
     //////////////////////
     // END APP init
     //////////////////////
 
 })();
    </script>
</html>
