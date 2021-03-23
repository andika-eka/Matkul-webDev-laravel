<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h6>admin view<h6>
                <h6>hallo admin </h6>
                <h6>btw, nomornya: {{$num}} </h6>
            </div>
        </div>
    </div>
</x-admin-layout>
