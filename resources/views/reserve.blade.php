@extends('layouts.html')


@section('content')

<!-- component -->
<div class="bg-white">

    <div class="container px-6 py-10 mx-auto">

        <form action="" method="POST">

            
<div class="main flex border rounded-full overflow-hidden m-4 select-none">
    
    <div class="title py-3 my-auto px-5 bg-blue-500 text-white text-sm font-semibold mr-3">Services</div>
  
    <label class="flex radio p-2 cursor-pointer font-extralight text-xs">

        <input class="my-auto transform scale-125" type="checkbox" name="service" value="{{ '$service->ID' }}">
        <div class="title px-2 my-auto">{{ '$service->name' }}</div>

    </label>
    
    </div>

    </form>
       
    </div>

</div>
    
@endsection
{{-- <label class="flex radio p-2 cursor-pointer">
    <input class="my-auto transform scale-125" type="radio" name="sfg" />
    <div class="title px-2">lesbian</div>
  </label> --}}