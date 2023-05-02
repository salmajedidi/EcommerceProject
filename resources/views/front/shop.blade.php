@extends('layouts.FRONTlAYOUT')
@section('title', 'SHOP')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Ogani Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                    
                        <div class="sidebar__item">
                            
                        </div>
                      
                        <div class="sidebar__item">
                            <h4>Categories</h4>
                            @foreach($categories as $categorie)
                                <div class="sidebar__item__size">
                                    <label for="large">
                                        {{$categorie->nom}}
                                        <input type="radio" id="large">
                                    </label>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                            @foreach($products as $product)
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="uploads/products/{{$product->image}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{$product->name}}</span>
                                            <h5><a href="#">{{$product->categorie->name}}</a></h5>
                                            <div class="product__item__price">{{$product->price}} DT</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               </div>
                        </div>
                    </div>
                    <div class="filter__item ">
                        <div class="row">
                            <div class="col-lg-4 col-md-5"></div>
                            <div class="col-lg-4 col-md-3"></div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found" style="text-align: right;">
                                    <h6><span>{{$products->count()}}</span> Products found</h6>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="uploads/products/{{$product->image}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{$product->name}}</a></h6>
                                    <h5>{{$product->price}} DT</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection