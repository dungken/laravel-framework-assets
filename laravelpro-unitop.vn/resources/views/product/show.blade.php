@extends('layouts.shop')

@section('title', 'SHOW LIST PRODUCT')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Shop</h1>
                <div class="list-product mt-3">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3 col-sm-4 col-6 mb-3">
                                <div class="product-item border py-2">
                                    <div class="product-thumb">
                                        <a href="">
                                            <img class="img-fluid" src="{{ asset($product->thumbnail) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-info p-2 text-center">
                                        <a class="product-title" href="">{{ $product->product_name }}</a>
                                        <div class="price-box">
                                            <span
                                                class="current-price text-danger">{{ number_format($product->price, 0, '', '.') }}
                                                vnđ</span>
                                        </div>
                                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-danger btn-sm mt-3"
                                            class="add-to-cart">Đặt
                                            Mua</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
