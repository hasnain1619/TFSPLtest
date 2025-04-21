<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body class="">


    <div class="bg-red-100">
        <h1 class="text-center">Order</h1>

        <div class="flex flex-wrap justify-center md:justify-between gap-4 p-10 bg-white ">
            <div class="order-2 bg-amber-300 p-10 w-full sm:w-auto text-center">item1...at the 2nd place</div>
            <div class="order-3 bg-cyan-500 p-10 w-full sm:w-auto text-center">item2....at the third place</div>
            <div class="order-1 bg-amber-900 p-10 w-full sm:w-auto text-center text-white">item3....at the ist place
            </div>
        </div>
    </div>

    <h1 class="text-center">Ltr</h1>
    <div class="flex flex-wrap justify-center md:justify-between gap-4 p-10 bg-indigo-100">
        <div class="flex flex-col border bg-amber-100 order-1 p-10 w-full md:w-auto text-center md:text-left">
            <p>item1</p>
            <p>this is our ist para</p>
        </div>
        <div class="flex flex-col border bg-amber-100 order-2 p-10 w-full md:w-auto text-center md:text-left">
            <p>item2</p>
            <p>this is our 2st para</p>
        </div>
        <div class="flex flex-col border bg-amber-100 order-3 p-10 w-full md:w-auto text-center md:text-left">
            <p>item3</p>
            <p>this is our 3st para</p>
        </div>
    </div>

    <h1 class="text-center">RTL</h1>
    <div class="flex flex-wrap justify-center md:justify-between gap-4 p-10 bg-indigo-100 rtl:space-x-reverse"
        dir="rtl">
        <div class="flex flex-col items-center border bg-amber-100 p-10 w-full md:w-auto">
            <p>item1</p>
            <p>this is our ist box at 3rd place using rtl</p>
        </div>
        <div class="flex flex-col items-center border bg-amber-100 p-10 w-full md:w-auto">
            <p>item2</p>
            <p>this is our 2st para</p>
        </div>
        <div class="flex flex-col border items-center bg-amber-100 p-10 w-full md:w-auto">
            <p>item3</p>
            <p>this is our 3ed box at the ist place using rtl</p>
        </div>
    </div>

    <div class="">
        <p class="mx-10 text-center md:text-left">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium esse ex ipsam quisquam maxime. Officia
            optio, harum ducimus, quam veniam odio id nobis ex delectus itaque quia sapiente atque dolore.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore provident, quis debitis cupiditate,
            voluptates, laborum eligendi blanditiis necessitatibus consequatur est natus laudantium nemo aliquam ipsum
            accusamus veritatis atque culpa quos.
        </p>
        <p class="mx-10 text-center md:text-left">For more details, press the button</p>

        <!-- Wrapper div to center the button -->
        <div class=" mt-4">
            <button
                class="bg-blue-500 mx-10 p-4 text-white border-2 rounded-2xl hover:text-black hover:translate-y-0.5">
                Press here
            </button>
        </div>
    </div>

    <div class="bg-amber-200">
        <p class="mx-10 text-center md:text-left">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium esse ex ipsam quisquam maxime. Officia
            optio, harum ducimus, quam veniam odio id nobis ex delectus itaque quia sapiente atque dolore.
        </p>
        <p class="mx-10 text-center md:text-left">For more details, press the button</p>

        <!-- Wrapper div to center the buttons -->
        <div dir="rtl" class="flex flex-wrap gap-4 mt-4">
            <button
                class="bg-blue-500 mx-10 p-4 text-white border-2 rounded-2xl hover:text-black hover:translate-y-0.5 order-2">
                Button 1
            </button>
            <button
                class="bg-blue-500 mx-10 p-4 text-white border-2 rounded-2xl hover:text-black hover:translate-y-0.5">
                Button 2
            </button>
        </div>
    </div>




    <!-- Simple Grid (2 Columns) -->
    <section class="max-w-auto bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4"> Basic 2-Column Grid</h2>
        <div class="grid grid-cols sm:grid-cols-2 gap-4">
            <div class="bg-red-300 p-6 text-center rounded-lg">Item 1</div>
            <div class="bg-blue-300 p-6 text-center rounded-lg">Item 2</div>
        </div>
    </section>


    <section class="max-w-auto bg-amber-700 min-[450px]:bg-white p-6 drop-shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4"> Basic 2-Column Grid</h2>
        <div class="grid grid-cols sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-red-300 p-6 text-center rounded-lg">Item 1</div>
            <div class="bg-blue-300 p-6 text-center rounded-lg">Item 2</div>
            <div class="bg-red-500 p-6 text-center rounded-lg">Item 3</div>
            <div class="bg-blue-600 p-6 text-center rounded-lg">Item 4</div>
        </div>
    </section>


    <div class="max-w-auto bg-white p-6 drop-shadow-md grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="min-h-[80px] bg-amber-800 shadow-xl rounded"></div>
        <div class="min-h-[80px] bg-emerald-900 shadow-xl rounded"></div>
        <div class="min-h-[80px] bg-fuchsia-900 shadow-xl rounded "></div>
    </div>


    <!-- Practical Example: Grid Card Layout -->
    <section class="max-w-auto bg-white p-6 shadow-md rounded-lg mt-6">
        <h2 class="text-2xl font-semibold mb-4"> Practical Example: Card Layout</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Card Title 1</h3>
                    <p class="text-gray-600">This is a short description of the card content.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Card Title 2</h3>
                    <p class="text-gray-600">Another example card with an image and text.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/New Project.webp') }}" alt="Image" alt="Image"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Card Title 3</h3>
                    <p class="text-gray-600">Responsive design using Tailwind Grid.</p>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
