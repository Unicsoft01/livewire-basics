<x-app-layout>
    <x-slot name="header">
        <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">
            {{ __('Welcom Dear') }} {{ Auth::User()->name }}
        </h4>
    </x-slot>


</x-app-layout>
