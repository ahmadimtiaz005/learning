@extends('layouts.app')

@section('main-content')
    <div>
        <h1 class="mt-3 ml-3 font-bold">
            Forget password request
        </h1>
        <div class="mt-4 ml-4">
            <div class="mt-5">
                <form action="{{ route('password.email') }}"
                      method="Post"
                >
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border
                 rounded w-full py-2 px-3 text-gray-700 leading-tight
                 focus:outline-none focus:shadow-outline "
                               type="email"
                               placeholder="Email"
                               id="email"
                               name="email"
                               >
                    </div>

                    <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                             type="submit">
                        Resend Link
                    </button>
                </form>

                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> <p class="text-red-600">{{ $error }}</p></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
