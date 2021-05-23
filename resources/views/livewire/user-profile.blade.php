
    <x-slot name="pageClass">bg-user-cv</x-slot>
    <x-slot name="pageTitulo">The Right Job Is Waiting For You</x-slot>
    <x-slot name="pageSubTitulo">Find jobs, create trackable resumes and enrich your applications </x-slot>
    <x-slot name="classTitulo">
        text-white text-center font-bold text-2xl sm:text-3xl md:text-5xl
    </x-slot>
    <x-slot name="classSubTitulo">
        text-white text-center text-lg sm:text-xl md:text-xl mt-10
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal Information') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())

            <div class="grid  grid-cols-1 bg-gray-300 p-3 rounded">
                <x-user-personal-info/>
                <x-user-nav-menu/>
            </div>
            <x-jet-section-border />
            @endif
        </div>
    </div>
