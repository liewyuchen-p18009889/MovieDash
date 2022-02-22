@extends('global.import')
@section('title', 'Login | Movie Dash')

<style>
    body{
        background: #8454D1;
        background: -webkit-linear-gradient(top, #8454D1, #BA4CEF);
        background: -moz-linear-gradient(top, #8454D1, #BA4CEF);
        background: linear-gradient(to bottom, #8454D1, #BA4CEF);
    }
</style>

<body style="">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow p-5 mb-5 bg-white rounded" style="margin-top: 200px;">
                <h3 class=" mb-4 text-center" style="color: #8454D1;">Login to Movie Dash</h3>
                <form>
                    <div class="mb-3">
                      {{-- <label for="exampleInputEmail1" class="form-label">Email address</label> --}}
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                      {{-- <label for="exampleInputPassword1" class="form-label">Password</label> --}}
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    {{-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                    
                    <div class="d-grid">
                        <button class="btn btn-light" type="submit" style="background: #8860D0; color: #F8F9FA;">Login</button>
                      </div>
                </form>
                <p class="d-flex justify-content-center">Don't have an account?&nbsp;
                    <a href="{{ url('register') }}">Create an account</a></p>
                <a href="{{ url('home') }}" class="d-flex justify-content-center">Redirect to Home</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>  
</body>

</html>