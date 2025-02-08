@extends('layouts.design')
@section('title')
    SCARVES -
@endsection

@section('content')
    <section class="pt-[200px]">
        <div class="container md:!max-w-[905px]">
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
            <div class="grid grid-cols-1">
                <x-product-component image="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}"/>
                <x-product-component image="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}"/>
                <x-product-component image="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}"/>
            </div>
        </div>
    </section>
@endsection
