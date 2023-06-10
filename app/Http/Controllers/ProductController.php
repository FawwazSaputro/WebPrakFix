<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\detail_edit;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products =Product::all();
    
        return view('home', [
            'products' => $products
        ]);
    }

    public function show(Product $product, Request $request)
    {
        // dd($product);
        // dd($request->session()->getId());
        return view('show', [
            'product' => $product,
        ]);
    }
    public function getNew()
    {
        return view('new', []);
    }
    public function submitNew(Request $request)
    {
        // dd($request);

        $formFields = $request->validate([
            'jurusan' => 'required',
            'name' => 'required',
            'stock' => ['required', 'numeric'],
            'description' => 'required',
            'price' => ['required', 'numeric'],
            'wa' => 'required',
            'category' => 'required',
        ]);
        $formFields['user_id'] = auth()->id();
        if ($request->file('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $formFields['images'][$i] =  $request->file('images')[$i]->storeOnCloudinary('kantinkejujuran')->getSecurePath();
            }
        }
        

        $product = Product::create($formFields);
        $product->save();
        // public/images/...png

        return redirect("/products/" . $product->id);
    }
    public function getEdit(Product $product)
    {
        if ($product->user_id != auth()->id()) {
            abort(403, "Anda tidak memiliki hak untuk itu!");
        };
        return view('edit', [
            'product' => $product
        ]);
    }
    public function submitEdit(Request $request, Product $product)
    {
        
        // dd($request);
        $formFields = $request->validate([
            'jurusan' => 'required',
            'name' => 'required',
            'stock' => ['required', 'numeric'],
            'description' => 'required',
            'price' => ['required', 'numeric'],
            'wa' => 'required',
            'category'=>'required',
        ]);
        $oldImages = $product['images'];

        $formFields['user_id'] = auth()->id();
        if ($request->file('images')) {
            // for ($i = 0; $i < count($request->file('images')); $i++) {
            //     $formFields['images'][$i] =  $request->file('images')[$i]->storeOnCloudinary('kantinkejujuran')->getSecurePath();
            // }
        }

        $product->update($formFields);
        if ($oldImages) {
            $product['images'] = array_merge($product['images'], $oldImages);
        }
        $user = User::find(auth()->id());
        
        detail_edit::create(
            ['userIdAndproductId' => $user->nim . '-'. $product->jurusan .'-'. $product->id]
        );
        
        $product->save();
        return redirect("/products/" . $product->id);
    }
    public function delete(Product $product)
    {
        if ($product->user_id != auth()->id()) {
            abort(403, "Anda tidak memiliki hak untuk itu!");
        };
        $product->delete();
        return redirect('/products');
    }
}
