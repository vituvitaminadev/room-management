<!-- resources/views/checkin.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rooms management - Check-IN</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex w-full flex-col-reverse lg:flex-row">
                <div class="relative leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-6 font-medium text-center">Check-IN</h1>
                    <a href="{{ url('/') }}" class="bg-gray-400 hover:bg-gray-700 text-black py-2 px-4 rounded absolute bottom-4 right-4 btn">Voltar</a>

                    <div class="flex justify-center w-full items-center">
                        <form method="POST" action="{{ url('/guests') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-2 font-medium" for="name">
                                    Nome
                                </label>
                                <input type="text" name="name" id="guestName" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 font-medium" for="age">
                                    Idade
                                </label>
                                <input type="number" inputmode="numeric" min="18" name="age" id="guestAge" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            @error('age')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror

                            <div class="mb-6">
                                <label class="block mb-2 font-medium" for="name">
                                    Sexo
                                </label>

                                <div class="flex items-center justify-center">
                                    <div class="flex items-center me-4">
                                        <input id="inline-radio" type="radio" value="F" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feminino</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-2-radio" type="radio" value="M" name="sex" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino</label>
                                    </div>
                                </div>
                            </div

                            @error('sex')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror

                            <div class="flex items-center justify-center">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
