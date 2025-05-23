@extends('templates.main')

@section('title', 'Home')

@section('content')
    <div class="flex gap-4">
        <div class="w-1/4 hidden lg:block">
            <div class="rounded-xl shadow-md p-5 bg-white">
                <h2 class="text-xl font-bold text-gray-800 mb-5">Navigation</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-orange-500">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-5">
                @foreach ($products as $product)
                    <x-product-card :product=$product />
                @endforeach
            </div>

            <div class="flex justify-center">
                <div id="load-more" class="w-1/4 bg-orange-200 rounded-lg shadow-md p-3 text-center text-gray-800 font-bold cursor-pointer hover:bg-orange-300 transition-colors duration-300">
                    Load More
                </div>
            </div>
        </div>
    </div>
@endsection

@section('header_scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let page = 1;
            $('#load-more').click(function() {
                page++;
                $.ajax({
                    url: '/api/products?page=' + page,
                    type: 'GET',
                    success: function(data) {
                        if (data == false) {
                            $('#load-more').hide();
                            return;
                        }

                        $('.grid').append(data);
                    },
                    error: function() {
                        alert('Error loading more products.');
                    }
                });
            });
        });
    </script>
@endsection