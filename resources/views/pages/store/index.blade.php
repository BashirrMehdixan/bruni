@extends('layouts.design')
@section('title')
    STORE —
@endsection
@section('content')
    <section class="relative h-screen pt-[150px]">
        <div class="absolute overflow-hidden w-full h-full top-0 left-0">
            <img src="{{ asset('front/image/bg_portfolio.jpg') }}" class="w-full h-[1540px] relative top-[-576px] left-0 opacity-0"
                 alt="">
            <img src="{{ asset('front/image/bg_scarves.jpg.jpg') }}" class="w-full h-[1540px] relative top-[-576px] left-0 opacity-100"
                 alt="">
            {{--        <div class="absolute w-full h-screen bg-center bg-no-repeat bg-cover bg-fine transition duration-500 opacity-0 ease-out"></div>--}}
        </div>
        <div class="container relative">
            <ul class="flex flex-col">
                <li>
                    <a href="{{ route('store.portfolio') }}"
                       class="fine_element" data-bg="front/image/bg_portfolio.jpg">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="{{ route('store.scarves') }}"
                       class="fine_element" data-bg="front/image/bg_scarves.jpg">
                        Scarves
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
