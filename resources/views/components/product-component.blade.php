@props(['art'])
<div class="grid grid-cols-1 md:grid-cols-3 place-items-center mb-16 text-white/55">
    <div class="w-[270px] h-[371px] mb-5 overflow-hidden">
        <img src="{{ asset('storage/'.$art->thumbnail) }}" class="size-full object-cover" alt="{{ $art->title }}">
    </div>
    <div class="md:ml-5">
        <h4 class="title text-3xl font-semibold uppercase pb-5">
            {{ $art->title }}
        </h4>
        <ul>
            <li class="tracking-wider">
                {!! $art->description !!}
            </li>
            <li class="text-2xl font-medium pt-3">
                {{ $art->price }} €
            </li>
        </ul>
    </div>
</div>
