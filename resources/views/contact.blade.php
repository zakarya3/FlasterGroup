@extends('layouts.header')
@section('content')
    	<!-- =======================
	Banner innerpage -->
	<div class="text-center bg-overlay-dark-4" style="background:url({{ asset('frontend/images/categories/05.jpg') }}) no-repeat; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h6 class="display-6 fw-bold mt-9 mb-0">Appelez-nous au (+212)5 28 23 23 29</h6>
					<h1 class="fw-bold display-1 mb-2 mb-md-n4">Contactez-nous!</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	contact -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="title text-center">
						<h2>Comment pouvons-nous vous aider ?</h2>
					</div>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-md-3">
					<div class="contact-box d-flex flex-column h-100 bg-overlay-dark-7 px-3 py-4" style="background:url({{ asset('frontend/images/categories/cata.jpg') }}) no-repeat; background-size: cover; background-position: center center;">
						<!-- Phone -->
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-map-alt"></i></div>
							<h5 class="mb-2">Adresse</h5>
							<p>Bureau N 1 .Av Prince Abdelkader N 78 Cite Almassira Agadir. <br>
                            SIÉGÉ SOCIALE/ USINE: IMM A133 N°7 GH 117 RCE DU GOLF KENITRA.</p>
						</div>
						<!-- Email -->
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-email"></i></div>
							<h5 class="mb-2">E-mail</h5>
							<p>info@flaster.ma</p>
						</div>
						<!-- Phone -->
						<div class="all-text-white">
							<div class="fs-4"><i class="ti-panel"></i></div>
							<h5 class="mb-2">Phone</h5>
							<p class="mb-0">(+212)5 28 23 23 29<br>(+212)6 61 93 78 04</p>
						</div>
					</div>
				</div>
				<!-- google map -->
				<div class="col-md-3">
					<div class="h-100">
						<iframe class="w-100 h-100 grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13763.519188853215!2d-9.565313!3d30.4111521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x552a641be8b29c46!2sFLASTER%20GROUP!5e0!3m2!1sen!2sma!4v1646677094286!5m2!1sen!2sma" style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
					</div>
				</div>
				<!-- contact form -->
				<div class="col-md-6">
					<div class="h-100">
						<h3>Contactez-nous!</h3>
						<p>Merci de bien vouloir remplir ce formulaire afin de nous faire part de vos demandes.</p>
						<form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST" action="{{ url('contact-message') }}" novalidate>
							<!-- Main form -->
							@csrf
							@method('PUT')
							<div class="row">
								<div class="col-md-6">
									<!-- name -->
									<div class="mb-3 position-relative">
										<input required id="con-name" name="name" type="text" class="form-control" placeholder="Nom">
									</div>
								</div>
								<div class="col-md-6">
									<!-- email -->
									<div class="mb-3 position-relative">
										<input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
									</div>
								</div>
								<div class="col-md-12">
									<!-- Subject -->
									<div class="mb-3 position-relative">
										<input  id="con-subject" name="phone" type="text" class="form-control" placeholder="Téléphone">
									</div>
								</div>
								<div class="col-md-12">
									<!-- Subject -->
									<div class="mb-3 position-relative">
										<input  id="con-subject" name="subject" type="text" class="form-control" placeholder="Sujet*">
									</div>
								</div>
								<div class="col-md-12">
									<!-- Message -->
									<div class="mb-3 position-relative">
										<textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
								<!-- submit button -->
								<div class="col-md-12 d-grid"><button class="btn btn-dark m-0" type="submit">Envoyer</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	contact -->

	<!-- =======================
	more-info -->
	<section class="pt-0">
		<div class="container ">
			<div class="row justify-content-md-center">
				<div class="col-md-4 text-center">
					<h5 class="mb-1">Questions techniques</h5>
					<p>Si vous avez des questions techniques, veuillez envoyer un e-mail <a href="mail:h.belbekri@flaster.ma">h.belbekri@flaster.ma</a> ou <a href="mail:dg@flaster.ma">dg@flaster.ma</a></p>
				</div>
				<div class="col-md-4 text-center">
					<h5 class="mb-1">Communication générale</h5>
					<p>Pour les questions générales, veuillez envoyer un e-mail <a href="mail:info@flaster.ma">info@flaster.ma</a></p>
				</div>
			</div>
		</div>
	</section>
@endsection