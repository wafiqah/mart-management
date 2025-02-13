<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome, :name!', ['name' => Auth::user()->name]) }}
        </h2>
    </x-slot>

    {{-- TODO: timer in and out, css --}}
    @if (session('message'))
    <div class="flex items-center gap-4 success-message-box">            
        {{session('message') }}
    </div> 
    @endif 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg">
                    {{ __("Shopping Cart") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg">
                    {{ __("My Orders") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
