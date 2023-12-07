@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mx-auto mt-5 p-4 flex flex-col md:flex-row">
        <div class="flex flex-col md:flex-1">
            <div class="bg-white rounded-md shadow p-4 stats-card text-center mr-5">
                <h5 class="text-xl font-semibold mb-2">Total Utilisateurs</h5>
                <p class="text-2xl font-bold text-blue-500">40</p>
            </div>
            <div class="flex flex-row space-x-4 mt-5 mr-5">
                <div class="bg-white rounded-md shadow p-4 stats-card text-center flex-1">
                    <h5 class="text-xl font-semibold mb-2">Revenu</h5>
                    <p class="text-2xl font-bold text-green-500">100,000 DH</p>
                </div>
                <div class="bg-white rounded-md shadow p-4 stats-card text-center flex-1">
                    <h5 class="text-xl font-semibold mb-2">Dépenses</h5>
                    <p class="text-2xl font-bold text-red-500">50,000 DH</p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center bg-white rounded-md shadow p-4 stats-card text-center md:w-1/4">
            <div class="rating">62%</div>
        </div>
    </div>


    <canvas id="myChart" class="flex-grow ml-0 p-12" style="width:100%;max-width:1300px;height:400px;"></canvas>


</div>



@endsection