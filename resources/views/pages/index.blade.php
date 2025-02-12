@extends('layouts.design')
@section('content')
    <section class="relative h-screen flex flex-col items-center justify-center gap-8">
        @isset($about)
            @if($about->video_type == 'video')
                <video autoplay muted loop src="{{ asset('storage/'.$about->video) }}"
                       class="size-full absolute z-0"></video>
            @elseif($about->video_type == 'url')
                <iframe id="player"
                        frameborder="0" allowfullscreen=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        src="{{ $about->url }}"
                        class="absolute size-full"></iframe>
            @endif
        @endisset
        <h1 class="text-4xl lg:text-[120px] leading-none text-main font-bold text-center uppercase z-10">
            Ellada Ismayil
            <br>
            FINE ARTIST
        </h1>
        <a href="{{ route('works.index') }}" class="btn btn_main_outline hover:text-white z-10">Enter</a>
    </section>
@endsection
