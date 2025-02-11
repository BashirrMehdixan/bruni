@extends('layouts.design')
@section('seo')
    <title>FINE ART — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="h-screen relative pt-[150px]">
        @isset($categories)
            @foreach($categories as $category)
                <div class="absolute size-full bg-cover bg-center top-0 left-0 z-0 transition duration-500 bg_fine"
                     id="{{ $category->slug }}"
                     style="background-image: url('{{ asset("storage/".$category->thumbnail) }}')"></div>
            @endforeach
        @endisset
        <div class="relative z-10 container">
            <ul class="flex flex-col gap-5">
                @isset($categories)
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('fine.show', $category->slug) }}"
                               class="fine_element" data-art="{{ $category->slug }}">
                                {{ $category->title }}
                            </a>
                        </li>
                    @endforeach
                @endisset
            </ul>
        </div>
    </section>
@endsection
