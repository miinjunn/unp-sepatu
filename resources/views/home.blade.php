<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Cuci Sepatu</title>
</head>

<body>
    {{-- HEADER -- ----------------------------------------------------- --}}
    <header>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20 lg:-my-20">
            <!-- Component -->
            <div class="grid items-center gap-8 sm:gap-20 lg:grid-cols-2">
                <div>
                    <!-- Title -->
                    <h1 class="mb-4 text-4xl font-bold md:text-5xl">
                        REVIVE YOUR SOLES <br>
                        STEP OUT IN STYLE
                    </h1>
                    <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-xl lg:mb-8"> D-Wash membersihkan sepatu
                        hingga tampak baru dengan pelayanan terbaik
                    </p>
                    <p class="text-gray-500 mb-6">Jl. Soekarno Hatta no.15 Kota Kediri <br>
                        (Ruko kawi, blok B12)
                    </p>
                    <!-- Button -->
                    <div class="mb-6 flex items-stretch md:mb-10 lg:mb-12">
                        <a href="#"
                            class="mr-5 rounded-md bg-black px-8 py-4 text-center font-semibold text-white md:mr-6 lg:mr-8">
                            Coba Sekarang </a>
                        <a href="#"
                            class="flex items-center justify-center rounded-md border border-solid border-black px-6 py-3 text-center font-bold">
                            Learn more </a>
                    </div>
                    <p class="text-sm sm:text-base text-gray-500">Find us</p> <!-- App -->
                    <div class="mt-2 grid max-w-2xl grid-cols-6 items-center gap-10">
                        <a href="#">
                            <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=000000" alt=""
                                class="inline-block h-8 w-8" />
                        </a>
                        <a href="#">
                            <img src="https://img.icons8.com/?size=100&id=37325&format=png&color=1A1A1A" alt=""
                                class="inline-block h-10 w-10" />
                        </a>
                        <a href="#">
                            <img src="https://img.icons8.com/?size=100&id=84521&format=png&color=000000" alt=""
                                class="inline-block h-8 w-8" />
                        </a>
                        <a href="#">
                            <img src="https://img.icons8.com/?size=100&id=arKs3bvtn3Xr&format=png&color=000000"
                                alt="" class="inline-block h-8 w-8" />
                        </a>
                        <a href="#">
                            <img src="https://img.icons8.com/?size=100&id=QxTCUohbBw9U&format=png&color=000000"
                                alt="" class="grayscale inline-block h-10 w-10" />
                        </a>

                    </div>
                </div>
                <!-- Hero Image -->
                <img src="../img/sepatu_depan.jpeg" alt=""
                    class="inline-block h-[80%] w-full max-w-2xl rounded-4xl" />
            </div>
        </div>
    </header>

    {{-- HOW TO ORDER -- ----------------------------------------------------- --}}
    <section class="py-12">
        <!-- Container -->
        <div class="mx-auto flex w-full max-w-7xl flex-col items-center justify-center px-5 py-16 md:px-10 md:py-20">
            <!-- HEADING TEXT -->
            <h1 class="text-center text-3xl font-bold lg:text-4xl"> How to Order </h1>
            <p class="font-inter mt-5 text-center text-sm font-medium text-gray-800"> 4 EASY STEPS </p>
            <p class="mx-auto mb-12 mt-2 max-w-3xl px-5 text-center text-base font-light text-gray-500">
                Berikut ini adalah panduan lengkap mengenai tata cara pemesanan
            </p>

            <!-- HOW TO ORDER PART -->
            <div class="flex flex-col items-start justify-center lg:flex-row">
                <!-- BLOCK -->
                <div class="relative my-8 flex w-full rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-200">
                        <h2 class="text-3xl font-medium">1</h2>
                    </div>
                    <div class="ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium lg:mt-8"> Login </h2>
                        <p class="font-inter max-w-md pr-5 text-base text-gray-500"> Lorem ipsum dolor sit amet, elit ut
                            aliquam, purus sit lorem ipsum dolor sit amet </p>
                    </div>
                    <!-- MOBILE - HOW IT WORKS LINE -->
                    <svg class="absolute -bottom-[48px] left-[28px] lg:hidden" width="12" height="70"
                        viewBox="0 0 12 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 0.226497L0.226497 6L6 11.7735L11.7735 6L6 0.226497ZM6 94.7735L11.7735 89L6 83.2265L0.226497 89L6 94.7735ZM5 6V10.15H7V6H5ZM5 18.45V26.75H7L7 18.45H5ZM5 35.05L5 43.35H7V35.05H5ZM5 51.65L5 59.95H7L7 51.65H5ZM5 68.25L5 76.55H7L7 68.25H5ZM5 84.85L5 89H7V84.85H5Z"
                            fill="black"></path>
                    </svg>
                    <!-- DESKTOP - HOW IT WORKS LINE -->
                    <svg class="absolute left-24 right-0 top-7 hidden lg:block" width="170" height="12"
                        viewBox="0 0 170 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.226497 6L6 11.7735L11.7735 6L6 0.226497L0.226497 6ZM169.773 6L164 0.226497L158.227 6L164 11.7735L169.773 6ZM6 7H9.95V5H6V7ZM17.85 7H25.75V5H17.85V7ZM33.65 7H41.55V5H33.65V7ZM49.45 7H57.35V5H49.45V7ZM65.25 7H73.15V5H65.25V7ZM81.05 7H88.95V5H81.05V7ZM96.85 7H104.75V5H96.85V7ZM112.65 7H120.55V5H112.65V7ZM128.45 7H136.35V5H128.45V7ZM144.25 7H152.15V5H144.25V7ZM160.05 7H164V5H160.05V7Z"
                            fill="black" />
                    </svg>
                </div>
                <!-- BLOCK -->
                <div class="relative my-8 flex w-full rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-200">
                        <h2 class="text-3xl font-medium">2</h2>
                    </div>
                    <div class="ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium lg:mt-8"> Pilih Keluhan </h2>
                        <p class="font-inter max-w-md pr-5 text-base text-gray-500"> Lorem ipsum dolor sit amet, elit ut
                            aliquam, purus sit lorem ipsum dolor sit amet </p>
                    </div>
                    <!-- MOBILE - HOW IT WORKS LINE -->
                    <svg class="absolute -bottom-[48px] left-[28px] lg:hidden" width="12" height="70"
                        viewBox="0 0 12 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 0.226497L0.226497 6L6 11.7735L11.7735 6L6 0.226497ZM6 94.7735L11.7735 89L6 83.2265L0.226497 89L6 94.7735ZM5 6V10.15H7V6H5ZM5 18.45V26.75H7L7 18.45H5ZM5 35.05L5 43.35H7V35.05H5ZM5 51.65L5 59.95H7L7 51.65H5ZM5 68.25L5 76.55H7L7 68.25H5ZM5 84.85L5 89H7V84.85H5Z"
                            fill="black"></path>
                    </svg>
                    <!-- DESKTOP - HOW IT WORKS LINE -->
                    <svg class="absolute left-24 right-0 top-7 hidden lg:block" width="170" height="12"
                        viewBox="0 0 170 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.226497 6L6 11.7735L11.7735 6L6 0.226497L0.226497 6ZM169.773 6L164 0.226497L158.227 6L164 11.7735L169.773 6ZM6 7H9.95V5H6V7ZM17.85 7H25.75V5H17.85V7ZM33.65 7H41.55V5H33.65V7ZM49.45 7H57.35V5H49.45V7ZM65.25 7H73.15V5H65.25V7ZM81.05 7H88.95V5H81.05V7ZM96.85 7H104.75V5H96.85V7ZM112.65 7H120.55V5H112.65V7ZM128.45 7H136.35V5H128.45V7ZM144.25 7H152.15V5H144.25V7ZM160.05 7H164V5H160.05V7Z"
                            fill="black" />
                    </svg>
                </div>
                <!-- BLOCK -->
                <div class="relative my-8 flex w-full rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-200">
                        <h2 class="text-3xl font-medium">3</h2>
                    </div>
                    <div class="ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium lg:mt-8"> Solusi </h2>
                        <p class="font-inter max-w-md pr-5 text-base text-gray-500"> Lorem ipsum dolor sit amet, elit ut
                            aliquam, purus sit lorem ipsum dolor sit amet </p>
                    </div>
                    <!-- MOBILE - HOW IT WORKS LINE -->
                    <svg class="absolute -bottom-[48px] left-[28px] lg:hidden" width="12" height="70"
                        viewBox="0 0 12 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 0.226497L0.226497 6L6 11.7735L11.7735 6L6 0.226497ZM6 94.7735L11.7735 89L6 83.2265L0.226497 89L6 94.7735ZM5 6V10.15H7V6H5ZM5 18.45V26.75H7L7 18.45H5ZM5 35.05L5 43.35H7V35.05H5ZM5 51.65L5 59.95H7L7 51.65H5ZM5 68.25L5 76.55H7L7 68.25H5ZM5 84.85L5 89H7V84.85H5Z"
                            fill="black"></path>
                    </svg>
                    <!-- DESKTOP - HOW IT WORKS LINE -->
                    <svg class="absolute left-24 right-0 top-7 hidden lg:block" width="170" height="12"
                        viewBox="0 0 170 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.226497 6L6 11.7735L11.7735 6L6 0.226497L0.226497 6ZM169.773 6L164 0.226497L158.227 6L164 11.7735L169.773 6ZM6 7H9.95V5H6V7ZM17.85 7H25.75V5H17.85V7ZM33.65 7H41.55V5H33.65V7ZM49.45 7H57.35V5H49.45V7ZM65.25 7H73.15V5H65.25V7ZM81.05 7H88.95V5H81.05V7ZM96.85 7H104.75V5H96.85V7ZM112.65 7H120.55V5H112.65V7ZM128.45 7H136.35V5H128.45V7ZM144.25 7H152.15V5H144.25V7ZM160.05 7H164V5H160.05V7Z"
                            fill="black" />
                    </svg>
                </div>

                <!-- BLOCK -->
                <div class="relative my-8 flex w-full rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-200">
                        <h2 class="text-3xl font-medium">4</h2>
                    </div>
                    <div class="ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium lg:mt-8"> Konfirmasi </h2>
                        <p class="font-inter max-w-md pr-5 text-base text-gray-500"> Lorem ipsum dolor sit amet, elit
                            ut
                            aliquam, purus sit lorem ipsum dolor sit amet </p>
                    </div>
                </div>
    </section>

    {{-- OUR SERVICES -- ----------------------------------------------------- --}}
    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20 -mt-20">
            <!-- Title -->
            <h2 class="mx-auto mb-8 max-w-3xl text-center text-3xl font-bold md:mb-12 md:text-5xl lg:mb-16">OUR
                SERVICES</h2>
            <!-- Content -->
            <div
                class="flex flex-col items-center justify-center bg-contain bg-center pt-10 bg-[url('https://assets.website-files.com/6458c625291a94a195e6cf3a/648825fca218588cb636c341_Group%2048114.png')]">
                <div class="flex flex-col justify-around gap-4 md:flex-col lg:flex-row">
                    <div class="rounded-md border border-solid border-gray-300 bg-white p-6 text-black w-sm py-10">
                        <h5 class="mb-2 text-xl font-bold"> Cleaning </h5>
                        <p class="text-sm"> Pembersihan profesional untuk mengembalikan sepatu Anda ke kondisi seperti
                            baru </p>
                    </div>

                    <div class="rounded-md border border-solid border-gray-300 bg-gray-100 p-6 text-black w-sm py-10"
                        tabIndex="-1" href="#w-tabs-2-data-w-pane-1">
                        <h5 class="mb-2 text-xl font-bold">Repair</h5>
                        <p class="text-sm">
                            Perbaikan sepatu untuk meningkatkan daya tahan dan kenyamanan
                        </p>
                    </div>

                    <div class="rounded-md border border-solid border-gray-300 bg-white p-6 text-black w-sm py-10">
                        <h5 class="mb-2 text-xl font-bold">Delivery</h5>
                        <p class="text-sm"> Layanan antar jemput. <br>
                            Cukup pesan dari rumah, hemat waktu & tenaga </p>
                    </div>

                </div>
                <div class="max-w-5xl">
                    <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6488257b75d6a7b950248536_Group%2048113.svg"
                        alt="" class="mt-16 inline-block" />
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER -- ----------------------------------------------------- --}}
    <footer class="bg-gray-800">
        <div class="relative mx-auto max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-10">
            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-teal-600 lg:justify-start">
                        <h1>INI LOGO</h1>
                    </div>

                    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-300 lg:text-left">
                        Sistem pakar dengan metode Forward-chaining. <br>
                        Dibuat untuk memenuhi tugas skripsi. <br>
                        - Dira
                    </p>
                </div>

                {{-- BACK TO TOP (optional) --}}
                <div class="absolute end-4 top-4 pt-8 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
                    <a class="inline-block rounded-full bg-teal-600 p-2 text-white shadow transition hover:bg-teal-500 sm:p-3 lg:p-4"
                        href="/">
                        <span class="sr-only">Back to top</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

            </div>

            <p class="mt-12 text-center text-sm text-gray-300 lg:text-right">
                Copyright &copy; 2025. All rights reserved.
            </p>
        </div>
    </footer>


</body>

</html>
