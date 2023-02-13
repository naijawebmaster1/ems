<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}"> @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <div class="flex justify-between">

                <!-- Email Address -->
                <div class="mt-4 mr-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Matric No -->
                <div class="mt-4 ml-2">
                    <x-label for="phone_no" :value="__('Phone No')" />
                    <x-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no"
                        :value="old('phone_no')" required />
                </div>
            </div>








            <div class="flex justify-between">
                <!-- Password -->
                <div class="mt-4 mr-2">
                    <x-label for="mat_no" :value="__('Matric No')" />
                    <x-input id="mat_no" class="block mt-1 w-full" type="text" name="mat_no" required
                        autocomplete="mat-no" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4 ml-2">
                    <x-label for="YOSD" :value="__('Year of Start Date')" />
                    <x-input id="YOSD" class="block mt-1 w-full" type="date" name="YOSD" required />
                </div>
            </div>
















            <div class="flex justify-between">
                <!-- Password -->
                <div class="mt-4 mr-2">
                    <x-label for="business_capacity" :value="__('Business Capacity')" />
                    <x-input id="business_capacity" class="block mt-1 w-full" type="number" name="business_capacity"
                        required autocomplete="business_capacity" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4 ml-2">
                    <x-label for="CAC_registration" :value="__('CAC Reg (Not Mandatory)')" />
                    <x-input id="CAC_registration" class="block mt-1 w-full" type="date" name="CAC_registration" />
                </div>
            </div>










            <div class="flex justify-between">
                <!-- Password -->
                <div class="mt-4 mr-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4 ml-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
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





            <div class="mt-4">
                <x-label for="business_id" value="{{ __('Type of Business:') }}" />
                <select name="business_id"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="Technology-Based Businesses">Technology-Based Businesses</option>
                    <option value="Consulting Businesses">Consulting Businesses</option>
                    <option value="E-Commerce Businesses">E-Commerce Businesses</option>
                    <option value="Relance Services">Freelance Services</option>
                    <option value="Green Businesses">Green Businesses</option>
                    <option value="Green Businesses">Others</option>
                </select>
            </div>


            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="user">User</option>
                    <!-- <option value="admin">Admin</option>
                     <option value="library">Library</option>
                    <option value="Hostel">Hostel</option>
                    <option value="bursar">Bursar</option> -->
                    <!-- <option value="Faculty">Admin</option> -->
                    <!-- <option value="User">User</option>
                    <option value="laboratory">Laboratory</option> -->
                </select>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }} </a>
                <x-button class="ml-4"> {{ __('Register') }} </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>