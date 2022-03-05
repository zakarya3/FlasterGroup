@extends('layouts.header')
@section('content')
<section>
    <div class="container">
        <div class="row mb-4" data-sticky-container>
            <!-- portfolio images -->
            <div class="col-md-8">
                <a class="mb-4 d-block" href="{{ asset('assets/uploads/products/images/'.$product->image) }}" data-glightbox="" data-gallery="portfolio"><img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt=""></a>
            </div>
            <!-- portfolio details -->
            <div class="col-md-4">
                <div data-sticky data-margin-top="80" data-sticky-for="767">
                    <h2>{{ $product->product_name }} </h2>
                    <p>@php
                        echo $product->product_description;
                    @endphp</p>
                    
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Client:</th>
                                <td class="text-body">Allen Smith</td>
                            </tr>
                            <tr>
                                <th scope="row">Manager:</th>
                                <td class="text-body">Emma Watson, Maria Smith</td>
                            </tr>
                            <tr>
                                <th scope="row">Category:</th>
                                <td class="text-body">Interior design</td>
                            </tr>
                            <tr>
                                <th scope="row">Awards:</th>
                                <td class="text-body">
                                    <span class="d-block font-base"> Pineapple Award Design</span>
                                    <span class="d-block mt-2"> Project of the Year </span>
                                    <span class="d-block mt-2"> Designer of the Year</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-grad" href="#!">View project website <i class="fas fa-external-link-alt ms-2 me-0"></i></a>
                </div>
            </div>
            <!-- portfolio details End -->
        </div>
    </div>
    <!-- portfolio End -->
</section>
@endsection