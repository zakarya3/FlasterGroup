<!doctype html>
<html lang="en">

<!-- Mirrored from wizixo.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Feb 2022 12:43:44 GMT -->
<head>
	<title>Flaster Groupe | Consultings and engineering</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Consultings and engineering">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('frontend/images/logo/icon.png') }}">

	<!-- Google Font -->
	<link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/font-awesome/css/all.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/themify-icons/css/themify-icons.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/glightbox/css/glightbox.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/aos/aos.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
	<style>
		.cart{
			display: none;
		}
		@media(max-width : 991px){
			.cart{
				display: block
			}
		}
	</style>

</head>

<body>
	<div class="preloader">
		<img src="{{ asset('frontend/images/logo/loader_gif.gif') }}" alt="Pre-loader">
	</div>

	<!-- =======================
	header Start-->
	<header class="header-static navbar-sticky navbar-light">


		<!-- Navbar top start-->
		<div class="navbar-top d-none d-lg-block">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- navbar top Left-->
					<div class="d-flex align-items-center">
						<!-- Language -->
						<div class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="dropdown-item-icon" src="{{ asset('frontend/images/flags/uk.svg') }}" alt=""> English </a>
						  <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownLanguage">
						  	<span class="dropdown-item-text">Select language</span>
						  	<div class="dropdown-divider"></div>
						    <a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="{{ asset('frontend/images/flags/sp.svg') }}" alt=""> Español</a>
						    <a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="{{ asset('frontend/images/flags/fr.svg') }}" alt=""> Français</a>
						    <a class="dropdown-item" href="#"><img class="dropdown-item-icon" src="{{ asset('frontend/images/flags/gr.svg') }}" alt=""> Deutsch</a>
						  </div>
						</div>
						<!-- Top info -->
						<ul class="nav list-unstyled ms-3">
							<li class="nav-item me-3">
								<a class="navbar-link" href="tel:+212528232329 "><strong>Phone:</strong> (+212)5 28 23 23 29 </a>
							</li>
							<li class="nav-item me-3">
								<a class="navbar-link" href="mail:info@flaster.ma"><strong>Email:</strong> info@flaster.ma</a>
							</li>
						</ul>
					</div>

					<!-- navbar top Right-->
					<div class="d-flex align-items-center">
						<!-- Top Account -->
						<div class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-user me-2"></i>Account </a>
						  <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownAccount">
						    <a class="dropdown-item" href="{{ url('/dashboard') }}">Log In</a>
						    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
						  </div>
						</div>
						<!-- top link -->
						<ul class="nav">
              <li class="nav-item">
                  <a class="navbar-link mx-3" href="{{ url('/contact') }}">Contact</a>
              </li>
            </ul>
						<!-- top social -->
						<ul class="social-icons">
							<li class="social-icons-item social-facebook m-0">
								<a class="social-icons-link w-auto px-2" href="https://www.facebook.com/Flaster-GROUP-340059340563642/"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social-icons-item social-instagram m-0">
								<a class="social-icons-link w-auto px-2" href="https://www.instagram.com/flaster_group_holding/?hl=en"><i class="fab fa-instagram"></i></a>
							</li>
							<li class="social-icons-item social-twitter m-0">
								<a class="social-icons-link w-auto ps-2" href="#"><i class="fab fa-twitter"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar top End-->

		<!-- Logo Nav Start -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="{{ url('/') }}">
					<!-- Logo -->
					<img class="navbar-brand-item" src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo">
				</a>
				<!-- Menu opener button -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Main Menu Start -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link active" href="{{ url('/') }}" id="blogMenu">Accueil</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link  dropdown-toggle" href="{{ url('category') }}" id="demosMenu">Produits</a>
							<ul class="dropdown-menu" aria-labelledby="blogMenu">
								@foreach ($category as $item)
								<li class="dropdown-submenu">
									<a class="dropdown-item dropdown-toggle" href="#">{{ $item->name }}</a>
									<ul class="dropdown-menu">
										@foreach ($item->type as $item_tp)
										<li> <a class="dropdown-item" href="{{ url('products-items/'.$item_tp->name) }}">{{ $item_tp->name }}</a></li>
										@endforeach
									</ul>
								</li>
								@endforeach
							</ul>
						</li>
						<!-- Menu item 2 Blog-->
						<li class="nav-item dropdown">
							<a class="nav-link" href="{{ url('/contact') }}" id="blogMenu">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="{{ url('/project') }}" id="blogMenu">Projet</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="{{ url('references') }}" id="blogMenu">Références</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="{{ url('myorders') }}" id="blogMenu">Mes commandes</a>
						</li>
						<li class="nav-item dropdown cart">
							<a @if (Cart::getTotalQuantity()!=0)
							href="{{ url('cart') }}" 
						@else
							href="{{ url('/') }}"
						@endif class=" btn btn-sm btn-grad text-white mb-0"><i class="fas fa-shopping-cart"></i> {{ Cart::getTotalQuantity()}} articles</a>
						</li>
						<!-- Menu item 3 Pages-->
					</ul>
				</div>
				<!-- Main Menu End -->
				<!-- Header Extras Start-->
				<div class="navbar-nav">
					<!-- extra item Search-->
					<div class="nav-item search border-0 ps-3 pe-0 px-lg-2" id="search">
						
					</div>
					<!-- extra item Btn-->
					<div class="nav-item border-0 d-none d-lg-inline-block align-self-center">
						<a @if (Cart::getTotalQuantity()!=0)
							href="{{ url('cart') }}" 
						@else
							href="{{ url('/') }}"
						@endif class=" btn btn-sm btn-grad text-white mb-0"><i class="fas fa-shopping-cart"></i> {{ Cart::getTotalQuantity()}} articles</a>
					</div>
				</div>
				<!-- Header Extras End-->
			</div>
		</nav>
		<!-- Logo Nav End -->
	</header>
	<!-- =======================
	header End-->
@yield('content')

    	
	<!-- =======================
	footer  -->
	<footer class="footer bg-light pt-6">
		<div class="footer-content pb-3">
			<div class="container">
				<div class="row">
					<!-- Footer widget 1 -->
					<div class="col-md-4">
						<div class="widget">
							<a href="index.html" class="footer-logo">
								<!-- footer logo Start -->
								<img class="footer-logo-item" style="height: 100px !important;" src="{{ asset('frontend/images/logo/logo.png') }}" alt="">
								<!-- footer logo End -->
							</a>
							<p class="mt-3">FOURNITURE DU MATÉRIEL SCIENTIFIQUE, INDUSTRIELLE ET AGROALIMENTAIRE
							</p>
						</div>
					</div>
					<!-- Footer widget 2 -->
					<div class="col-md-3 col-sm-6">
						<div class="widget address" style="background-image: url('assets/images/world-map.png'); background-position: 50% 20px; background-repeat: no-repeat; background-size: contain;">
							<ul class="list-group list-group-borderless">
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-map-alt"></i>Bureau N 1 .Av Prince Abdelkader N 78 Cite Almassira Agadir. </li>
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-map-alt"></i>SIÉGÉ SOCIALE/ USINE: IMM A133 N°7 GH 117 RCE DU GOLF KENITRA </li>
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-headphone-alt"></i> (+212)5 28 23 23 29 </li>
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-headphone-alt"></i> (+212)6 61 93 78 04</li>
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-email"></i> info@flaster.ma</li>
								<li class="d-flex mb-3"><i class="me-3 display-8 ti-time"></i>
									<p>Mon - Fri: <strong>09:00 - 18:00</strong> <br>Sat: <strong>09:00 - 13:00</strong></p>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer widget 3 -->
					<div class="col-md-2 col-sm-6">
						<div class="widget">
							<h6>Quick LInks</h6>
							<ul class="nav flex-column primary-hover">
								<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('category') }}">Produits</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('references') }}">Références</a></li>
							</ul>
						</div>
					</div>
					<!-- Footer widget 4 -->
					<div class="col-md-3">
						<div class="widget bg-grad p-4 all-text-white rounded">
							<i class="ti-email newsletter-icon"></i>
							<p class="mb-2">Subscribe to our newsletter to receive exclusive offers.</p>
							<div class="form-group mb-0">
								<input class="form-control border-white mb-3" type="email" placeholder="Enter email...">
								<button class="btn btn-dark mb-0">Join us</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="divider mt-3"></div>
		<!--footer copyright -->
		<div class="footer-copyright py-3">
			<div class="container">
				<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-start">
					<!-- copyright text -->
					<div class="copyright-text">©        <script>
						document.write(new Date().getFullYear())
					  </script> All Rights Reserved by <a href="#!"> Flaster Groupe.</a></div>
					<!-- copyright links-->
				</div>
			</div>
		</div>
	</footer>
	<!-- =======================
	footer  -->

	<!-- Back to top -->
	<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

	<!-- Bootstrap JS -->
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/js/custom.js') }}"></script>

	<!--Vendors-->
	<script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('frontend/vendor/glightbox/js/glightbox.js') }}"></script>
	<script src="{{ asset('frontend/vendor/tiny-slider/tiny-slider.js') }}"></script>

	<!--Template Functions-->
	<script src="{{ asset('frontend/js/functions.js') }}"></script>
	
</body>

<!-- Mirrored from wizixo.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Feb 2022 12:44:14 GMT -->
</html>