@extends('layouts.design')
@section('title')
    POLAWORLD —
@endsection
@section('content')
    <section class="pb-16">
        <div class="overlay pointer-events-none scroll"></div>
        <div class="absolute w-full h-full flex items-center">
            <div class="container">
                <h4 class="page_title">
                    Polaworld
                </h4>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <x-art-component image="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}"/>
            <x-art-component image="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}"/>
            <x-art-component image="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}"/>
            <x-art-component image="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}"/>
            <x-art-component image="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}"/>
            <x-art-component image="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}"/>
        </div>
    </section>
@endsection
