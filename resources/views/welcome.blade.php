@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<!-- start hero section -->
<div class="hero-image">
    <div class="hero-content">
        <div class="col-md-4 hero-text">
            <h3>
                Welcome to GameShop
            </h3>
            <p>A place where you can buy games hassle free. </p>
            <button class="btn custom-border my-2 my-sm-0">Shop</button>
            <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
        </div>
    </div>
</div>
<!-- end hero section -->
<!-- start page content -->
<div class="container">
    <div class="content-head">
        <h2 style="text-align:center; font-weight: bold">Games</h2>
        <p style="text-align: center">GameShop gives you full control over your choices, and there always are discounts on a lot of games.</h2>
    </div>
    <h2 class="header text-center">Featured Games</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($products as $game)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ route('shop.show', $game->slug) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        <img src="{{ productImage($game->image) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game->name }}<span class="float-right">BDT {{ format($game->price) }}</span></h5>
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Show more</button>
        </a>
    </div>
    <hr>
    <h2 class="header text-center">Hot Sales</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($hotProducts as $game)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ route('shop.show', $game->slug) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        <img src="{{ productImage($game->image) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game->name }}<span class="float-right">BDT {{ format($game->price) }}</span></h5>
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
</div>
<!-- end page content -->

@endsection
