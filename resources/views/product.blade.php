@extends('layouts.header')
@section('content')

<style>
    .product-gallery{
       width: 100%;
       padding: 10px;
    } 
    .product-gallery .images-gallery{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-gallery .images-gallery .pic{
        padding: 20px 15px;
    }
    .product-gallery .images-gallery .pic img{
        width: 80%;
        height: 20vh;
        object-fit: contain;
    }
    @media(max-width: 768px){
        .product-gallery .images-gallery .pic{
        padding: 0;
        }
        .product-gallery .images-gallery .pic img{
            width: 100%;
        }
    }

</style>
<section>
    <div class="container product_data">
        <div class="row mb-4" data-sticky-container>
            <!-- portfolio images -->
            <div class="col-md-8">
                <a class="mb-4 d-block" style="display: flex !important; justify-content: center;" href="{{ asset('assets/uploads/products/images/'.$product->image) }}" data-glightbox="" data-gallery="portfolio"><img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" style="width: 100%; height: 50vh; object-fit: contain;" alt=""></a>
                <div class="product-gallery">
                    <div class="images-gallery">
                        @if ($product->image1 != NULL)
                            <div class="pic"><a href="{{ asset('assets/uploads/products/images/'.$product->image1) }}"><img src="{{ asset('assets/uploads/products/images/'.$product->image1) }}" alt=""></a></div>
                        @endif
                        @if ($product->image2 != NULL)
                            <div class="pic"><a href="{{ asset('assets/uploads/products/images/'.$product->image2) }}"><img src="{{ asset('assets/uploads/products/images/'.$product->image2) }}" alt=""></a></div>
                        @endif
                        @if ($product->image3 != NULL)
                            <div class="pic"><a href="{{ asset('assets/uploads/products/images/'.$product->image3) }}"><img src="{{ asset('assets/uploads/products/images/'.$product->image3) }}" alt=""></a></div>
                        @endif
                        @if ($product->image4 != NULL)
                            <div class="pic"><a href="{{ asset('assets/uploads/products/images/'.$product->image4) }}"><img src="{{ asset('assets/uploads/products/images/'.$product->image4) }}" alt=""></a></div>
                        @endif
                        @if ($product->image5 != NULL)
                            <div class="pic"><a href="{{ asset('assets/uploads/products/images/'.$product->image5) }}"><img src="{{ asset('frontend/images/categories/video.jpeg') }}" alt=""></a></div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- portfolio details -->
            <div class="col-md-4">
                <div data-sticky data-margin-top="80" data-sticky-for="767">
                    <h2>{{ $product->product_name }} </h2>
                    @if ($product->price != NULL)
                        <h5>{{ $product->price }} MAD</h5>
                    @else
                        <h3>Contactez-nous!</h3>
                    @endif
                    <input type="hidden" value="{{ $product->id }}" class="prod_id">
                    <div class="input-group quantity mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary decrement-btn" type="button">-</button>
                        </div>
                        <input type="text" class="qty-input form-control" maxlength="2" max="10" value="0" required>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary increment-btn" type="button">+</button>
                          </div>
                      </div>
                    <p>@php
                        echo $product->product_description;
                    @endphp</p>
                    <div class="accordion accordion-icon-primary" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                     Référence
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse show" aria-labelledby="heading4" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    {{ $product->product_reference }}
                                </div>
                            </div>
                        </div>
                        @if ($product->brand->image)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        La marque
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <img src="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->product_name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" class="qty-input form-control" name="quantity">
                        <input type="hidden" value="{{ $product->qty }}"  name="qty">
                        @if ($product->price != NULL)
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class='fas fa-shopping-cart'></i>Ajouter au panier</button>
                        @else
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-shadow d-block w-100" type="submit">Contacter-nous</a>
                        @endif
                      </form>
                </div>
            </div>
            <!-- portfolio details End -->
        </div>
    </div>
    <!-- portfolio End -->
</section>
@endsection