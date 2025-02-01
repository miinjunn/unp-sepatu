<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tinggal dikit lagi nih</title>
</head>

<body>
    <div class="bg-white p-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <h2 class="mt-[20px] text-3xl font-bold text-gray-800 text-center border-b-[3px] border-gray-800 pb-1">
                    Checkout
                </h2>
            </div>

            <div class="mt-12">
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-300">01</h3>
                        <h3 class="text-xl font-semibold text-gray-800 mt-1">Personal Details</h3>
                    </div>

                    <div class="md:col-span-2">
                        <form>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" placeholder="First name"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="text" placeholder="Last name"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="email" placeholder="Email address"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="number" placeholder="Phone number"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-4 mt-12">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-300">02</h3>
                        <h3 class="text-xl font-semibold text-gray-800 mt-1">Shopping Address</h3>
                    </div>

                    <div class="md:col-span-2">
                        <form>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" placeholder="Street address"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="text" placeholder="City"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="text" placeholder="State"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                                <div>
                                    <input type="number" placeholder="Zip Code"
                                        class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-4 mt-12">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-300">03</h3>
                        <h3 class="text-xl font-semibold text-gray-800 mt-1">Payment method</h3>
                    </div>

                    <div class="md:col-span-2">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="flex items-center">
                                <input type="radio" class="w-5 h-5 cursor-pointer" id="card" checked />
                                <label for="card" class="ml-4 flex gap-2 cursor-pointer">
                                    <img src="https://readymadeui.com/images/visa.webp" class="w-12" alt="card1" />
                                    <img src="https://readymadeui.com/images/american-express.webp" class="w-12"
                                        alt="card2" />
                                    <img src="https://readymadeui.com/images/master.webp" class="w-12"
                                        alt="card3" />
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input type="radio" class="w-5 h-5 cursor-pointer" id="paypal" />
                                <label for="paypal" class="ml-4 flex gap-2 cursor-pointer">
                                    <img src="https://readymadeui.com/images/paypal.webp" class="w-20"
                                        alt="paypalCard" />
                                </label>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-4 gap-4 mt-4">
                            <div class="col-span-2">
                                <input type="number" placeholder="Card number"
                                    class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                            </div>
                            <div>
                                <input type="number" placeholder="EXP."
                                    class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                            </div>
                            <div>
                                <input type="number" placeholder="CVV"
                                    class="px-4 py-3 bg-white text-gray-800 w-full text-sm border-2 rounded-md focus:border-blue-500 outline-none" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-end gap-4 mt-12">
                    <button type="button"
                        class="px-6 py-3 text-sm font-semibold tracking-wide bg-transparent border-2 text-gray-800 rounded-md hover:bg-gray-100">
                        Cancel</button>
                    <button type="button"
                        class="px-6 py-3 text-sm font-semibold tracking-wide bg-teal-600 text-white rounded-md hover:bg-teal-700">
                        Pay now</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
