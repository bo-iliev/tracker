@extends('layouts.app')
@section('content')
<section class="w-full px-6 mb-12 antialiased bg-white select-none">
    <div class="mx-auto max-w-7xl">
        <nav class="relative z-50 h-24" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto font-medium border-b border-gray-200 lg:justify-center sm:px-4 md:px-2">
                <a href="/" class="w-1/4 py-4 pr-4 md:py-0">
                    <span class="text-xl font-black leading-none text-gray-900 select-none logo">tracker<span class="text-indigo-600">.</span></span>
                </a>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:w-3/4 md:absolute lg:text-base md:h-auto md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg select-none md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                        <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 select-none md:hidden">tails<span class="text-indigo-600">.</span></a>
                        <div class="flex flex-col items-start justify-center w-full text-center md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a href="#" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-indigo-600 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="/#message" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Info</a>                           
                        </div>
                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                        <a href="https://twitter.com/bo_iliev21" target=_blank>
                            <span class="inline-flex w-full shadow-sm md:rounded-full md:w-auto">
                                <button class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-transparent bg-indigo-600 border border-transparent md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">Follow me</button>
                            </span>
                        </a>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>
        <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">

            <h1 class="text-5xl font-extrabold tracking-tight text-left text-gray-900 leading-tightest md:leading-10 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Covid-19</span> <span class="relative mt-2 text-transparent md:inline-block bg-clip-text bg-gradient-to-br from-purple-600 to-blue-500">tracker</span></h1>
            <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Take a look at the progression of the Covid virus in the whole world and all the daily cases.</div>
            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full rounded-full shadow-sm md:w-auto">
                    <a href="/#tracker">
                    <button type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                        Check the stats
                    </button>
                </a>
               </span>
            </div>
        </div>
    </div>
</section>
<div id="message"class="py-20 bg-white">
  <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
      Don't stop being careful
    </h2>
    <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
        We all know the huge risks that COVID-19 has and how dangerous it is. You may think that with the vaccines coming out, everything will be alright. Unfortunately, this isn't the case yet. As you can see in these graphs, the problem is far from over. The virus is still spreading and it's not slowing down. I hope that you will do your part in social distancing and that you will help make the graphs down below empty.
    </p>
  </div>
</div>
<section id="graphs" class="w-full py-2 bg-blue-500">
    @include('partials.graphs')
</section>
@endsection