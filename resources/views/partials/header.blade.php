<div class="absolute top-0 left-0 w-full z-10 bg-transparent">
    <div class="flex justify-between items-center mx-[20px] md:mx-[30px] xl:mx-[80px] py-[18px] md:py-[20px]">
        <!-- Logo -->
        <div class="object-cover object-center">
            <img src="{{ asset('storage/tfspl.png') }}" alt="Logo"
                class="max-w-[150px] md:max-w-[160px] h-[40px] md:h-[44px] ">
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden text-white text-2xl " onclick="toggleMenu()">
            ☰
        </button>

        <!-- Navigation (Hidden on small screens, flex on md and above) -->
        <div id="nav-menu" class="hidden md:flex">
            <nav>
                <ul
                    class="flex flex-col md:flex-row md:space-x-2 lg:space-x-[39px] xl:space-x-[69px] text-white text-[14px] md:text-[16px] font-semibold font-montserrat text-center md:text-left">
                    <li class="relative group cursor-pointer hover:text-gray-300">
                        <a href="/" class="block">Home</a>
                        <!-- Dots -->
                        <div
                            class="absolute left-0 right-0 mx-auto flex justify-center space-x-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        </div>
                    </li>

                    <li class="relative group cursor-pointer hover:text-gray-300">
                        <a href="/about" class="block">About</a>
                        <div
                            class="absolute left-0 right-0 mx-auto flex justify-center space-x-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        </div>
                    </li>

                    <li class="relative group cursor-pointer hover:text-gray-300">
                        <a href="/matches" class="block">Matches</a>
                        <div
                            class="absolute left-0 right-0 mx-auto flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        </div>
                    </li>

                    <li class="relative group cursor-pointer hover:text-gray-300">
                        <a href="/ranking" class="block">Ranking</a>
                        <div
                            class="absolute left-0 right-0 mx-auto flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        </div>
                    </li>

                    <li class="relative group cursor-pointer hover:text-gray-300">
                        <a href="/news" class="block">News</a>
                        <div
                            class="absolute left-0 right-0 mx-auto flex justify-center space-x-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                            <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>

                        </div>
                    </li>
                </ul>
            </nav>

        </div>

        <!-- Button (Adjusted size for smaller screens) -->
        <div class="hidden md:flex">
            <button
                class="border border-white text-[14px] md:text-[16px] font-montserrat font-semibold text-white px-6 md:px-10 py-2 rounded-full flex items-center space-x-2 shadow-lg">
                <span>Gallery</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 15 14"
                    class="font-weight" fill="none">
                    <path d="M8.68701 13L13.687 7M13.687 7L8.68701 1M13.687 7L1.68701 7" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default, shown in column format when toggled) -->
    <div id="mobile-menu" class="hidden flex-col space-y-4 bg-[#09154B] text-white text-center py-4 md:hidden">
        <a href="/" class="hover:text-gray-300 block py-2">Home</a>
        <a href="/about" class="hover:text-gray-300 block py-2">About</a>
        <a href="/matches" class="hover:text-gray-300 block py-2">Matches</a>
        <a href="/ranking" class="hover:text-gray-300 block py-2">Ranking</a>
        <a href="/news" class="hover:text-gray-300 block py-2">News</a>

        <!-- Button in Mobile Menu -->
        <button
            class="border border-white text-[14px] font-montserrat font-semibold text-white px-6 py-2 rounded-full flex items-center space-x-2 shadow-lg mx-auto mt-4">
            <span>Gallery</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 15 14"
                class="font-weight" fill="none">
                <path d="M8.68701 13L13.687 7M13.687 7L8.68701 1M13.687 7L1.68701 7" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>

<!-- Mobile Menu Toggle Script -->
<script>
    function toggleMenu() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    }
</script>
