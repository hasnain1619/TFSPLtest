@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <div class="h-[300px]  bg-[#05055a] relative flex justify-center items-center ">
        <img src="{{ asset('storage/matches/bg.png') }}" alt=""
            class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover">
        <h2 class="text-white 2xl:text-[50px] xl:text-[40px] min-[365px]:text-[30px] font-montserrat font-bold relative">
            Matches
        </h2>
    </div>

    <!-- Filters Section -->
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] lg:w-[88%] w-[94%] bg-white py-10">

        <div class="flex justify-between ">

            <div class="lg:flex xl:space-x-4 lg:space-x-1 md:space-y-3 min-[365px]:space-y-2 lg:flex-row md:flex-col">
                <button
                    class="border-2 border-[#0A0443] text-[#0A0443]  px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">Fixtures</button>
                <button
                    class="border-2 border-[#0A0443] text-[#0A0443] min-[365px]:px-5 min-[400px]:px-[31px] md:px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">Results</button>

                {{-- <div>
                    <select
                        class="border-2 border-[#0A0443] text-[#0A0443]  px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                        <option disabled selected>Teams</option>
                        <option value="Team A">Team A</option>
                        <option value="Team B">Team B</option>
                        <option value="Team C">Team C</option>
                    </select>
                </div>

                <div>
                    <select
                        class="border-2 border-[#0A0443] text-[#0A0443]  px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                        <option disabled selected>Date</option>
                        <option value="Today">Today</option>
                        <option value="Yesterday">Yesterday</option>
                        <option value="Last 7 Days">Last 7 Days</option>
                    </select>
                </div> --}}

                <div>
                    <button
                        class="border-2 border-[#0A0443] text-[#0A0443]  px-[26px] md:px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                        Teams <span class="lg:ml-2">▼</span>
                    </button>
                </div>

                <div>
                    <button
                        class="border-2 border-[#0A0443] text-[#0A0443]  px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                        Date <span class="ml-2">▼</span>
                    </button>
                </div>
            </div>

            {{-- <div>
                <select
                    class="border-2 border-[#0A0443] text-[#0A0443]  px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                    <option disabled selected>Men</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Both">Both</option>
                </select>
              </div> --}}



            <div class="">
                <button
                    class="border-2 border-[#0A0443] text-[#0A0443] min-[365px]:px-3 min-[420px]:px-6 md:px-7 py-2 rounded-[5px] text-[16px] font-bold font-montserrat">
                    Men <span class="md:ml-2">▼</span>
                </button>
            </div>

        </div>

    </div>

    <!-- Live Match -->
    <div class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px]  lg:w-[88%] w-[94%]">
        <div class=" border border-black rounded-[5px]  mb-13">
            {{-- table top bar --}}
            <div
                class="bg-[#09154B] text-white sm:h-[56px] rounded-tr-[3px] rounded-tl-[3px] px-6 flex items-center text-[18px] font-bold font-dm-sans leading-[60px]">
                Live <span class="ml-2 text-red-500">●</span>
                <hr class="flex-grow border-t-2 border-red-500 ml-3">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3  items-center max-[640px]:my-2 max-[640px]:px-15">
                <!-- Left Side -->
                <div class="max-[640px]:text-center">
                    <p class="lg:text-[18px] sm:text-[14px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] sm:text-[12px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px] opacity-65">
                        Islamabad Cricket
                        Stadium</p>
                </div>

                <!-- Middle Section -->
                <div class="grid grid-cols-3 items-center text-center mt-[31px] mb-[40px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>

                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center">
                    <button
                        class="border-[1px] border-[#0A0443] text-[#0A0443] px-5  py-2 rounded-full lg:text-[14px] sm:text-[12px] max-[640px]:text-[14px] font-dm-sans font-bold">
                        Match Centre
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- upcoming match --}}
    <div class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] lg:w-[88%] w-[94%]">
        <div class="  border border-black rounded-[5px]  mb-13">
            <div
                class="bg-[#09154B] text-white sm:h-[56px] rounded-tr-[3px] rounded-tl-[3px] px-6 flex items-center text-[18px] font-bold font-dm-sans leading-[60px]">
                Upcoming
                <hr class="flex-grow border-t-2 border-[#D6D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3  items-center max-[640px]:my-2 max-[640px]:px-15">
                <!-- Left Side -->
                <div class="max-[640px]:text-center">
                    <p class="lg:text-[18px] sm:text-[14px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] sm:text-[12px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px] opacity-65">
                        Islamabad Cricket
                        Stadium</p>
                </div>

                <!-- Middle Section -->
                <div class="grid grid-cols-3 items-center text-center mt-[31px] mb-[40px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>

                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center">
                    <button
                        class="border-[1px] border-[#0A0443] text-[#0A0443] px-5  py-2 rounded-full lg:text-[14px] sm:text-[12px] max-[640px]:text-[14px] font-dm-sans font-bold">
                        Match Centre
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- upcoming match --}}
    <div class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] lg:w-[88%] w-[94%]">
        <div class="  border border-black rounded-[5px]  mb-13">
            <div
                class="bg-[#09154B] text-white sm:h-[56px] rounded-tr-[3px] rounded-tl-[3px] px-6 flex items-center text-[18px] font-bold font-dm-sans leading-[60px]">
                Upcoming
                <hr class="flex-grow border-t-2 border-[#D6D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3  items-center max-[640px]:my-2 max-[640px]:px-15">
                <!-- Left Side -->
                <div class="max-[640px]:text-center">
                    <p class="lg:text-[18px] sm:text-[14px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] sm:text-[12px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px] opacity-65">
                        Islamabad Cricket
                        Stadium</p>
                </div>

                <!-- Middle Section -->
                <div class="grid grid-cols-3 items-center text-center mt-[31px] mb-[40px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>

                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center">
                    <button
                        class="border-[1px] border-[#0A0443] text-[#0A0443] px-5  py-2 rounded-full lg:text-[14px] sm:text-[12px] max-[640px]:text-[14px] font-dm-sans font-bold">
                        Match Centre
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- completed match --}}
    <div class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] lg:w-[88%] w-[94%]">
        <div class="  border border-black rounded-[5px]  mb-13">
            <div
                class="bg-[#09154B] text-white sm:h-[56px] rounded-tr-[3px] rounded-tl-[3px] px-6 flex items-center text-[18px] font-bold font-dm-sans leading-[60px]">
                Completed
                <hr class="flex-grow border-t-2 border-[#48D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3  items-center max-[640px]:my-2 max-[640px]:px-15">
                <!-- Left Side -->
                <div class="max-[640px]:text-center">
                    <p class="lg:text-[18px] sm:text-[14px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] sm:text-[12px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px] opacity-65">
                        Islamabad Cricket
                        Stadium</p>
                </div>

                <!-- Middle Section -->
                <div class="grid grid-cols-3 items-center text-center mt-[31px] mb-[40px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>

                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center">
                    <button
                        class="border-[1px] border-[#0A0443] text-[#0A0443] px-5  py-2 rounded-full lg:text-[14px] sm:text-[12px] max-[640px]:text-[14px] font-dm-sans font-bold">
                        Match Centre
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- completed match --}}
    <div class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] lg:w-[88%] w-[94%]">
        <div class="  border border-black rounded-[5px]  mb-13">
            <div
                class="bg-[#09154B] text-white sm:h-[56px] rounded-tr-[3px] rounded-tl-[3px] px-6 flex items-center text-[18px] font-bold font-dm-sans leading-[60px]">
                Completed
                <hr class="flex-grow border-t-2 border-[#48D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3  items-center max-[640px]:my-2 max-[640px]:px-15">
                <!-- Left Side -->
                <div class="max-[640px]:text-center">
                    <p class="lg:text-[18px] sm:text-[14px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] sm:text-[12px] font-bold font-dm-sans lg:leading-[27px] sm:leading-[20px] opacity-65">
                        Islamabad Cricket
                        Stadium</p>
                </div>

                <!-- Middle Section -->
                <div class="grid grid-cols-3 items-center text-center mt-[31px] mb-[40px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>

                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] sm:text-[13px] font-semibold font-dm-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center">
                    <button
                        class="border-[1px] border-[#0A0443] text-[#0A0443] px-5  py-2 rounded-full lg:text-[14px] sm:text-[12px] max-[640px]:text-[14px] font-dm-sans font-bold">
                        Match Centre
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- ending button --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px]">
        <div class=" mb-[72px]">
            <div class="flex justify-center items-center py-5">
                <button
                    class="px-4 py-2 bg-[#09154B] rounded-tr-[3px] rounded-tl-[3px] text-white sm:text-[14px] rounded-[5px] font-montserrat">
                    Load More
                </button>
            </div>
        </div>
    </div>
@endsection
