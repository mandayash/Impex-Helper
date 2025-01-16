<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SellerProfile;

class SellerController extends Controller
{
    /**
     * Show the form for completing seller profile
     */
    public function showProfileForm()
    {
        $seller = Auth::user()->sellerProfile;
        return view('seller.complete-profile', compact('seller'));
    }

    /**
     * Save the completed profile
     */
    public function completeProfile(Request $request)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'description' => 'required|string',
            'shop_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user = Auth::user();

        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('shop_photo')) {
            $photoPath = $request->file('shop_photo')->store('shop-photos', 'public');
        }

        // Update or create seller profile
        SellerProfile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'shop_name' => $request->shop_name,
                'description' => $request->description,
                'shop_photo' => $photoPath ?? $user->sellerProfile->shop_photo
            ]
        );

        return redirect()->route('seller.dashboard')
            ->with('success', 'Profile has been completed successfully');
    }

    public function profile()
    {
        $user = Auth::user();
        $sellerProfile = $user->sellerProfile;

        return view('seller.profile', [
            'user' => $user,
            'sellerProfile' => $sellerProfile
        ]);
    }

    /**
     * Show seller dashboard
     */
    // public function dashboard()
    // {
    //     $user = Auth::user();
    //     $seller = $user->sellerProfile;
    //     $products = $seller->products()->latest()->paginate(10);

    //     return view('seller.dashboard', compact('seller', 'products'));
    // }

    /**
     * Show seller store page
     */
    public function store()
    {
        $user = Auth::user();
        $sellerProfile = $user->sellerProfile;
        $products = $sellerProfile->products()->latest()->paginate(12);

        return view('seller.store', [
            'seller' => $sellerProfile,
            'products' => $products
        ]);
    }
}
