@extends('layouts.app')


@section('content')
    {{-- hero section --}}
    <div class="relative flex flex-col justify-center items-center h-[500px] overflow-hidden">
        <img src="{{ asset('storage/newpage/bg.png') }}" alt=""
            class="absolute left-0 bottom-0 top-0 w-full h-[500px] object-cover" />

        <div
            class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] lg:px-[90px] sm:px-[20px] min-[365px]:px-[20px] relative flex flex-col items-center">
            <p
                class="text-white text-[28px] sm:text-[30px] lg:text-[30px] xl:text-[40px] 2xl:text-[50px]
                      font-bold font-montserrat leading-[60px] ">
                Zalmi and Strikers face off in what promises to be a thrilling encounter
            </p>
        </div>
    </div>




    <div
        class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] lg:px-[90px] sm:px-[20px] min-[365px]:px-[20px] 2xl:py-[61px] xl:py-[35px]  py-[21px]">
        <div class=" rounded-[20px]   relative ">
            <!-- Back Button (Left Arrow) -->
            <button class="absolute top-5 left-[-58px]  text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                    <circle cx="17.5" cy="17.5" r="17.5" transform="matrix(-1 0 0 1 35 0)" fill="#09154B" />
                    <path d="M19 12L14 18L19 24" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Heading -->
            <h2 class="text-[20px] sm:text-[26px] lg:text-[30px] font-bold font-montserrat text-[#09154B] leading-[46px] ">
                Strikers edged out Team Zalmi by 3 runs in a high-stakes match filled with dramatic moments.
            </h2>
        </div>

        {{-- ist para --}}
        <div class="">
            <p class="font-medium font-montserrat text-[16px] leading-[46px] tex-[#0D0C22] opacity-75">
                First Innings Recap The Strikers won the toss and elected to bat first. Jason Roy opened the innings with a
                bang, smashing a quickfire 45 off 28 balls. However, Zalmi’s Zubair Malik struck twice in the powerplay,
                removing both openers. Rohan Mehra anchored the innings with a composed 60 off 50 balls, while the lower
                order
                chipped in with valuable runs. The Strikers posted a competitive total of 165/7 in their 20 overs.

            </p>
            <p class="font-medium font-montserrat text-[16px] leading-[46px] tex-[#0D0C22] opacity-75">
                Second Innings Recap Chasing 166, Team Zalmi got off to a shaky start, losing two wickets in the powerplay.
                Ahmad Ali steadied the ship with a counter-attacking 70 off 42 balls, partnering with Sameer Khan, who
                contributed a crucial 40. The game went down to the wire, with Zalmi needing 12 runs off the last over.
            </p>
        </div>

        {{-- image --}}
        <div class="rounded-[12px] overflow-hidden my-6">
            <img src="{{ asset('storage/newpage/1.png') }}" alt="" class="w-full h-full object-cover">
        </div>

        <!-- Additional Content -->
        <p class="font-medium font-montserrat text-[16px] leading-[46px] text-[#0D0C22] opacity-75">
            For Zalmi, Ahmad Ali’s valiant effort was the highlight of the match, but the team fell just short of the
            finish line. Their middle-order struggles and a lack of acceleration in the final overs proved to be the
            deciding factors.
        </p>
        <p class="font-medium font-montserrat text-[16px] leading-[46px] text-[#0D0C22] opacity-75">
            Player of the Match Rohan Mehra (Strikers) for his match-winning knock of 60 runs and
            exceptional leadership on the field.
        </p>

        <!-- Fan Reactions -->
        <p class="font-medium font-montserrat text-[16px] leading-[46px] text-[#0D0C22] opacity-75">Fan Reactions</p>
        <ul class="list-disc pl-4 space-y-2 text-[#17109E] opacity-75 font-montserrat text-[16px]">
            <li><span class="">“What a game! Both teams played their hearts out. Strikers just had that
                    extra edge today.”</span></li>
            <li><span class="">“Ahmad Ali’s innings was pure class! Unlucky for Zalmi, but they’ll bounce
                    back.”</span></li>
            <li><span class="">“Prakash Patel’s spin is a delight to watch. He’s been phenomenal this
                    season.”</span></li>
        </ul>


        <div class="flex flex-col justify-between lg:flex-row xl:mt-0 lg:mt-3 lg:gap-0 min-[365px]:gap-3">
            <p class="mt-6 text-[#09154B] font-montserrat xl:text-[16px] lg:text-[14px]">Stay tuned for more updates and
                analysis from the
                world of cricket!</p>

            <!-- Pagination Buttons -->
            <div class="flex justify-center lg:justify-end 2xl:gap-[44px] xl:gap-[20px] lg=:gap-3 min-[365px]:gap-4 ">
                <button
                    class="2xl:px-6 2xl:py-[11px] xl:px-4 xl:py-[6px] lg:px-3 lg:py-[2px] min-[365px]:px-4 min-[365px]:py-[9px] bg-[#09154B] text-white  2xl:text-[14px] xl:text-[11px] lg:text-[9px] min-[365px]:text-[12px] font-montserrat font-normal rounded-[5px] ">❮
                    Previous Post</button>
                <button
                    class="2xl:px-6 2xl:py-[11px] xl:px-4 xl:py-[6px] lg:px-3 lg:py-[2px] min-[365px]:px-4 min-[365px]:py-[9px] bg-[#09154B] text-white  2xl:text-[14px] xl:text-[11px] lg:text-[9px] min-[365px]:text-[12px] font-montserrat font-normal rounded-[5px]">Next
                    Post ❯</button>
            </div>
        </div>


    </div>




    {{-- <div class="w-[84%] mx-auto px-[180px] py-12">
        <div class=" rounded-[20px] p-6 sm:p-10 relative overflow-hidden">
            <!-- Back Button (Left Arrow) -->
            <button class="absolute top-6 left-6 bg-[#00000066] text-white p-2 rounded-full">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Heading -->
            <h2 class="text-[28px] sm:text-[36px] lg:text-[40px] font-bold font-montserrat text-[#09154B] mb-6">
                Strikers edged out Team Zalmi by 3 runs in a high-stakes match filled with dramatic moments.
            </h2>

            <!-- Paragraphs -->
            <p class="text-[#09154B] mb-4 font-montserrat text-[16px] leading-[1.7]">
                <strong>First Innings Recap</strong> The Strikers won the toss and elected to bat first. Jason Roy opened
                the innings with a bang, smashing a quickfire 45 off 28 balls. However, Zalmi’s Zubair Malik struck twice in
                the powerplay, removing both openers. Rohan Mehra anchored the innings with a composed 60 off 50 balls,
                while the lower order chipped in with valuable runs. The Strikers posted a competitive total of 165/7 in
                their 20 overs.
            </p>
            <p class="text-[#09154B] mb-4 font-montserrat text-[16px] leading-[1.7]">
                <strong>Second Innings Recap</strong> Chasing 166, Team Zalmi got off to a shaky start, losing two wickets
                in the powerplay. Ahmad Ali steadied the ship with a counter-attacking 70 off 42 balls, partnering with
                Sameer Khan, who contributed a crucial 40. The game went down to the wire, with Zalmi needing 12 runs off
                the last over.
            </p>

            <!-- Image -->
            <div class="rounded-[12px] overflow-hidden my-6">
                <img src="{{ asset('storage/newpage/1.png') }}" alt="" class="w-full h-auto object-cover">
            </div>

            <!-- Additional Content -->
            <p class="text-[#09154B] mb-4 font-montserrat text-[16px] leading-[1.7]">
                For Zalmi, Ahmad Ali’s valiant effort was the highlight of the match, but the team fell just short of the
                finish line. Their middle-order struggles and a lack of acceleration in the final overs proved to be the
                deciding factors.
            </p>
            <p class="text-[#09154B] mb-4 font-montserrat text-[16px] leading-[1.7]">
                <strong>Player of the Match</strong> Rohan Mehra (Strikers) for his match-winning knock of 60 runs and
                exceptional leadership on the field.
            </p>

            <!-- Fan Reactions -->
            <p class="text-[#09154B] mb-2 font-semibold font-montserrat">Fan Reactions</p>
            <ul class="list-disc pl-6 space-y-2 text-[#09154B] font-montserrat text-[16px]">
                <li><span class="text-[#1D4ED8]">“What a game! Both teams played their hearts out. Strikers just had that
                        extra edge today.”</span></li>
                <li><span class="text-[#1D4ED8]">“Ahmad Ali’s innings was pure class! Unlucky for Zalmi, but they’ll bounce
                        back.”</span></li>
                <li><span class="text-[#1D4ED8]">“Prakash Patel’s spin is a delight to watch. He’s been phenomenal this
                        season.”</span></li>
            </ul>

            <!-- Footer -->
            <p class="mt-6 text-[#09154B] font-montserrat text-[16px]">Stay tuned for more updates and analysis from the
                world of cricket!</p>

            <!-- Pagination Buttons -->
            <div class="flex justify-end mt-8 gap-4">
                <button class="px-6 py-2 bg-[#09154B] text-white text-sm font-medium rounded-[8px]">❮ Previous Post</button>
                <button class="px-6 py-2 bg-[#09154B] text-white text-sm font-medium rounded-[8px]">Next Post ❯</button>
            </div>
        </div>
    </div> --}}
















    {{-- <div class="w-[94%] mx-auto px-[180px] py-[61px]">

        <div class="flex gap-[25px] justify-center">
            <!-- Back Button (Left Arrow) -->
            <div>
                <button class="text-white p-2 rounded-full mt-[28px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <circle cx="17.5" cy="17.5" r="17.5" transform="matrix(-1 0 0 1 35 0)" fill="#09154B" />
                        <path d="M19 12L14 18L19 24" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <!-- Heading -->
            <h2 class="text-[28px] sm:text-[36px] lg:text-[40px] font-bold font-montserrat text-[#09154B] max-w-[1296px] ">
                Strikers edged out Team Zalmi by 3 runs in a high-stakes match filled with dramatic moments.
            </h2>


        </div>

    </div> --}}
@endsection
