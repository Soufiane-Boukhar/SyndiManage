@extends('layouts.app')

@section('content')
<div class="flex justify-between titleEmp">
    <div class="employeur p-12">
        <h1>Les paiements mensuels...</h1>
        <div class="blog mt-2"></div>
    </div>
    <div class="p-12">
        <select
            class="block w-full bg-white border border-gray-300 py-2 px-8 rounded-md focus:outline-none focus:ring focus:border-blue-300">
            <option value="" selected>Choisir l'année</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
            <option value="2033">2033</option>
        </select>
    </div>
</div>


<div class="container p-4 mb-5">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Mois</th>
                <th class="py-2 px-4 border-b">Total/Dh</th>
                <th class="py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b text-center">Janvier</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Février</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Mars</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Avril</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Mai</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Juin</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Juillet</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Aout</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Septembre</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Octobre</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Novembre</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">Décembre</td>
                <td class="py-2 px-4 border-b text-center">200</td>
                <td class="py-2 px-4 border-b text-center">
                    <a href=""
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Payer
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection