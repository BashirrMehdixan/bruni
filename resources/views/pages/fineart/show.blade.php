@extends('layouts.design')
@section('content')
    <section class="pb-16">
        <div class="overlay scroll"></div>
        <div class="absolute w-full h-full flex items-center">
            <div class="container">
                <h4 class="page_title">
                    Polaworld
                </h4>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="relative before:absolute before:w-3 before:h-3 before:rounded-full before:bg-main before:bottom-5 before:left-5">
                <img src="{{ asset('front/image/polaworld/polaworld_1.jpg') }}" class="size-full object-cover"
                     alt="Title 1">
            </div>
            <div class="relative before:absolute before:w-3 before:h-3 before:rounded-full before:bg-main before:bottom-5 before:left-5">
                <img src="{{ asset('front/image/polaworld/polaworld_2.jpg') }}" class="size-full object-cover"
                     alt="Title 1">
            </div>
            <div class="relative before:absolute before:w-3 before:h-3 before:rounded-full before:bg-main before:bottom-5 before:left-5">
                <img src="{{ asset('front/image/polaworld/polaworld_1.jpg') }}" class="size-full object-cover"
                     alt="Title 1">
            </div>
            <div class="relative before:absolute before:w-3 before:h-3 before:rounded-full before:bg-main before:bottom-5 before:left-5">
                <img src="{{ asset('front/image/polaworld/polaworld_2.jpg') }}" class="size-full object-cover"
                     alt="Title 1">

            </div>
        </div>
    </section>
@endsection
