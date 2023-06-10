@extends('layout')
@section('content')
<body>
@include('partials._nav')
<div class="container col-6 offset-3 py-5 pt-0">
    <form action="/login" method="POST">
        @csrf 
        <div id="loginLogo">
            <img src="{{ asset('images/LogoNew.png') }}" class="rounded" alt="">
        </div>
        <div id="loginForm" class="col-6 offset-3">
            <div class="form-floating mb-3">
                <input type="text" name="nim" class="form-control" id="floatingInput" placeholder="NIM">
                <label for="floatingInput">NIM</label>
            </div>
            <div class="form-floating">
                <input type="password"  name="password"  class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
                <button type="submit" class="btn btn-primary mt-4 col-12">Masuk</button>
            <span>Belum punya akun ? <a href="/register">Register</a></span>
    
        </div>
    </form>
    
</div>
</body>
@endsection
    

