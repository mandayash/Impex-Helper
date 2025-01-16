<!-- resources/views/seller/profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile Information') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <p class="form-control-static">{{ $user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <p class="form-control-static">{{ $user->email }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <p class="form-control-static">{{ $user->country }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <p class="form-control-static">{{ $user->phone_number }}</p>
                    </div>

                    @if($sellerProfile)
                        <hr>
                        <h4>Store Information</h4>

                        <div class="mb-3">
                            <label class="form-label">Shop Name</label>
                            <p class="form-control-static">{{ $sellerProfile->shop_name }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <p class="form-control-static">{{ $sellerProfile->description }}</p>
                        </div>

                        @if($sellerProfile->shop_photo)
                            <div class="mb-3">
                                <label class="form-label">Shop Photo</label>
                                <div>
                                    <img src="{{ Storage::url($sellerProfile->shop_photo) }}"
                                         alt="Shop Photo"
                                         class="img-thumbnail"
                                         style="max-width: 200px;">
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.form-control-static {
    padding: 0.375rem 0;
    margin-bottom: 0;
    color: #6c757d;
}
</style>
@endpush
