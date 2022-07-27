@extends('layouts.header')
@section('content')
<div class="text-center bg-overlay-dark-7 py-7" style="background:url({{ asset('frontend/images/categories/serre.jpg') }}) no-repeat; background-size:cover; background-position: center center;">
    <div class="container">
        <div class="row all-text-white">
            <div class="col-md-12 align-self-center">
                <h1 class="fw-bold">Toutes les catégories</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item active"><a href="{{ url('/') }}"><i class="ti-home"></i> Accueil</a></li>
                        <li class="breadcrumb-item">Categories</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- =======================
Portfolio -->
<section class="portfolio pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="portfolio-wrap grid items-4 items-padding filter-container" data-isotope='{ "layoutMode": "masonry" }'>
                    <!-- portfolio-card -->
                    @foreach ($category as $cat)
                    <div class="portfolio-card grid-item digital">
                        <div class="portfolio-card-body">
                            <a href="{{ url('products/products-items/'.$cat->id) }}">
                                <div class="portfolio-card-header" style="height: 25vh">
                                    <img src="{{ asset('assets/uploads/categories/images/'.$cat->image) }}" style="height: 100%" alt="">
                                </div>
                            </a>
                            <div class="portfolio-card-footer">
                                <a class="full-screen" href="{{ asset('assets/uploads/categories/images/'.$cat->image) }}"  data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                <h6 class="info-title"><a href="{{ url('products/products-items/'.$cat->id) }}" title="">{{ $cat->name }}</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- portfolio wrap -->
            </div>
        </div>
    </div>
</section>
@endsection