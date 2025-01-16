<!-- resources/views/seller/complete-profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complete Seller Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('seller.complete-profile') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Shop Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('shop_name') is-invalid @enderror"
                                       name="shop_name" value="{{ old('shop_name', $sellerProfile->shop_name ?? '') }}" required>
                                @error('shop_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description" rows="4" required>{{ old('description', $sellerProfile->description ?? '') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Shop Photo') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('shop_photo') is-invalid @enderror"
                                       name="shop_photo">
                                @error('shop_photo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                @if($sellerProfile && $sellerProfile->shop_photo)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($sellerProfile->shop_photo) }}"
                                             alt="Shop Photo" class="img-thumbnail" style="max-height: 200px">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
