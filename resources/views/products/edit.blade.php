@extends('layouts.app')

@section('main-content')
    <div class="mt-5">
        <div class="w- max-w-xs  ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                  action="{{route('products.update',$product->id)}}"
                  method="POST"
                  enctype="multipart/form-data">
                @method("PUT")
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
                           value="{{$product->name}}"
                           autofocus
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                        Slug
                    </label>

                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                           type="text"
                           placeholder="slug"
                           id="slug"
                           name="slug"
                           value="{{$product->slug}}"
                           autofocus
                    >
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
                           value="{{$product->price}}"
                           autofocus
                    >

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
                           value="{{$product->description}}"
                           autofocus
                    >

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_category_id">
                        product_category_id
                    </label>

                    <select name="product_category_id" class=" shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline ">
                        @foreach($product_category as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
                        Photo
                    </label>

                    <input class="mt-3 "
                           type="file"
                           name="photo"

                    >


                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Create
                    </button>
                </div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> <p class="text-red-600">{{ $error }}</p></li>
                        @endforeach
                    </ul>
                @endif
            </form>

        </div>
    </div>
@endsection
