<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Panel de Administrador
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

        <main class="relative rounded-t-3xl bg-white">

            <div class="container mx-auto px-4 py-8">

                <h1 class="text-3xl font-bold text-gray-800 mb-8">Dashboard Admin</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Gestionar sedes</p>
                                <p class="text-3xl font-bold text-blue-600 mt-2">150</p>
                            </div>
                            <div class="bg-blue-100 rounded-full p-3">
                                <svg class="w-8 h-8 text-blue-600">
                                    <!-- icono -->
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Entrenadores</p>
                                <p class="text-3xl font-bold text-green-600 mt-2">25</p>
                            </div>
                            <div class="bg-green-100 rounded-full p-3">
                                <svg class="w-8 h-8 text-green-600">
                                    <!-- icono -->
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Sedes -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Sedes</p>
                                <p class="text-3xl font-bold text-purple-600 mt-2">5</p>
                            </div>
                            <div class="bg-purple-100 rounded-full p-3">
                                <svg class="w-8 h-8 text-purple-600">
                                    <!-- icono -->
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Reservas Hoy -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Reservas Hoy</p>
                                <p class="text-3xl font-bold text-orange-600 mt-2">42</p>
                            </div>
                            <div class="bg-orange-100 rounded-full p-3">
                                <svg class="w-8 h-8 text-orange-600">
                                    <!-- icono -->
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>

    </x-app-layout>


</body>

</html>