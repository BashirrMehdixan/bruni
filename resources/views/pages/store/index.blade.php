@extends('layouts.design')
@section('title')
    STORE —
@endsection
@section('content')
    <section class="relative h-screen border border-red-500 pt-[150px]">
        <div class="absolute size-full top-0">
            <img src="{{ asset('front/image/bg_portfolio.jpg') }}" class="size-full" alt="">
        </div>
        {{--        <div class="absolute w-full h-screen bg-center bg-no-repeat bg-cover bg-fine transition duration-500 opacity-0 ease-out"></div>--}}
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
