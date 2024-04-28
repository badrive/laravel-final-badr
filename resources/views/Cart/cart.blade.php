@extends('layouts.index2')

@section('content')
    {{-- <h2>Your Cart</h2>

    @foreach (Auth::user()->menus as $cart)
        
        <h1>{{ $cart->id }}</h1>

        <input type="hidden" name="menuId" value="{{ $cart->id }}">

        <div class="flex items-center rounded border border-gray-200">
            <label for="Quantity" class="sr-only"> Quantity </label>

            <div class="flex items-center w-full">

               
                <form action="{{ route('cart.update.minus', $cart->id) }}" method="POST">
                    @csrf
                    <button type="submit" name="quantity" value="{{ $cart->pivot->quantity - 1 }}"
                        class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &minus;
                    </button>
                </form>


                <input type="number" id="Quantity" value="{{ $cart->pivot->quantity }}"
                    class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                    readonly />

                
                <form action="{{ route('cart.update.add', $cart->id) }}" method="POST">
                    @csrf
                    <button type="submit" name="quantity" value="{{ $cart->pivot->quantity + 1 }}"
                        class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &plus;
                    </button>
                </form>
                
                <form action="{{ route('cart.delete', $cart) }}" method="post">
                    @csrf
                    <input name="test" value="{{ $cart->id }}" type="hidden">
                    
                    <button type="submit" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        &times;
                    </button>
                </form>
               
            </div>
        </div>
    @endforeach
    <form action="/session" method="GET">
        @csrf
        <button>
            proceed to purchase
        </button>
    </form> --}}

{{-- ---------------- --}}
    <div class="font-[sans-serif] bg-white">
        <div class="lg:max-w-7xl max-w-xl mx-auto">
          <h2 class="text-3xl font-extrabold text-[#333] p-5">Shopping Cart</h2>
          <div class="grid lg:grid-cols-3 gap-8 items-start mt-8">
            <div class="divide-y lg:col-span-2">
            
            @foreach (Auth::user()->menus as $cart)

              <div class="flex items-start justify-between gap-4 py-8">
                <div class="flex gap-6">
                  <div class="h-64 bg-gray-100 p-6 rounded">
                    <img src='https://readymadeui.com/product_img_2.webp' class="w-full h-full object-contain shrink-0" />
                  </div>
                  <div>
                    <p class="text-md font-bold text-[#333]">{{ $cart->name }}</p>
                    <p class="text-gray-400 text-xs mt-1">{{ $cart->pivot->quantity }} Item</p>
                    <h4 class="text-xl font-bold text-[#333] mt-4">${{ $cart->price  }}</h4>

                    {{-- <div class="mt-6">
                      <button type="button" class="flex flex-wrap gap-2 text-xl text-[#333]">
                        <span class="bg-gray-100 px-2 py-1 rounded">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current" viewBox="0 0 124 124">
                            <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                          </svg>
                        </span>
                        <span class="mx-4">{{ $cart->pivot->quantity }}</span>
                        <span class="bg-gray-100 px-2 py-1 rounded">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current" viewBox="0 0 42 42">
                            <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                          </svg>
                        </span>
                      </button>
                    
                    </div> --}}

                    <div class="flex flex-row gap-2 text-xl text-[#333]">

                        {{-- minus -1 --}}
                        <form action="{{ route('cart.update.minus', $cart->id) }}" method="POST">
                            @csrf
                            <button type="submit" name="quantity" value="{{ $cart->pivot->quantity - 1 }}"
                                class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                &minus;
                            </button>
                        </form>
        
        
                        <input type="number" id="Quantity" value="{{ $cart->pivot->quantity }}"
                            class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                            readonly />
        
                        {{-- add +1 --}}
                        <form action="{{ route('cart.update.add', $cart->id) }}" method="POST">
                            @csrf
                            <button type="submit" name="quantity" value="{{ $cart->pivot->quantity + 1 }}"
                                class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                &plus;
                            </button>
                        </form>
                        
                    </div>

                  </div>
                </div>

                <form action="{{ route('cart.delete', $cart) }}" method="post">
                    @csrf
                    <input name="test" value="{{ $cart->id }}" type="hidden">
                    {{-- @method('DELETE') --}}
                    <button type="submit" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline cursor-pointer" viewBox="0 0 24 24">
                            <path
                              d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                              data-original="#000000"></path>
                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                              data-original="#000000"></path>
                        </svg>
                    </button>
                </form>

                
              </div>
            
            @endforeach

            </div>
            <div class="bg-gray-100 p-8">
              <h3 class="text-2xl font-bold text-[#333]">Order summary</h3>
              {{-- <ul class="text-[#333] mt-6 divide-y">
                <li class="flex flex-wrap gap-4 text-md py-3 font-bold">Total <span class="ml-auto">${{  }}</span></li>
              </ul> --}}


            <form action="/session" method="GET">
                @csrf
                <button class="mt-6 text-md px-6 py-2.5 w-full bg-[#951f1f] hover:bg-red-700 text-white rounded">Check
                    out
                </button>
            </form>

            </div>
          </div>
        </div>
      </div>

@endsection
