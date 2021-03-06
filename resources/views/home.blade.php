@extends('layouts.html')

@section('content')

<!-- component -->

<div class="container px-6 py-10 mx-auto md:py-16">
    <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
        <div class="w-full md:w-1/2">
            <div class="max-w-lg">
                <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                    Find your premium new car exported from Germany
                </h1>
                <p class="mt-2 text-gray-600">
                    We work with the best remunated car dealers in Germany to find
                    your new car.
                </p>
                <div class="grid gap-6 mt-8 sm:grid-cols-2">
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Premium selection</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Insurance</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>All legal documents</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>From German car dealers</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Payment Security</span>
                    </div>
                    <div class="flex items-center space-x-6 text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Fast shipping (+ Express)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center w-full md:w-1/2">
            <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80"
                alt="car photo" class="w-full h-full max-w-2xl rounded" />
        </div>
    </div>
</div>
<div class="bg-white">

    <div class="container px-6 py-10 mx-auto">

        <h3 class="text-gray-800">1st Chooes your delivery option</h3>

        <div class="flex items-center mt-5 space-x-6">

            <button
                class="flex items-center px-6 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                Standard
            </button>

            <button
                class="flex items-center px-6 py-2 font-medium tracking-wide text-white capitalize bg-gray-600 rounded-full hover:bg-gray-500 focus:outline-none focus:bg-gray-500">
                Express delivery
            </button>
            
        </div>
    
    </div>
    <div class="container px-6 py-10 mx-auto md:py-16">
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80"
                    alt="car photo" class="w-full h-full max-w-2xl rounded" />
            </div>
            <div class="w-full md:w-1/2">
                <div class="max-w-md mx-auto">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                        Why us?
                    </h1>
                    <p class="mt-5 leading-7 text-gray-600">
                        With us you will quickly get the car you want. With our partner
                        network of all known premium car manufacturers, it is possible
                        for us to respond to your special requests. <br />
                        Our logistics partners enable a fast delivery. We also offer the
                        option that the car is delivered to you by air.
                    </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fast Shipping</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Secure process</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Exclusive selection</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Premium service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-3xl px-6 py-10 mx-auto">
        <h1 class="text-2xl font-medium tracking-wide text-center text-gray-800 md:text-4xl">
            Contact with us
        </h1>
        <p class="mt-2 text-center text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="flex flex-col mt-6 space-y-5 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-5">
            <input type="text" placeholder="Name"
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
            <input type="email" placeholder="E-Mail"
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
        </div>
        <textarea name="message" id="message" placeholder="Message"
            class="w-full h-56 mt-5 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            spellcheck="false"></textarea>
        <div class="flex items-center justify-center mt-6">
            <button class="px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                Get in touch
            </button>
        </div>
    </div>

</div>
    
@endsection
