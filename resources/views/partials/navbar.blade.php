<header @class(['fixed w-full z-40 block', 'hidden' => Route::is('front.index')]) x-data="{ navbar: false }">
    <div class="overlay !bg-black/65 !z-0" :class="navbar ? '' : 'hidden'"></div>
    <div class="container">
        <div class="flex justify-between lg:justify-start items-center gap-4 py-8 uppercase">
            <a href="{{ route('front.index') }}" class="relative text-2xl md:text-3xl text-main font-semibold z-10">
                Ellada Ismayil
            </a>
            <nav
                class="absolute lg:static top-[90%] w-full lg:w-auto left-0 lg:block origin-top transition duration-500 lg:scale-y-100"
                :class="navbar ? 'scale-y-100' : 'scale-y-0'">
                <ul class="flex flex-col lg:flex-row items-center gap-3">
                    @forelse($menus as $menu)
                        <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                            <a href="{{ route($menu->slug) }}">
                                {{$menu->name}}
                            </a>
                        </li>
                        @empty
                    @endforelse
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.about.index') }}" @class(['active' => Route::is('front.about')])>
                            About
                        </a>
                    </li>
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.contact.index') }}" @class(['active' => Route::is('front.contact')])>
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="relative inline-block lg:hidden text-main text-3xl z-10" x-on:click="navbar = !navbar">
                <span class="mdi" :class="navbar ? 'mdi-close' : 'mdi-menu'"></span>
            </button>
        </div>
    </div>
</header>
