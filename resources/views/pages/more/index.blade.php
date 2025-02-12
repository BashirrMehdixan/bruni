@extends('layouts.design')
@section('seo')
    <title>MORE — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pt-[150px] pb-10">
        <div class="container">
            <div class="row">
                <div class="w-full md:w-1/2 lg:w-1/3 mb-16">
                    <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                        exhibitions
                    </h4>
                    <ul class="space-y-10">
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.show', 'fineart') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.show', 'fineart') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 mb-16">
                    <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                        books
                    </h4>
                    <ul class="space-y-10">
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.show', 'fineart') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.show', 'fineart') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <h4 class="title text-center text-white/55 text-3xl font-semibold uppercase pb-9 mb-16 px-8 border-b border-[#380000]">
                        press
                    </h4>
                    <ul class="space-y-10">
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.press', 'press') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery_card">
                                <div class="thumbnail">
                                    <a href="{{ route('front.more.show', 'press') }}" class="max-w-[90px] h-[90px] block mx-auto">
                                        <img src="{{ asset('front/image/gallery/gallery.jpg') }}" class="size-full"
                                             alt="">
                                    </a>
                                    <p class="text-white/55 pt-8 text-lg">Gallery Fineart - Oslo</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
