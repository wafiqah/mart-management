<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome, :name!', ['name' => Auth::user()->name]) }}
        </h2>
    </x-slot>

    {{-- TODO: timer in and out, css --}}
    {{-- Login notification --}}
    @if (session('message'))
    <div class="flex items-center gap-4 success-message-box">            
        {{session('message') }}
    </div> 
    @endif 

    {{-- ToDo: css and add border for each category, find how to minimize the repetitive code --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pt-5 pb-10">
                <div class="text-title dashboard-section select-none">
                    {{ __("Inventory Management") }}
                </div>
                <div class = "py-2">
                    <a href="{{ route('product-list') }}">
                        <div class="text-sub-title py-0.5">
                            {{ __("Product List") }}
                        </div>
                    </a>
                    <div class="text-sub-title py-0.5 ">
                        {{ __("Barcode Generator") }}
                    </div>
                    {{-- <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div> --}}
                </div>
                <div class="text-title dashboard-section select-none">
                    {{ __("Sales & Order Management") }}
                </div>
                <div class = "py-2">
                    <div class="text-sub-title py-0.5">
                        {{ __("Sales & Orders") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Billing") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Reports") }}
                    </div>
                </div>
                <div class="text-title dashboard-section select-none">
                    {{ __("Customer & Staff Management") }}
                </div>
                <div class = "py-2">
                    <div class="text-sub-title py-0.5">
                        {{ __("User List") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Role List") }}
                    </div>
                </div>
                <div class="text-title dashboard-section select-none">
                    {{ __("Financial Management") }}
                </div>
                <div class = "py-2">
                    <div class="text-sub-title py-0.5">
                        {{ __("Profit & Loss") }}
                    </div>
                    {{-- <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div> --}}
                </div>
                {{-- <div class="text-title dashboard-section">
                    {{ __("Suplier & Purchase Management") }}
                </div>
                <div class = "py-2">
                    <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div>
                    <div class="text-sub-title py-0.5">
                        {{ __("Inventory Management") }}
                    </div>
                </div> --}}
                <div class="text-title dashboard-section select-none">
                    {{ __("System & Settings") }}
                </div>
                <div class = "py-2">
                    <div class="text-sub-title py-0.5">
                        {{ __("Activity Log") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
