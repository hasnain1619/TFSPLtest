@extends('layouts.app')


@section('content')
    {{-- hero section --}}
    <div class="relative flex flex-col justify-center items-center h-[500px] overflow-hidden">
        <img src="{{ asset('storage/about/bg.png') }}" alt=""
            class=" absolute left-0  bottom-0 top-0 w-full h-full object-cover">
        <div
            class="relative flex flex-col items-center text-center 2xl:leading-[60px] xl:leading-[40px] lg:leading-[40px] min-[365px]:leading-[30px]">
            <h2 class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] min-[365px]:text-[20px] font-bold ">About us
            </h2>
            <p class="text-white 2xl:text-[16px] xl:text-[16px] lg:text-[15px]  font-montserrat capitalize opacity-[65%]">
                Read
                more about our mission and vision
            </p>
        </div>
    </div>

    {{-- ist section of the page --}}
    <div class="relative overflow-hidden">
        <div>
            <div class="mt-[48px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] ">


                <div class=" min-[365px]:mb-[50px] lg:w-full">
                    {{-- grid --}}
                    <div
                        class="lg:grid lg:grid-cols-2  2xl:gap-[220px] xl:gap-[180px] lg:gap-[100px] md:flex md:flex-col max-[1023px]:justify-center items-center ">

                        {{-- blue bar nd ist grid column --}}
                        <div class="lg:mt-[30px]  2xl:mt-[64px] 2xl:mb-[74px]  xl:mt-[44px] xl:mb-[54px] flex flex-col">
                            <!-- Blue Bar -->
                            <div
                                class="absolute left-[-10px] h-[26px] w-[9%] lg:h-[20px] min-[365px]:h-[17px] xl:h-[28px] lg:w-[10%] bg-[#09154B] 2xl:mt-2 lg:mt-0 min-[365px]:mt-1 rounded-full ">
                            </div>
                            {{-- text --}}
                            <div class="lg:max-w-[658px]">
                                <h2
                                    class="pb-[13px] sm:text-[20px] lg:text-[25px] xl:text-[30px] 2xl:text-[36px] font-montserrat font-bold text-[#09154B] 2xl:leading-[46px] xl:leading-[26px] lg:leading-[16px] ">
                                    Who We
                                    Are?
                                </h2>
                                <p
                                    class="text-gray-700 text-left lg:text-[12px] xl:text-[14px] 2xl:text-[16px] font-montserrat font-medium min-[1700px]:leading-[46px] 2xl:leading-[36px] xl:leading-[26px] lg:leading-[26px]  max-[1024px]:flex max-[1024px]:justify-center ">
                                    The Twenty Four Seven company is committed to promoting cricket in Pakistan, a nation
                                    where
                                    the
                                    sport is deeply ingrained in the culture. Established with the vision to foster talent
                                    and
                                    drive
                                    the
                                    development of cricket, we work tirelessly to support players at all levels, for both
                                    men
                                    and
                                    women.
                                    Over the years, we have played a vital role in nurturing the love for cricket, providing
                                    opportunities for aspiring cricketers, and elevating Pakistan's standing in
                                    international
                                    competitions. Our mission is to ignite the nation’s passion for the game and contribute
                                    to
                                    its
                                    continued excellence on the global stage.
                                </p>

                            </div>
                            <div
                                class=" lg:max-w-[658px] border-1 border-gray-200 xl:mt-[36px] xl:mb-[38px] lg:mt-[25px] lg:mb-[25px] min-[365px]:my-[15px] ">

                            </div>
                        </div>

                        <!-- Right Image Section (Single Image with Grid) -->
                        <div class=" flex lg:justify-end sm:justify-center  ">
                            <div class="box max-h-[555px]">
                                <img src="{{ asset('storage/about/2.png') }}" alt="" class="p-5  w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 2nd section of the page --}}
    <div class="relative overflow-hidden">
        <div class="my-[48px] w-[84%] mx-auto 2xl:px-[80px] xl:px-[60px] lg:px-[40px] overflow-hidden">
            <div
                class="lg:grid lg:grid-cols-2  2xl:gap-[154px] xl:gap-[60px] lg:gap-[20px] md:flex md:flex-col max-[1023px]:justify-center lg:mb-[74px] md:mb-[600px] sm:mb-[50px] min-[365px]:mb-[50px] lg:w-full items-center">
                {{-- img --}}
                <div class="flex lg:justify-start sm:justify-center ">
                    <div class="box max-h-[588px]">
                        <img src="{{ asset('storage/about/1.png') }}" alt="" class="p-5 object-fill w-full h-full ">
                    </div>
                </div>
                {{-- text --}}
                <div class="lg:mt-[30px]  xl:mt-[80px] sm:mt-[0px] flex flex-col">
                    <!-- Blue Bar -->
                    <div
                        class="absolute right-[-10px] lg:h-[20px] xl:h-[28px] 2xl:w-[28%] xl:w-[30%] lg:w-[30%] w-[60%] min-[365px]:h-[17px] bg-[#09154B] 2xl:mt-2 lg:mt-0 min-[365px]:mt-[35px] rounded-tl-full rounded-bl-full">
                    </div>
                    {{-- text --}}
                    <div>
                        <h2
                            class="pb-[13px] min-[365px]:mt-[30px] lg:mt-0   sm:text-[20px] lg:text-[25px] xl:text-[30px] 2xl:text-[36px] font-montserrat font-bold text-[#09154B] 2xl:leading-[46px] xl:leading-[26px] lg:leading-[16px] ">
                            What we do?
                        </h2>
                        <p
                            class="text-gray-700 text-left mt-3 lg:text-[10px] xl:text-[13px] 2xl:text-[16px] font-montserrat font-medium 2xl:leading-[46px] xl:leading-[26px] lg:leading-[24px]  max-[1024px]:flex max-[1024px]:justify-center max-w-[634px]">
                            As pioneers in creating premier cricket leagues, we aim to provide a platform where talent meets
                            opportunity, and where the love for the game transcends boundaries. Whether you're a seasoned
                            professional or an aspiring cricketer, our leagues are designed to foster camaraderie, celebrate
                            diversity, and inspire excellence.
                        </p>
                        <!-- Stats Section -->
                        <div class="flex flex-wrap gap-5 md:gap-[25px] mt-[24px] md:mt-10">
                            <div
                                class="flex flex-col justify-center items-center bg-[#09154B] text-white w-[140px] h-[80px] 2xl:w-[168px]  2xl:h-[92px]  xl:w-[148px]  xl:h-[82px] lg:w-[128px]  lg:h-[72px]  rounded-[15px]">
                                <p class="text-[36px] md:text-[48px] font-bold font-montserrat leading-none">2+</p>
                                <p class="text-[16px] md:text-[18px] font-bold font-montserrat leading-none">Years</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center bg-[#09154B] text-white w-[140px] h-[80px] 2xl:w-[168px]  2xl:h-[92px]  xl:w-[148px]  xl:h-[82px] lg:w-[128px]  lg:h-[72px] rounded-[15px]">
                                <p class="text-[36px] md:text-[48px] font-bold font-montserrat leading-none">5+</p>
                                <p class="text-[16px] md:text-[18px] font-bold font-montserrat leading-none">Years</p>
                            </div>
                        </div>

                    </div>
                    {{-- bottom line --}}
                    <div class="border-1 border-gray-200 xl:mt-[76px] lg:mt-[40px] min-[365px]:mt-[30px]">

                    </div>
                </div>




            </div>
        </div>
    </div>

    {{-- 2nd section --}}
    {{-- 
    <div class="w-[84%] mx-auto px-4 md:px-0 md:mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0">

            <!-- Left Image -->
            <div class="flex md:justify-start justify-center ">
                <div
                    class="w-full max-w-[588px] h-auto md:h-[588px] border-2 border-dashed border-black flex justify-center rounded-[25px]">
                    <img src="{{ asset('storage/about/1.png') }}" alt="" class="p-5 w-full h-auto">
                </div>
            </div>

            <!-- Right Content -->
            <div class="items-left flex flex-col">

                <!-- Blue Bar & Heading -->
                <div class="relative flex items-center mt-10 md:mt-20">
                    <!-- Heading -->
                    <h2
                        class="text-[28px] md:text-[36px] font-montserrat font-bold text-[#09154B] leading-[36px] md:leading-[46px]">
                        What we do?
                    </h2>
                    <div
                        class="absolute right-0 md:right-[-200px] h-6 md:h-8 w-[80%] md:w-[674px] bg-[#09154B] rounded-full hidden sm:block">
                    </div>
                </div>

                <!-- Paragraph -->
                <div>
                    <p
                        class="text-gray-700 text-left text-[14px] md:text-[16px] font-montserrat font-medium leading-[30px] md:leading-[46px] w-full md:w-[634px]">
                        As pioneers in creating premier cricket leagues, we aim to provide a platform where talent meets
                        opportunity, and where the love for the game transcends boundaries. Whether you're a seasoned
                        professional or an aspiring cricketer, our leagues are designed to foster camaraderie, celebrate
                        diversity, and inspire excellence.
                    </p>

                    <!-- Stats Section -->
                    <div class="flex flex-wrap gap-5 md:gap-[25px] mt-6 md:mt-10">
                        <div
                            class="flex flex-col justify-center items-center bg-[#09154B] text-white w-[140px] md:w-[168px] h-[80px] md:h-[92px] rounded-[15px]">
                            <p class="text-[36px] md:text-[48px] font-bold font-montserrat leading-none">2+</p>
                            <p class="text-[16px] md:text-[18px] font-bold font-montserrat leading-none">Years</p>
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-[#09154B] text-white w-[140px] md:w-[168px] h-[80px] md:h-[92px] rounded-[15px]">
                            <p class="text-[36px] md:text-[48px] font-bold font-montserrat leading-none">5+</p>
                            <p class="text-[16px] md:text-[18px] font-bold font-montserrat leading-none">Years</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 md:mt-18">
                    <hr class="border border-gray-200">
                </div>
            </div>

        </div>
    </div> --}}
@endsection
