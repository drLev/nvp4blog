<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/comment-box.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('blog.menu')

  <!-- Page Header -->
<header class="masthead" style="background-image: url('@yield('image')')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>@yield('title')</h1>
            <span class="subheading">@yield('text')</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  @section('mainContent')
mainContent  
  @show()
  <hr>

  <!-- Footer -->  
  @include('blog.footer')
  
</body>

</html>
