@extends('frontend.layouts.master')

{{-- Page Title --}}
@section('title', 'F-Home')

{{-- Include any additional CSS or JS files if needed --}}

@section('content')


<style>
    .hero-section {
        background: linear-gradient(to right, #4e54c8, #8f94fb);
        color: white;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        padding: 60px 20px;
    }

    .hero-section .btn-primary {
        background-color: #ff7675;
        border: none;
        font-weight: bold;
        padding: 12px 30px;
    }

    .hero-section .btn-primary:hover {
        background-color: #d63031;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: bold;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        margin-top: 10px;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        padding: 30px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    }
</style>

<div class="hero-section">
    <div class="container">
        <div class="glass-card mx-auto" style="max-width: 600px;">
            
            <h1 class="hero-title">Welcome to Our Platform</h1>
            <p class="hero-subtitle">We build awesome web applications to make your business grow faster. Let’s explore!</p>
            <a href="{{ route('login') }}" class="btn btn-primary mt-4">Get Started</a>
        </div>
    </div>
</div>
@endsection

