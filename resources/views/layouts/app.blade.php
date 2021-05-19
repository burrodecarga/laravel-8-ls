<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">




    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{asset('css/fontawesome-free-5.15.3-web/css/all.css')}} " rel="stylesheet">
    <link href="{{asset('css/labor-staffers.css')}} " rel="stylesheet">






    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="{{ asset('labor-js/script.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
         <x-labor-staffers-frame>
            <x-labor-staffers-media />
        </x-labor-staffers-frame>
        <x-labor-staffers-s1 />
        <x-labor-staffers-taps />
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}             </div>
        </header>

        @endif
<x-labor-staffers-s2 />

        <!-- Page Content -->


        <main>
            {{ $slot }}
        </main>
          <x-labor-staffers-s3 />
          <x-labor-staffers-s4 />
          <x-labor-staffers-footer/>
    </div>

    @stack('modals')

    @livewireScripts
    <script>
        livewire.on('alert',function(message){
          Swal.fire('Good job!', message,'success')
            });
    </script>
    <script>
        window.addEventListener('show-confirm-delete',event=>{
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    livewire.emit('delPost',)
  }
}) })

window.addEventListener('confirm-delete-user',event=>{
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    livewire.emit('delUser',)
  }
}) })


window.addEventListener('deleted',event=>{
    Swal.fire(
  'deleted...!',
  event.detail.massage,
  'success'
)
})

    </script>
</body>

</html>
