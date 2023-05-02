@extends('layouts.auth')
@section('title', 'Register')
@section('content')
<section class="login_box">
  <div class="right bg-icon bg-primary">
      <div class="right-text" style="text-align: center;">
          <h2><a href="/"><img style="width: 28%" src="{{asset('img/logo.png')}}" alt=""></a></h2>
          <h5><a href="{{route('register')}}">Create your account !</a></h5>
        

      </div>
  </div>
  <style>
    .pays {
    border: none!important;
    margin: 15px 0px!important;
    border-bottom: 1px solid #000!important;
    padding: 7px 9px!important;
    width: 100%!important;
    overflow: hidden!important;
    background: transparent!important;
    font-weight: 600!important;
    font-size: 14px!important;
}
.row div{
    text-align: left!important
}
  </style>
  <style>
    .error{
        color: rgb(234, 1, 1);
        font-size: 13px;
       
    }
</style>
  <div class="left">
      <div class="contact" >
          <form action="{{route('register')}}" method="POST" style="text-align: center;border: solid 1px rgb(230,230,230); border-radius:8px;padding:50px!important">
            @csrf
              <img  style="vertical-align: middle;width:70px;position:relative; margin:auto;" src="{{asset('/img/user.png')}}" alt="">
              <h3>Register</h3>
              <div class="row">
                  <div class="col-md-6">
                      <input type="text" name="nom" placeholder="Last Name">
                      @error('nom')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="col-md-6">
                      <input type="text" name="prenom" placeholder="First Name ">
                      @error('prenom')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6"style="margin-top:-7px">
                  <select name="pays" class="pays @error('pays') is-invalid @enderror">
                      <option selected disabled >Pays</option>
                      @foreach($pays as $p)
                      <option value="{{$p->id}}">{{$p->name}}</option>
                      @endforeach
                  </select>
                  @error('pays')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
                <div class="col-md-6">
                    <input type="text" name="adresse" placeholder="Adress">
                    @error('adresse')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-12" style="text-align: left!important">
                  <label for="genre" >Genre:</label>
                  <input style="width:8%" type="radio" name="genre" id="Female" value="Female"><label for="Female">Female</label>
                  <input style="width:8%" type="radio" name="genre" id="Male" value="Male"><label for="Male">Male</label> <br>
                  @error('genre')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <input type="text" name="email" placeholder="Email">
                      @error('email')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="col-md-6">
                      <input type="number" name="tel" placeholder="Phone number">
                      @error('tel')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <input type="password" name="password" placeholder="Password">
                      @error('password')
                      <span class="error">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="col-md-6">
                      <input type="password" name="password_confirmation" placeholder="Confirm Password">
                  </div>
              </div>

              <br>
              <button class="submit">Register</button>
              <br>
              <div>
                  <span>Already have an account !<a href="{{route('login')}}"> <b>Login</b></a><br></span>
              </div>
              
              
          </form>
          <br>
          
      </div>
      
  </div>
  
</section>
@endsection