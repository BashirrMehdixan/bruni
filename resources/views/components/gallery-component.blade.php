@props(['item'])
<div class="gallery_card">
    <div class="thumbnail">
        <a href="{{ route('front.more.show', $item->slug) }}"
           title="{{ $item->title }}"
           class="max-w-[90px] h-[90px] block mx-auto">
                <img src="{{ asset('storage/'.$item->cover_photo) }}"
                     class="size-full"
                     title="{{ $item->title }}"
                     alt="{{ $item->title }}">
        </a>
        <div class="text-white/55 pt-8 text-lg">
            {{ $item->title }}
        </div>
    </div>
</div>
