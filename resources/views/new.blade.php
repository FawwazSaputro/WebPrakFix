@extends('layout')
@section('content')
    

<body>
    @include('partials._nav')
    
    <main class="mt-0 newMain">
        <div class="col-sm-6 offset-sm-3 newAndEdit-field">
            <h3 class="text-center mb-4">Jual</h3>
            <form action="/products" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label" for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="nama">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="stok" >Stok</label>
                    <input type="text" class="form-control" id="stok"name="stock" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="deskripsi" >Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3"name="description"></textarea>
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label" for="image">Tambah Gambar</label>
                    <input type="file" class="form-control" id="image" multiple>
                </div> --}}
                <label class="form-label" for="harga">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" id="harga" class="form-control" name="price" required>
                </div>
                <label class="form-label" for="noWA">No WA</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" id="noWA" name="wa" required>
                </div>
                <div class="mb-3">
                    <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Kategori</option>
                        <option value="drink">Drink</option>
                        <option value="food">Food</option>
                        <option value="dessert">Dessert</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="images">Tambah Gambar *maks 1MB</label>
                    <input type="file" class="form-control" name="images[]" id="images" multiple required>
                </div>
                <button type="submit" class="btn btnNewCustom btn-sm btn-jual mb-3">Unggah</button>
            </form>
        </div>
    </main>
</body>

@endsection