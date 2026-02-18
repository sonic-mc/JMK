@extends('layouts.app')

@section('content')

<section class="success-section">
    <div class="full-width-container">
        <div class="success-content" data-animate>
            <div class="success-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h1>Quote Request Received!</h1>
            <p>Thank you for your interest in JMK Trading. We have received your quote request and our team will get back to you within 24 hours.</p>
            <div class="success-actions">
                <a href="/" class="btn-primary">Back to Home</a>
                <a href="/products" class="btn-secondary">Browse Products</a>
            </div>
        </div>
    </div>
</section>

<style>
.success-section {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 20px;
}

.success-content {
    text-align: center;
    max-width: 600px;
}

.success-icon {
    width: 100px;
    height: 100px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.success-icon svg {
    width: 60px;
    height: 60px;
    color: #1a9847;
}

.success-content h1 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.success-content p {
    font-size: 18px;
    color: #666;
    line-height: 1.7;
    margin-bottom: 40px;
}

.success-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary,
.btn-secondary {
    padding: 16px 35px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.btn-primary {
    background: #1a9847;
    color: #ffffff;
}

.btn-primary:hover {
    background: #157a38;
}

.btn-secondary {
    background: transparent;
    color: #1a9847;
    border: 2px solid #1a9847;
}

.btn-secondary:hover {
    background: rgba(26, 152, 71, 0.1);
}
</style>

@endsection
