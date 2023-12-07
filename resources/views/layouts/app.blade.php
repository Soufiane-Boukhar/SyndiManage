<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3c520e368e.js" crossorigin="anonymous"></script>



    <!-- Vite Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        @include('layouts.navigation')

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars fa-2xs icons"></i>
                </div>
                <div>
                    <p>{{ auth()->user()->name }}</p>
                </div>
            </div>
            @yield('content')

            <div class="p-12">
                <footer class="main-footer">
                    <strong>
                        Copyright &copy; 2023-2024 SyndiManage.</strong> Tous droits réservés.
                </footer>
            </div>

        </div>
    </div>



    <!-- Chart.js Script -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
    const xValues = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre',
        'Novembre', 'Decembre'
    ];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: 'Monthly Data',
                backgroundColor: "rgba(0, 0, 255, 0.5)",
                borderColor: "rgba(0, 0, 255, 1)",
                data: [100, 150, 200, 180, 220, 20, 45, 110, 40, 250, 270, 180]
            }]
        },
        options: {
            scales: {
                x: {
                    type: 'category',
                    position: 'bottom'
                },

            }
        }
    });
    </script>

</body>

</html>