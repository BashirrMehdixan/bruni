<header @class(['fixed w-full z-20 block', 'hidden' => Route::is('index')]) x-data="{ navbar: false }">
    <div class="overlay" :class="navbar ? '' : 'hidden'"></div>
    <div class="container">
        <div class="flex justify-between lg:justify-start items-center gap-4 py-8 uppercase">
            <a href="{{ route('index') }}" class="relative text-lg lg:text-3xl text-main font-semibold z-10">
                Ellada Ismayil
            </a>
            <nav class="absolute lg:static top-[90%] w-full lg:w-auto left-0 lg:block origin-top transition duration-500 lg:scale-y-100" :class="navbar ? 'scale-y-100' : 'scale-y-0'">
                <ul class="flex flex-col lg:flex-row items-center gap-3">
                    <li @class(['nav_item', 'active' => Route::is('works.index')])>
                        <a href="{{ route('works.index') }}">
                            Work
                        </a>
                    </li>
                    <li @class(['nav_item', 'active' => Route::is('fine.index')])>
                        <a href="{{ route('fine.index') }}">
                            Fine Art
                        </a>
                    </li>
                    <li @class(['nav_item', 'active' => Route::is('index')])>
                        <a href="{{ route('more.index') }}">
                            More
                        </a>
                    </li>
                    <li @class(['nav_item', 'active' => Route::is('index')])>
                        <a href="{{ route('store.index') }}">
                            Store
                        </a>
                    </li>
                    <li @class(['nav_item', 'active' => Route::is('index')])>
                        <a href="{{ route('works.index') }}">
                            About
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
