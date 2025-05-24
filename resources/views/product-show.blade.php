@extends('templates.main')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col lg:flex-row gap-4">
        <div class="w-full lg:w-1/4">
            <div class="rounded-xl shadow-md p-5 bg-white">
                <img src="{{ $product->url }}" class="w-full object-cover rounded-lg mb-3">
            </div>
        </div>

        <div class="w-full lg:w-3/4">
            <div class="rounded-xl shadow-md p-5 bg-white">
                <div class="flex justify-between items-center font-bold">
                    <h3 class="text-lg text-gray-800">{{ $product->name }}</h3>
                    <p class="text-gray-600">${{ number_format($product->price, 2) }}</p>
                </div>
                <p class="text-gray-600 mt-2">{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection