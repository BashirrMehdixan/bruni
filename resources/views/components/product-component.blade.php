@props(['image'])
<div class="grid grid-cols-1 md:grid-cols-3 place-items-center mb-16 text-white/55">
    <div class="w-[270px] max-h-[310px] mb-5 overflow-hidden">
        <img src="{{ $image }}" class="size-full object-cover" alt="Lorem Ipsum">
    </div>
    <div class="md:ml-5">
        <h4 class="title text-3xl font-semibold uppercase pb-5">
            Lorem Ipsum
        </h4>
        <ul>
            <li class="tracking-wider">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at aut culpa eaque expedita illo in
                incidunt iste laboriosam numquam sapiente, velit. Amet corporis impedit provident quam? Rem, repudiandae
                soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at aut culpa eaque expedita
            </li>
            <li>
                555 €
            </li>
        </ul>
    </div>
</div>
