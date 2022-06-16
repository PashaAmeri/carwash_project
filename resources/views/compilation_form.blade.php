@extends('layouts.html')


@section('content')

<!-- component -->
<div class="bg-white">

    <div class="container px-6 py-10 mx-auto">

        <form action="{{ route('reserve.create') }}" method="GET">

            <div class="main flex border rounded-full overflow-hidden m-4 select-none justify-between">

                <div class="title py-3 my-auto px-5 bg-blue-500 text-white text-sm font-semibold mr-3">Services</div>

                @foreach ($services as $service)
                                   
                <label class="flex radio p-2 cursor-pointer font-extralight text-xs">

                    <input class="my-auto transform scale-125" type="radio" name="service" value="{{ $service['ID'] }}">
                    <div class="title px-2 my-auto">{{ $service['name'] }}</div>

                </label>

                @endforeach

                <input name="date" type="date" class="border-gray-300 m-1 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                {{-- <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
         
                    <option>GTX2020</option>
                    <option>GRE2019</option>

                </select> --}}
    
            </div>

            <div class="text-center">

                <button class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500 w-1/2">Search</button>

            </div>

        </form>

    </div>

</div>
    
@endsection
