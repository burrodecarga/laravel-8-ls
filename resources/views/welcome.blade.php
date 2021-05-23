<x-bpp-layout pageClass="bg-welcome">
    <x-slot name="pageTitulo">Welcome to Labor Staffers</x-slot>
    <x-slot name="pageSubTitulo">The Easiest Way to Get Your New Job</x-slot>
    <x-slot name="classTitulo">
        text-white text-center font-bold mt-20 text-4xl sm:text-5xl md:text-7xl
    </x-slot>
    <x-slot name="classSubTitulo">
        text-white text-center font-bold text-xl sm:text-2xl md:text-2xl
    </x-slot>
    <x-labor-staffers-s1/>
    <x-labor-staffers-taps />
   @livewire('home-page')


</x-bpp.layout>
