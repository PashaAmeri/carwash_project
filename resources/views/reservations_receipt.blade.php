@extends('layouts.html')

@section('content')

<div class="flex justify-center p-4">
    <div class="border-b border-gray-200 shadow">
        <table class="">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        code
                    </th>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Name
                    </th>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Phone Number
                    </th>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Service Name
                    </th>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Date
                    </th>

                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Description
                    </th>
                    <th class="px-4 py-2 text-xs text-gray-500 ">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                    
                <tr class="whitespace-nowrap">
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $reservation -> ID}}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $reservation -> full_name}}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $reservation -> phone_number }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{ $service -> name }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                            {{ $reservation -> date . ' ' . $reservation -> time}}
                        </div>
                    </td>
                   
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                            {{ $reservation -> description }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                            {{ $service -> price }}
                        </div>
                    </td>
                </tr>
                <!--end tr-->
                <tr class="text-white bg-gray-800 text-center">
                    <th colspan="5"></th>
                    <td class="text-sm font-bold"><b>Total</b></td>
                    <td class="text-sm font-bold"><b>{{ $reservation -> total_price }} T</b></td>
                </tr>
                <!--end tr-->

            </tbody>
        </table>

        <a href="/edit/{{ $reservation -> id}}" class="btn btn-primaryflex items-center px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
            Edit
        </a>
    </div>
</div>

@endsection