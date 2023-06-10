@extends('layout')
@section('content')
    

<body id="bodyShow">
    
@include('partials._nav')
    <main id="mainShow" class="container mt-5">
        
        <div class="showImage">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">  
                @foreach ($product->images as $image)

                <div class="carousel-item active">
                    <img src="{{ $image }}" class="card-img-top" alt="...">
                  </div> 
                      
                @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="showCard">

            <div class="card text-center">
                <div class="card-header">
                    {{ $product->jurusan }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}~{{ $product->category }}</h5>
                    <p class="card-text my-3">Stok : {{ $product->stock }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="buttonShowCard">
                        <span>Rp {{ $product->price }}</span>
                        <a href="https://wa.me/+62{{ $product->wa }}" target="_blank">
                        <span class="material-symbols-rounded">
                            call
                        </span>
                    </a>
                    </div>
                </div>
                    <div class="card-footer ">
                        @auth
                        @if ($product->user_id == auth()->user()->id)
                            
                        
                        <a href="/products/{{ $product->id }}/edit" class="me-2">
                            <button class="btn btn-sm btnEdit">Edit</button>
                        </a>
                        <form action="/products/{{ $product->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                        <a href="/products/{{ $product->id }}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                        </form>
                    @endif
                    @endauth
                    </div>
            </div>
        </div>
    </main>
</body>
@endsection