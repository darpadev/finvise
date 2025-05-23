<div class="bg-white rounded-lg shadow-md p-5 hover:scale-105 transition-transform duration-300 cursor-pointer">
    <img src="{{ $product->url }}" alt="{{ $product->name }}" class="w-full object-cover rounded-lg mb-3">
    <div class="flex justify-between items-center font-bold">
        <h3 class="text-lg text-gray-800">{{ $product->name }}</h3>
        <p class="text-gray-600">${{ number_format($product->price, 2) }}</p>
    </div>
    <p class="text-gray-600 mt-2">{{ $product->description }}</p>
</div>