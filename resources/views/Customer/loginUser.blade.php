<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="icon" type="image/x-icon" href="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Custom Theme files -->
<link href="{{asset('/')}}css/login.css" rel="stylesheet" type="text/css"  />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/')}}fonts/icomoon/style.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('/')}}css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}ss/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/')}}fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body style="background-image: url('images/hero_1.jpg')">
	<!-- main -->
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

          <div class="container">
            <div class="row align-items-center position-relative">

              <div class="col-3 ">
                <div class="site-logo">
                  <a href="index.html">ASTRA CREDIT COMPANIES</a>

                </div>
              </div>

              <div class="col-9  text-right">


                <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto ">
                      <li ><a href="/" class="nav-link">Beranda</a></li>
                      <li ><a href="/list-mobil-tidak-login" class="nav-link">Mobil Baru</a></li>
                      <li ><a href="/list-mobil-bekas-tidak-login" class="nav-link">Mobil Bekas</a></li>
                      <li ><a href="/pengajuan-jual-tidak-login" class="nav-link">Jual Mobil</a></li>
                      <li class="active"><a href="/login" class="nav-link">Login</a></li>
                  </ul>
                </nav>
              </div>


            </div>
          </div>

        </header>


	<div class="main-w3layouts wrapper ">
		{{-- <h1>Silahkan Masuk Terlebih Dahulu</h1> --}}



		<div class="main-agileinfo">

			<div class="agileits-top ">
                @if (Session::has('status'))
                <div class="alert alert-danger mr-4" role="alert">
                    {{Session::get('msg')}}
                </div>

                @endif
				<form action="/ProsesLogin" method="post">
                    @csrf
					<input class="text" type="email" name="email" placeholder="Email" required="">
					{{-- <input class="text" type="password" name="password" placeholder="Password" required=""> --}}
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">

						<div class="clear"> </div>
					</div>
					<input type="submit" value="Login">
				</form>

				<p>Tidak Punya Akun ? <a href="/register"> Daftar </a></p>
			</div>
		</div>
		<!-- copyright -->
		{{-- <div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> --}}
		<!-- //copyright -->

	</div>
	<!-- //main -->
</body>
</html>
