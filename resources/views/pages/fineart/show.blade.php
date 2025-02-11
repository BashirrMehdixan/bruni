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
        <div class="grid grid-cols-1 @if(count($arts) >= 2) md:grid-cols-2 @endif">
            @foreach($arts as $art)
                <x-art-component :art="$art"/>
            @endforeach
        </div>
    </section>
@endsection
