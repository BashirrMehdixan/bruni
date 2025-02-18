@extends('layouts/design')
@section('seo')
    <title>CONTACT — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pt-[200px]">
        <div class="container max-w-[905px]">
            <ul class="text-white/55 text-sm uppercase space-y-2.5 mb-8 border-t border-b border-main/55 py-8">
                <li>Bruno Bisang</li>
                @isset($contact)
                    <li class="last:text-main">{{ $contact->address }}</li>
                    <li class="last:text-main">{{ $contact->phone }}</li>
                    <li class="last:text-main">
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </li>
                @endisset
            </ul>
            @isset($branches)
                <div class="text-white/65 grid gird-cols-1 md:grid-cols-2 my-8 border-b mt-16 border-main/55">
                    <div class="pb-5">
                        <h4 class="title text-5xl font-semibold uppercase ">
                            Galleries
                        </h4>
                        @foreach($branches->where('type', 'galleries') as $branch)
                            <ul class="text-sm space-y-2.5 mt-12 mb-20">
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->city }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->title }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->address }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    +47 22 01 24 20
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    <a href="mailto:galleri@fineart.no">
                                        galleri@fineart.no
                                    </a>
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    <a href="https://fineart.no">
                                        www.fineart.no
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="pb-5">
                        <h4 class="title text-5xl font-semibold uppercase">
                            Agents
                        </h4>
                        @foreach($branches->where('type', 'agents') as $branch)
                            <ul class="text-sm space-y-2.5 mt-12 mb-20">
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->city }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->title }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    {{ $branch->address }}
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    +47 22 01 24 20
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    <a href="mailto:galleri@fineart.no">
                                        galleri@fineart.no
                                    </a>
                                </li>
                                <li class="first:text-3xl first:font-semibold last:text-main">
                                    <a href="https://fineart.no">
                                        www.fineart.no
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            @endisset
            @isset($contact)
                <div class="mb-8">
                    <h3
                        class="text-sm text-white/65 pl-5 relative before:absolute before:w-3 before:h-0.5 before:bg-white/55 before:left-0 before:top-1/2">
                        Social networks
                    </h3>
                    <ul class="text-main text-5xl font-semibold space-y-2 mt-5 capitalize">
                        @if($contact->instagram)
                            <li class="transition duration-500 hover:text-white/55">
                                <a href="{{ $contact->instagram }}">Instagram</a>
                            </li>
                        @endif
                        @if($contact->facebook)
                            <li class="transition duration-500 hover:text-white/55">
                                <a href="{{ $contact->facebook }}">Facebook</a>
                            </li>
                        @endif
                        @if($contact->youtube)
                            <li class="transition duration-500 hover:text-white/55">
                                <a href="{{ $contact->youtube }}">youtube</a>
                            </li>
                        @endif
                        @if($contact->twitter)
                            <li class="transition duration-500 hover:text-white/55">
                                <a href="{{ $contact->twitter }}">twitter</a>
                            </li>
                        @endif
                        @if($contact->tiktok)
                            <li class="transition duration-500 hover:text-white/55">
                                <a href="{{ $contact->tiktok }}">tiktok</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endisset
        </div>
    </section>
@endsection
