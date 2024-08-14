<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

  @include('home.header')

    <!-- end header section -->

    <!-- slider section -->

  @include('home.slider')

    <!-- end slider section -->
  </div>

  <!-- nav section -->

  @include('home.nav')

  <!-- end nav section -->

  <!-- shop section -->
 
  @include('home.shop')

  <!-- end shop section -->

  <!-- about section -->

  @include('home.about')

  <!-- end about section -->

  <!-- fruit section -->

 @include('home.fruit')

  <!-- end fruit section -->


  <!-- client section -->

 @include('home.client')

  <!-- end client section -->


  <!-- contact section -->
 
 @include('home.contact')

  <!-- end contact section -->


  <!-- info section -->

 @include('home.info')

  <!-- end info section -->


  <!-- footer section -->

 @cinlude('home.footer')

  <!-- footer section -->

  <script type="text/javascript" src="home/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="home/js/bootstrap.js"></script>
  <script type="text/javascript" src="home/js/custom.js"></script>

</body>

</html>