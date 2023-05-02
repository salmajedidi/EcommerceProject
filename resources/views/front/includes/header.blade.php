 <!-- Humberger Begin -->
 <div class="humberger__menu__overlay"></div>
 <div class="humberger__menu__wrapper">
     <div class="humberger__menu__logo">
         <a href="#"><img src="{{asset('/assets/img/logo.png/')}}" alt=""></a>
     </div>
 
     <nav class="humberger__menu__nav mobile-menu">
         <ul>
             <li class="active"><a href="./index.html">Home</a></li>
             <li><a href="{{route('shop')}}">Shop</a></li>
             <!--<li><a href="#">Pages</a>
                 <ul class="header__menu__dropdown">
                     <li><a href="./shop-details.html">Shop Details</a></li>
                     <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                     <li><a href="./checkout.html">Check Out</a></li>
                     <li><a href="./blog-details.html">Blog Details</a></li>
                 </ul>
             </li>-->
             <li><a href="#">About Us</a></li>
             <li><a href="#">Contact</a></li>
         </ul>
     </nav>
     <div id="mobile-menu-wrap"></div>
     <div class="humberger__menu__contact">
         <ul>
            @guest
                <li><a href="{{route('login')}}" class="primary-btn">Login</a></li>
                <li><a href="{{route('register')}}" class="secondary-btn">Register</a></li>
            @else
                <li><a href="{{route('login')}}" class="primary-btn">Account</a></li>
                <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="secondary-btn">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
         </ul>
     </div>
     <div class="header__top__right__social">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-linkedin"></i></a>
         <a href="#"><i class="fa fa-pinterest-p"></i></a>
     </div>
    
     <div class="humberger__menu__contact">
         <ul>
             <li><i class="fa fa-envelope"></i> contact@organi.com</li>
             <li>© Copyright All Right Reserved 2022</li>
         </ul>
     </div>
 </div>
 <!-- Humberger End -->

 <!-- Header Section Begin -->
 <header class="header" >
   
    <div class="container">
        <div class="row" >
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="{{asset('/assets/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-5">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="{{route('shop')}}">Shop</a></li>
                        <!--<li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>
                </nav>
             </div>
             <div class="col-lg-4">
                <div class="header__cart header__menu" >
                    <ul>
                        <li>
                            <a  style="color:black;letter-spacing:0px" href="#"><i class="fa fa-user"></i></a> 
                            <ul style="text-align: left!important;width:150px!important;" class="header__menu__dropdown">
                                @guest
                                    <li style="border-bottom: solid 1px rgb(141, 140, 140);"><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                @else
                                    <li style="border-bottom: solid 1px rgb(141, 140, 140);"><a href="{{route('login')}}">account</a></li>
                                    <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </li>
                        <li><a style="letter-spacing:0px" href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                        <li type="button" class="offcanvas-click1" >
                            <a style="letter-spacing:0px" href="#"><i class="fa fa-shopping-bag"></i> <span>{{Cart::count()}}</span></a>
                        </li>
                        <div class="offcanvas">
                            <a class="btn offcanvas-click offcanvas-click1">
                              <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            @if(Cart::count()==0)

                                <div class="emtycart" style="text-align:center;margin-top:40%">
                                    <i style="font-size:72px" class="fa fa-cart-plus mr-4"></i><br>
                                    <span>Votre panier est encore vide !</span>
                                    <div class="summary-checkout" style="width:100%;margin-top:5%">
                                        <a  href="#"  ><button class="primary-btn" style="font-weight:bold!important;color:white; ">Evénements disponibles</button></a>
                                    </div>
                                </div>
                            @else
                            <div class="summary-delivery text-left">
                                @foreach($cartItems as $cartItem)
                                    <div class="listchek"  >
                                        <img style="width:60px;float:left; margin-right:10px;mqrgin-top:5px" src="{{asset('/uploads/products/'.$cartItem->options->image)}}" alt="Image_not_found">

                                        <h6>
                                        
                                            <span style="float:left;color: black;">
                                                {{$cartItem->qty}} x <b>{{ $cartItem->name}}</b> 
                                                <div class="quantity mt-2">
                                                    <div class="pro-qty" style="width:80px!important; height:30px!important">
                                                        <span class="dec qtybtn prod{{$cartItem->id}}" style="width:20px!important">-</span>
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="text" name="qty"  id="qty{{$cartItem->id}}"  style="width:20px!important" value="{{$cartItem->qty}}">
                                                        <span class="inc qtybtn prod{{$cartItem->id}}" style="width:20px!important">+</span>
                                                    </div>
                                                </div>
                                            </span>
                                            <span style="float:right">
                                                <form  style="  color:balck" action="{{route('destroy',$cartItem->rowId)}}"  method="POST">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <br>
                                                    {{  $cartItem->qty *  $cartItem->price}}DT
                                                    <i class="fa fa-trash ml-1" style="color:rgb(195, 14, 14)" aria-hidden="true"></i>
                                                </form>
                                            </span>
                                        </h6>
                                      
                                    </div>
                                    <br><br><br><br>
                                @endforeach
                            </div><br>

                            <div class="summary-total">
                                <div class="total-title">Total</div>
                                <div class="total-value final-value" id="basket-total"><b>{{Cart::subtotal()}}DT</b></div>
                            </div>
                            <div class="summary-checkout"style="width:100%!important">
                                <a  href="{{ route('index') }}"  ><button class="primary-btn">Panier d'achats</button></a>
                            </div>
                            @endif
                        </div>
                        
                    
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
 </header>
 <!-- Header Section End -->
 @section('script')
 <script>
     $(document).ready(function() {
     // Update Data
         
         $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         @foreach($cartItems as $cartItem)
 
         $('.prod{{$cartItem->id}}').click( function(e){
 
             e.preventDefault();
             var qty={{$cartItem->qty}};
             if($(this).hasClass('dec')) {
                  qty = {{$cartItem->qty}}-1
             }else if($(this).hasClass('inc')) {
                  qty = {{$cartItem->qty}}+1
             }
             
             $.ajax({
                 type: "POST",
                 url: "/cart/edit/{{$cartItem->rowId}}",
                 data:{
                     '_token': $('input[name=_token]').val(),
                     'qty': qty,
                 },
                 success: function (response) {
                     console.log(response);
                     location.reload();
                 },
                 error:function(error){
                     console.log(error);
                 }
             });
         });
         @endforeach
 
     });
 
 </script>
 @endsection