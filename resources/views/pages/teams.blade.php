@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <div class="h-[300px]  bg-[#05055a] relative flex justify-center items-center ">
        <img src="{{ asset('storage/T/bgt.png') }}" alt=""
            class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover">
        <h2 class="text-white text-[50px] font-montserrat font-bold relative z-10">Teams</h2>
    </div>
    {{-- ist section --}}
    <div class="2xl:px-[180px] xl:px-[120px] lg:px-[70px] pt-[47px]">
        <div class="w-[84%] mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-5 xl:gap-6 lg:gap-4 gap-6 ">
                <div class="bg-[#09154B] lg:col-span-1 rounded-[10px]">
                    <ul
                        class="xl:text-[14px] lg:text-[11px] text-[10px] font-montserrat font-medium text-white lg:space-y-4 uppercase py-5  ">
                        <li class="hover:bg-[#132782] px-5">STRIKERS</li>
                        <li class="hover:bg-[#132782] px-5">red bulls</li>
                        <li class="hover:bg-[#132782] px-5">STRIKERS</li>
                        <li class="hover:bg-[#132782] px-5">zalmi</li>
                        <li class="hover:bg-[#132782] px-5">timber wolves</li>
                        <li class="hover:bg-[#132782] px-5">Scochers</li>
                    </ul>
                </div>

                <div class="lg:col-span-4 ">
                    <div class="relative flex items-center overflow-hidden w-full min-[365px]:h-[200px] lg:h-full">

                        <!-- Left dark box -->
                        <div
                            class="sm:w-[250px] w-[150px] h-full bg-[#1D167D] rounded-tl-[10px] rounded-bl-[10px] z-10 relative">
                            {{-- image --}}
                            <div class="absolute sm:inset-0 top-8">
                                <img src="{{ asset('storage/T/344.png') }}" alt="">

                            </div>

                        </div>
                        {{-- bg image --}}
                        <div class="inset-0 absolute">
                            <img src="{{ asset('storage/T/tfb.png') }}" alt=""
                                class="w-full h-full object-cover rounded-[10px]">

                        </div>
                        {{-- team name --}}
                        <div class="absolute right-10  xl:right-60 lg:right-30 sm:right-30 flex items-center z-20">
                            <h2
                                class="text-white font-montserrat font-bold text-[16px] sm:text-[20px] lg:text-[22px] xl:text-[28px] 2xl:text-[36px]">
                                TFS STRIKERS
                            </h2>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- 2nd section --}}
    <div class="2xl:px-[180px] xl:px-[120px] lg:px-[70px] pt-[47px] ">
        <div class="w-[84%] mx-auto">
            <div class="relative">
                <div class="w-full h-full pb-[25px] absolute inset-0">
                    <img src="{{ asset('storage/T/fb.png') }}" alt=""
                        class="rounded-[10px] w-full h-full 2xl:h-[494px] object-cover">
                </div>
                <!-- Text on top of the image -->
                <h2
                    class="text-white text-center font-montserrat font-bold text-[18px] lg:text-[20px] 2xl:text-[25px] 2xl:py-[27px] z-10 relative shadow-lg">
                    FIXTURES
                </h2>
                {{-- upcoming match --}}
                <div
                    class="bg-white 2xl:mx-[102px] xl:mx-[80px] lg:mx-[60px] md:mx-[40px] mx-[40px]  rounded-[6px] relative z-10">
                    <div class="  border border-black rounded-[5px] mb-[20px]">
                        <div
                            class="bg-[#132782] text-white h-[45px] px-6 flex items-center text-[15px] 2xl:text-[18px] font-bold font-dm-sans 2xl:leading-60">
                            Upcoming
                            <hr class="flex-grow border-t-2 border-[#ffffff] ml-4">
                        </div>
                        {{-- grid --}}
                        <div class="px-5 grid grid-cols-1 md:grid-cols-3 items-center">
                            <!-- Left Side -->
                            <div class="md:text-left text-center">
                                <p
                                    class="2xl:text-[18px] xl:text-[16px] lg:text-[14px] md:text-[12px] text-[14px] font-bold font-dm-sans 2xl:leading-[27px]">
                                    19 Dec 2024 – 15th Match
                                </p>
                                <p
                                    class="text-black 2xl:text-[14px]  xl:text-[12px] lg:text-[10px] md:text-[9px] text-[11px] font-bold font-dm-sans 2xl:leading-[27px] opacity-65 mt-0">
                                    Islamabad
                                    Cricket
                                    Stadium</p>
                            </div>

                            <!-- Middle Section -->
                            <div class="grid grid-cols-3 items-center text-center md:mt-[23px] md:mb-[26px] my-[7px]">
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-10">
                                    <p
                                        class="2xl:text-[15px] lg:text-[13px] md:text-[12px] text-[12px] font-semibold font-dm-sans text-[#2F3F50]">
                                        Zalmi</p>
                                </div>

                                <p class="text-[14px] font-medium font-montserrat">vs</p>

                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-10">
                                    <p
                                        class="2xl:text-[15px] lg:text-[13px] md:text-[12px] text-[12px] font-semibold font-dm-sans text-[#2F3F50]">
                                        Warriors</p>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="md:text-right text-center md:pr-[22px] md:mb-[33px] md:mt-[20px] mb-[10px]">
                                <button
                                    class="border-[1px] border-[#0A0443] text-[#0A0443] px-5 py-2 rounded-full 2xl:text-[14px] xl:text-[12px] md:text-[11px] text-[11px] font-dm-sans font-bold">
                                    Match Centre
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- upcoming match --}}
                <div
                    class="bg-white 2xl:mx-[102px] xl:mx-[80px] lg:mx-[60px] md:mx-[40px] mx-[40px]  rounded-[6px] relative z-10">
                    <div class="  border border-black rounded-[5px] mb-[20px]">
                        <div
                            class="bg-[#132782] text-white h-[45px] px-6 flex items-center text-[15px] 2xl:text-[18px] font-bold font-dm-sans 2xl:leading-60">
                            Upcoming
                            <hr class="flex-grow border-t-2 border-[#ffffff] ml-4">
                        </div>
                        {{-- grid --}}
                        <div class="px-5 grid grid-cols-1 md:grid-cols-3 items-center">
                            <!-- Left Side -->
                            <div class="md:text-left text-center">
                                <p
                                    class="2xl:text-[18px] xl:text-[16px] lg:text-[14px] md:text-[12px] text-[14px] font-bold font-dm-sans 2xl:leading-[27px]">
                                    19 Dec 2024 – 15th Match
                                </p>
                                <p
                                    class="text-black 2xl:text-[14px]  xl:text-[12px] lg:text-[10px] md:text-[9px] text-[11px] font-bold font-dm-sans 2xl:leading-[27px] opacity-65 mt-0">
                                    Islamabad
                                    Cricket
                                    Stadium</p>
                            </div>

                            <!-- Middle Section -->
                            <div class="grid grid-cols-3 items-center text-center md:mt-[23px] md:mb-[26px] my-[7px]">
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-10">
                                    <p
                                        class="2xl:text-[15px] lg:text-[13px] md:text-[12px] text-[12px] font-semibold font-dm-sans text-[#2F3F50]">
                                        Zalmi</p>
                                </div>

                                <p class="text-[14px] font-medium font-montserrat">vs</p>

                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-10">
                                    <p
                                        class="2xl:text-[15px] lg:text-[13px] md:text-[12px] text-[12px] font-semibold font-dm-sans text-[#2F3F50]">
                                        Warriors</p>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="md:text-right text-center md:pr-[22px] md:mb-[33px] md:mt-[20px] mb-[10px]">
                                <button
                                    class="border-[1px] border-[#0A0443] text-[#0A0443] px-5 py-2 rounded-full 2xl:text-[14px] xl:text-[12px] md:text-[11px] text-[11px] font-dm-sans font-bold">
                                    Match Centre
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- button svg --}}
                <div class="text-center pb-[21px] relative">
                    <button>
                        <img src="{{ asset('storage/T/b.svg') }}" alt="" class="h-6">
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- 3rd section --}}
    <div class="2xl:px-[180px] xl:px-[120px] lg:px-[70px] pt-[47px] mb-[42px]">
        <div class="w-[84%] mx-auto">
            <div class="relative">

                <!-- Background image -->
                <div class="w-full h-full absolute inset-0 ">
                    <img src="{{ asset('storage/T/pbg.png') }}" alt=""
                        class="rounded-[10px] w-full h-full object-cover">
                </div>

                <!-- Content -->
                <div class="py-[22px] 2xl:mx-[80px] xl:mx-[70px] lg:mx-[60px] md:mx-[40px] mx-[40px] relative z-10">
                    <!-- Heading -->
                    <h2
                        class="text-white text-center font-montserrat font-bold text-[18px] lg:text-[20px] 2xl:text-[24px] shadow-lg">
                        PLAYERS
                    </h2>

                    <!-- Player grid -->
                    <div class="py-[34px]">
                        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-7 2xl:grid-cols-9 gap-4">

                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">
                            <img src="{{ asset('storage/T/i.png') }}" alt="Player">

                        </div>
                        {{-- button svg --}}
                        <div class="text-center pt-[35px] relative">
                            <button>
                                <img src="{{ asset('storage/T/b.svg') }}" alt="" class="h-6">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
