@extends('layout')
@section('content')
<body id="bodyHome">
    
@include('partials._nav')
    <main id="mainHome" class="mt-0">


        <div id="homeDiv1" onclick="addClassHomeSpanned(event)" class="home">
            <h1>Drink</h1>
            <div class="containerCard">
                @if ($products)
                @foreach ($products as $product)
                @if ($product->category == "drink")
                <a href="/products/{{ $product->id }}">
                    <div class="card">
                        <div class="imageCategory">
                            <img src="{{ $product->images[0] }}" alt="">
                            <h5>{{ $product->name }}</h5>
                        </div>
                    </div>
                    </a>
                @endif
                @endforeach
                @endif
                
            </div>
        </div>
        <div id="homeDiv2" onclick="addClassHomeSpanned(event)" class="home">
            <h1>Food</h1>
            <div class="containerCard">
                @if ($products)
                @foreach ($products as $product)
                @if ($product->category == "food")
                <a href="/products/{{ $product->id }}">
                    <div class="card">
                        <div class="imageCategory">
                            <img src="{{ $product->images[0] }}" alt="">
                            <h5>{{ $product->name }}</h5>
                        </div>
                    </div>
                    </a>
                @endif
                @endforeach
                @endif
            </div>
        </div>
        <div id="homeDiv3" onclick="addClassHomeSpanned(event)" class="home">
            <h1>Dessert</h1>
            <div class="containerCard">
                @if ($products)
                @foreach ($products as $product)
                @if ($product->category == "dessert")
                <a href="/products/{{ $product->id }}">
                    <div class="card">
                        <div class="imageCategory">
                            <img src="{{ $product->images[0] }}" alt="">
                            <h5>{{ $product->name }}</h5>
                        </div>
                    </div>
                    </a>
                @endif
                @endforeach
                @endif
                
            </div>
        </div>
    </main>
    
</body>

@endsection