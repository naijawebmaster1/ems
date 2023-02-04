<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Dashboard for user') }} </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> You're logged in as a {{Auth::user()->name}} </div>
            </div>
        </div>
        <div>
            <div class="md:px-40 py-20">
                <section class=" bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative">
            <img alt="..." src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
          </div>
          <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
              {{Auth::user()->mat_no}}     
                     </span>
              <span class="text-sm text-blueGray-400">Mat No</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
              {{Auth::user()->business_capacity}}     
              </span>
              <span class="text-sm text-blueGray-400">Capacity</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
              {{Auth::user()->phone_no}}     
              </span>
              <span class="text-sm text-blueGray-400">Phone Number</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
        {{Auth::user()->name}}
        </h3>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
          {{Auth::user()->email}}
        </div>
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          {{Auth::user()->business_id}}
        </div>
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
          {{Auth::user()->YOSD}}
        </div>
<br>
<b><p>Message</p>
</b>
        <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
            {{Auth::user()->message}}
            </p>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
            {{Auth::user()->business_description}}
            </p>
            <!-- <a href="javascript:void(0);" class="font-normal text-pink-500">
              Show more
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="relative  pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">

      </div>
    </div>
  </div>
</footer>
</section>










            </div>
        </div>
    </div>
</x-app-layout>