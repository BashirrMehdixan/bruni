@props(['art'])
<div class="relative h-[410px] md:h-[450px] lg:h-[740px]">
    <img src="{{ asset('storage/'.$art->thumbnail) }}" class="size-full object-cover"
         alt="{{ $art->title }}" title="{{ $art->title }}">
</div>
