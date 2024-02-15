<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Produk::all();
        return view('produk.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'status' => 'required|in:draft,published',
            'category_id' => 'required|exists:categories,id',
            'price' => 'nullable|integer',
            'weight' => 'nullable|integer',
            'img_url' => 'nullable|string|max:150',
        ]);

        Product::create($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Product created successfully.');//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produk.show', compact('product'));//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produk.edit', compact('product'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'status' => 'required|in:draft,published',
            'category_id' => 'required|exists:categories,id',
            'price' => 'nullable|integer',
            'weight' => 'nullable|integer',
            'img_url' => 'nullable|string|max:150',
        ]);

        $product->update($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Product updated successfully.');//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Product deleted successfully.');//
    }
}
