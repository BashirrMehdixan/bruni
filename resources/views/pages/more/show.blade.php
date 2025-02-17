@extends('layouts.design')
@section('seo')
    <title>MORE — {{ config('app.name') }}</title>
@endsection
@if($collection->title !== 'Press')
    @section('content')
        <section class="pt-[150px] pb-10">
            <div class="container text-center">
                <div class="w-full md:w-1/2  mx-auto">
                    <h3 class="text-[#a8a8a8] pb-10">
                        {{ $more->title }}
                    </h3>
                    @if($more->description)
                        <div class="mb-5">
                            {!! $more->description !!}
                        </div>
                    @endif
                    @foreach($more->thumbnail as $thumbnail)
                        <div class="thumbnail mb-3">
                            <img src="{{ asset('storage/'.$thumbnail) }}" class="size-full" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
@else
    @section('seo')
        <title>PRESS — {{ config('app.name') }}</title>
    @endsection
    @section('content')
        <section class="pt-[250px] mb-16">
            <div class="container !max-w-[905px]">
                <h4 class="title text-center text-white/55 text-4xl font-semibold uppercase mb-16 px-8">
                    Press Gallery
                </h4>
                <div class="grid md:grid-cols-2 lg:grid-cols-9 place-items-center gap-4">
                    @foreach($more->thumbnail as $thumbnail)
                        <a href="{{ asset('storage/'.$thumbnail) }}"
                           class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                            <img src="{{ asset('storage/'.$thumbnail) }}"
                                 class="size-full object-cover" title="{{ $more->title }}" alt="{{ $more->title }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
@endif
