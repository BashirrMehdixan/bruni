@extends('layouts.design')
@section('seo')
    <title> {{ $category->title }} — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pb-16">
        <div class="overlay pointer-events-none scroll"></div>
        <div class="absolute w-full h-full flex items-center">
            <div class="container">
                <h4 class="page_title">
                    {{ $category->title }}
                </h4>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
{{--            <x-art-component image="{{ asset('front/image/works/8528163-VFPXPBUD-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/8528151-ZPBARTCV-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/8528157-TLLUUNJK-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9034105-BCVJUGMO-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9030539-WKBNJOYS-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9080421-AVIPHZIU-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}"/>--}}
{{--            <x-art-component image="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}"/>--}}
            @foreach($arts as $art)
                <x-art-component :art="$art"/>
            @endforeach
        </div>
    </section>
@endsection
