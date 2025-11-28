@extends('layouts.design')
@section('seo')
    <title>STORE — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="relative h-screen pt-[150px]">
        @forelse($stores as $store)
            <div @class(["absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 bg_fine",
"opacity-0" => $loop->iteration > 1
])
                 id="{{ $store->slug }}" style="background-image: url('{{ asset("storage/" . $store->cover) }}')"></div>
        @empty
        @endforelse
        {{--        <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 opacity-0 bg_fine"--}}
        {{--             id="scarves" style="background-image: url('{{ asset("front/image/bg_scarves.jpg") }}')"></div>--}}
        <div class="container relative">
            <ul class="flex flex-col gap-6">
                @forelse($stores as $store)
                    <li>
                        <a href="{{ $store->slug === 'portfolio' ? route('front.store.portfolio') : route('front.store.scarves') }}"
                           class="fine_element" data-art="{{ $store->slug }}">
                            {{ $store->name }}
                        </a>
                    </li>
                @empty
                @endforelse
{{--                <li>--}}
{{--                    <a href="{{ route('front.store.scarves') }}"--}}
{{--                       class="fine_element" data-art="scarves">--}}
{{--                        Scarves--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </section>
@endsection
