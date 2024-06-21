<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('RONA CATERING SERVICE DASHBOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <b>{{ __("You are logged in our dear admin!") }}</b><br><br>
                    <a href="{{route('accounts.index')}}" class="text-blue-500">Accounts Dashboard</a><br>
                    <a href="{{route('rentals.index')}}" class="text-blue-500">Catering Dashboard</a><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
