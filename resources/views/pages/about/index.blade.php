@extends('layouts.design')
@section('title')
    ABOUT -
@endsection
@section('content')
    <section class="pt-[200px] mb-16">
        <div class="container lg:!max-w-[905px]">
            <div class="w-full border-b border-b-main/35 pb-16">
                <img src="{{ asset('front/image/bisang+++_portrait+Kopie.jpg') }}" class="size-full" alt="">
            </div>
            <div class="text-sm text-white/55 mt-5">
                Bruno Bisang was born in 1952 and spent much of his youth in Ascona, a picturesque little town in the
                Italian speaking part of Switzerland. When he was 19 he attended the School of Applied Arts for
                Photography in Zurich, wich was followed by a photographic apprenticeship. Since 1979 Bruno Bisang has
                worked as a freelance photographer, first in Zurich, and then for a time in Milan and Munich. Now he
                works between Milan, New York, Zurich and Paris for a renowned clientele.
                <br><br><br>
                The milestones of his career are marked by customers such as:
            </div>
            <div class="text-sm text-white/55 mt-12">
                Magazines:
                <ul class="pt-5 [&>li]:mb-1">
                    <li>Air France Madame</li>
                    <li>Amica</li>
                    <li>Bolero</li>
                    <li>C+G</li>
                    <li>Capital</li>
                    <li>Cosmopolitan</li>
                    <li>Femme</li>
                    <li>GQ</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
