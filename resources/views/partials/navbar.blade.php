<header @class(['fixed w-full z-40 block', 'hidden' => Route::is('index')]) x-data="{ navbar: false }">
    <div class="overlay !bg-black/65 !z-0" :class="navbar ? '' : 'hidden'"></div>
    <div class="container">
        <div class="flex justify-between lg:justify-start items-center gap-4 py-8 uppercase">
            <a href="{{ route('front.index') }}" class="relative text-2xl md:text-3xl text-main font-semibold z-10">
                Ellada Ismayil
            </a>
            <nav class="absolute lg:static top-[90%] w-full lg:w-auto left-0 lg:block origin-top transition duration-500 lg:scale-y-100" :class="navbar ? 'scale-y-100' : 'scale-y-0'">
                <ul class="flex flex-col lg:flex-row items-center gap-3">
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.works.index') }}" @class(['active' => Route::is('front.works.index')])>
                            Work
                        </a>
                    </li>
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.fine.index') }}" @class(['active' => Route::is('front.fine.index')])>
                            Fine Art
                        </a>
                    </li>
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.more.index') }}" @class(['active' => Route::is('front.more.index')])>
                            More
                        </a>
                    </li>
                    <li class="nav_item has-[.active]:text-main has-[.active]:border-b has-[.active]:border-b-main">
                        <a href="{{ route('front.store.index') }}" @class(['active' => Route::is('front.store.index')])>
                            Store
                        </a>
                    </li>
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
