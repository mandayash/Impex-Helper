<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        \Log::info('Auth Status:', ['is_authenticated' => Auth::check()]);
        if (Auth::check()) {
        \Log::info('User Role:', ['role' => Auth::user()->role]);

        // Jika user sudah login
        if (Auth::check()) {
            $user = Auth::user();
            $products = Product::with('seller')->latest()->paginate(12);

            if ($user->role === 'seller') {
                $hasCompletedProfile = $user->sellerProfile && $user->sellerProfile->shop_name;
                return view('home.seller', [
                    'products' => $products,
                    'isSellerProfileComplete' => $hasCompletedProfile
                ]);
            } else {
                return view('home.buyer', [
                    'products' => $products
                ]);
            }
        }

        // Jika guest (belum login)
        return view('home.guest');
    }

}


    /**
     * Show the authenticated user dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return $this->getAuthenticatedView();
    }

    /**
     * Get view for authenticated users
     * @return \Illuminate\Contracts\Support\Renderable
     */
    private function getAuthenticatedView()
    {
        $user = Auth::user();
        $data = [
            'products' => Product::with('seller')->latest()->paginate(12)
        ];

        if ($user->role === 'seller') {
            $data['isSellerProfileComplete'] = $user->sellerProfile && $user->sellerProfile->shop_name;
            return view('home.seller', $data);
        }

        return view('home.buyer', $data);
    }
}
