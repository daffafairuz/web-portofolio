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
    <body class="bg-white min-h-screen flex flex-col">
        <div class="flex-grow bg-white px-10 border">
            {{-- navbar --}}
            <nav class="flex items-center justify-between p-4 bg-white">
                <div class="flex items-center w-1/3">
                    <img src="{{ asset('storage/'.$main_content->logo) }}" alt="Logo" class="h-10 w-auto">
                </div>
                <ul class="flex space-x-4 w-1/3 justify-center items-center font-bold">
                    <li><a href="#" class="text-black">Home</a></li>
                    <li><a href="#" class="text-black">About</a></li>
                    <li><a href="#" class="text-black">Contact</a></li>
                </ul>
                <div class="w-1/3 flex justify-end">
                    <a href="{{ asset('storage/' . $cv->cv_pdf) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        download="cv.pdf">
                         <i class="bi bi-download"></i> Download my CV
                     </a>
                </div>
            </nav>

            {{-- main content --}}
            <div class="flex pt-20">
                <div class="w-1/2 flex items-center justify-center">
                    <img src="{{ asset('storage/'.$main_content->profile_photo) }}" alt="foto profile" class="h-80 w-auto rounded-full object-cover">
                </div>
                <div class="w-1/2 text-2xl font-bold flex items-center justify-center">
                    {!! $main_content->description !!}
                </div>
            </div>
        </div>

        {{-- footer --}}
        <div class="text-white bg-blue-400 text-sm py-1">
            <p class="text-center">created by Daffa Fairuz</p>
        </div>
    </body>

</html>
