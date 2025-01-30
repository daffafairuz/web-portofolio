<div class="flex items-center w-1/3">
    <img src="{{ asset('storage/'.$main_content->logo) }}" alt="Logo" class="h-10 w-auto">
</div>
<ul class="flex space-x-4 w-1/3 justify-center items-center font-bold">
    <li>
        <a href="{{ route('main_content.index') }}"
           class="text-white hover:text-gray-200 duration-500
                  {{ Route::currentRouteName() == 'main_content.index' ? 'border-b-2 border-white' : '' }}">
            Home
        </a>
    </li>
    <li>
        <a href="{{ route('about.index') }}"
           class="text-white hover:text-gray-200 duration-500
                  {{ Route::currentRouteName() == 'about.index' ? 'border-b-2 border-white' : '' }}">
            About
        </a>
    </li>
    <li>
        <a href="{{ route('achievment.index') }}"
           class="text-white hover:text-gray-200 duration-500
                  {{ Route::currentRouteName() == 'achievment.index' ? 'border-b-2 border-white' : '' }}">
            Achievment
        </a>
    </li>
</ul>
<div class="w-1/3 flex justify-end">
    <a href="{{ asset('storage/' . $cv->cv_pdf) }}"
        class="bg-white text-gray-500 hover:text-black hover:bg-green-400 font-bold py-2 px-4 rounded duration-500"
        download="cv.pdf">
        <i class="bi bi-download"></i> Download my CV
    </a>
</div>
