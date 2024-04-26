@extends('layouts.index2')


@section('content')

    {{-- caroussel && menu --}}

    {{-- <div class="">
        @include('components.sec1')
    </div> --}}


    {{-- tables --}}

    {{-- sec 1 --}}

    <div class="grid md:grid-cols-2 items-center md:gap-8 gap-6 font-[sans-serif] text-[#333] max-w-5xl max-md:max-w-md mx-auto p-3">
        <div class="max-md:order-1 max-md:text-center">
          <h2 class="md:text-4xl text-3xl md:leading-10 font-extrabold text-[#e8e8e8] mb-4">MAKI PAIRINGS</h2>
          <p class="mt-4 text-base text-[#9c9b9b] leading-relaxed">Discover our new Maki Pairings: 8 Maki pieces offered in 2 flavour duos. For a limited time, we’re offering 5x Loyalty Points with the purchase of each pairing!</p>
          <div class="mt-8 flex max-sm:flex-col sm:space-x-4 max-sm:space-y-6">
            <a href="javascript:void(0);" class="px-6 py-3 text-base font-semibold text-white bg-[#951f1f] rounded-full hover:bg-opacity-80 transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-[#951f1f] focus:outline-none focus:ring-opacity-50">Book a Table</a>
            <a href="javascript:void(0);" class="px-6 py-3 text-base font-semibold text-[#951f1f] border border-[#951f1f] rounded-full hover:text-white hover:bg-[#951f1f] transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-[#951f1f] focus:outline-none focus:ring-opacity-50">Order Now</a>
          </div>
        </div>
        <div class="md:h-[450px]">
          <img src="{{ asset('assets/img/sushi-sec-1.png') }}" class="w-full h-full object-contain rounded-lg shadow-xl" alt="Dining Experience" />
        </div>
      </div>

      {{-- about us --}}

      <div class="sec-1 p-10">
        <div class="flex md:flex-row flex-col-reverse gap-2 justify-center items-center">
            <div class="p-3 md:w-[30vw] flex flex-col gap-3">
                <h1 class="text-6xl"><span class="font-bold">About</span> us</h1>
                <p class="text-sm">Founded by Ricardo Mendonça, a gastronomy enthusiast, and his wife Flávia, Temak House emerged from their passion for Japanese cuisine in Garanhuns, a tranquil city known for its pleasant climate and Flávia’s hometown. Opening its doors in 2013, it became the city's pioneer in Japanese dining, continually evolving to match market trends and deliver exceptional culinary experiences.
                </p>
                <p class="text-sm">
                    Garanhuns, the heart of our story, is one of Pernambuco's most picturesque cities, celebrated for its mild weather and vibrant festivals. This city's unique charm and heritage are the foundation of our success.
                </p>
                <p class="text-sm">
                    Expanding our horizons, Temak House ventured into the United States about four years ago, establishing a presence in Deerfield Beach, South Florida. This expansion has allowed us to become a staple in the Brazilian community abroad, mirroring our success back home in Brazil.
                </p>
            </div>
            <div class="md:h-[500px] md:w-[30vw] w-[350px] h-[500px]">
                <div class="sec-1-img h-full rounded-2xl">
                </div>
            </div>
        </div>
      </div>

      {{-- tables --}}
      
      

      <div class=" md:px-10 px-4 py-12 font-[sans-serif]">

          <div class="max-w-2xl mx-auto text-center pb-5">
              <h2 class=" text-6xl"><span class="font-bold">Tabl</span>es</h2>
              {{-- <p class="text-sm mt-2 leading-relaxed">Veniam proident aute magna anim excepteur et ex consectetur velit
                  ullamco veniam minim aute sit.</p> --}}
          </div>

        <div class="max-md:max-w-lg mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class=" bg-[#e8e8e8] text-black rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
              <img src="https://readymadeui.com/cardImg.webp" alt="Blog Post 1" class="w-full h-64 object-cover" />
              <div class="p-6">
                <h3 class="text-2xl font-semibold mb-2">Lorem Ipsum Dolor</h3>
                <p class="text-sm opacity-75">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</p>
                <a href="javascript:void(0);" class="mt-4 inline-block text-[#951f1f] text-sm hover:underline">Book</a>
              </div>
            </div>
            <div class=" bg-[#e8e8e8] text-black rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
              <img src="https://readymadeui.com/hotel-img.webp" alt="Blog Post 2" class="w-full h-64 object-cover" />
              <div class="p-6">
                <h3 class="text-2xl font-semibold mb-2">Consectetur Adipiscing</h3>
                <p class="text-sm opacity-75">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</p>
                <a href="javascript:void(0);" class="mt-4 inline-block text-[#951f1f] text-sm hover:underline">Book</a>
              </div>
            </div>
            <div class=" bg-[#e8e8e8] text-black rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
              <img src="https://readymadeui.com/team-image.webp" alt="Blog Post 3" class="w-full h-64 object-cover" />
              <div class="p-6">
                <h3 class="text-2xl font-semibold mb-2">Lorem Ipsum Sit Amet</h3>
                <p class="text-sm opacity-75">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</p>
                <a href="javascript:void(0);" class="mt-4 inline-block text-[#951f1f] text-sm hover:underline">Book</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    {{-- chefs --}}

      <div class="font-[sans-serif] text-[#333]">
        <div class="h-60 w-full bg-[#951f1f] p-6">
          <h2 class="text-4xl max-md:text-3xl text-center  text-white"><span class="font-bold">OUR</span> chefs</h2>
        </div>
        <div class="max-w-5xl max-md:max-w-xl mx-auto md:-mt-24 -mt-16 px-6">
          <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8 max-sm:justify-center text-center">
            <div class="bg-white rounded-md p-6 shadow-md hover:scale-105 transition-all duration-500">
              <img src="https://readymadeui.com/team-1.webp" class="w-full rounded-md inline-block" />
              <div class="mt-4">
                <h4 class="text-xl font-extrabold">John Doe</h4>
                <p class="text-sm font-semibold mt-1">Software Engineer</p>
                <div class="space-x-4 mt-4">
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                      <path
                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                        data-original="#010002" />
                    </svg>
                  </button>
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                      <path
                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                        data-original="#03a9f4" />
                    </svg>
                  </button>
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                      <path
                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                        data-original="#0077b5" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-md p-6 shadow-md hover:scale-105 transition-all duration-500">
                <img src="https://readymadeui.com/team-2.webp" class="w-full rounded-md inline-block" />
                <div class="mt-4">
                  <h4 class="text-xl font-extrabold">Mark Adair</h4>
                  <p class="text-sm font-semibold mt-1">Software Engineer</p>
                  <div class="space-x-4 mt-4">
                    <button type="button"
                      class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                        <path
                          d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                          data-original="#010002" />
                      </svg>
                    </button>
                    <button type="button"
                      class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                        <path
                          d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                          data-original="#03a9f4" />
                      </svg>
                    </button>
                    <button type="button"
                      class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                        <path
                          d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                          data-original="#0077b5" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            <div class="bg-white rounded-md p-6 shadow-md hover:scale-105 transition-all duration-500">
              <img src="https://readymadeui.com/team-3.webp" class="w-full rounded-md inline-block" />
              <div class="mt-4">
                <h4 class="text-xl font-extrabold">Simon Konecki</h4>
                <p class="text-sm font-semibold mt-1">Web Designer</p>
                <div class="space-x-4 mt-4">
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 155.139 155.139">
                      <path
                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                        data-original="#010002" />
                    </svg>
                  </button>
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="#333" viewBox="0 0 512 512">
                      <path
                        d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
                        data-original="#03a9f4" />
                    </svg>
                  </button>
                  <button type="button"
                    class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                      <path
                        d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                        data-original="#0077b5" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    {{-- reviews --}}

    <div class=" md:px-10 px-4 py-12 font-[sans-serif]">

        <div class="max-w-2xl mx-auto text-center pb-10 p-10">
            <h2 class=" text-6xl"><span class="font-extrabold">Testimonials</span></h2>
            <p class="text-2xl mt-2 leading-relaxed">Real Stories, Genuine Experiences</p>
        </div>

      <div class="max-md:max-w-lg mx-auto ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <div class="bg-white w-[320px] h-[340px]">
            <h1 class="text-2xl text-[#951f1f] font-bold">Fabricio Sanchez</h1>
            <p>Food is delicious. One of the best I had the chance to have in South Florida. Also, the atmosphere is very cool and I found the price is very fair.</p>

          </div>

          <div class="bg-white w-[320px] h-[340px]">
            <h1>Fabricio Sanchez</h1>
            <p>Food is delicious. One of the best I had the chance to have in South Florida. Also, the atmosphere is very cool and I found the price is very fair.</p>

          </div>

          <div class="bg-white w-[320px] h-[340px]">
            <h1>Fabricio Sanchez</h1>
            <p>Food is delicious. One of the best I had the chance to have in South Florida. Also, the atmosphere is very cool and I found the price is very fair.</p>

          </div>
          
        </div>
      </div>
    </div>

@endsection

