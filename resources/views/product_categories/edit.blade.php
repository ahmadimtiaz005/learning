@extends('layouts.app')

@section('main-content')
    <div class="mt-5">
        <div class="w- max-w-xs  ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                  method="POST"
                  action="{{route('product-categories.update',$product_category->id)}}"
            >
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
                           value="{{$product_category->name}}"
                          autofocus
                    >


                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Update
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
