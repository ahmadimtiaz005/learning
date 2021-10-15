@extends('layouts.app')

@section('main-content')
    <div>
        <h1 class="mt-3 ml-3 font-bold">
            Verification of Email
        </h1>
        <div class="mt-4 ml-4">
            <p>
                To continue you should have to verify the email by click on the Verify button that is send on your given email.
            </p>
            <div>
                <p>
                    If
                </p>
            </div>
           <div class="mt-5">
               <form action="{{ route('verification.send') }}"
                     method="Post">
                   @csrf
                   <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                            type="submit">
                       Resend Link
                   </button>
               </form>
           </div>
        </div>
    </div>
@endsection
