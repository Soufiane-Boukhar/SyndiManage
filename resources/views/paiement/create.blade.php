@extends('layouts.app')

@section('content')

<div class="employeur p-12">
    <h1>Informations personnelle</h1>
    <div class="blog mt-2"></div>
</div>

<div class="container">
    <div class="p-8 mt-2 ml-5 flex">

        <form method="POST" action="{{ route('pay') }}" id="paymentForm" class="space-y-4 flex-1">
            @csrf

            <div>
                <label for="total" class="block text-lg font-medium text-gray-700">Total/DH:</label>
                <input type="text"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-blue-300"
                    value="200" disabled />
            </div>

            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" name="email" required
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <label for="firstName" class="block text-lg font-medium text-gray-700">First Name:</label>
                <input type="text" name="firstName" required
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div>
                <label for="lastName" class="block text-lg font-medium text-gray-700">Last Name:</label>
                <input type="text" name="lastName" required
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <input type="hidden" name="amount" value="200">

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Payer
            </button>
        </form>

        <div class="flex-1 ml-4" style="height: inherit;">
            <img src="{{ asset('img/payment-removebg-preview.png') }}" alt="" class="h-96 ml-5">
        </div>
    </div>
</div>

@endsection
