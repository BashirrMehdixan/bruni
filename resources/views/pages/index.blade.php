@extends('layouts.design')
@section('content')
    <section class="relative h-screen flex flex-col items-center justify-center gap-8">
        <video autoplay muted loop src="{{ asset('front/videos/httpswwwyoutubecomwatchvldj14haugrw.mp4') }}" class="size-full absolute z-0"></video>
        <h1 class="text-4xl lg:text-[120px] leading-none text-main font-bold text-center uppercase z-10">
            Ellada Ismayil
        </h1>
        <a href="{{ route('works.index') }}" class="btn btn_main_outline hover:text-white z-10">Enter</a>
    </section>
@endsection
