@props(['art'])
<div
    class="relative h-[410px] md:h-[450px] lg:h-[740px]">
    <div class="absolute cursor-pointer w-3 h-3 bg-main rounded-full left-3 bottom-3 z-20 [&:hover+div]:opacity-100"></div>
    <div
        class="absolute size-full flex items-center opacity-0 px-5 bg-black/65 text-white transition duration-500">
        <ul class="relative z-10">
            <li class="text-4xl">{{ $art->title }}</li>
            <li>{!! $art->description !!}</li>
        </ul>
    </div>
    <img src="{{ asset('storage/'.$art->thumbnail) }}" class="size-full object-cover"
         alt="{{ $art->title }}" title="{{ $art->title }}">

</div>
