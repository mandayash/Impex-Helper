<!-- resources/views/seller/store.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Store Header -->
    <div class="store-header mb-4">
        <div class="row align-items-center">
            <div class="col-md-2">
                @if($seller->shop_photo)
                    <img src="{{ Storage::url($seller->shop_photo) }}"
                         alt="Shop Photo"
                         class="img-fluid rounded-circle shop-photo">
                @endif
            </div>
            <div class="col-md-10">
                <h2 class="shop-name">{{ $seller->shop_name }}</h2>
                <p class="shop-description">{{ $seller->description }}</p>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="products-section">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>My Products</h3>
            <a href="{{ route('seller.products.create') }}" class="btn btn-primary">
                Add New Product
            </a>
        </div>

        @if($products->isEmpty())
            <div class="alert alert-info">
                You haven't added any products yet. Start adding products to your store!
            </div>
        @else
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            @if($product->image)
                                <img src="{{ Storage::url($product->image) }}"
                                     class="card-img-top"
                                     alt="{{ $product->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">${{ number_format($product->price, 2) }}</span>
                                    <span class="stock">Stock: {{ $product->stock }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
