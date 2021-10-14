@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="w- max-w-xs  ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                  method="POST"
                  action="{{route('products.store')}}"
            >
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>

                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                           type="text"
                           placeholder="Name"
                           id="name"
                           name="name"
                           value="{{old('name')}}"
                           required autofocus
                    >

                    <p class="text-red-600">{{$errors ->first("name") }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        price
                    </label>

                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                           type="text"
                           placeholder="price"
                           id="price"
                           name="price"
                           value="{{old('price')}}"
                           required autofocus
                    >

                    <p class="text-red-600">{{$errors ->first("price") }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        description
                    </label>

                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                           type="text"
                           placeholder="description"
                           id="description"
                           name="description"
                           value="{{old('description')}}"
                           required autofocus
                    >

                    <p class="text-red-600">{{$errors ->first("description") }}</p>
                </div>
{{--                <div class="mb-4">--}}
{{--                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_category_id">--}}
{{--                        product_category_id--}}
{{--                    </label>--}}

{{--                    <select name="category_id" class=" shadow appearance-none border--}}
{{--                 rounded w-full py-2 px-3 text-gray-700 leading-tight--}}
{{--                 focus:outline-none focus:shadow-outline ">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}


{{--                    <p class="text-red-600">{{$errors ->first("product_category_id") }}</p>--}}
{{--                </div>--}}

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="featured_image">
                        featured_image
                    </label>

                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                           type="file"
                           placeholder="featured_image"
                           id="featured_image"
                           name="featured_image"
                           value="{{old('featured_image')}}"
                           required autofocus
                    >

                    <p class="text-red-600">{{$errors ->first("featured_image") }}</p>
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Create
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
