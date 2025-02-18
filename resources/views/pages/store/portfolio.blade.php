@extends('layouts.design')
@section('seo')
    <title>PORTFOLIO — {{ config('app.name') }}</title>
@endsection

@section('content')
    <section class="pt-[180px]">
        <div class="container">
            @isset($portfolio)
                @if($portfolio)
                    <div class="w-full h-[540px] lg:h-[840px] mb-8 border-b border-main/35">
                        <h4 class="title text-white/55 text-5xl font-semibold uppercase">
                            Video
                        </h4>
                        @if($portfolio->file_type == 'video')
                            <video style="width: 100%; height: 560px" autoplay>
                                <source src="{{ asset('storage/'.$portfolio->file) }}"
                                        type="video/mp4">
                            </video>
                        @elseif($portfolio->file_type == 'url')
                            <iframe src="{{ $portfolio->file }}?wmode=opaque&api=1&autoplay=1"
                                    allow="autoplay"
                                    class="w-full h-[560px]" allowfullscreen frameborder="0"></iframe>
                        @else
                            <img src="{{ asset('storage/'.$portfolio->file) }}" class="w-full h-[560px] object-cover"
                                 alt="Image">
                        @endif
                    </div>
                @endif
            @endisset
            @isset($arts)
                <div class="border-b border-main/35 mb-8 pb-12">
                    <h4 class="title text-white/55 text-5xl font-semibold uppercase mb-12">
                        Content
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-12">
                        @foreach($arts as $art)
                            <div class="max-h-[400px]">
                                <a href="{{ asset('storage/'.$art->thumbnail) }}" data-fancybox
                                   class="block size-full">
                                    <img src="{{ asset('storage/'.$art->thumbnail) }}" alt="{{ $art->title }}"
                                         class="size-full transition duration-500 grayscale hover:grayscale-0 object-cover">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endisset
            @isset($portfolio)
                <div class="mt-16 mb-12">
                    {!! $portfolio->description !!}
                    }
                </div>
            @endisset
        </div>
    </section>
@endsection
