@extends('layouts.FRONTlAYOUT')
@section('title', 'SHOPPINGCART')
@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg "  style="margin-top: 80px" data-setbg="{{asset('/assets/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $cartItem)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img style="width:20%" src="{{asset('/uploads/products/'.$cartItem->options->image)}}" alt="">
                                    <h5>{{$cartItem->name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cartItem->price}}DT
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <span class="dec qtybtn prod{{$cartItem->id}}">-</span>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <input type="text" name="qty" id="qty{{$cartItem->id}}" value="{{$cartItem->qty}}">
                                            <span class="inc qtybtn prod{{$cartItem->id}}">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{$cartItem->qty * $cartItem->price}}DT
                                </td>
                                <td class="shoping__cart__item__close">
                                    <form action="{{route('destroy',$cartItem->rowId)}}"  method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        
                                        <button class="btn-delete"  type="submit" > <span class="icon_close"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
    
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
                <div class="shoping__cart__btns mt-5">
                    <a href="{{route('shop')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>{{Cart::subtotal()}} DT</span></li>
                    </ul>
                    <a href="{{route('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

@endsection

