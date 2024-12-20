@extends('layouts.design')
@section('title')
    WORK —
@endsection
@section('content')
    <section class="h-[calc(100vh-65px)] pb-8 pt-[150px]">
        <div class="container">
            <div class="w-full lg:w-2/3 mx-auto">
                <div class="row">
                    <div class="w-1/2 md:w-1/6 !px-0">
                        <a href="{{ asset('front/image/works/work_1.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_1.jpg') }}" alt="Work 1" class="size-full">
                        </a>
                    </div>
                    <div class="w-1/2 md:w-1/6 !px-0">
                        <a href="{{ asset('front/image/works/work_1.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_1.jpg') }}" alt="Work 1" class="size-full">
                        </a>
                    </div>
                    <div class="w-1/2 md:w-1/6 !px-0">
                        <a href="{{ asset('front/image/works/work_1.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_1.jpg') }}" alt="Work 1" class="size-full">
                        </a>
                    </div>
                    <div class="w-1/2 md:w-1/6 !px-0">
                        <a href="{{ asset('front/image/works/work_1.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_1.jpg') }}" alt="Work 1" class="size-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
