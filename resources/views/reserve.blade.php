@extends('layouts.html')


@section('content')

<!-- component -->
<div class="bg-white">

    <div class="container px-6 py-10 mx-auto">

        <form action="{{ route('reserve.store') }}" method="POST">

            @csrf

            <div class="main flex border rounded-full overflow-hidden m-4 select-none justify-between">

                <div class="title py-3 my-auto px-5 bg-blue-500 text-white text-sm font-semibold mr-3">Services</div>

                @foreach ($services as $service)
                                   
                <label class="flex radio p-2 cursor-pointer font-extralight text-xs">

                    <input class="my-auto transform scale-125" type="radio" name="service" value="{{ $service['ID'] }}">
                    <div class="title px-2 my-auto">{{ $service['name'] }}</div>

                </label>

                @endforeach

                {{-- <input name="date" type="date" class="border-gray-300 m-1 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"> --}}

                <input name="date" type="datetime-local" class="border-gray-300 m-1 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                {{-- <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
         
                    <option>GTX2020</option>
                    <option>GRE2019</option>

                </select> --}}
    
            </div>

            <div class="flex justify-between">

                <label class="p-2 cursor-pointer font-semibold text-xs w-1/2">

                    <span>Full Name:</span>
                    <input name="fullname" type="text" placeholder="full name" class="px-4 py-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />

                </label>

                <label class="p-2 cursor-pointer font-semibold text-xs w-1/2">

                    <span>Phone number:</span>
                    <input name="phone" type="text" placeholder="09123456789" class="px-4 py-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />

                </label>

            </div>

            <label class="p-2 cursor-pointer font-semibold text-xs w-1/2">
                
                <span>Description:</span>
                <textarea name="description" id="description" class="w-full h-12 px-4 py-1"></textarea>
             
            </label>

            <div class="text-center my-4">

                <button class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500 w-1/2  border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Reserve</button>

            </div>

        </form>

    </div>

</div>
    
@endsection
{{-- <label class="flex radio p-2 cursor-pointer">
    <input class="my-auto transform scale-125" type="radio" name="sfg" />
    <div class="title px-2">lesbian</div>
  </label> --}}