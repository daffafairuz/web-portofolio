@extends('partial.main_layout')
@section('main')
    <div class="flex p-20">
        <div class="w-1/2 flex items-center justify-center">
            <img src="{{ asset('storage/'.$main_content->profile_photo) }}" alt="foto profile" class="h-80 w-auto rounded-full object-cover border-4 border-white shadow-lg">
        </div>
        <div class="w-1/2 text-2xl font-bold flex items-center justify-center text-white">
            {!! $main_content->description !!}
        </div>
    </div>
@endsection

