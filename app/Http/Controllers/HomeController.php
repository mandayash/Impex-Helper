<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan logging lebih detail untuk membantu debugging
        Log::info('Session ID: ' . session()->getId());
        Log::info('Auth Check: ' . (Auth::check() ? 'true' : 'false'));

        // Periksa status autentikasi
        if (Auth::check()) {
            $user = Auth::user();

            // Log detail user untuk membantu debugging
            Log::info('User Details:', [
                'id' => $user->id,
                'role' => $user->role,
                'has_seller_profile' => $user->sellerProfile ? 'yes' : 'no'
            ]);

            // Ambil products dengan eager loading untuk optimasi
            $products = Product::with(['seller' => function($query) {
                $query->select('id', 'user_id', 'shop_name');
            }])->latest()->paginate(12);

            // Pengecekan role yang lebih eksplisit
            if ($user->role === 'seller') {
                // Pastikan pengecekan sellerProfile aman
                $hasCompletedProfile = false;
                if ($user->sellerProfile) {
                    $hasCompletedProfile = !empty($user->sellerProfile->shop_name);
                }

                Log::info('Rendering seller view', [
                    'hasCompletedProfile' => $hasCompletedProfile
                ]);

                return view('home.seller', [
                    'products' => $products,
                    'isSellerProfileComplete' => $hasCompletedProfile
                ]);
            }

            // Jika bukan seller, tampilkan view buyer
            Log::info('Rendering buyer view');
            return view('home.buyer', compact('products'));
        }

        // Jika tidak terautentikasi, tampilkan view guest
        Log::info('Rendering guest view');
        return view('home.guest');
    }

    // Method dashboard bisa dihapus karena tidak digunakan
    // Atau jika diperlukan, logikanya bisa disederhanakan:
    public function dashboard()
    {
        if (!Auth::check()) {
            Log::info('Unauthorized dashboard access attempt');
            return redirect()->route('login');
        }

        return $this->index();
    }
}
