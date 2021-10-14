@extends('layouts.app')

@section('content')

    <div class="w-full max-w-xs mt-5 ml-4">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('register.custom') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input
                    type="text"
                    placeholder="Name"
                    id="name"
                    name="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       required autofocus>
                @if ($errors->has('name'))
                    <span class="text-red-600">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="mb-4">
                <input type="text" placeholder="Email" id="email_address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-red-600">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="mb-4">
                <input type="password" placeholder="Password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       name="password" required>
                @if ($errors->has('password'))
                    <span class="text-red-600">{{ $errors->first('password') }}</span>
                @endif
            </div>


            <div class="d-grid mx-auto">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-700
                    text-white font-bold py-2 px-4 rounded
                    focus:outline-none focus:shadow-outline"
                >
                    Sign up
                </button>
            </div>
        </form>

    </div>

@endsection
