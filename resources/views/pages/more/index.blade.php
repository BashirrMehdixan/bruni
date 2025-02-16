@extends('layouts.design')
@section('seo')
    <title>MORE — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pt-[150px] pb-10">
        <div class="container">
            <div class="row">
                @isset($mores)
                    <div class="w-full md:w-1/2 lg:w-1/3 mb-16">
                        <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                            exhibitions
                        </h4>
                        <ul class="space-y-10">
                            @foreach($mores as $more)
                                <li>
                                    <x-gallery-component :item="$more"/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endisset
                @isset($books)
                    <div class="w-full md:w-1/2 lg:w-1/3 mb-16">
                        <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                            books
                        </h4>
                        <ul class="space-y-10">
                            @foreach($books as $book)
                                <li>
                                    <x-gallery-component :item="$book"/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endisset
                @isset($presses)
                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                            press
                        </h4>
                        <ul class="space-y-10">
                            @foreach($presses as $press)
                                <x-gallery-component :item="$press"/>
                            @endforeach
                        </ul>
                    </div>
                @endisset
            </div>
        </div>
    </section>
@endsection
