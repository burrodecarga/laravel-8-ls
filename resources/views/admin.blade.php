<x-bpp-layout>
    <link rel="stylesheet" href="{{asset('css/labor-staffers-table.css')}}">
    <x-slot name="pageClass">bg-employers</x-slot>
<x-slot name="classTitulo">
   text-white text-center  max-w-3xl md:max-w-4xl font-bold m-auto text-2xl sm:text-3xl md:text-5xl text-wrap
</x-slot>
<x-slot name="pageTitulo">
    Activities control center
</x-slot>
<x-slot name="classSubTitulo">
    text-white text-center  max-w-3xl md:max-w-4xl m-auto  text-2xs sm:text-xl text-wrap my-10
</x-slot>
<x-slot name="pageSubTitulo">
    To help find the best candidate for your job offers
</x-slot>
<h1 class="mx-auto text-center text-2xl font-semibold underline p-2">List of offers make by {{auth()->user()->name}}</h1>
<div class="grid grid-cols-12 gap-1 bg-white">
   <div class="col-start-1 col-end-11">
        @livewire('admin-post')
   </div>
   <div class="col-start-11 col-end-13 bg-white">
       <x-admin-nav-menu/>
   </div>


</div>
</x-bpp-layout>
