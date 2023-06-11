@extends('layout')
@section('content')
<body class="">
    @include('partials._nav')
    <div class="container col-6 offset-3">
        <div id="loginLogo">
            <img src="{{ asset('images/LogoKanJurFix.png') }}" class="rounded" alt="">
        </div>
        <div id="loginForm" class="col-6 offset-3 py-5">
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="NIM" name="nim">
                    <label for="floatingInput">NIM</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-primary mt-4 col-12">Daftar</button>
                <span>Sudah punya akun ? <a href="/login">Login</a></span>
            </form>
        </div>
    </div>
    
</body>

@endsection