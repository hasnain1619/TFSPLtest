@extends('layouts.app')


@section('content')
    <!-- Header Section -->
    <div class="h-[300px] flex flex-col justify-center items-center mb-10 relative">
        <img src="{{ asset('storage/newspage/bg.png') }}" alt="" class="absolute w-full inset-0 h-full ">
        <h2 class="text-white text-[50px] font-bold relative">News</h2>
    </div>



    {{-- images grid --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[150px] lg:px-[120px]">
        {{-- ist row image  --}}
        <div class="grid 2xl:grid-cols-3 grid-rows-2 lg:grid-cols-2  gap-12 py-15">
            {{-- ist image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>


            {{-- 2nd image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            {{-- 3rd image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            {{-- ist image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>

            {{-- 2nd image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            {{-- 3rd image --}}
            <div class="box flex flex-col p-4 rounded-[25px]">

                <div class="relative rounded-[25px] overflow-hidden group">
                    <a href="/newpage" class="block">
                        <!-- Base image -->
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">

                        <!-- Gradient overlay (appears on hover) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent rounded-[15px] z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <!-- Hover image (appears on hover) -->
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover rounded-[15px] z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>



                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{-- ending button --}}
    <div class="mb-10">
        <div class="flex justify-center items-center py-5">
            <button class="px-4 py-2 bg-[#09154B] text-white text-[14px] rounded-[5px] font-montserrat">
                Load More
            </button>
        </div>
    </div>
@endsection
