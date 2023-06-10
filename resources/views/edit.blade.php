@extends('layout')
@section('content')
    


<body>
    @include('partials._nav')
    <main class="mt-0 newMain">
        <div class="col-sm-6 offset-sm-3 newAndEdit-field">
            <h3 class="text-center mb-4">Edit Post</h3>
            <form action="/products/{{ $product->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label class="form-label" for="jurusan">Jurusan</label>
                    <input type="text"  value="{{ $product->jurusan }}" class="form-control" id="jurusan" name="jurusan" @readonly(true)>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="nama">Nama Makanan</label>
                    <input type="text" value="{{ $product->name }}" class="form-control" id="nama" name="name">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="stok">Stok</label>
                    <input type="text"value="{{ $product->stock }}" class="form-control" id="stok" name="stock">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="description" rows="3">{{ $product->description }}</textarea>
                </div>
                <label class="form-label" for="harga">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" id="harga" name="price" value="{{ $product->price }}"id="harga" class="form-control">
                </div>
                <label class="form-label" for="noWA">No WA</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">+62</span>
                    <input type="text" id="noWA" name="wa" value="{{ $product->wa }}"id="noWA" class="form-control">
                </div>
                <div class="mb-3">
                    <select name="category" class="form-select" aria-label="Default select example" >
                        <option selected>Pilih Kategori</option>
                        <option value="drink">Drink</option>
                        <option value="food">Food</option>
                        <option value="dessert">Dessert</option>
                      </select>
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label" for="image">Tambah Gambar</label>
                    <input type="file" class="form-control" id="image" multiple>
                </div> --}}
                <button type="submit" class="btn btnNewCustom btn-sm btn-jual mb-3">Unggah</button>
            </form>
        </div>
    </main>
</body>
@endsection