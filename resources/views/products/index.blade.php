@extends('layouts.app')

@section('main-content')
    <div class="w-full">
        <div>
            <div>
                <h1 class="font-bold text-2xl mt-4">Product</h1>

                <div class="my-4 space-y-3 flex flex-col sm:flex-row sm:justify-between items-center">

                    <a href="{{route('products.create')}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
                        Create New Product
                    </a>

                </div>

                <div class="overflow-x-auto mt-8">
                    <div class="py-2 align-middle inline-block table-width">
                        <div class="shadow overflow-auto sm:rounded-lg">
                            <table class="table-fixed w-full  mt-5">
                                <thead>
                                <tr>
                                    <th class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Id
                                    </th>

                                    <th
                                        class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Name
                                    </th>
{{--                                    <th--}}
{{--                                        class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"--}}
{{--                                    >--}}
{{--                                        Category Name--}}
{{--                                    </th>--}}
                                    <th
                                        class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Slug
                                    </th>
                                    <th
                                        class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Price
                                    </th>
                                    <th
                                        class="px-1 cursor-pointer  border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Description
                                    </th>


                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-justify text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                <span>
                                    Actions
                                </span>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-justify">
                                                {{ $product->id }}
                                            </p>
                                        </td>

                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-justify">
                                                {{ ucwords($product->name) }}
                                            </p>
                                        </td>
{{--                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">--}}
{{--                                            <p class="text-gray-900 whitespace-no-wrap text-justify">--}}
{{--                                                --}}
{{--                                            </p>--}}
{{--                                        </td>--}}
                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-justify">
                                                {{ ucwords($product->slug) }}
                                            </p>
                                        </td>
                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-justify">
                                                {{ ucwords($product->price) }}
                                            </p>
                                        </td>
                                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-justify">
                                                {{ ucwords($product->description) }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex">
                                                <p class="whitespace-no-wrap text-justify">
                                                    <a href="{{ route('products.edit', [$product->id]) }}">
                                                        <svg class="text-green-600 w-6 h-6" fill="currentColor"
                                                             viewBox="0 0 20 20"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                        </svg>
                                                    </a>
                                                <form action="{{route('products.destroy',$product->id)}}" method="POST">

                                                    @method("DELETE")
                                                    @csrf
                                                    <input type="submit" value="Delete" class="text-red-600" onclick="return confirm('Are you sure')">
                                                </form>
                                                </p>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--            <table class="table-auto">--}}
                            {{--                <thead>--}}
                            {{--                <tr>--}}
                            {{--                    <th>Id</th>--}}
                            {{--                    <th>Name</th>--}}
                            {{--                    <th>Actions</th>--}}
                            {{--                </tr>--}}
                            {{--                </thead>--}}
                            {{--                @foreach($product_categories as $category)--}}
                            {{--                    <tbody>--}}
                            {{--                    <tr>--}}
                            {{--                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">  {{ $category->id }}</td>--}}
                            {{--                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ ucwords($category->name) }}</td>--}}
                            {{--                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">--}}
                            {{--                            <p class="whitespace-no-wrap text-justify">--}}
                            {{--                                <a class="text-green-600" href="{{ route('product-categories.edit', [$category->id]) }}">Edit--}}
                            {{--                                </a>--}}
                            {{--                            </p>--}}
                            {{--                        </td>--}}
                            {{--                    </tr>--}}


                            {{--                    </tbody>--}}
                            {{--                @endforeach--}}
                            {{--            </table>--}}
                            {{--        </div>--}}
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
