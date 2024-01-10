@extends('web.layout')

@section('content')
<div id="content" class="container my-10 mx-auto overflow-auto">
    {{-- Banner Carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
        <!-- Modal toggle -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('development/images/banner.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('development/images/banner.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
        </div>

      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
        >
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
        >
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>

    <!-- Category -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 mt-6 gap-4">
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5 text-center">
          <div class="flex text-center items-center justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
              </svg>
          </div>
          <a href="#">
            <h5 class="mt-2.5 mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Novel</h5>
          </a>
        </div>
      </div>

    </div>

    <!-- Tab Menu -->
    {{-- <h1 class="flex items-center text-2xl mt-6 font-extrabold dark:text-white">Produk Unggulan<span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-2">DISC 10%</span></h1>
    <div class="mt-6 border border-gray-200 dark:border-gray-700 rounded-lg">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Mobile Games</button>
        </li>
        <li class="mr-2" role="presentation">
          <button
            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
            id="dashboard-tab"
            data-tabs-target="#dashboard"
            type="button"
            role="tab"
            aria-controls="dashboard"
            aria-selected="false"
          >
            PC Games
          </button>
        </li>
        <li class="mr-2" role="presentation">
          <button
            class="disabled opacity-60 inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
            id="settings-tab"
            data-tabs-target="#settings"
            type="button"
            role="tab"
            disabled
            aria-controls="settings"
            aria-selected="false"
          >
            Streaming Apps
          </button>
        </li>
        <li role="presentation">
          <button
            class="disabled opacity-60 inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
            id="contacts-tab"
            data-tabs-target="#contacts"
            type="button"
            role="tab"
            disabled
            aria-controls="contacts"
            aria-selected="false"
          >
            Pulsa & Paket Data
          </button>
        </li>
      </ul>
    </div> --}}
    {{-- Menu --}}
    {{-- <div id="myTabContent" class="border-t-0 border border-gray-200 dark:border-gray-700 rounded-lg">
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 my-8 mx-4">
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/ml.png') }}" class="w-auto h-28 p-1.5" alt="mobile-legend">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5">Mobile Legends</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/ff.png') }}" class="w-auto h-28 p-1.5" alt="free-fire">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5">Free Fire</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/codm.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5">CODM</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
            <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                <div class="flex items-center justify-center ">
                    <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                </div>
                <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
            </div>
          </div>
        </p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 my-8 mx-4">
                  <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3">
                      <div class="flex items-center justify-center ">
                          <img src="{{ url('Development/images/valorant.png') }}" class="w-auto h-28 p-1.5" alt="valorant">
                      </div>
                      <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5">Valorant</h3>
                  </div>
                  <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                      <div class="flex items-center justify-center ">
                          <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                      </div>
                      <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
                  </div>
                  <div class="flex flex-col bg-slate-200 dark:bg-slate-700 border-gray-600 border rounded-lg py-3 opacity-60">
                      <div class="flex items-center justify-center ">
                          <img src="{{ url('Development/images/coming-soon.png') }}" class="w-auto h-28  p-1.5" alt="codm">
                      </div>
                      <h3 class="text-center dark:text-white text-lg font-semibold mt-2 mb-1.5 disabled">Under Progress</h3>
                  </div>
                </div>
              </p>
        </p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
          This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab
          JavaScript swaps classes to control the content visibility and styling.
        </p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">
          This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab
          JavaScript swaps classes to control the content visibility and styling.
        </p>
      </div>
    </div> --}}
</div>
@endsection
