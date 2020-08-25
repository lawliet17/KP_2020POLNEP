<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{__('Login')}}</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');
*, *:before, *:after {
  box-sizing: border-box;
}

html,body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  font-family: 'Raleway', sans-serif;
}
.container {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.container:hover .top:before, .container:active .top:before, .container:hover .bottom:before, .container:active .bottom:before, .container:hover .top:after, .container:active .top:after, .container:hover .bottom:after, .container:active .bottom:after {
  margin-left: 200px;
  transform-origin: -200px 50%;
  transition-delay: 0s; 
}
.container:hover .center, .container:active .center {
  opacity: 1;
  transition-delay: 0.2s;
}
.top:before, .bottom:before, .top:after, .bottom:after {
  content: '';
  display: block;
  position: absolute;
  width: 200vmax;
  height: 200vmax;
  top: 50%;
  left: 50%;
  margin-top: -100vmax;
  transform-origin: 0 50%;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  z-index: 10;
  opacity: 0.65;
  transition-delay: 0.2s;
}
.top:before {
  transform: rotate(45deg);
  background: #e46569;
}
.top:after {
  transform: rotate(135deg);
  background: #ecaf81;
}
.bottom:before {
  transform: rotate(-45deg);
  background: #60b8d4;
}
.bottom:after {
  transform: rotate(-135deg);
  background: #3745b5;
}
.center {
  position: absolute;
  width: 400px;
  height: 400px;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 30px;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  transition-delay: 0s;
  color: #333;
}
.center input {
  width: 100%;
  padding: 15px;
  margin: 5px;
  border-radius: 1px;
  border: 1px solid #ccc;
  font-family: inherit;
}

.container-login {
  margin: auto;
  align-items: center;
  background: #000;
  border-radius: 20px;
  box-shadow: 0 7px 14px rgba(0,0,0,0.25), 0 5px 5px rgba(0,0,0,0.22);
  display: flex;
  height: 40px;
  justify-content: center;
  position: relative; 
  width: 100px;
}
.text-login {
  color: white;
  position: absolute;
  transition: opacity 300ms;
  user-select: none;
  -moz-user-select: none;
}
.fingerprint {
  height: 50px;
  left: -6px;
  opacity: 0;
  position: absolute;
  stroke: #777;
  top: -5px;
  transition: opacity 1ms;
}
.fingerprint-active {
  stroke: #fff;
}
.fingerprint-out {
  opacity: 1;
}
.odd {
  stroke-dasharray: 0px 50px;
  stroke-dashoffset: 1px;
  transition: stroke-dasharray 1ms;
}
.even {
  stroke-dasharray: 50px 50px;
  stroke-dashoffset: -41px;
  transition: stroke-dashoffset 1ms;
}
.ok {
  opacity: 0;
}
.active.container-login {
  animation: 3s Container-login;
}
.active .text-login {
  opacity: 0;
  animation: 3s Text forwards;
}
.active .fingerprint {
  opacity: 1;
  transition: opacity 300ms 200ms;
}
.active .fingerprint-base .odd {
  stroke-dasharray: 50px 50px;
  transition: stroke-dasharray 400ms 50ms;
}
.active .fingerprint-base .even {
  stroke-dashoffset: 0px;
  transition: stroke-dashoffset 400ms;
}
.active .fingerprint-active .odd {
  stroke-dasharray: 50px 50px;
  transition: stroke-dasharray 1000ms 750ms;
}
.active .fingerprint-active .even {
  stroke-dashoffset: 0px;
  transition: stroke-dashoffset 1000ms 650ms;
}
.active .fingerprint-out {
  opacity: 0;
  transition: opacity 150ms 2050ms;
}
.active .ok {
  opacity: 1;
  animation: 3s Ok forwards;
}
@keyframes Container-login {
  0% { width: 100px }
  6% { width: 40px }
  71% { transform: scale(1); }
  75% { transform: scale(1.2); }
  77% { transform: scale(1); }

  94% { width: 40px }
  100% { width: 100px }
}
@keyframes Text-login {
  0% { opacity: 1; transform: scale(1); }
  6% { opacity: 0; transform: scale(0.5); }

  94% { opacity: 0; transform: scale(0.5); }
  100% { opacity: 1; transform: scale(1); }
}
@keyframes Ok {
  0% { opacity: 0 }
  70% { opacity: 0; transform: scale(0); }
  75% { opacity: 1; transform: scale(1.1); }
  77% { opacity: 1; transform: scale(1); }
  92% { opacity: 1; transform: scale(1); }
  96% { opacity: 0; transform: scale(0.5); }
  100% { opacity: 0 }
}

  </style>
</head>
<body>
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
      <h2>Please Sign In</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
          <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{old('email')}}"aria-describedby="emailHelp" required autocomplete="email" autofocus placeholder="{{__('Enter Email Address...')}}">          
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="{{__('Password')}}" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <button class="container-login" type="submit" onclick="this.classList.toggle('active')">
          <span class="text-login">{{ __('Login') }}</span>
          <svg class="fingerprint fingerprint-base" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
            <g class="fingerprint-out" fill="none" stroke-width="2" stroke-linecap="round">
              <path
                    class="odd" d="m 25.117139,57.142857 c 0,0 -1.968558,-7.660465 -0.643619,-13.149003 1.324939,-5.488538 4.659682,-8.994751 4.659682,-8.994751" />
              <path
                    class="odd" d="m 31.925369,31.477584 c 0,0 2.153609,-2.934998 9.074971,-5.105078 6.921362,-2.17008 11.799844,-0.618718 11.799844,-0.618718" />
              <path
                    class="odd" d="m 57.131213,26.814448 c 0,0 5.127709,1.731228 9.899495,7.513009 4.771786,5.781781 4.772971,12.109204 4.772971,12.109204" />
              <path
                    class="odd" d="m 72.334009,50.76769 0.09597,2.298098 -0.09597,2.386485" />
              <path
                    class="even" d="m 27.849282,62.75 c 0,0 1.286086,-1.279223 1.25,-4.25 -0.03609,-2.970777 -1.606117,-7.675266 -0.625,-12.75 0.981117,-5.074734 4.5,-9.5 4.5,-9.5" />
              <path
                    class="even" d="m 36.224282,33.625 c 0,0 8.821171,-7.174484 19.3125,-2.8125 10.491329,4.361984 11.870558,14.952665 11.870558,14.952665" />
              <path
                    class="even" d="m 68.349282,49.75 c 0,0 0.500124,3.82939 0.5625,5.8125 0.06238,1.98311 -0.1875,5.9375 -0.1875,5.9375" />
              <path
                    class="odd" d="m 31.099282,65.625 c 0,0 1.764703,-4.224042 2,-7.375 0.235297,-3.150958 -1.943873,-9.276886 0.426777,-15.441942 2.370649,-6.165056 8.073223,-7.933058 8.073223,-7.933058" />
              <path
                    class="odd" d="m 45.849282,33.625 c 0,0 12.805566,-1.968622 17,9.9375 4.194434,11.906122 1.125,24.0625 1.125,24.0625" />
              <path
                    class="even" d="m 59.099282,70.25 c 0,0 0.870577,-2.956221 1.1875,-4.5625 0.316923,-1.606279 0.5625,-5.0625 0.5625,-5.0625" />
              <path
                    class="even" d="m 60.901059,56.286612 c 0,0 0.903689,-9.415996 -3.801777,-14.849112 -3.03125,-3.5 -7.329245,-4.723939 -11.867187,-3.8125 -5.523438,1.109375 -7.570313,5.75 -7.570313,5.75" />
              <path
                    class="even" d="m 34.072577,68.846248 c 0,0 2.274231,-4.165782 2.839205,-9.033748 0.443558,-3.821814 -0.49394,-5.649939 -0.714206,-8.05386 -0.220265,-2.403922 0.21421,-4.63364 0.21421,-4.63364" />
              <path
                    class="odd" d="m 37.774165,70.831845 c 0,0 2.692139,-6.147592 3.223034,-11.251208 0.530895,-5.103616 -2.18372,-7.95562 -0.153491,-13.647655 2.030229,-5.692035 8.108442,-4.538898 8.108442,-4.538898" />
              <path
                    class="odd" d="m 54.391174,71.715729 c 0,0 2.359472,-5.427681 2.519068,-16.175068 0.159595,-10.747388 -4.375223,-12.993087 -4.375223,-12.993087" />
              <path
                    class="even" d="m 49.474282,73.625 c 0,0 3.730297,-8.451831 3.577665,-16.493718 -0.152632,-8.041887 -0.364805,-11.869326 -4.765165,-11.756282 -4.400364,0.113044 -3.875,4.875 -3.875,4.875" />
              <path
                    class="even" d="m 41.132922,72.334447 c 0,0 2.49775,-5.267079 3.181981,-8.883029 0.68423,-3.61595 0.353553,-9.413359 0.353553,-9.413359" />
              <path
                    class="odd" d="m 45.161782,73.75 c 0,0 1.534894,-3.679847 2.40625,-6.53125 0.871356,-2.851403 1.28125,-7.15625 1.28125,-7.15625" />
              <path
                    class="odd" d="m 48.801947,56.125 c 0,0 0.234502,-1.809418 0.109835,-3.375 -0.124667,-1.565582 -0.5625,-3.1875 -0.5625,-3.1875" />
            </g>
          </svg>
          <svg class="fingerprint fingerprint-active" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
            <g class="fingerprint-out" fill="none" stroke-width="2" stroke-linecap="round">
              <path
                    class="odd" d="m 25.117139,57.142857 c 0,0 -1.968558,-7.660465 -0.643619,-13.149003 1.324939,-5.488538 4.659682,-8.994751 4.659682,-8.994751" />
              <path
                    class="odd" d="m 31.925369,31.477584 c 0,0 2.153609,-2.934998 9.074971,-5.105078 6.921362,-2.17008 11.799844,-0.618718 11.799844,-0.618718" />
              <path
                    class="odd" d="m 57.131213,26.814448 c 0,0 5.127709,1.731228 9.899495,7.513009 4.771786,5.781781 4.772971,12.109204 4.772971,12.109204" />
              <path
                    class="odd" d="m 72.334009,50.76769 0.09597,2.298098 -0.09597,2.386485" />
              <path
                    class="even" d="m 27.849282,62.75 c 0,0 1.286086,-1.279223 1.25,-4.25 -0.03609,-2.970777 -1.606117,-7.675266 -0.625,-12.75 0.981117,-5.074734 4.5,-9.5 4.5,-9.5" />
              <path
                    class="even" d="m 36.224282,33.625 c 0,0 8.821171,-7.174484 19.3125,-2.8125 10.491329,4.361984 11.870558,14.952665 11.870558,14.952665" />
              <path
                    class="even" d="m 68.349282,49.75 c 0,0 0.500124,3.82939 0.5625,5.8125 0.06238,1.98311 -0.1875,5.9375 -0.1875,5.9375" />
              <path
                    class="odd" d="m 31.099282,65.625 c 0,0 1.764703,-4.224042 2,-7.375 0.235297,-3.150958 -1.943873,-9.276886 0.426777,-15.441942 2.370649,-6.165056 8.073223,-7.933058 8.073223,-7.933058" />
              <path
                    class="odd" d="m 45.849282,33.625 c 0,0 12.805566,-1.968622 17,9.9375 4.194434,11.906122 1.125,24.0625 1.125,24.0625" />
              <path
                    class="even" d="m 59.099282,70.25 c 0,0 0.870577,-2.956221 1.1875,-4.5625 0.316923,-1.606279 0.5625,-5.0625 0.5625,-5.0625" />
              <path
                    class="even" d="m 60.901059,56.286612 c 0,0 0.903689,-9.415996 -3.801777,-14.849112 -3.03125,-3.5 -7.329245,-4.723939 -11.867187,-3.8125 -5.523438,1.109375 -7.570313,5.75 -7.570313,5.75" />
              <path
                    class="even" d="m 34.072577,68.846248 c 0,0 2.274231,-4.165782 2.839205,-9.033748 0.443558,-3.821814 -0.49394,-5.649939 -0.714206,-8.05386 -0.220265,-2.403922 0.21421,-4.63364 0.21421,-4.63364" />
              <path
                    class="odd" d="m 37.774165,70.831845 c 0,0 2.692139,-6.147592 3.223034,-11.251208 0.530895,-5.103616 -2.18372,-7.95562 -0.153491,-13.647655 2.030229,-5.692035 8.108442,-4.538898 8.108442,-4.538898" />
              <path
                    class="odd" d="m 54.391174,71.715729 c 0,0 2.359472,-5.427681 2.519068,-16.175068 0.159595,-10.747388 -4.375223,-12.993087 -4.375223,-12.993087" />
              <path
                    class="even" d="m 49.474282,73.625 c 0,0 3.730297,-8.451831 3.577665,-16.493718 -0.152632,-8.041887 -0.364805,-11.869326 -4.765165,-11.756282 -4.400364,0.113044 -3.875,4.875 -3.875,4.875" />
              <path
                    class="even" d="m 41.132922,72.334447 c 0,0 2.49775,-5.267079 3.181981,-8.883029 0.68423,-3.61595 0.353553,-9.413359 0.353553,-9.413359" />
              <path
                    class="odd" d="m 45.161782,73.75 c 0,0 1.534894,-3.679847 2.40625,-6.53125 0.871356,-2.851403 1.28125,-7.15625 1.28125,-7.15625" />
              <path
                    class="odd" d="m 48.801947,56.125 c 0,0 0.234502,-1.809418 0.109835,-3.375 -0.124667,-1.565582 -0.5625,-3.1875 -0.5625,-3.1875" />
            </g>
          </svg>
          <svg class="ok" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100"><path d="M34.912 50.75l10.89 10.125L67 36.75" fill="none" stroke="#fff" stroke-width="6"/></svg>
        </button>
      </form>
  </div>
</div>
</body>
<script type="text/javascript">
const container = document.querySelector('.container-login')
container.addEventListener('animationend', () => {
  container.classList.remove('active');
});
  </script>
</html>
