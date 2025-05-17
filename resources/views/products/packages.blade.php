@extends('main')
@section('title', 'Happiness Packages')
@section('description', 'Explore our range of happiness packages designed to enhance your well-being and happiness journey.')
@section('keywords', 'Happiness Packages, Well-being, Happiness Journey, Personal Growth')


@section('content')
<div class="packages-hero bg-gradient-to-r from-blue-600 to-indigo-800 py-16 px-4 sm:px-6 lg:px-8 text-white text-center w-50 mx-auto"><br>
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Happiness Packages</h1>
    <p class="text-xl max-w-3xl mx-auto">Discover the perfect package to enhance your well-being and happiness journey</p>
</div>

<div class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-indigo-700 bg-indigo-100 rounded-full mb-3">Our Pricing</span>
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                Choose Your Path to Happiness
            </h2>
            <p class="mt-5 max-w-2xl mx-auto text-xl text-gray-500">
                We've designed our packages to fit your unique needs and goals
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
            <!-- 1 Session Package -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 px-6 py-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">1 Session</h3>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-blue-100 text-lg line-through">$700</span>
                        <span class="bg-yellow-500 text-white text-sm font-bold px-2 py-1 rounded-full my-1">30% OFF</span>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold">$490</span>
                            <span class="ml-1 text-lg font-medium text-blue-100">Sale Price</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-white text-center">
                    <a href="#" class="block w-full py-3 px-4 text-center font-medium rounded-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-300">
                        Buy Now
                    </a>
                </div>
            </div>

            <!-- 3 Sessions Package -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 px-6 py-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">3 Sessions</h3>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-indigo-100 text-lg line-through">$1500</span>
                        <span class="bg-yellow-500 text-white text-sm font-bold px-2 py-1 rounded-full my-1">30% OFF</span>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold">$1050</span>
                            <span class="ml-1 text-lg font-medium text-indigo-100">Sale Price</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-white text-center">
                    <a href="#" class="block w-full py-3 px-4 text-center font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-300">
                        Buy Now
                    </a>
                </div>
            </div>

            <!-- 6 Sessions Package -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="bg-gradient-to-br from-purple-600 to-pink-500 px-6 py-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">6 Sessions</h3>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-purple-100 text-lg line-through">$2400</span>
                        <span class="bg-yellow-500 text-white text-sm font-bold px-2 py-1 rounded-full my-1">30% OFF</span>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold">$1680</span>
                            <span class="ml-1 text-lg font-medium text-purple-100">Sale Price</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-white text-center">
                    <a href="#" class="block w-full py-3 px-4 text-center font-medium rounded-lg text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-300">
                        Buy Now
                    </a>
                </div>
            </div>

            <!-- 9 Sessions Package -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="bg-gradient-to-br from-pink-500 to-red-500 px-6 py-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">9 Sessions</h3>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-pink-100 text-lg line-through">$3600</span>
                        <span class="bg-yellow-500 text-white text-sm font-bold px-2 py-1 rounded-full my-1">30% OFF</span>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold">$2520</span>
                            <span class="ml-1 text-lg font-medium text-pink-100">Sale Price</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-white text-center">
                    <a href="#" class="block w-full py-3 px-4 text-center font-medium rounded-lg text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all duration-300">
                        Buy Now
                    </a>
                </div>
            </div>

            <!-- 12 Sessions Package -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <div class="bg-gradient-to-br from-teal-500 to-green-500 px-6 py-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">12 Sessions</h3>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-teal-100 text-lg line-through">$4200</span>
                        <span class="bg-yellow-500 text-white text-sm font-bold px-2 py-1 rounded-full my-1">30% OFF</span>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold">$2940</span>
                            <span class="ml-1 text-lg font-medium text-teal-100">Sale Price</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-white text-center">
                    <a href="#" class="block w-full py-3 px-4 text-center font-medium rounded-lg text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-all duration-300">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Added feature comparison -->
        <!-- <div class="mt-20 text-center">
            <a href="#compare" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-900">
                Compare all features
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div> -->
    </div>
</div>


<style>
    /* Hero Section */
    .packages-hero {
        background: linear-gradient(90deg, #2563eb 0%, #4f46e5 100%);
        padding: 4rem 1rem;
        color: #fff;
        border-radius: 1rem;
        margin-bottom: 2rem;
    }

    .packages-hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .packages-hero p {
        font-size: 1.25rem;
        margin-top: 1rem;
    }

    /* Pricing Cards */
    .grid {
        display: grid;
        gap: 2rem;
    }

    @media (min-width: 1024px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .bg-white {
        background: #fff;
    }

    .rounded-2xl {
        border-radius: 1.5rem;
    }

    .shadow-xl,
    .shadow-2xl {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08), 0 2px 4px rgba(0, 0, 0, 0.04);
    }

    .transform {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .transform:hover,
    .hover\:scale-105:hover {
        transform: scale(1.05);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
    }

    .text-center {
        text-align: center;
    }

    .text-2xl {
        font-size: 1.5rem;
    }

    .text-4xl {
        font-size: 2.25rem;
    }

    .text-5xl {
        font-size: 3rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-extrabold {
        font-weight: 800;
    }

    .text-indigo-700 {
        color: #4338ca;
    }

    .text-indigo-600 {
        color: #4f46e5;
    }

    .text-indigo-100 {
        color: #e0e7ff;
    }

    .text-blue-500 {
        color: #3b82f6;
    }

    .text-blue-600 {
        color: #2563eb;
    }

    .text-blue-100 {
        color: #dbeafe;
    }

    .text-gray-900 {
        color: #111827;
    }

    .text-gray-700 {
        color: #374151;
    }

    .text-gray-600 {
        color: #4b5563;
    }

    .text-gray-50 {
        background: #f9fafb;
    }

    .bg-gradient-to-br {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    }

    .bg-gradient-to-b {
        background: linear-gradient(180deg, #f9fafb 0%, #fff 100%);
    }

    .bg-gradient-to-r {
        background: linear-gradient(90deg, #4f46e5 0%, #6366f1 100%);
    }

    .bg-indigo-700 {
        background: #3730a3;
    }

    .bg-indigo-600 {
        background: #4f46e5;
    }

    .bg-indigo-100 {
        background: #e0e7ff;
    }

    .bg-blue-500 {
        background: #3b82f6;
    }

    .bg-blue-600 {
        background: #2563eb;
    }

    .bg-white {
        background: #fff;
    }

    .rounded-full {
        border-radius: 9999px;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .rounded-md {
        border-radius: 0.375rem;
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
    }

    .pt-12 {
        padding-top: 3rem;
    }

    .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .mt-10 {
        margin-top: 2.5rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mb-16 {
        margin-bottom: 4rem;
    }

    .mt-5 {
        margin-top: 1.25rem;
    }

    .mt-8 {
        margin-top: 2rem;
    }

    .mt-12 {
        margin-top: 3rem;
    }

    .mt-20 {
        margin-top: 5rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .max-w-7xl {
        max-width: 80rem;
    }

    .max-w-3xl {
        max-width: 48rem;
    }

    .max-w-2xl {
        max-width: 42rem;
    }

    .inline-block {
        display: inline-block;
    }

    .block {
        display: block;
    }

    .flex {
        display: flex;
    }

    .items-center {
        align-items: center;
    }

    .justify-center {
        justify-content: center;
    }

    .font-medium {
        font-weight: 500;
    }

    .font-semibold {
        font-weight: 600;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .tracking-tight {
        letter-spacing: -0.015em;
    }

    .tracking-wide {
        letter-spacing: 0.05em;
    }

    .transition-all {
        transition: all 0.3s;
    }

    .duration-300 {
        transition-duration: 0.3s;
    }

    .duration-500 {
        transition-duration: 0.5s;
    }

    .hover\:bg-blue-600:hover {
        background: #2563eb;
    }

    .hover\:bg-indigo-700:hover {
        background: #3730a3;
    }

    .hover\:bg-indigo-900:hover {
        background: #312e81;
    }

    .hover\:from-indigo-700:hover {
        background: linear-gradient(90deg, #3730a3 0%, #7c3aed 100%);
    }

    .hover\:to-purple-700:hover {
        background: linear-gradient(90deg, #4f46e5 0%, #6d28d9 100%);
    }

    .shadow-md {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .space-y-5> :not([hidden])~ :not([hidden]) {
        margin-top: 1.25rem;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .relative {
        position: relative;
    }

    .absolute {
        position: absolute;
    }

    .top-0 {
        top: 0;
    }

    .inset-x-0 {
        left: 0;
        right: 0;
    }

    .-translate-y-1\/2 {
        transform: translateY(-50%);
    }

    .inline-flex {
        display: inline-flex;
    }

    .items-baseline {
        align-items: baseline;
    }

    .w-full {
        width: 100%;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .text-base {
        font-size: 1rem;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    .py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .border {
        border-width: 1px;
    }

    .border-transparent {
        border-color: transparent;
    }

    .focus\:outline-none:focus {
        outline: none;
    }

    .focus\:ring-2:focus {
        box-shadow: 0 0 0 2px #6366f1;
    }

    .focus\:ring-blue-500:focus {
        box-shadow: 0 0 0 2px #3b82f6;
    }

    .focus\:ring-indigo-500:focus {
        box-shadow: 0 0 0 2px #4f46e5;
    }

    .focus\:ring-offset-2:focus {
        box-shadow: 0 0 0 2px #fff, 0 0 0 4px #6366f1;
    }

    .transition-transform {
        transition: transform 0.3s;
    }
</style>

@endsection