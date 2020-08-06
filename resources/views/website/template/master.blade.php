<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('website/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('website/css/clean-blog.min.css')}}" rel="stylesheet">

  <style>
    .page-link{
      color: #00657b;
      text-align: center;
    }

    .page-item.active{
      background-color: #00657b;
      border-color: #00657b;
    }
    
    .category-list{
      padding:0;
      margin:0;
    }

    .category-list li {
      list-style: none;
    }

    .category-title{
      margin-top: 30px;
      margin-bottom: 10px;
    }

    .post-category a{
      text-decoration: none;
    }
  </style>

</head>

<body>

  <!-- Navigation -->
@include('website.template.navbar')


@yield('content')
  
  <hr>

  <!-- Footer -->
@include('website.template.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('website/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('website/js/clean-blog.min.js')}}"></script>

</body>

</html>
