@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <div class="h-[300px] flex flex-col justify-center items-center mb-10 relative">
        <img src="{{ asset('storage/ranking/bg.png') }}" alt="" class="absolute w-full inset-0 h-full ">
        <h2 class="text-white text-[50px] font-bold relative">Rankings</h2>
    </div>

    {{-- ist section --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[150px] lg:px-[100px] h-[484px] mb-[60px]">
        {{-- team ranking --}}
        <div class="  bg-[#05055a] rounded-[5px] mb-5">
            <h1
                class="md:text-[24px] sm:text-[20px] min-[365px]:text-[18px] font-bold font-montserrat px-5 py-3.5 text-white ">
                Teams Ranking</h1>
        </div>

        {{-- button --}}
        <div class="mb-5 ">
            <div class="flex items-center justify-between">
                <!-- Teams Button -->
                <button
                    class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 rounded-[5px] border-2 border-[#05055a] text-[#05055a] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                    Teams
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#09154B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- View All Button -->
                <button
                    class="flex items-center gap-2  md:px-5 sm:px-3 min-[365px]:px-2 py-2 rounded-[5px] border-2 border-[#05055a] text-[#05055a] font-montserrat  md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                        fill="none">
                        <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#09154B" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- table main div --}}
        <div class="relative">
            {{-- image --}}
            <div>
                <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                    class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
            </div>

            {{-- IST table --}}
            <div class="absolute top-0 right-0 left-0 z-10 ">
                <table class="w-full  text-white font-dm-sans font-bold border-collapse ">
                    <thead>
                        <tr
                            class="border-b-[1px] border-[#0EA825]  min-[365px]:text-[12px] sm:text-[14px] md:text-[18px] font-bold">
                            <th class="sm:pl-5 text-center py-4">Pos</th>
                            <th class="sm:pl-5 text-left"></th>
                            <th class="sm:pl-5 sm:pr-10 min-[365px]:pl-3 text-left py-4">Teams</th>
                            <th class="sm:pl-5 sm:pr-8  min-[365px]:pr-5 text-center py-4">M</th>
                            <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">W</th>
                            <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">L</th>
                            <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">Pts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                            <td
                                class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                1.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                            </td>
                            <td
                                class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                        </tr>
                        <tr
                            class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                            <td
                                class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                2.</td>
                            <td class="sm:pr-0 min-[500px]:pr-3 min-[365px]:pr-2">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                            </td>
                            <td
                                class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                        </tr>
                        <tr
                            class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                            <td
                                class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                3.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                            </td>
                            <td
                                class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                        </tr>
                        <tr
                            class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                            <td
                                class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                4.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                            </td>
                            <td
                                class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                            <td
                                class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                                9</td>
                        </tr>
                        <tr>
                            <td colspan="7"
                                class="py-5 text-center text-[#14CD5B] text-[14px] font-montserrat font-medium ">
                                . Group A - Ranking
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    {{-- 2nd section --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[150px] lg:px-[100px] h-[484px] mb-[60px]">
        {{-- team ranking --}}
        <div class="  bg-[#05055a] rounded-[5px] mb-5">
            <h1
                class="md:text-[24px] sm:text-[20px] min-[365px]:text-[18px] font-bold font-montserrat px-5 py-3.5 text-white ">
                Teams Ranking</h1>
        </div>

        {{-- button --}}
        <div class="mb-5 ">
            <div class="flex items-center justify-between">
                <!-- Teams Button -->
                <div class="flex justify-center items-center gap-5">
                    <button
                        class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 rounded-[5px] border-2 border-[#05055a] text-[#05055a] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold">
                        Players
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#09154B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button
                        class="flex items-center md:gap-2 min-[365px]:gap-1 md:px-5 sm:px-3 min-[365px]:px-2 py-2 rounded-[5px] border-2 border-[#05055a] text-[#05055a] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                        Men
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                            fill="none">
                            <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#09154B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- View All Button -->
                <button
                    class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 rounded-[5px] border-2 border-[#05055a] text-[#05055a] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                        fill="none">
                        <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#09154B" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- table maiin div --}}
        <div class="relative">
            {{-- image --}}
            <div>
                <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                    class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
            </div>

            {{-- 2nd table --}}
            <div class="relative">
                <table class="w-full text-white font-dm-sans font-bold border-collapse ">
                    <thead
                        class="border-b-[1px] border-[#0EA825] min-[365px]:text-[12px] sm:text-[14px] md:text-[18px] font-bold">
                        <tr class="text-white text-left text-[18px] ">
                            <th class="text-center py-4">Pos</th>
                            <th></th>
                            <th>Teams</th>
                            <th>Names</th>
                            <th></th>
                            <th class="text-center">Scores</th>
                            <th class="text-center">Ratings</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- ist row --}}
                        <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                            <td class="text-center">1.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td>M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 2nd row --}}
                        <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                            <td class="text-center">2.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td>M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 3rd row --}}
                        <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                            <td class="text-center">3.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td>M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        {{-- 4th row --}}
                        <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                            <td class="text-center">4.</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                            </td>
                            <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                                <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                            </td>
                            <td>M.MASOOD</td>
                            <td class="">
                                <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                            </td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                        </tr>
                        <tr>
                            <td colspan="7"
                                class="py-5 text-center text-[#14CD5B] text-[14px] font-montserrat font-medium ">
                                . Group A - Ranking
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>


        </div>
    </div>


    <div class="relative mb-[350px] w-[84%] mx-auto">
        {{-- image --}}
        <div>
            <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
        </div>

        {{-- 2nd table --}}
        <div class="absolute top-0 right-0 left-0 z-10 ">
            <table class="w-full  text-white font-dm-sans font-bold border-collapse ">
                <thead>
                    <tr
                        class="border-b-[1px] border-[#0EA825]  min-[365px]:text-[12px] sm:text-[14px] md:text-[18px] font-bold">
                        <th class="sm:pl-5 text-center py-4">Pos</th>
                        <th class="sm:pl-5 text-left"></th>
                        <th class="sm:pl-5 sm:pr-10 min-[365px]:pl-3 text-left py-4">Teams</th>
                        <th class="sm:pl-5 sm:pr-8  min-[365px]:pr-5 text-center py-4">M</th>
                        <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">W</th>
                        <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">L</th>
                        <th class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4">Pts</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                        <td
                            class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            1.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                        </td>
                        <td
                            class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                    </tr>
                    <tr
                        class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                        <td
                            class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            2.</td>
                        <td class="sm:pr-0 min-[500px]:pr-3 min-[365px]:pr-2">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                        </td>
                        <td
                            class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                    </tr>
                    <tr
                        class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                        <td
                            class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            3.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                        </td>
                        <td
                            class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                    </tr>
                    <tr
                        class="border-b-[1px] border-[#32457E] min-[365px]:text-[12px] sm:text-[16px] font-semibold font-dm-sans ">
                        <td
                            class="sm:pl-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            4.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="">
                        </td>
                        <td
                            class="flex items-center min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-4 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                        <td
                            class="sm:pl-5 sm:pr-8 min-[365px]:pr-5 text-center py-3 min-[365px]:text-[12px] sm:text-[16px] font-dm-sans font-medium">
                            9</td>
                    </tr>
                    <tr>
                        <td colspan="7"
                            class="py-5 text-center text-[#14CD5B] text-[14px] font-montserrat font-medium ">
                            . Group A - Ranking
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

    <div class="relative mb-[400px] w-[84%] mx-auto">
        {{-- image --}}
        <div>
            <img src="{{ asset('storage/ranking/r.png') }}" alt=""
                class="absolute top-0 left-0 w-full h-[338px] rounded-[10px] object-cover">
        </div>

        {{-- 2nd table --}}
        <div class="relative">
            <table class="w-full text-white font-dm-sans font-bold border-collapse ">
                <thead
                    class="border-b-[1px] border-[#0EA825] min-[365px]:text-[12px] sm:text-[14px] md:text-[18px] font-bold">
                    <tr class="text-white text-left text-[18px] ">
                        <th class="text-center py-4">Pos</th>
                        <th></th>
                        <th>Teams</th>
                        <th>Names</th>
                        <th></th>
                        <th class="text-center">Scores</th>
                        <th class="text-center">Ratings</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- ist row --}}
                    <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                        <td class="text-center">1.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                        </td>
                        <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td>M.MASOOD</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                        </td>
                        <td class="text-center">9</td>
                        <td class="text-center">9</td>
                    </tr>
                    {{-- 2nd row --}}
                    <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                        <td class="text-center">2.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                        </td>
                        <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td>M.MASOOD</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                        </td>
                        <td class="text-center">9</td>
                        <td class="text-center">9</td>
                    </tr>
                    {{-- 3rd row --}}
                    <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                        <td class="text-center">3.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                        </td>
                        <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td>M.MASOOD</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                        </td>
                        <td class="text-center">9</td>
                        <td class="text-center">9</td>
                    </tr>
                    {{-- 4th row --}}
                    <tr class="text-left border-b-[1px] border-[#32457E] font-semibold font-dm-sans ">
                        <td class="text-center">4.</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2">
                        </td>
                        <td class="flex items-center text-[16px] font-dm-sans font-medium gap-3 py-3">
                            <img src="{{ asset('storage/ranking/s.png') }}" alt="">Strikers
                        </td>
                        <td>M.MASOOD</td>
                        <td class="">
                            <img src="{{ asset('storage/ranking/ico.png') }}" alt="">
                        </td>
                        <td class="text-center">9</td>
                        <td class="text-center">9</td>
                    </tr>
                    <tr>
                        <td colspan="7"
                            class="py-5 text-center text-[#14CD5B] text-[14px] font-montserrat font-medium ">
                            . Group A - Ranking
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
@endsection
