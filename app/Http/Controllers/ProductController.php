<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $products = $product->orderBy('id', 'DESC')->get();
        return view('admin.v_kelola_barang.index_barang', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = $category->orderBy('name', 'ASC')->get();
        return view('admin.v_kelola_barang.add_barang', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'    => ['required', 'numeric'],
            'name'        => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3'],
            'stock'       => ['required', 'numeric'],
            'price'       => ['required', 'numeric']
        ]);

        Product::create([
            'category_id' => $request->category,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'stock'       => $request->stock,
            'price'       => $request->price,
        ]);

        return redirect()->route('product.index')->with('status', 'Berhasil menambah data barang');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Product $product)
    {
        $categories = $category->orderBy('name', 'ASC')->get();
        return view('admin.v_kelola_barang.update_barang', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category'    => ['required', 'numeric'],
            'name'        => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3'],
            'stock'       => ['required', 'numeric'],
            'price'       => ['required', 'numeric']
        ]);

        $product->category_id = $request->category;
        $product->name        = $request->name;
        $product->slug        = Str::slug($request->name);
        $product->description = $request->description;
        $product->stock       = $request->stock;
        $product->price       = $request->price;
        $product->save();

        return redirect()->route('product.index')->with('status', 'Berhasil mengubah data barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('status', 'Berhasil menghapus data barang');
    }

    public function showAllProductInShop(Product $product)
    {
        $products = $product->orderBy('id', 'DESC')->get();
        return view('shop.home', compact('products'));
    }

    public function showDetailProductInShop(Product $product)
    {
        return view('shop.product', compact('product'));
    }
}
