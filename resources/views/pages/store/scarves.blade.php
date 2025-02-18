@extends('layouts.design')
@section('seo')
    <title>Scarves — {{ config('app.name') }}</title>
@endsection

@section('content')
    <section class="pt-[200px]">
        <div class="container lg:!max-w-[905px]">
            <div class="border-b border-main/35 mb-8 md:mb-16">
                <div class="text-center text-white/55 mb-16">
                    <h4 class="title text-2xl md:text-3xl font-semibold uppercase pb-5 md:px-8">
                        SILK PRINTED SCARVES
                        UNIQUE PIECES
                    </h4>
                    <div>
                        Fine Silk is the benchmark when it comes to the superb reproduction of stylish image in a silk
                        finish.
                        Its top print quality seduces with smooth precision.
                    </div>
                </div>
            </div>
            @isset($arts)
                <div class="grid grid-cols-1">
                    @foreach($arts as $art)
                        <x-product-component :art="$art"/>
                    @endforeach
                </div>
            @endisset
        </div>
    </section>
@endsection
