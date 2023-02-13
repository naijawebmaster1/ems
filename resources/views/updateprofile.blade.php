<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('updateMyProfile') }}">
                        @csrf
                        <!-- Name -->
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <div class="">

                            <!-- Matric No -->
                            <div class="mt-4">
                                <x-label for="phone_no" :value="__('Phone No')" />
                                <x-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no"
                                    :value="old('phone_no')" required />
                            </div>
                        </div>




















                        <div class="flex justify-between">
                            <!-- Password -->
                            <div class="mt-4 w-full mr-4">
                                <x-label for="business_capacity" :value="__('Business Capacity')" />
                                <x-input id="business_capacity" class="block mt-1 w-full" type="number"
                                    name="business_capacity" required autocomplete="business_capacity" />
                            </div>
                            <!-- Confirm Password -->
                            <div class="mt-4 w-full ml-4">
                                <x-label for="CAC_registration" :value="__('CAC Reg (Not Mandatory)')" />
                                <x-input id="CAC_registration" class="block mt-1 w-full" type="date"
                                    name="CAC_registration" />
                            </div>
                        </div>





                        <!-- Select Option Rol type -->
                        <div class="mt-4">
                            <x-label for="business_id" value="{{ __('Detailed Business Description:') }}" />

                            <textarea class="
form-control
block
w-full
px-3
py-1.5
text-base
font-normal
text-gray-700
bg-white bg-clip-padding
border border-solid border-gray-300
rounded
transition
ease-in-out
m-0
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
" name="business_description" id="" rows="3" placeholder="Your buisiness description"></textarea>
                        </div>








                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-4"> {{ __('Update') }} </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>

</x-app-layout>