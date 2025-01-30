{{-- @dd($cv -> title) --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        {{-- bootstrap icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        {{-- tailwind css link --}}
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 min-h-screen flex flex-col">
        <div class="flex-grow bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 px-10 border border-gray-200">
            {{-- navbar --}}
            <nav class="flex items-center justify-between p-4 bg-transparent">
                @include('partial.navbar')
            </nav>
            {{-- main content --}}
            <div class="flex pt-20">
                @yield('main')
            </div>
        </div>

        {{-- footer --}}
        <div class="text-black bg-white text-sm py-1">
            @include('partial.footer')
        </div>
    </body>

</html>
