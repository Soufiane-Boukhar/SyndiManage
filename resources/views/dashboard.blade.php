@extends('layouts.app')

@section('content')

<div class="d-flex">
    <div class="container mx-auto mt-5 p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-md shadow p-4 stats-card">
                <h5 class="text-xl font-semibold mb-2">Total Utilisateurs</h5>
                <p class="text-2xl font-bold text-blue-500">40</p>
            </div>
            <div class="bg-white rounded-md shadow p-4 stats-card">
                <h5 class="text-xl font-semibold mb-2">Revenu</h5>
                <p class="text-2xl font-bold text-green-500">100,000 DH</p>
            </div>
            <div class="bg-white rounded-md shadow p-4 stats-card">
                <h5 class="text-xl font-semibold mb-2">Dépenses</h5>
                <p class="text-2xl font-bold text-red-500">50,000 DH</p>
            </div>
        </div>
    </div>
    <canvas id="myChart" class="flex-grow ml-0"
        style="width:100%;max-width:1400px;height:500px;padding: 1rem;"></canvas>
</div>


@endsection