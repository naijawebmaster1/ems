<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="/send-the-message">
            
        
        @csrf




<input type="hidden" name="id" value="{{ Request::route()->parameter('id') }}">


            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="business_id" value="{{ __('Send a message') }}" />

                <textarea
      class="
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
      "
      name="message"
      id=""
      rows="3"
      placeholder="Your Message"
    ></textarea>
            </div>









            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4"> {{ __('Send Message') }} </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>