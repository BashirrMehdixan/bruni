@extends('layouts.design')
@section('seo')
    <title>ABOUT — {{ config('app.name') }}</title>
@endsection
@section('content')
    @isset($about)
        <section class="pt-[200px] mb-16">
            <div class="container lg:!max-w-[905px]">
                <div class="w-full border-b border-b-main/35 pb-16">
                    <img src="{{ asset('storage/'.$about->thumbnail) }}" class="size-full" alt="Ellada Ismayil">
                </div>
                <div class="text-sm text-white/55 mt-5 [&>ul]:space-y-3 [&>ul]:mt-8">
                    {!! $about->description !!}
                </div>
            </div>
        </section>
    @endisset
@endsection
