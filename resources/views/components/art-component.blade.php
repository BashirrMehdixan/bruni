@props(['image'])
<div
    class="relative h-[410px] md:h-[450px] lg:h-[740px]">
    <div
        class="absolute cursor-pointer w-3 h-3 bg-main rounded-full left-3 bottom-3 z-20 [&:hover+div]:opacity-100"></div>
    <div
        class="absolute size-full flex items-center opacity-0 px-5 bg-black/65 text-white transition duration-500">
        <ul class="relative z-10">
            <li class="text-4xl mb-5">Lorem ipsum</li>
            <li class="tracking-wider">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at aut culpa eaque expedita illo in
                incidunt iste laboriosam numquam sapiente, velit. Amet corporis impedit provident quam? Rem, repudiandae
                soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at aut culpa eaque expedita
            </li>
        </ul>
    </div>
    <img src="{{ $image }}" class="size-full object-cover"
         alt="Lorem Ipsum" title="Lorem Ipsum">

</div>
