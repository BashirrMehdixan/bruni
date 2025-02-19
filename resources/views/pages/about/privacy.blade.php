@extends('layouts.design')
@section('seo')
    <title> PRIVACY POLICY - {{ config('app.name') }} </title>
@endsection
@section('content')
    @isset($privacy)
        @if($privacy->privacy)
            <section class="pt-[200px]">
                <div class="container">
                    {!! $privacy->privacy !!}
                </div>
            </section>
        @endif
    @endisset
@endsection
