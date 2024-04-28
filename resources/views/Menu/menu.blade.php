@extends('layouts.index2')

@section('content')
     {{-- <section>
        <div class="flex justify-center items-center flex-col p-5">
            @foreach ($Menus as $menu)
                <div class="flex gap-5 ">
                    <h1>{{ $menu->name }}</h1>
                    <h1>{{ $menu->price }}</h1>
                    <h1>{{ $menu->description }}</h1>
                    <form action="{{ route('cart.add', $menu->id) }}" method="POST">
                        @csrf <button class="border rounded-lg w-10">Add to Cart</button>
                    </form>
                </div>


            @endforeach
        </div>
    </section> --}}





<div class="font-sans">
    <div class="p-4 mx-auto xl:max-w-7xl lg:max-w-5xl md:max-w-3xl max-w-lg">
      <h2 class="text-4xl font-extrabold text-white text-center mb-16">Food and Flavours</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

        @foreach ($Menus as $menu)

        <div class="bg-[#951f1f] p-2 overflow-hidden cursor-pointer">
          <div class="bg-black flex flex-col h-full p-3">
            <div class="w-full h-[250px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
              <img src="https://readymadeui.com/images/food1.webp" alt="food1"
                class="h-full w-full object-cover" />
            </div>
            
            <div class="p-6 text-center flex-1">
              <h3 class="text-lg font-semibold text-white">{{ $menu->name }}</h3>
              <p class="text-xs opacity-70  text-center py-3">{{ $menu->description }}</p> 
              <h4 class="text-2xl text-white font-bold mt-2">${{ $menu->price }}</h4>
            </div>
            
            <form action="{{ route('cart.add', $menu->id) }}" method="POST">
            @csrf 
            <button  class="bg-[#951f1f] font-semibold hover:bg-red-700 text-white text-sm px-2 py-2.5 w-full ">Add to Cart</button>
            </form>

          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>

@endsection 