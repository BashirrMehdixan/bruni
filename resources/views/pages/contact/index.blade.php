@extends('layouts/design')
@section('seo')
    <title>CONTACT — {{ config('app.name') }}</title>
@endsection
@section('content')
    <section class="pt-[200px]" x-data="{modalIsOpen: false}">
        <div class="text-white">
            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
                 x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false"
                 class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
                 role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                <!-- Modal Dialog -->
                <div x-show="modalIsOpen"
                     x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     class="flex max-w-lg flex-col gap-1 overflow-hidden rounded-radius border border-main/55 bg-black text-on-surface rounded-md">
                    <!-- Dialog Header -->
                    <div class="flex items-center justify-between border-b border-main/55 border-outline bg-black/60 p-4">
                        <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-on-surface-strong">
                            Contact us
                        </h3>
                        <button x-on:click="modalIsOpen = false" aria-label="close modal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                 stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Dialog Body -->
                    <div class="px-4">
                        <form action="" class="py-1.5">
                            <div class="grid grid-cols-12 gap-2 text-white/55">
                                <div class="col-span-6">
                                    <input type="text" id="name" name="name" placeholder="Name"
                                           class="w-full px-4 py-2 bg-transparent border border-main/55 rounded-md">
                                </div>
                                <div class="col-span-6">
                                    <input type="email" id="email" name="email" placeholder="Email"
                                           class="w-full px-4 py-2 bg-transparent border border-main/55 rounded-md">
                                </div>
                                <div class="col-span-full">
                                    <textarea placeholder="Message"
                                              class="w-full p-3 bg-transparent border border-main/55 rounded-md resize-none"
                                              rows="5"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Dialog Footer -->
                    <div
                        class="flex flex-col-reverse justify-between gap-2 border-t border-main/55 border-outline bg-black-alt/60 px-4 py-2 sm:flex-row sm:items-center md:justify-end">
                        <button x-on:click="modalIsOpen = false" type="button"
                                class="whitespace-nowrap rounded-radius px-4 py-2 text-center text-sm font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:text-on-surface-dark dark:focus-visible:outline-primary-dark">
                            Close
                        </button>
                        <button x-on:click="modalIsOpen = false" type="button"
                                class="whitespace-nowrap rounded-md bg-main/55 border border-transparent px-4 py-2 text-center text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                        <h4 class="title text-5xl font-semibold uppercase mb-3">
                            Contact us
                        </h4>
                        <button x-on:click="modalIsOpen = true" type="button"
                                class="w-full whitespace-nowrap rounded-md border border-transparent bg-main/55 px-4 py-2 text-center text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">
                            Send me message
                        </button>
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
