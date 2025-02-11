@extends('layouts/design')
@section('seo')
    <title>PRESS — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pt-[250px] mb-16">
        <div class="container !max-w-[905px]">
            <h4 class="title text-center text-white/55 text-4xl font-semibold uppercase mb-16 px-8">
                exhibitions
            </h4>
            <div class="grid md:grid-cols-2 lg:grid-cols-9 place-items-center gap-4">
                <a href="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9246677-LQJEVUFV-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9080443-WAQBUIJR-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9080479-HNMYSPLO-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9248333-NDLAIZZL-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto"
                   data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/10222531-CSNTKOWY-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto"
                   data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/10222653-OYCEZKOK-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9080421-AVIPHZIU-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9080421-AVIPHZIU-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9034105-BCVJUGMO-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9034105-BCVJUGMO-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/9030539-WKBNJOYS-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/9030539-WKBNJOYS-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/8529267-HSC00923-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/8529267-HSC00923-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
                <a href="{{ asset('front/image/works/8528909-LZCGYKSS-6.jpg') }}" class="block w-auto md:w-[310px] md:h-[310px] lg:w-auto lg:h-auto" data-fancybox="gallery">
                    <img src="{{ asset('front/image/works/8528909-LZCGYKSS-6.jpg') }}" class="size-full object-cover" alt="">
                </a>
            </div>
        </div>
    </section>
@endsection
