<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $user = Auth::user();

    // Cek apakah seller sudah punya profile
    if (!$user->sellerProfile) {
        return redirect()->route('seller.complete-profile')
            ->with('error', 'Please complete your profile first');
    }

    return view('seller.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'commodity_type' => 'required|array',  // Tambahkan validasi
            'commodity_type.*' => 'string'         // Validasi setiap item array
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product-images', 'public');
        }

        $commodityType = implode(', ', $request->commodity_type);
        $product = Product::create([
            'seller_id' => Auth::user()->sellerProfile->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
            'commodity_type' => $commodityType
        ]);

        return redirect()->route('seller.store')
            ->with('success', 'Product created successfully');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        // Memastikan product milik seller yang sedang login
        if ($product->seller_id !== Auth::user()->sellerProfile->id) {
            abort(403);
        }

        return view('seller.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validasi kepemilikan product
        if ($product->seller_id !== Auth::user()->sellerProfile->id) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product-images', 'public');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath
        ]);

        return redirect()->route('seller.store')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        // Validasi kepemilikan product
        if ($product->seller_id !== Auth::user()->sellerProfile->id) {
            abort(403);
        }

        $product->delete();

        return redirect()->route('seller.store')
            ->with('success', 'Product deleted successfully');
    }
}
