@extends('layouts.design')
@section('title')
    STORE —
@endsection
@section('content')
    <section class="relative h-screen pt-[150px]">
        <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 bg_fine"
             id="portfolio" style="background-image: url('{{ asset("front/image/bg_portfolio.jpg") }}')"></div>
        <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 opacity-0 bg_fine"
             id="scarves" style="background-image: url('{{ asset("front/image/bg_scarves.jpg") }}')"></div>
        <div class="container relative">
            <ul class="flex flex-col">
                <li>
                    <a href="{{ route('store.portfolio') }}"
                       class="fine_element" data-art="portfolio">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="{{ route('store.scarves') }}"
                       class="fine_element" data-art="scarves">
                        Scarves
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
