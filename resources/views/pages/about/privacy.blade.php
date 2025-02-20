@extends('layouts.design')
@section('seo')
    <title> PRIVACY POLICY - {{ config('app.name') }} </title>
@endsection
@section('content')
    @isset($privacy)
        @if($privacy->privacy)
            <section class="pt-[200px]">
                <div class="container">
                    <div class="text-white/65 [&>*]:mb-3">
                        {!! $privacy->privacy !!}
                    </div>
                </div>
            </section>
        @endif
    @endisset
@endsection
