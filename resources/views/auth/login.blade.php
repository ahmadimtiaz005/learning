@extends('layouts.app')

@section('main-content')
    <div class="mt-5">
        <div class="w- max-w-xs  ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST"
                  action="{{ route('login.custom') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Email
                    </label>
                    <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                           type="text"
                           placeholder="Email"
                           id="email"
                           name="email"
                           required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border
                 border-red-500 rounded w-full py-2 px-3 text-gray-700
                  mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                           type="password"
                           placeholder="Password"
                           id="password"
                           name="password"
                           required>
                    @if ($errors->has('password'))
                        <span class="text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                    {{--                <p class="text-red-500 text-xs italic">Please choose a password.</p>--}}
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                       href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                </div>
                <div>
                    <label for="remember">Remember me</label>
                    <input type="checkbox" name="remember">
                </div>
            </form>

        </div>
    </div>
@endsection
