@extends('layouts.design')
@section('title')
    Portfolio -
@endsection

@section('content')
    <section class="pt-[180px]">
        <div class="container">
            {{--            <video style="width: 100%; height: 560px" autoplay poster="{{ asset('front/image/bg_portfolio.jpg') }}">--}}
            {{--                <source src="https://player.vimeo.com/video/117803357?wmode=opaque&api=1&autoplay=1" type="video/mp4">--}}
            {{--                Your browser does not support the video tag.--}}
            {{--            </video>--}}
            <div class="w-full h-[540px] lg:h-[840px] mb-8 border-b border-main/35">
                <h4 class="title text-white/55 text-5xl font-semibold uppercase">
                    Video
                </h4>
                <iframe src="https://player.vimeo.com/video/117803357?wmode=opaque&api=1&autoplay=1"
                        class="size-full" allowfullscreen frameborder="0"></iframe>
            </div>
            <div class="border-b border-main/35 mb-8 pb-12">
                <h4 class="title text-white/55 text-5xl font-semibold uppercase mb-12">
                    Content
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-12">
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/work_1.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_1.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/work_2.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_2.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/work_3.jpeg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_3.jpeg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/work_4.jpg') }}" data-fancybox class="block size-full">
                            <img src="{{ asset('front/image/works/work_4.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/8528151-ZPBARTCV-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/8528151-ZPBARTCV-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/8528157-TLLUUNJK-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/8528157-TLLUUNJK-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/8528163-VFPXPBUD-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/8528163-VFPXPBUD-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/8528909-LZCGYKSS-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/8528909-LZCGYKSS-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/8529267-HSC00923-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/8529267-HSC00923-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9030539-WKBNJOYS-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9030539-WKBNJOYS-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9034105-BCVJUGMO-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9034105-BCVJUGMO-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9080421-AVIPHZIU-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9080421-AVIPHZIU-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                    <div class="max-h-[400px]">
                        <a href="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}" data-fancybox
                           class="block size-full">
                            <img src="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}" alt="Work 1"
                                 class="size-full transition duration-500 grayscale hover:grayscale-0">
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-16 mb-12">
                <h4 class="title text-white/55 text-3xl md:text-5xl font-semibold uppercase mb-16">
                    TECHNICAL INFORMATIONS
                </h4>
                <p class="text-2xl md:text-3xl text-white/55 mb-12">
                    Limited Edition Portfolio [1] signed on 25 copie
                </p>

                <ul class="text-white/55 text-3xl mb-16 [&>li]:mb-3 [&>li]:relative [&>li]:before:absolute [&>li]:pl-4 [&>li]:before:w-3 [&>li]:before:h-1 [&>li]:before:bg-white/55 [&>li]:before:top-1/2 [&>li]:before:left-0 [&>li]:before:-translate-y-1/2">
                    <li>
                        Black box in padded synthetic leather with title embossed
                    </li>
                    <li>
                        Black box in padded synthetic leather with title embossed
                    </li>
                    <li>
                        Black box in padded synthetic leather with title embossed
                    </li>
                    <li>
                        Black box in padded synthetic leather with title embossed
                    </li>
                    <li>
                        Black box in padded synthetic leather with title embossed
                    </li>
                </ul>

                <p class="text-2xl md:text-3xl text-white/55 mb-5 font-semibold">
                    When buying one portfolio you will be offered a 37x45 cm / 15x18 in. photograph to choose in the Exposure collection.
                </p>

                <p class="text-2xl md:text-3xl text-white/55 mb-5 font-semibold">
                    Price: 4200 €
                </p>
                <div class="text-2xl md:text-3xl text-white/55 mb-5 font-semibold">
                    Info & order: please contact Thomas Defays:
                    <a href="mailto:thomas@brunobisang.com" class="text-main">thomas@brunobisang.com</a>
                </div>
            </div>
        </div>
    </section>
@endsection
