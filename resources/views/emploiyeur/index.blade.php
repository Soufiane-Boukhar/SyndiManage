@extends('layouts.app')

@section('content')
<div class="flex justify-between titleEmp">
    <div class="employeur p-12">
        <h1>Les informations des employeurs...</h1>
        <div class="blog mt-2"></div>
    </div>
    <div class="p-12">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 btn">Ajouter</button>
    </div>
</div>


<div class="container mx-auto p-12 flex flex-wrap">

    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
        style="height: min-content; flex-basis: 50%;">
        <img class="object-cover w-full h-48 md:h-48 rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/user.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Prenom :</span> Alami
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Nom :</span> Abdelazize
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Telephone :</span> +212600000001
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Fonction :</span> Securite
            </p>
            <div class="flex">
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editer</button>
                </form>
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                </form>
            </div>


        </div>
    </a>

    <!-- Repeat the above structure for the second card -->

    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 ml-4"
        style="height: min-content; flex-basis: 50%;">
        <img class="object-cover w-full h-48 md:h-48 rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/user.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Prenom :</span> Alami
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Nom :</span> Abdelazize
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Telephone :</span> +212600000001
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Fonction :</span> Securite
            </p>
            <div class="flex">
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editer</button>
                </form>
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                </form>
            </div>

        </div>
    </a>

    <!-- Repeat the above structure for the third card -->

    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mt-4"
        style="height: min-content; flex-basis: 100%;">
        <img class="object-cover w-full h-48 md:h-48 rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/user.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Prenom :</span> Alami
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Nom :</span> Abdelazize
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Telephone :</span> +212600000001
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Fonction :</span> Securite
            </p>
            <div class="flex">
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editer</button>
                </form>
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                </form>
            </div>

        </div>
    </a>

    <!-- Repeat this structure for additional pairs of cards -->

    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 ml-4 mt-4"
        style="height: min-content; flex-basis: 100%;">
        <img class="object-cover w-full h-48 md:h-48 rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/user.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Prenom :</span> Alami
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Nom :</span> Abdelazize
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Telephone :</span> +212600000001
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <span class="employeName">Fonction :</span> Securite
            </p>
            <div class="flex">
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editer</button>
                </form>
                <form action="" method="post">
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                </form>
            </div>


        </div>
    </a>

</div>

@endsection