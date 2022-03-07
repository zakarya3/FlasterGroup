@extends('layouts.header')
@section('content')
<section class="p-0">
    <div class="tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
        <div class="tiny-slider-inner h-400 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
            <!-- slide 1-->
            <div class="h-100 bg-overlay-dark-2" style="background-image:url(frontend/images/categories/pole\ labtech.jpg); background-position: center center; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div class="col-lg-8 col-xl-6 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                            <h2 class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">Pole Labtech:</h2>
                            <h3 class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">Matériel scientifique et technique de laboratoire, produits chimique, matériel didactique et banc d'essai et matériel de mesure de haute précision.</h3>
                            <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a href="#" class="btn btn-grad">Contactez-nous!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 2-->
            <div class="h-100 bg-overlay-dark-2" style="background-image:url(frontend/images/categories/pole\ agrotech.jpg); background-position: center top; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div class="col-md-8 justify-content-center align-self-center align-items-start mx-auto">
                            <div class="slider-content text-center ">
                                <h2 class="animate__animated animate__fadeInUp animate__delay-2s display-3 fw-bold text-white">Pole Agrotech:</h2>
                                <h3 class="animate__animated animate__fadeInUp animate__delay-1s display-7 text-white alt-font fst-italic">Matériel de conditionnement, valorisation et d'emballage agro-alimentaire, Matériel agricole, produit agro-alimentaire, serres....</h3>
                                <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a href="#" class="btn btn-grad">Contactez-nous!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 3-->
            <div class="h-100 bg-overlay-dark-2" style="background-image:url(frontend/images/categories/pole\ manutention.jpg); background-position: center center; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div class="col-lg-8 col-xl-6 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                            <h2 class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">Pole manutention :</h2>
                            <h3 class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">Rayonnage industrielle et commerciale, Matériel de manutention (Chariot élévateur et gerbeurs)</h3>
                            <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a href="#" class="btn btn-grad">Contactez-nous!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 4-->
            <div class="h-100 bg-overlay-dark-2" style="background-image:url(frontend/images/categories/pole\ ingenus.jpg); background-position: center top; background-size: cover;">
                <div class="container h-100">
                    <div class="row d-flex h-100">
                        <div class="col-md-8 justify-content-center align-self-center align-items-start mx-auto">
                            <div class="slider-content text-center ">
                                <h2 class="animate__animated animate__fadeInUp animate__delay-2s display-3 fw-bold text-white">Pole Ingénus :</h2>
                                <h3 class="animate__animated animate__fadeInUp animate__delay-1s display-7 text-white alt-font fst-italic">Ingénierie, conception et Modélisation des systèmes industriels</h3>
                                <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a href="#" class="btn btn-grad">Contactez-nous!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Main banner -->

<!-- =======================
about us  -->
<section>
    <div class="container">
        <div class="row justify-content-between align-items-center">
                <!-- left -->
                <div class="col-md-6">
                    <div class="row mt-4 mt-md-0">
                        <div class="col-5 offset-1 px-2 mb-3 align-self-end">
                            <img class="rounded aos" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" src="{{ asset('frontend/images/categories/industrie.jpg') }}" alt="">
                        </div>
                        <div class="col-6 px-2 mb-3">
                            <img class="rounded aos" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" src="{{ asset('frontend/images/categories/Peel-3D-scanner-Hero.jpg') }}" alt="">
                        </div>
                        <div class="col-7 px-2 mb-3">
                            <div class="rounded aos bg-grad p-2 p-sm-3 p-lg-4 p-xl-5 all-text-white" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                                <span>NOS VALEURS :</span>
                                <h3 class="fw-bold" style="font-size: 1em;">"Savoir-faire et Qualité, Engagement Disponibilité, Responsabilité, Confiance et Proximité"</h3>
                            </div>
                        </div>
                        <div class="col-5 align-self-start ps-2 mb-3">
                            <img class="rounded aos" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500" src="{{ asset('frontend/images/categories/serre2.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            <!-- right -->
            <div class="col-md-6 ps-lg-5">
                <h2 class="h1">Présentation de Flaster Groupe </h2>
                <p class="lead">a été fondé en 2014, dynamique, née d'une véritable passion pour la fabrication, l'importation et la distribution du matériel industriel. <br> Notre savoir faire et nos compétences reposent sur un bureau d'études, nos compétences terrain et des personnels expérimentés et motivés.</p>
                <p>Quelque soit votre projet, note groupe vous accompagne, identifie l'ensemble de vos besoins et vous propose une gamme de matériels et des solutions personnalisée répondant à vos attentes</p>
                <div>
                    <a href="#" class="btn btn-dark">Contactez-nous!</a>
                    <a href="#" class="btn btn-link">View Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
about us  -->


<!-- =======================
service -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="title text-center">
                    <span class="pre-title">Check out our services</span>
                    <h2>NOS DOMAINES D'ACTIVITÉS :</h2>
                    <p class="mb-0">NOTRE PHILOSOPHIE : Réaliser des prestations de qualité dans une recherche constante de la satisfaction du client</p>
                </div>
            </div>
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.455), rgba(0, 0, 0, 0)),  url({{ asset('frontend/images/categories/Couverture2-min.jpeg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; color: #fff !important;">
                    <div class="feature-box-icon"><i class="ti-reddit"></i></div>
                    <h3 class="feature-box-title" style="color: #fff;">Pole Labtech</h3>
                    <p class="feature-box-desc">Matériel scientifique et technique de laboratoire, produits chimique, matériel didactique et banc d'essai et matériel de mesure de haute précision.. </p>
                    <a class="mt-3" href="#">Know more!</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.455), rgba(0, 0, 0, 0)),  url({{ asset('frontend/images/categories/serre.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; color: #fff !important;">
                    <div class="feature-box-icon"><i class="ti-save-alt"></i></div>
                    <h3 class="feature-box-title" style="color: #fff;">Pole Agrotech</h3>
                    <p class="feature-box-desc">Matériel de conditionnement, valorisation et d'emballage agro-alimentaire, Matériel agricole, produit agro-alimentaire, serres.... </p>
                    <a class="mt-3" href="#">Know more!</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.455), rgba(0, 0, 0, 0)),  url({{ asset('frontend/images/categories/manut.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; color: #fff !important;">
                    <div class="feature-box-icon"><i class="ti-ruler-pencil"></i></div>
                    <h3 class="feature-box-title" style="color: #fff;">Pole manutention</h3>
                    <p class="feature-box-desc">Rayonnage industrielle et commerciale, Matériel de manutention (Chariot élévateur et gerbeurs) </p>
                    <a class="mt-3" href="#">Know more!</a>
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="feature-box f-style-2 icon-grad h-100" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.455), rgba(0, 0, 0, 0)),  url({{ asset('frontend/images/categories/ing.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; color: #fff !important;">
                    <div class="feature-box-icon"><i class="ti-agenda"></i></div>
                    <h3 class="feature-box-title" style="color: #fff;">Pole Ingénus</h3>
                    <p class="feature-box-desc">Ingénierie, conception et Modélisation des systèmes industriels</p>
                    <a class="mt-3" href="#">Know more!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
service -->

<!-- =======================
portfolio -->
<section class="portfolio pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 mx-auto">
                <!-- title -->
                <div class="title text-center">
                    <span class="pre-title">Check out some of our client.</span>
                    <h2>Nos références</h2>
                    <p class="mb-0">Voici quelques références des clients qui nous font confiance .</p>
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="portfolio-wrap grid items-3 items-padding">
                    <!-- portfolio-card -->
                    <div class="portfolio-card isotope-item digital">
                        <div class="portfolio-card-body">
                            <div class="portfolio-card-header" style="height: 35vh;">
                                <img src="frontend/images/references/5.jpg" alt="">
                            </div>
                            <div class="portfolio-card-footer">
                                <a class="full-screen" href="frontend/images/references/5.jpg" data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                <h6 class="info-title"><a href="#" title="">Ibn Zohr University</a></h6>
                                <p>University</p>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-card -->
                    <div class="portfolio-card isotope-item digital">
                        <div class="portfolio-card-body">
                            <div class="portfolio-card-header" style="height: 35vh;">
                                <img src="frontend/images/references/5.jpg" alt="">
                            </div>
                            <div class="portfolio-card-footer">
                                <a class="full-screen" href="frontend/images/references/5.jpg" data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                <h6 class="info-title"><a href="#" title="">Ibn Zohr University</a></h6>
                                <p>University</p>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-card -->
                    <div class="portfolio-card isotope-item digital">
                        <div class="portfolio-card-body">
                            <div class="portfolio-card-header" style="height: 35vh;">
                                <img src="frontend/images/references/5.jpg" alt="">
                            </div>
                            <div class="portfolio-card-footer">
                                <a class="full-screen" href="frontend/images/references/5.jpg" data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                <h6 class="info-title"><a href="#" title="">Ibn Zohr University</a></h6>
                                <p>University</p>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-card -->
                    <div class="portfolio-card isotope-item digital">
                        <div class="portfolio-card-body">
                            <div class="portfolio-card-header" style="height: 35vh;">
                                <img src="frontend/images/references/5.jpg" alt="">
                            </div>
                            <div class="portfolio-card-footer">
                                <a class="full-screen" href="frontend/images/references/5.jpg" data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                <h6 class="info-title"><a href="#" title="">Ibn Zohr University</a></h6>
                                <p>University</p>
                            </div>
                        </div>
                    </div>						
                </div>
                <!-- portfolio wrap -->
            </div>
        </div>
    </div>
</section>
<!-- =======================
portfolio -->

<!-- =======================

<!-- =======================
client -->
<section class="client pt-0 ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 mx-auto">
                <!-- title -->
                <div class="title text-center">
                    <span class="pre-title">Check out some of our partners.</span>
                    <h2>Nos partenaires</h2>
                </div>
            </div>
            <div class="col-md-12">
                <!-- Slider START -->
                <div class="tiny-slider">
                    <div class="tiny-slider-inner" data-arrow="true" data-dots="false"">
                        <div class="item" style="width: 50%;"><img src="{{ asset('frontend/images/clients/sbtech.png') }}" style="height: 10vh; width: 65%; object-fit: contain;" alt=""></div>
                        <div class="item" style="width: 50%;"><img src="{{ asset('frontend/images/clients/swiss.png') }}" style="height: 10vh; width: 65%; object-fit: contain;" alt=""></div>
                        <div class="item" style="width: 50%;"><img src="{{ asset('frontend/images/clients/vidka.png') }}" style="height: 10vh; width: 65%; object-fit: contain;" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
client -->

    <!-- =======================
why-us -->
<section class="p-0" style="margin-bottom: 3em;">
    <div class="container">
        <div class="row g-0 rounded overflow-hidden">
            <!--why us left-->
            <div class="col-lg-6 d-none d-lg-block bg-light" style="background:url({{ asset('frontend/images/categories/commerce.jpg') }}) no-repeat; background-size:cover; background-position: center;">
            </div>
            <!--why us right-->
            <div class="col-md-6" style="padding-left: 1em;">
                <div class="h-100">
                    <h3>Télécharger notre catalogue produits</h3>
                    <form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST" action="https://wizixo.webestica.com/assets/include/contact-action.php" novalidate>
                        <!-- Main form -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- name -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
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
                                    <input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Message -->
                                <div class="mb-3 position-relative">
                                    <textarea required id="con-message" name="message" cols="40" style="height: 190px;" rows="6" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 d-grid"><button class="btn btn-dark m-0" type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why-us
=======================  -->
@endsection