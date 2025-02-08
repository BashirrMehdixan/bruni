@extends('layouts.design')
@section('title')
    FINE ART —
@endsection
@section('content')
    <section
        class="h-screen relative pt-[150px]">
        <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 bg_fine" id="exposure" style="background-image: url('{{ asset("front/image/works/work_2.jpg") }}')"></div>
        <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 opacity-0 bg_fine" id="polaworld" style="background-image: url('{{ asset("front/image/works/work_3.jpeg") }}')"></div>
        <div class="relative z-10 container">
            <ul class="flex flex-col gap-5">
                <li>
                    <a href="{{ route('fine.show', 'exposure') }}"
                       class="fine_element" data-art="exposure">
                        Exposure
                    </a>
                </li>
                <li>
                    <a href="{{ route('fine.show', 'polaworld') }}"
                       class="fine_element" data-art="polaworld">
                        Polaworld
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
