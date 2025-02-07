@extends('layouts.design')
@section('content')
    <section class="h-screen flex flex-col items-center justify-center gap-8">
        <h1 class="text-4xl lg:text-[120px] leading-none text-main font-bold text-center">
            Ellada Ismayil
        </h1>
        <a href="{{ route('works.index') }}" class="btn btn_main_outline">Enter</a>
    </section>
@endsection
