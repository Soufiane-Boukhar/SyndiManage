@extends('layouts.app')

@section('content')
<div class="flex justify-between titleEmp">
    <div class="employeur p-12">
        <h1>Historique des dépenses...</h1>
        <div class="blog mt-2"></div>
    </div>
    <div class="p-12">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 btn">Ajouter</button>
    </div>
</div>

<div class="container p-4">
    <div class="table-container overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="p-4 border-b">Nom</th>
                    <th class="p-4 border-b">Description</th>
                    <th class="p-4 border-b">Total/Dh</th>
                    <th class="p-4 border-b">Date</th>
                    <th class="p-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4 border-b text-center">Ahmed Alami</td>
                    <td class="p-4 border-b text-center">La porte de l'entrer</td>
                    <td class="p-4 border-b text-center">1500</td>
                    <td class="p-4 border-b text-center">25-12-2023</td>
                    <td class="p-4 border-b text-center">
                        <a href="edit-url"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Editer
                        </a>

                        <a href="delete-url"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Supprimer
                        </a>


                    </td>
                </tr>
                <tr>
                    <td class="p-4 border-b text-center">Ahmed Alami</td>
                    <td class="p-4 border-b text-center">La porte de l'entrer</td>
                    <td class="p-4 border-b text-center">1500</td>
                    <td class="p-4 border-b text-center">25-12-2023</td>
                    <td class="p-4 border-b text-center">
                        <a href="edit-url"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Editer
                        </a>

                        <a href="delete-url"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Supprimer
                        </a>


                    </td>
                </tr>
                <tr>
                    <td class="p-4 border-b text-center">Ahmed Alami</td>
                    <td class="p-4 border-b text-center">La porte de l'entrer</td>
                    <td class="p-4 border-b text-center">1500</td>
                    <td class="p-4 border-b text-center">25-12-2023</td>
                    <td class="p-4 border-b text-center">
                        <a href="edit-url"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Editer
                        </a>

                        <a href="delete-url"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Supprimer
                        </a>


                    </td>
                </tr>
                <tr>
                    <td class="p-4 border-b text-center">Ahmed Alami</td>
                    <td class="p-4 border-b text-center">La porte de l'entrer</td>
                    <td class="p-4 border-b text-center">1500</td>
                    <td class="p-4 border-b text-center">25-12-2023</td>
                    <td class="p-4 border-b text-center">
                        <a href="edit-url"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Editer
                        </a>

                        <a href="delete-url"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Supprimer
                        </a>


                    </td>
                </tr>
                <tr>
                    <td class="p-4 border-b text-center">Ahmed Alami</td>
                    <td class="p-4 border-b text-center">La porte de l'entrer</td>
                    <td class="p-4 border-b text-center">1500</td>
                    <td class="p-4 border-b text-center">25-12-2023</td>
                    <td class="p-4 border-b text-center">
                        <a href="edit-url"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Editer
                        </a>

                        <a href="delete-url"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Supprimer
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>


</div>





@endsection