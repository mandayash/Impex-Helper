<!-- resources/views/home/buyer.blade.php -->
@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-inner">
        <img src="{{ asset('aset/bumi.png') }}" alt="Earth Illustration" class="hero-image">
        <div class="hero-content">
            <h1><span>Discover</span> and <span>Buy</span> Quality Products</h1>
            <p>Find the best commodities from trusted sellers across ASEAN. Start exploring our marketplace today!</p>
            <a href="#products" class="cta-button">Explore Products</a>
        </div>
    </div>
</section>

<!-- Commodity Section -->
@include('components.commodity-section')
@endsection

@push('styles')
    @vite(['resources/css/home.css'])
@endpush
