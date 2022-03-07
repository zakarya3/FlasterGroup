@extends('layouts.header')
@section('content')
    	<!-- =======================
	Banner innerpage -->
	<div class="text-center bg-overlay-dark-7 py-7" style="background:url(/frontend/images/categories/robot.jpeg) no-repeat; background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="fw-bold">Produits</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item active"><a href="{{ url('/') }}"><i class="ti-home"></i> Accueil</a></li>
							<li class="breadcrumb-item">Produits</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	Portfolio -->
	<section class="portfolio pb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="nav justify-content-center grid-menu" data-target=".filter-container">
                        <label for="exampleDataList" class="form-label">Rechercher un produit</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                          @foreach ($product as $item)
							  <option value="{{ $item->product_name }}">
						  @endforeach
                        </datalist>
					</div>
					<div class="portfolio-wrap grid items-4 items-padding filter-container" data-isotope='{ "layoutMode": "masonry" }'>
						<!-- portfolio-card -->
                        @foreach ($product as $item)
                        <div class="portfolio-card grid-item digital">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="{{ asset('assets/uploads/products/images/'.$item->image) }}"  data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" title="">{{ $item->product_name }}</a></h6>
                                    @if ($item->price != NULL)
                                    <p class="fs-lg fw-semibold text-primary mb-0">{{ $item->price }} <small>MAD</small></p>
                                    @else
                                    <p class="fs-lg fw-semibold text-primary mb-0">Contactez-nous</p>
                                    @endif
									<p>{{ $item->brand->brand_name }}, {{ $item->category->name }}</p>
                                    <form action="" style="width: 100%" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <input type="hidden" value="{{ $item->product_name }}" name="name">
                                        <input type="hidden" value="{{ $item->price }}" name="price">
                                        <input type="hidden" value="{{ $item->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        @if ($item->price != NULL)
                                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i> Ajouter au panier</button>
                                        @else
                                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-shadow d-block w-100" type="submit">Contactez-nous</a>
                                        @endif
                                      </form>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
					<!-- portfolio wrap -->
				</div>
			</div>
		</div>

        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item"></li>
            </ul>
            <ul class="pagination-bolock">
              {{ $product->links('layouts.paginationlinks') }}
            </ul> 
            <ul class="pagination">
              <li class="page-item"></li>
            </ul>
          </nav>
	</section>
	<!-- =======================
	Portfolio -->

	<!-- =======================
	<!-- ==========
@endsection