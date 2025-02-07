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
            <div class="w-full h-[840px] mb-8 border-b border-main/35">
                <h4 class="title text-[#B0B0B0] text-5xl font-semibold uppercase">
                    Video
                </h4>
                <iframe src="https://player.vimeo.com/video/117803357?wmode=opaque&api=1&autoplay=1"
                        class="size-full" allowfullscreen frameborder="0"></iframe>
            </div>
            <div class="border-b border-main/35 mb-8 pb-12.">
                <h4 class="title text-[#B0B0B0] text-5xl font-semibold uppercase mb-12">
                    Content
                </h4>
                <div class="grid grid-cols-4 gap-12">
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
        </div>
    </section>
@endsection
