@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <div class="h-[100vh]  relative flex items-center lg:justify-center">
        <div class="absolute w-full top-0">
            <video autoplay muted loop class="w-full object-cover h-[100vh]">
                <source src="{{ asset('storage/video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <!-- Gradient 1 (Top Fade) -->
        <div class="absolute w-full h-[100vh] bg-gradient-to-b from-[#09154B] via-transparent to-transparent">
        </div>

        <!-- Gradient 2 (Left Fade) -->
        <div class="absolute w-full h-[100vh] bg-gradient-to-r from-[#09154B] via-transparent to-transparent opacity-90">
        </div>

        <!-- Gradient 3 (Right Fade) -->
        <div class="absolute w-full h-[100vh]  bg-gradient-to-t from-[#09154B] via-transparent to-transparent">
        </div>
        <div class="w-[84%] mx-auto relative 2xl:pt-[176px] md:pt-[100px] 2xl:px-[80px]">
            {{-- grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[10px] sm:gap-[30px] md:gap-[40px] xl:gap-[60px]">
                {{-- svgs --}}
                <div class="flex flex-col items-start lg:items-start justify-start">
                    {{-- batter svg --}}
                    <div class="flex justify-start">
                        <img src="{{ asset('storage/hero/Batsman.svg') }}" alt=""
                            class="w-[190px] lg:w-auto h-auto">
                    </div>
                    {{-- text section --}}
                    <div class=" text-white font-montserrat">
                        <h1
                            class="2xl:text-[56px]  xl:text-[42px] md:text-[32px] sm:text-[24px] min-[500px]:text-[15px] min-[365px]:text-[12px] 2xl:leading-[70px] font-montserrat font-bold">
                            Twenty Four
                            Seven Premier
                            League</h1>
                        <p
                            class="pt-[10px] 2xl:text-[16px] md:text-[12px] sm:text-[11px] min-[500px]:text-[9px] min-[365px]:text-[9px] font-semibold">
                            Bringing players together through passion, sportsmanship, and unforgettable cricketing
                            experiences.
                        </p>
                    </div>
                </div>

                {{-- 2nd svg section --}}
                <div class="relative flex justify-end ">
                    {{-- ball svg --}}
                    <div class="absolute top-10 lg:top-2/3 2xl:right-2/3 lg:right-4/5 right-50 -translate-x-4/5">
                        <img src="{{ asset('storage/hero/p.svg') }}" alt="" class="lg:w-auto h-auto w-[30px]">
                    </div>
                    {{-- bowler svg --}}
                    <div class="2xl:mt-[150px] lg:mt-[60px]">
                        <img src="{{ asset('storage/hero/Baller.svg') }}" alt=""
                            class="w-[190px] md:w-[200px] lg:w-auto h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming matches section -->
    <div class="w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] md:pt-[55px] pt-[10px] ">
        <h2
            class="bg-[#09154B] pt-[6px] pb-[8px] pl-[22px] rounded-[5px] text-white sm:text-[24px] min-[450px]:text-[20px] min-[365px]:text-[18px]  font-bold font-montserrat">
            Upcoming Matches
        </h2>

        {{-- grids --}}
        <div class="grid grid-cols-1 min-[500px]:grid-cols-2 lg:grid-cols-4 lg:gap-[8px]  gap-[25px] pt-[25px]">
            {{-- Match Cards 1 --}}
            <div class="sm:max-w-[334px] overflow-hidden rounded-[10px] border-2 border-[#DDDDDD]">
                {{-- First Section --}}
                <div class="flex items-center justify-between px-[20px] py-[20px]">
                    <p class="my-0 text-[15px] font-dm-sans font-bold text-[#2F3F50] max-[1199px]:text-[11px]">
                        03 Nov 2024 - 10:00 am
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" viewBox="0 0 45 40" fill="none"
                        class="w-[15px] h-[15px] max-[1199px]:w-[12px] max-[1199px]:h-[12px]">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.2323 0.732225C24.2085 -0.244075 25.7915 -0.244075 26.7677 0.732225L44.2677 18.2323C45.244 19.2085 45.244 20.7915 44.2677 21.7677L26.7677 39.2677C25.7915 40.244 24.2085 40.244 23.2323 39.2677C22.256 38.2915 22.256 36.7085 23.2323 35.7323L36.4645 22.5H2.5C1.1193 22.5 0 21.3807 0 20C0 18.6193 1.1193 17.5 2.5 17.5H36.4645L23.2323 4.26777C22.256 3.29145 22.256 1.70855 23.2323 0.732225Z"
                            fill="black" />
                    </svg>
                </div>

                {{-- Second Section --}}
                <div class="grid grid-cols-5 items-center border-y-2 border-[#DDDDDD]">
                    <!-- Team 1 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="my-0 text-[14px] max-[1199px]:text-[12px] font-dm-sans font-semibold w-[86px] max-[1199px]:w-[60px] text-[#2F3F50]">
                            Raging Bulls
                        </p>
                    </div>

                    <!-- VS -->
                    <div class="px-[30px] py-[30px] max-[1199px]:px-[15px] max-[1199px]:py-[15px] text-center">
                        <p class="my-0 text-[14px] max-[1199px]:text-[12px] font-medium text-[#727272]">vs</p>
                    </div>

                    <!-- Team 2 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="text-[15px] max-[1199px]:text-[12px] font-dm-sans font-semibold text-[#2F3F50] w-[86px] max-[1199px]:w-[60px]">
                            Strikers
                        </p>
                    </div>
                </div>

                {{-- Third Section --}}
                <div class="px-[38px] py-[17px] max-[1199px]:px-[20px] max-[1199px]:py-[10px] text-center">
                    <p class="my-0 text-[12px] max-[1199px]:text-[10px] font-dm-sans font-bold text-[#727272]">
                        Match 12 - Pindi Cricket Stadium
                    </p>
                </div>
            </div>

            {{-- 2 --}}
            <div class="w-full sm:max-w-[334px] overflow-hidden rounded-[10px] border-2 border-[#DDDDDD]">
                {{-- First Section --}}
                <div class="flex items-center justify-between px-[20px] py-[20px]">
                    <p class="my-0 text-[15px] font-dm-sans font-bold text-[#2F3F50] max-[1199px]:text-[11px]">
                        03 Nov 2024 - 10:00 am
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" viewBox="0 0 45 40" fill="none"
                        class="w-[15px] h-[15px] max-[1199px]:w-[12px] max-[1199px]:h-[12px]">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.2323 0.732225C24.2085 -0.244075 25.7915 -0.244075 26.7677 0.732225L44.2677 18.2323C45.244 19.2085 45.244 20.7915 44.2677 21.7677L26.7677 39.2677C25.7915 40.244 24.2085 40.244 23.2323 39.2677C22.256 38.2915 22.256 36.7085 23.2323 35.7323L36.4645 22.5H2.5C1.1193 22.5 0 21.3807 0 20C0 18.6193 1.1193 17.5 2.5 17.5H36.4645L23.2323 4.26777C22.256 3.29145 22.256 1.70855 23.2323 0.732225Z"
                            fill="black" />
                    </svg>
                </div>

                {{-- Second Section --}}
                <div class="grid grid-cols-5 items-center border-y-2 border-[#DDDDDD]">
                    <!-- Team 1 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="my-0 text-[14px] max-[1199px]:text-[12px] font-dm-sans font-semibold w-[86px] max-[1199px]:w-[60px] text-[#2F3F50]">
                            Raging Bulls
                        </p>
                    </div>

                    <!-- VS -->
                    <div class="px-[30px] py-[30px] max-[1199px]:px-[15px] max-[1199px]:py-[15px] text-center">
                        <p class="my-0 text-[14px] max-[1199px]:text-[12px] font-medium text-[#727272]">vs</p>
                    </div>

                    <!-- Team 2 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="text-[15px] max-[1199px]:text-[12px] font-dm-sans font-semibold text-[#2F3F50] w-[86px] max-[1199px]:w-[60px]">
                            Strikers
                        </p>
                    </div>
                </div>

                {{-- Third Section --}}
                <div class="px-[38px] py-[17px] max-[1199px]:px-[20px] max-[1199px]:py-[10px] text-center">
                    <p class="my-0 text-[12px] max-[1199px]:text-[10px] font-dm-sans font-bold text-[#727272]">
                        Match 12 - Pindi Cricket Stadium
                    </p>
                </div>
            </div>
            {{-- 3 --}}
            <div class="w-full sm:max-w-[334px] overflow-hidden rounded-[10px] border-2 border-[#DDDDDD]">
                {{-- First Section --}}
                <div class="flex items-center justify-between px-[20px] py-[20px]">
                    <p class="my-0 text-[15px] font-dm-sans font-bold text-[#2F3F50] max-[1199px]:text-[11px]">
                        03 Nov 2024 - 10:00 am
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" viewBox="0 0 45 40" fill="none"
                        class="w-[15px] h-[15px] max-[1199px]:w-[12px] max-[1199px]:h-[12px]">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.2323 0.732225C24.2085 -0.244075 25.7915 -0.244075 26.7677 0.732225L44.2677 18.2323C45.244 19.2085 45.244 20.7915 44.2677 21.7677L26.7677 39.2677C25.7915 40.244 24.2085 40.244 23.2323 39.2677C22.256 38.2915 22.256 36.7085 23.2323 35.7323L36.4645 22.5H2.5C1.1193 22.5 0 21.3807 0 20C0 18.6193 1.1193 17.5 2.5 17.5H36.4645L23.2323 4.26777C22.256 3.29145 22.256 1.70855 23.2323 0.732225Z"
                            fill="black" />
                    </svg>
                </div>

                {{-- Second Section --}}
                <div class="grid grid-cols-5 items-center border-y-2 border-[#DDDDDD]">
                    <!-- Team 1 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="my-0 text-[14px] max-[1199px]:text-[12px] font-dm-sans font-semibold w-[86px] max-[1199px]:w-[60px] text-[#2F3F50]">
                            Raging Bulls
                        </p>
                    </div>

                    <!-- VS -->
                    <div class="px-[30px] py-[30px] max-[1199px]:px-[15px] max-[1199px]:py-[15px] text-center">
                        <p class="my-0 text-[14px] max-[1199px]:text-[12px] font-medium text-[#727272]">vs</p>
                    </div>

                    <!-- Team 2 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="text-[15px] max-[1199px]:text-[12px] font-dm-sans font-semibold text-[#2F3F50] w-[86px] max-[1199px]:w-[60px]">
                            Strikers
                        </p>
                    </div>
                </div>

                {{-- Third Section --}}
                <div class="px-[38px] py-[17px] max-[1199px]:px-[20px] max-[1199px]:py-[10px] text-center">
                    <p class="my-0 text-[12px] max-[1199px]:text-[10px] font-dm-sans font-bold text-[#727272]">
                        Match 12 - Pindi Cricket Stadium
                    </p>
                </div>
            </div>
            {{-- 4 --}}
            <div class="w-full sm:max-w-[334px] overflow-hidden rounded-[10px] border-2 border-[#DDDDDD]">
                {{-- First Section --}}
                <div class="flex items-center justify-between px-[20px] py-[20px]">
                    <p class="my-0 text-[15px] font-dm-sans font-bold text-[#2F3F50] max-[1199px]:text-[11px]">
                        03 Nov 2024 - 10:00 am
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" viewBox="0 0 45 40"
                        fill="none" class="w-[15px] h-[15px] max-[1199px]:w-[12px] max-[1199px]:h-[12px]">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.2323 0.732225C24.2085 -0.244075 25.7915 -0.244075 26.7677 0.732225L44.2677 18.2323C45.244 19.2085 45.244 20.7915 44.2677 21.7677L26.7677 39.2677C25.7915 40.244 24.2085 40.244 23.2323 39.2677C22.256 38.2915 22.256 36.7085 23.2323 35.7323L36.4645 22.5H2.5C1.1193 22.5 0 21.3807 0 20C0 18.6193 1.1193 17.5 2.5 17.5H36.4645L23.2323 4.26777C22.256 3.29145 22.256 1.70855 23.2323 0.732225Z"
                            fill="black" />
                    </svg>
                </div>

                {{-- Second Section --}}
                <div class="grid grid-cols-5 items-center border-y-2 border-[#DDDDDD]">
                    <!-- Team 1 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="my-0 text-[14px] max-[1199px]:text-[12px] font-dm-sans font-semibold w-[86px] max-[1199px]:w-[60px] text-[#2F3F50]">
                            Raging Bulls
                        </p>
                    </div>

                    <!-- VS -->
                    <div class="px-[30px] py-[30px] max-[1199px]:px-[15px] max-[1199px]:py-[15px] text-center">
                        <p class="my-0 text-[14px] max-[1199px]:text-[12px] font-medium text-[#727272]">vs</p>
                    </div>

                    <!-- Team 2 -->
                    <div
                        class="col-span-2 py-[13px] px-[33px] max-[1199px]:px-[20px] text-center flex flex-col items-center">
                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                            class="w-[86px] max-[1199px]:w-[60px]">
                        <p
                            class="text-[15px] max-[1199px]:text-[12px] font-dm-sans font-semibold text-[#2F3F50] w-[86px] max-[1199px]:w-[60px]">
                            Strikers
                        </p>
                    </div>
                </div>

                {{-- Third Section --}}
                <div class="px-[38px] py-[17px] max-[1199px]:px-[20px] max-[1199px]:py-[10px] text-center">
                    <p class="my-0 text-[12px] max-[1199px]:text-[10px] font-dm-sans font-bold text-[#727272]">
                        Match 12 - Pindi Cricket Stadium
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Standings section -->
    <div class="relative w-full h-auto mt-[50px]">
        <!-- Background Image -->
        <div class="absolute w-full h-[241px] object-cover object-center">
            <img src="{{ asset('storage/ui.png') }}" alt="Background" class="w-full h-full object-cover">
        </div>

        <!-- Standings Header -->
        <div class="relative md:h-[241px] sm:h-[150px]">
            <div
                class="pt-[50px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] flex flex-wrap justify-between items-center">
                <span
                    class="sm:text-[30px] min-[450px]:text-[25px] min-[365px]:text-[20px] font-bold font-montserrat text-white">Standings</span>
                <div class="hs-dropdown relative">
                    <button
                        class="hs-dropdown-toggle px-4 py-2 rounded-lg bg-white sm:text-[14px] min-[450px]:text-[12px] min-[365px]:text-[10px] font-bold font-montserrat text-[#060E34] flex items-center gap-2">
                        Season 1
                        <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="hs-dropdown-menu hidden z-50 bg-white shadow-md rounded-lg w-[120px] py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Season 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Season 2</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Standings Table -->
        <div
            class="w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] relative md:grid sm:grid-cols-1 xl:grid-cols-2 md:mt-[-125px] md:gap-[20px] sm:mt-[-2px] min-[365px]:mt-[-10px] max-[640px]:pt-[30px] ">
            {{-- table 1 --}}
            <div class="rounded-[10px]">
                <table
                    class="w-full border-collapse bg-[#060E34] rounded-[10px] shadow-[0px_14px_35px_rgba(9,21,75,0.55)]">
                    <thead>
                        <tr class="bg-[#060E34] text-white border-b border-[#397242]">
                            <th
                                class="py-7 sm:pl-6 min-[365px]:pl-4 text-left rounded-[5px] sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                Group A
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                M
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                W
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                L
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NR
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                D
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                P
                            </th>
                            <th
                                class="sm:p-3 text-center rounded-t-lg sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NRR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Team Row Template -->
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <!-- View More Button -->
                        <tr class="bg-[#060E34] text-white text-center">
                            <td colspan="8"
                                class="p-5 cursor-pointer rounded-b-lg hover:text-gray-400 transition sm:text-[14px] min-[365px]:text-[12px] font-normal font-montserrat">
                                <div class="flex justify-center items-center gap-2">
                                    <p>View All Rankings</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <rect width="17" height="17" fill="url(#pattern0_898_1284)" />
                                        <defs>
                                            <pattern id="pattern0_898_1284" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_898_1284" transform="scale(0.0104167)" />
                                            </pattern>
                                            <image id="image0_898_1284" width="96" height="96"
                                                preserveAspectRatio="none"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEVUlEQVR4nO2dzW9VVRDAD4lF3AgECBZhhf8BS5XESMQW0Q3/AQQSPvzYIOxckigqqIlRV+7QRNbGxGjY81EICWDbQNy1VHZ9dyE/MnGadFH7Cu+ce2bunV/SpHl572XOzH1zzpmZMyelIAiCIAiCIAgCQwDbgLeAU8A3wG/AFDANLACN/i3oa1P6nq/1M/LZbbXH4QbgBeAg8AVwA3jM6Mh3XNfvfAfYUHuc5gD2ABeAecrzCPgR2AesS30FeB44BvxFPe4BR0WW1DM38xHwN3YQWT4Q2VKXUR88g12mgcnUNYBdwGX88AuwM3UB4F3gIf54BBxKXgGeA85lWkrW4rGuztYnTwCbgSt0hz+BTckDwLhufLrGLfPzAvAKMEt3mZUxJosAOzqu/CUeyKouWQLYCFyjP9yUeS5ZQFYIHZtw18ofwJgFA3xJf/nUQmjB8zp/VGTs79UML0gipO/MAy/XMICn2E5pfmpb+W8XH5I/JtuM51sOKdfibivpTk2mBCtzso00oqVMlsVdcrnIqeZwg9U5Ukr56yon0D3NBfmrLYC92KQBzmgYfFz/H1SW6bUSBvgBm3y8gqyTlY3wXW7lbwD+wSYv/Y/M+4HFivnkfCUuWi6IJwMY+CXk25hpXSVeXJARI5xPudBCWasMJDRi0AhXc5aIWw85Lxo0wr/AlhwGkMnMA43MVWsYS5sT874cBngfPzTGjHAihwHkZIonGkNGuJjDAHLkxxuLRuaEX3MYQEowPNIY+CXcyGGA2YIKOi0FXSMLOdr4Sv4SZnIIOF9jA9UmGsArwVwO4eRJLcF4MgKwvdAYBzmE64MBdlg2QCkXdDoZAThr2QWVnoTHs2jx2cc3YX0SjmVo5WWox43YYFg8vvCTn3UjJo0vPNEY2IAtcSGHAaTriBcaQ8oXjucwgLR88UBjTPnCmzkMsNVBQmYgPt2Az8+fkFHhLR87HRhUfr6UpA7gc/wm5ScqJeU/y30UyWNZykTFspSJnAaIwqynYyF7Eyjge2xyxtiTL3ybVfk6qNexSWOwOPfVUuXp0mMtWJ07xZoBaoO7YHUOF1G+GmAMuD9EgD7zoHhzJ+DD2qM0zOiFWGs8phpHlVb2/e30H3VUL+pz47VGI0hrx+A/LrWq/GXNOjy2o8zNXLXiMuCAg1B1N9vVLDPCefrLuarKX7Y3kL6afeN3Ey3LBODFnjXtmzLXyFXL+/rQxmamdjHZsMatXTbCDLA7WUYyVB11Rzer9IZ7FsQ/al/NLk24G5PD9vWfaHmG9/b1Y8krmtBv43ak3IjMB1IXEN8J/IwfLtU+u1YE4A3gNna5N+x4q3u08d9JzR5ZQbJ8J/p2n9h6aXCnPdZqJlEOu7sjpuBVhnMtKD2uMhxSgTepEdZrmZaw8h1XpVZTC7b642ZGBdiil26Kf/5Kjvxopfa0JoOWrrN9qK9d1/dclMMR+tk8JeJBEARBEARBEAQpD08ANh9QwqlqG/4AAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- table 2 --}}
            <div class="rounded-[10px] max-[768px]:mt-[15px]">
                <table
                    class="w-full border-collapse bg-[#060E34] rounded-[10px] shadow-[0px_14px_35px_rgba(9,21,75,0.55)]">
                    <thead>
                        <tr class="bg-[#060E34] text-white border-b border-[#397242]">
                            <th
                                class="py-7 sm:pl-6 min-[365px]:pl-4 text-left rounded-[5px] sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                Group A
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                M
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                W
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                L
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NR
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                D
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                P
                            </th>
                            <th
                                class="sm:p-3 text-center rounded-t-lg sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NRR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Team Row Template -->
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#060E34] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center  sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <!-- View More Button -->
                        <tr class="bg-[#060E34] text-white text-center">
                            <td colspan="8"
                                class="p-5 cursor-pointer rounded-b-lg hover:text-gray-400 transition sm:text-[14px] min-[365px]:text-[12px] font-normal font-montserrat">
                                <div class="flex justify-center items-center gap-2">
                                    <p>View All Rankings</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <rect width="17" height="17" fill="url(#pattern0_898_1284)" />
                                        <defs>
                                            <pattern id="pattern0_898_1284" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_898_1284" transform="scale(0.0104167)" />
                                            </pattern>
                                            <image id="image0_898_1284" width="96" height="96"
                                                preserveAspectRatio="none"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEVUlEQVR4nO2dzW9VVRDAD4lF3AgECBZhhf8BS5XESMQW0Q3/AQQSPvzYIOxckigqqIlRV+7QRNbGxGjY81EICWDbQNy1VHZ9dyE/MnGadFH7Cu+ce2bunV/SpHl572XOzH1zzpmZMyelIAiCIAiCIAgCQwDbgLeAU8A3wG/AFDANLACN/i3oa1P6nq/1M/LZbbXH4QbgBeAg8AVwA3jM6Mh3XNfvfAfYUHuc5gD2ABeAecrzCPgR2AesS30FeB44BvxFPe4BR0WW1DM38xHwN3YQWT4Q2VKXUR88g12mgcnUNYBdwGX88AuwM3UB4F3gIf54BBxKXgGeA85lWkrW4rGuztYnTwCbgSt0hz+BTckDwLhufLrGLfPzAvAKMEt3mZUxJosAOzqu/CUeyKouWQLYCFyjP9yUeS5ZQFYIHZtw18ofwJgFA3xJf/nUQmjB8zp/VGTs79UML0gipO/MAy/XMICn2E5pfmpb+W8XH5I/JtuM51sOKdfibivpTk2mBCtzso00oqVMlsVdcrnIqeZwg9U5Ukr56yon0D3NBfmrLYC92KQBzmgYfFz/H1SW6bUSBvgBm3y8gqyTlY3wXW7lbwD+wSYv/Y/M+4HFivnkfCUuWi6IJwMY+CXk25hpXSVeXJARI5xPudBCWasMJDRi0AhXc5aIWw85Lxo0wr/AlhwGkMnMA43MVWsYS5sT874cBngfPzTGjHAihwHkZIonGkNGuJjDAHLkxxuLRuaEX3MYQEowPNIY+CXcyGGA2YIKOi0FXSMLOdr4Sv4SZnIIOF9jA9UmGsArwVwO4eRJLcF4MgKwvdAYBzmE64MBdlg2QCkXdDoZAThr2QWVnoTHs2jx2cc3YX0SjmVo5WWox43YYFg8vvCTn3UjJo0vPNEY2IAtcSGHAaTriBcaQ8oXjucwgLR88UBjTPnCmzkMsNVBQmYgPt2Az8+fkFHhLR87HRhUfr6UpA7gc/wm5ScqJeU/y30UyWNZykTFspSJnAaIwqynYyF7Eyjge2xyxtiTL3ybVfk6qNexSWOwOPfVUuXp0mMtWJ07xZoBaoO7YHUOF1G+GmAMuD9EgD7zoHhzJ+DD2qM0zOiFWGs8phpHlVb2/e30H3VUL+pz47VGI0hrx+A/LrWq/GXNOjy2o8zNXLXiMuCAg1B1N9vVLDPCefrLuarKX7Y3kL6afeN3Ey3LBODFnjXtmzLXyFXL+/rQxmamdjHZsMatXTbCDLA7WUYyVB11Rzer9IZ7FsQ/al/NLk24G5PD9vWfaHmG9/b1Y8krmtBv43ak3IjMB1IXEN8J/IwfLtU+u1YE4A3gNna5N+x4q3u08d9JzR5ZQbJ8J/p2n9h6aXCnPdZqJlEOu7sjpuBVhnMtKD2uMhxSgTepEdZrmZaw8h1XpVZTC7b642ZGBdiil26Kf/5Kjvxopfa0JoOWrrN9qK9d1/dclMMR+tk8JeJBEARBEARBEAQpD08ANh9QwqlqG/4AAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Teams section -->
    <div
        class="  sm:mt-[20px] md:mt-[80px] lg:mt-[74px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] max-[640px]:mt-[20px]  ">
        <div class="bg-[#09154B] rounded-[5px] flex items-center justify-between ">
            <h2 class=" py-[8px] pl-[24px] rounded-xl text-white text-[24px] font-bold font-Montserrat ">Teams</h2>

            <div class="2xl:py-[13px] pr-[20px] sm:py-[6px]">

                <button class="px-[25px] py-[9px] rounded-sm  bg-[#212C5D]  text-white font-montserrat ">
                    View All
                </button>
            </div>


        </div>

        <div
            class="grid lg:grid-cols-5 md:grid-cols-3 min-[365px]:grid-cols-2  justify-end xl:py-[25px] lg:py-[13px] md:py-[13px] xl:gap-[25px]  lg:gap-[13px] sm:gap-[13px] min-[365px]:gap-[13px] min-[365px]:py-[13px] sm:py-[20px] ">
            <div class="relative w-full max-h-[164px] object-cover">
                <!-- Default Image (Visible by Default) -->
                <img src="{{ asset('storage/timber.png') }}" alt="Default Image"
                    class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover rounded-[10px]">

                <!-- Hover Image (Hidden by Default, Appears on Hover) -->
                <img src="{{ asset('storage/timberhover.png') }}" alt="Hover Image"
                    class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover rounded-[10px]">
            </div>

            <div class="relative w-full max-h-[164px]">
                <!-- Default Image (Visible by Default) -->
                <img src="{{ asset('storage/worriors.png') }}" alt="Default Image"
                    class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover rounded-[10px]">

                <!-- Hover Image (Hidden by Default, Appears on Hover) -->
                <img src="{{ asset('storage/worriorshover.png') }}" alt="Hover Image"
                    class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover rounded-[10px]">
            </div>

            <div class="relative w-full max-h-[164px]">
                <!-- Default Image (Visible by Default) -->
                <img src="{{ asset('storage/tfslogo.png') }}" alt="Default Image"
                    class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover rounded-[10px]">

                <!-- Hover Image (Hidden by Default, Appears on Hover) -->
                <img src="{{ asset('storage/tfslogohover.png') }}" alt="Hover Image"
                    class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover rounded-[10px]">
            </div>
            <div class="relative w-full max-h-[164px]">
                <!-- Default Image (Visible by Default) -->
                <img src="{{ asset('storage/zalmi.png') }}" alt="Default Image"
                    class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover rounded-[10px]">

                <!-- Hover Image (Hidden by Default, Appears on Hover) -->
                <img src="{{ asset('storage/zalmihover.png') }}" alt="Hover Image"
                    class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover rounded-[10px]">
            </div>
            <div class="relative w-full max-h-[164px]">
                <!-- Default Image (Visible by Default) -->
                <img src="{{ asset('storage/sultan.png') }}" alt="Default Image"
                    class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover rounded-[10px]">

                <!-- Hover Image (Hidden by Default, Appears on Hover) -->
                <img src="{{ asset('storage/sultanhover.png') }}" alt="Hover Image"
                    class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover rounded-[10px]">
            </div>
        </div>

    </div>

    <!-- Gallery section -->
    <div
        class="h-auto 2xl:my-[31px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] md:my-[15px] md:mt-[60px] sm:mt-[60px]  ">

        <div class="bg-[#09154B] rounded-[5px] flex items-center justify-between ">
            <h2 class=" py-[8px] pl-[24px] rounded-xl text-white text-[24px] font-bold font-Montserrat ">Gallery</h2>

            <div class="2xl:py-[13px] pr-[20px] sm:py-[6px]">

                <button class="px-[25px] py-[9px] rounded-sm  bg-[#212C5D]  text-white font-montserrat ">
                    View All
                </button>
            </div>


        </div>

        <!-- Gallery Grid -->
        <div
            class="  grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 xl:gap-[20px] lg:gap-[13px] xl:py-[25px] lg:py-[13px] min-[365px]:gap-[15px] min-[365px]:py-[15px]">
            <!-- First Row -->
            <div class="col-span-1 relative group">
                <img src="{{ asset('storage/pic1.png') }}" alt="pic 1"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-[10px]">
                <img src="{{ asset('storage/pic1hover.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-[10px]">
            </div>

            <div class="col-span-1 relative group">
                <img src="{{ asset('storage/pic1.png') }}" alt="pic 1"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-[10px]">
                <img src="{{ asset('storage/pic1hover.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-[10px]">
            </div>

            <div class="col-span-2 sm:col-span-2 md:col-span-2 relative group">
                <img src="{{ asset('storage/pic2.png') }}" alt="pic 2"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-xl">
                <img src="{{ asset('storage/pic2hover.png') }}" alt="pic 2 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-xl">
            </div>

            <!-- Second Row -->
            <div class="col-span-2 sm:col-span-2 md:col-span-2 relative group">
                <img src="{{ asset('storage/pic2.png') }}" alt="pic 2"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-xl">
                <img src="{{ asset('storage/pic2hover.png') }}" alt="pic 2 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-xl">
            </div>

            <div class="col-span-1 relative group">
                <img src="{{ asset('storage/pic1.png') }}" alt="pic 1"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-[10px]">
                <img src="{{ asset('storage/pic1hover.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-[10px]">
            </div>
            <div class="col-span-1 relative group">
                <img src="{{ asset('storage/pic1.png') }}" alt="pic 1"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-[10px]">
                <img src="{{ asset('storage/pic1hover.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 rounded-[10px]">
            </div>
        </div>
    </div>

    {{-- AWARDS SECTION --}}
    <div class="relative">

        <div class="absolute w-full h-full object-cover object-center">
            <img src="{{ asset('storage/ar.png') }}" alt="Background" class="w-full max-h-[189px]  object-cover">
        </div>

        <!-- cards -->
        <div class="relative">
            <div
                class="w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] sm:px-[40px]  grid grid-cols-1 min-[365px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 xl:gap-[25px] lg:gap-[13px] min-[365px]:gap-[13px] 2xl:pt-[60px] lg:pt-[30px] md:pt-[20px]  ">
                <!-- Awards Heading Column -->
                <div class="flex col-span-1 ">
                    <h2
                        class="2xl:text-[30px]  min-[365px]: text-white font-bold font-montserrat z-10 2xl:leading-[46px] 2xl:py-[9px] sm:ml-0  ">
                        Awards
                    </h2>
                </div>
                <!-- 1-->
                <div
                    class=" bg-white border-2 border-[#e2bc7b] rounded-[10px] transition-all hover:-translate-y-2 shadow-2xl">
                    <div
                        class="mx-auto max-w-[164px] bg-[#D3A452] text-center text-[12px] font-semibold font-montserrat pt-5 pb-1 2xl:px-[40px]">
                        MAN OF
                        THE
                    </div>
                    <div
                        class="mx-auto max-w-[164px] bg-gray-800 text-center py-[6px] 2xl:px-[52px] text-white xl:text-[16px]    lg:text-[14px] font-semibold font-montserrat text-wrap">
                        MATCH
                    </div>
                    <div class="mx-auto max-w-[164px] ">
                        <img src="{{ asset('storage/svg.svg') }}" alt="" class="">

                    </div>
                    <h1
                        class="text-blue-950 text-center font-bold 2xl:text-[20px] 2xl:mx-[20px] py-[10px]  font-montserrat">
                        MOHAMMAD<br> MASOOD
                    </h1>
                    <div class="flex justify-center mb-[22px]">
                        <img src="{{ asset('storage/LOGO.png') }}" alt="">
                    </div>
                </div>
                <!-- 2-->
                <div
                    class=" bg-white border-2 border-[#e2bc7b] rounded-[10px] transition-all hover:-translate-y-2 shadow-2xl">
                    <div
                        class="mx-auto max-w-[164px] bg-[#D3A452] text-center text-[12px] font-semibold font-montserrat pt-5 pb-1 2xl:px-[40px]">
                        MAN OF
                        THE
                    </div>
                    <div
                        class="mx-auto max-w-[164px] bg-gray-800 text-center py-[6px] 2xl:px-[26px] text-white xl:text-[16px] lg:text-[14px] font-semibold font-montserrat text-wrap">
                        TOURNAMENT
                    </div>
                    <div class="mx-auto max-w-[164px] ">
                        <img src="{{ asset('storage/svg.svg') }}" alt="" class="">

                    </div>
                    <h1
                        class="text-blue-950 text-center font-bold 2xl:text-[20px] 2xl:mx-[20px] py-[10px]  font-montserrat">
                        MOHAMMAD<br> MASOOD
                    </h1>
                    <div class="flex justify-center mb-[22px]">
                        <img src="{{ asset('storage/LOGO.png') }}" alt="">
                    </div>
                </div>
                {{-- 3 --}}
                <div
                    class=" bg-white border-2 border-[#e2bc7b] rounded-[10px] transition-all hover:-translate-y-2 shadow-2xl">
                    <div
                        class="mx-auto max-w-[164px] bg-[#D3A452] text-center text-[12px] font-semibold font-montserrat pt-5 pb-1 2xl:px-[40px]">
                        BEST
                    </div>
                    <div
                        class="mx-auto max-w-[164px] bg-gray-800 text-center py-[6px] 2xl:px-[52px] text-white xl:text-[16px]   lg:text-[14px] font-semibold font-montserrat text-wrap">
                        BOWLER
                    </div>
                    <div class="mx-auto max-w-[164px] ">
                        <img src="{{ asset('storage/svg.svg') }}" alt="" class="">

                    </div>
                    <h1
                        class="text-blue-950 text-center font-bold 2xl:text-[20px] 2xl:mx-[20px] py-[10px]  font-montserrat">
                        MOHAMMAD<br> MASOOD
                    </h1>
                    <div class="flex justify-center mb-[22px]">
                        <img src="{{ asset('storage/LOGO.png') }}" alt="">
                    </div>
                </div>

                <!-- 4-->
                <div
                    class=" bg-white border-2 border-[#e2bc7b] rounded-[10px] transition-all hover:-translate-y-2 shadow-2xl">
                    <div
                        class="mx-auto max-w-[164px] bg-[#D3A452] text-center text-[12px] font-semibold font-montserrat pt-5 pb-1 2xl:px-[40px]">
                        TOP
                    </div>
                    <div
                        class="mx-auto max-w-[164px] bg-gray-800 text-center py-[6px] 2xl:px-[52px] text-white xl:text-[16px]  lg:text-[14px] font-semibold font-montserrat text-wrap">
                        SCORER
                    </div>
                    <div class="mx-auto max-w-[164px] ">
                        <img src="{{ asset('storage/svg.svg') }}" alt="" class="">

                    </div>
                    <h1
                        class="text-blue-950 text-center font-bold 2xl:text-[20px] 2xl:mx-[20px] py-[10px]  font-montserrat">
                        MOHAMMAD<br> MASOOD
                    </h1>
                    <div class="flex justify-center mb-[22px]">
                        <img src="{{ asset('storage/LOGO.png') }}" alt="">
                    </div>
                </div>
                {{-- 5 --}}
                <div
                    class=" bg-white border-2 border-[#e2bc7b] rounded-[10px] transition-all hover:-translate-y-2 shadow-2xl">
                    <div
                        class="mx-auto max-w-[164px] bg-[#D3A452] text-center text-[12px] font-semibold font-montserrat pt-5 pb-1 2xl:px-[40px]">
                        BEST
                    </div>
                    <div
                        class="mx-auto max-w-[164px] bg-gray-800 text-center py-[6px] 2xl:px-[52px] text-white xl:text-[16px] lg:text-[14px] font-semibold font-montserrat text-wrap">
                        FIELDER
                    </div>
                    <div class="mx-auto max-w-[164px] ">
                        <img src="{{ asset('storage/svg.svg') }}" alt="" class="">

                    </div>
                    <h1
                        class="text-blue-950 text-center font-bold 2xl:text-[20px] 2xl:mx-[20px] py-[10px]  font-montserrat">
                        MOHAMMAD<br> MASOOD
                    </h1>
                    <div class="flex justify-center mb-[22px]">
                        <img src="{{ asset('storage/LOGO.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="mt-[25px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px]">
        <!-- News Header -->
        <div class=" bg-[#09154B] rounded-[5px] flex items-center justify-between">
            <h2 class="py-[8px] pl-[24px] text-white text-[24px] font-bold font-Montserrat">
                News
            </h2>
            <div class="2xl:py-[13px] pr-[20px] sm:py-[6px]">
                <button class="px-[25px] py-[9px] rounded-sm bg-[#212C5D] text-white font-montserrat">
                    View All
                </button>
            </div>
        </div>

        <!-- News Grid -->
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:py-[25px] lg:py-[12px] sm:py-[20px] min-[365px]:py-[12px] xl:gap-[22px] lg:gap-[10px] md:gap-[10px] min-[365px]:gap-[10px]">
            <!-- News Item -->
            <div class="relative group overflow-hidden rounded-lg">
                <!-- Image -->
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="rounded-lg w-full transition-all duration-500 group-hover:scale-110">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50  group-hover:opacity-100">
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>

                <!-- Date Text -->
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10 ">
                    <p class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] font-medium opacity-75">12 December, 2024</p>
                    <p class="2xl:text-[16px] xl:text-[14px] lg:text-[10px] font-bold mt-[11px]">Tom Got Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <!-- News Item -->
            <div class="relative group overflow-hidden rounded-lg">
                <!-- Image -->
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="rounded-lg w-full transition-all duration-500 group-hover:scale-110">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50  group-hover:opacity-100">
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>

                <!-- Date Text -->
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10 ">
                    <p class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] font-medium opacity-75">12 December, 2024</p>
                    <p class="2xl:text-[16px] xl:text-[14px] lg:text-[10px] font-bold mt-[11px]">Tom Got Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <!-- News Item -->
            <div class="relative group overflow-hidden rounded-lg">
                <!-- Image -->
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="rounded-lg w-full transition-all duration-500 group-hover:scale-110">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50  group-hover:opacity-100">
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>

                <!-- Date Text -->
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10 ">
                    <p class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] font-medium opacity-75">12 December, 2024</p>
                    <p class="2xl:text-[16px] xl:text-[14px] lg:text-[10px] font-bold mt-[11px]">Tom Got Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <!-- News Item -->
            <div class="relative group overflow-hidden rounded-lg">
                <!-- Image -->
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="rounded-lg w-full transition-all duration-500 group-hover:scale-110">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50  group-hover:opacity-100">
                </div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>

                <!-- Date Text -->
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10 ">
                    <p class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] font-medium opacity-75">12 December, 2024</p>
                    <p class="2xl:text-[16px] xl:text-[14px] lg:text-[10px] font-bold mt-[11px]">Tom Got Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>



        </div>
    </div>

    <!-- Sponsers section -->
    <div class="mb-[83px]">

        <div
            class="w-[84%] mx-auto text-gray text-center text-[18px] text-[#000000] opacity-75 
            leading-[45px] font-semibold pt-[24px] pb-[9px] font-montserrat">
            Sponsors
        </div>

        {{-- line break --}}
        <div class="border-b border-b-[#808080]"></div>

        <div
            class="w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] flex flex-wrap justify-center gap-[40px] md:gap-[100px] py-[30px]">

            <div class="py-[30px] flex justify-center">
                <img class="w-[88px] h-[88px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/1.png') }}" alt="KFC">
            </div>
            <div class="py-[46px] flex justify-center">
                <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/2.png') }}" alt="Sports network">
            </div>
            <div class="py-[46px] flex justify-center">
                <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/3.png') }}" alt="BKT">
            </div>
            <div class="py-[46px] flex justify-center">
                <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/4.png') }}" alt="kayo">
            </div>

        </div>

        {{-- line break --}}
        <div class="border-b border-b-[#808080]"></div>

        <div
            class="w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] flex flex-wrap justify-center gap-[40px] md:gap-[100px]">

            <div class="pt-[40px] pb-[50px] flex justify-center">
                <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/5.png') }}" alt="Foxtel">
            </div>
            <div class="pt-[40px] pb-[50px] flex justify-center">
                <img class="w-[99px] h-[54px] transition filter grayscale hover:grayscale-0"
                    src="{{ asset('storage/icons/6.png') }}" alt="weber">
            </div>

        </div>

        {{-- line break --}}
        <div class="border-b border-b-[#808080]"></div>

    </div>
@endsection
