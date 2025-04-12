@extends('backend.user.layouts.master')

@section('title', 'User Profile')

@push('styles')
<style>
    .profile-banner {
        background: linear-gradient(to right, #667eea, #764ba2);
        padding: 80px 20px 40px;
        border-radius: 0 0 20px 20px;
        color: white;
        text-align: center;
        position: relative;
    }

    .profile-card {
        background: rgba(175, 167, 167, 0.877);
        backdrop-filter: blur(8px);
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        margin-top: -70px;
        padding: 30px;
        transition: all 0.3s ease-in-out;
    }

    .profile-card:hover {
        transform: scale(1.01);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .profile-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 4px solid #fff;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        margin-top: -60px;
    }

    .label {
        font-weight: bold;
        color: #555;
    }

    .value {
        color: #333;
    }
</style>
@endpush

@section('content')
<div class="profile-banner">
    <h1 class="mb-1">Welcome, {{ Auth::user()->name }}</h1>
    <p class="mb-0">Here's your profile overview</p>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Glass-style Profile Card --}}
            <div class="profile-card text-center">
                <img src="{{ asset('images/default-user.png') }}" alt="Profile" class="profile-image mb-3">

                <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                <p class="text-muted mb-3">{{ Auth::user()->email }}</p>

                <div class="row text-start mt-4">
                    <div class="col-sm-6 mb-3">
                        <div class="label">Role</div>
                        <div class="value">{{ Auth::user()->role ?? 'User' }}</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="label">Joined</div>
                        <div class="value">{{ Auth::user()->created_at->format('M d, Y') }}</div>
                    </div>
                </div>

                <a href="#" class="btn btn-primary mt-3 px-4">Edit Profile</a>
            </div>

        </div>
    </div>
</div>
@endsection
