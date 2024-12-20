@extends('layouts.design')
@section('title')
    FINE ART —
@endsection
@section('content')
    <section
        class="h-screen bg-center bg-no-repeat bg-cover bg-fine transition duration-500 pt-[150px] opacity-0 ease-out">
        <div class="container">
            <ul class="flex flex-col">
                <li>
                    <a href="{{ route('fine.show', 'exposure') }}"
                       class="fine_element" data-bg="front/image/works/work_2.jpg">
                        Exposure
                    </a>
                </li>
                <li>
                    <a href="{{ route('fine.show', 'polaworld') }}"
                       class="fine_element" data-bg="front/image/works/work_3.jpeg">
                        Polaworld
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
