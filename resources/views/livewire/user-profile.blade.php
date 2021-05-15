<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Personal Information') }}
    </h2>
</x-slot>

<div>
    <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())

        <div class="grid  grid-cols-1 md:grid-cols-7 bg-gray-300 p-3 rounded">
            <form class="grid col-start-2 col-span-4 gap-2 p-4 bg-white rounded" wire:submit.prevent="personal">
                <div class="col-span-3 ml-2">
                    <x-jet-label for="title" value="{{ __('My professional skills')}}" />
                    <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title"
                        autocomplete="title"
                        placeholder=" Enter a description of your professional skills (e.g. Web Designer)" />
                    <x-jet-input-error for="title" class="mt-2" />
                </div>

                <div class="col-span-3 ml-2">
                    <x-jet-label for="title" value="{{ __('About me') }}" />
                     <textarea id="about" cols="10" rows="4" class="form-control mt-1 block w-full"
                     wire:model.defer="about" autocomplete="about"
                     placeholder="Use this space to show clients you have the skills and experience they're looking for.
                     Describe your strengths and skills, projects and education
                     Keep it short and make sure it's error-free"
                     >
                    </textarea>
                    <x-jet-input-error for="about" class="mt-2" />
                </div>

                <div class="col-span-3 ml-2">
                    <x-jet-label for="address" value="{{ __('address') }}" />
                    <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="address"
                        autocomplete="address" />
                    <x-jet-input-error for="address" class="mt-2" />
                </div>
                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="phone" value="{{ __('phone') }}" />
                    <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="phone"
                        autocomplete="phone" />
                    <x-jet-input-error for="phone" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="mobile" value="{{ __('mobile') }}" />
                    <x-jet-input id="mobile" type="text" class="mt-1 block w-full" wire:model.defer="mobile"
                        autocomplete="mobile" />
                    <x-jet-input-error for="mobile" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="birthdate" value="{{ __('birthdate') }}" />
                    <x-jet-input id="birthdate" type="date" class="mt-1 block w-full" wire:model.defer="birthdate"
                        autocomplete="birthdate" />
                    <x-jet-input-error for="birthdate" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="cost" value="{{ __('availability') }}" />

                    <select class="my-2 rounded" wire:model.defer="availability">
                        <option value="availability">availability</option>
                        <option value="More than 30 hrs/week">More than 30 hrs/week</option>
                        <option value="Less than 30 hrs/week">Less than 30 hrs/week</option>
                        <option value="As needed - open to offers">As needed - open to offers</option>
                    </select>
                    <x-jet-input-error for="'availability" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="cost" value="{{ __('Hourly Rate') }}" />
                    <x-jet-input id="cost" type="text" class="mt-1 block w-full" wire:model.defer="cost"
                        autocomplete="cost" placeholder="Hourly Rate $/hrs" />
                    <x-jet-input-error for="cost" class="mt-2" />
                </div>

                <div class="flex justify-end col-span-3">
                    <button type="submit" class="bg-green-800 text-white py-2 px-4 rounded my-2">Save</button>
                </div>
            </form>
        <div class="grid col-start-7 gap-2 p-4 bg-white rounded">
            <div class="flex flex-col">
                <a href="{{route('experiences')}}" class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">experiences</a>
                <a href="{{route('user-skills')}} " class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">skill</a>
                <a href="{{route('resume')}}" class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">Resume</a>
                <a href="{{route('user-files')}}" class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">Pdf Files</a>

            </div>

        </div>
        </div>
        <x-jet-section-border />
     @endif
    </div>
</div>
