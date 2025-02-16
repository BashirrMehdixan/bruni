@extends('layouts.design')
@section('seo')
    <title>WORKS — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pb-8 pt-[150px]">
        <div class="container !max-w-[540px] md:!max-w-[720px] lg:!max-w-[905px]">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                @isset($works)
                    @foreach($works as $work)
                        <div class="h-[220px]">
                            <a href="{{ asset('storage/'.$work->thumbnail) }}" title="{{ $work->title }}" data-fancybox="gallery"
                               class="block size-full">
                                <img src="{{ asset('storage/'.$work->thumbnail) }}" title="{{ $work->title }}"
                                     alt="{{ $work->title }}"
                                     class="size-full object-cover transition duration-500">
                            </a>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
@endsection
