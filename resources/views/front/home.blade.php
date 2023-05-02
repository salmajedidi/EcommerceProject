@extends('layouts.FRONTlAYOUT')
@section('title', 'HOME')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero" style="margin-top: 80px;">
        <div class="hero__item set-bg" data-setbg="{{asset('/assets/img/hero/banner11.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="{{route('shop')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> 
    </section>
    <!-- Hero Section End -->

    <!-- about us Section Begin -->
        <section class="about__us">
        
                    <div class="container">
                        <br>
                        <div class="section-title">
                            <h2>About us</h2>
                        </div>
                        <div class="row  align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="about-img position-relative overflow-hidden p-3 pe-0">
                                    <img class="img-fluid w-100" src="{{asset('/assets/img/hero/about.jpg')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn p-3" data-wow-delay="0.5s">
                                <h2 style="font-weight:initial;font-size: 50px;" class="mb-4">Best Organic Fruits And Vegetables</h2>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i style="color:#7fad39"class="fa fa-check me-3"></i>Tempor erat elitr rebum at clita</p>
                                <p><i style="color:#7fad39"class="fa fa-check me-3"></i>Aliqu diam amet diam et eos</p>
                                <p><i style="color:#7fad39"class="fa fa-check me-3"></i>Clita duo justo magna dolore erat amet</p>
                                <a class="btn site-btn mt-3" href="">Read More</a>
                            </div>
                        </div>
                    </div>

        </section>
    <!-- about us Section End -->

    <br><br>

    <!-- Firm Visit Start -->
    <section class="visit">
        <div class="container-fluid bg-primary bg-icon">
            <div class="container" style="padding: 60px 0!important;">
                <div class="row  align-items-center">
                    <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                        <h2 style="font-weight: bold; font-size:52px" class="text-white mb-3">Visit Our Firm</h2>
                        <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                    </div>
                    <div class="col-md-5 text-right wow fadeIn" data-wow-delay="0.5s">
                        <a class="btn btn-lg secondarysite-btn r py-3 px-5" href="">Visit Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Firm Visit End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach($categories as $categorie)
                                <li data-filter=".{{$categorie->nom}}">{{$categorie->nom}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix {{$product->categorie->nom}}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{asset('/uploads/products/'.$product->image)}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{route('cart.add',$product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$product->name}}</a></h6>
                                <h5>{{$product->price}} DT</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Feature Start -->
    <section class="features">
        <div class="container-fluid bg-light bg-icon mt-5 py-6" style="padding: 60px 0!important; margin-top:50px;" >
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="section-title">
                        <h2>Our Features</h2>
                    </div>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{asset('/assets/img/icon-1.png')}}" alt="">
                            <h4 class="mb-3">Natural Process</h4>
                            <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                            <a class="btn site-btn" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{asset('/assets/img/icon-2.png')}}" alt="">
                            <h4 class="mb-3">Organic Products</h4>
                            <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                            <a class="btn site-btn" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{asset('/assets/img/icon-3.png')}}" alt="">
                            <h4 class="mb-3">Biologically Safe</h4>
                            <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                            <a class="btn site-btn" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        
        <div class="hero__item hero__item1 set-bg m-0"  data-setbg="{{asset('/assets/img/banner.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__text">
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
    <!-- Hero Section End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad" style="padding-top: 40px!important;">
        <div class="container">
            <div class="section-title">
                <h2>Sale Off</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="product__discount">
                    
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach($products as $product)
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('/uploads/products/'.$product->image)}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{ $product->categorie->nom }}</span>
                                            <h5><a href="#">{{$product->name}}</a></h5>
                                            <div class="product__item__price">{{$product->price}} DT</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
@endsection
