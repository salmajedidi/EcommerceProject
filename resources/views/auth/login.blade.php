@extends('layouts.auth')
@section('title', 'LOGIN')
@section('content')


  <section class="login_box">
    <div class="left">
        <div class="contact" >
            <form action="{{route('login')}}" method="POST" style="text-align: center;border: solid 1px rgb(230,230,230); border-radius:8px;padding:50px!important">
              @csrf
                <img  style="vertical-align: middle;width:70px;position:relative; margin:auto;" src="/img/user.png" alt="">
                <h3>LOGIN</h3>
                <input type="text" name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password" class="@error('password') is-invalid @enderror"  value="{{ old('password') }}" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <button class="submit">Login</button>
                <br>
                <div style="">
                    <span><a href="#">Forget Your Password !</a><br></span>
                </div>
                
                
            </form>
            <br>
            
        </div>
        
    </div>
    <div class="right bg-icon bg-primary">
        <div class="right-text" style="text-align: center;">
            <h2><a href="/"><img style="width: 28%" src="{{asset('img/logo.png')}}" alt=""></a></h2>
            <h5>Login to your account !</h5>
            <span style="color: black;font-weight:bold;">Or</span><br>
            <span class="create"><a href="{{route('register')}}"> Create an account !</a></span>

        </div>
    </div>
</section>

@endsection