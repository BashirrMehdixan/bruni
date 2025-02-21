@extends('layouts.design')
@section('seo')
    <title>ELLADA ISMAYIL</title>
@endsection
@section('content')
    <section
        class="relative !overflow-hidden before:absolute before:w-full before:h-14 before:bg-black before:top-0 before:left-0 before:z-30 after:absolute after:w-full after:h-14 after:bg-black after:bottom-0 after:left-0 after:z-30 h-screen flex flex-col items-center justify-center gap-8">
        @isset($about)
            @if($about->video_type == 'video')
                <video autoplay muted loop src="{{ asset('storage/'.$about->$about) }}"
                       class="size-full max-w-[1152px] min-w-[920px] absolute z-0 "></video>
            @elseif($about->video_type == 'url')
                <iframe
                    class="absolute size-full max-w-[1152px] min-w-[920px] pointer-events-none"
                    id="player"
                    allow="autoplay; encrypted-media"
                    referrerpolicy="strict-origin-when-cross-origin"
                    src="{{$about->url}}?enablejsapi=1&autoplay=1&mute=1&controls=0&loop=1&modestbranding=1&playsinline=1&rel=0&wmode=opaque"
                    title="YouTube video player"
                    frameborder="0"
                    allowfullscreen></iframe>
            @endif
        @endisset
        <h1 class="text-4xl lg:text-[120px] leading-none text-main font-bold text-center uppercase z-10">
            Ellada Ismayil
            <br>
            FINE ARTIST
        </h1>
        <a href="{{ route('front.works.index') }}" class="btn btn_main_outline hover:text-white z-10">Enter</a>
    </section>
    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        function onYouTubeIframeAPIReady() {
            var player = new YT.Player('player', {
                events: {
                    'onReady': function (event) {
                        event.target.playVideo();
                    },
                    'onStateChange': function (event) {
                        if (event.data === YT.PlayerState.ENDED) {
                            event.target.seekTo(0);
                            event.target.playVideo();
                        }
                    }
                }
            });
        }

    </script>

@endsection
