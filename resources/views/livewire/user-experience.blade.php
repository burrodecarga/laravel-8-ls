<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Laboral Experiences') }}
    </h2>
</x-slot>
<div>
    <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())

        <div class="grid  grid-cols-1 md:grid-cols-7 gap-3 bg-gray-300 p-3 rounded">
            <div class="grid  grid-cols-1 md:col-start-1 md:col-span-6 gap-2 p-1 bg-white rounded">
                <div>
                    <form class="{{$formCreate}}" wire:submit.prevent="createData">
                        <h2 class="text-center text-orange-900 text-2xl sm:text-3xl font-bold">Add New Experience</h2>
                        <div class="flex flex-col md:flex-row">
                            <div class=" w-full md:w-3/12 bg-white p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="company" value="{{ __('company') }}" />
                                    <x-jet-input id="company" type="text" class="mt-1 block w-full"
                                        wire:model.defer="company" autocomplete="company" />
                                    <x-jet-input-error for="company" class="mt-2" />
                                </div>
                                <div class="flex-1 m-2 ">
                                    <x-jet-label for="position" value="{{ __('position') }}" />
                                    <x-jet-input id="position" type="text" class="mt-1 block w-full"
                                        wire:model.defer="position" autocomplete="position" />
                                    <x-jet-input-error for="position" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full md:w-3/12 bg-white-300 p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="date_begin" value="{{ __('date begin') }}" />
                                    <x-jet-input id="date_begin" type="date" class="mt-1 block w-full"
                                        wire:model.defer="date_begin" autocomplete="date_begin" />
                                    <x-jet-input-error for="date_begin" class="mt-2" />
                                </div>
                                <div class="flex-1 m-2">
                                    <x-jet-label for="date_end" value="{{ __('date end') }}" />
                                    <x-jet-input id="date_end" type="date" class="mt-1 block w-full"
                                        wire:model.defer="date_end" autocomplete="date_end" />
                                    <x-jet-input-error for="date_end" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full md:w-5/12 bg-white-400 p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="descripion" value="{{ __('Description') }}" />
                                    <textarea id="description" cols="10" rows="4" class="form-control mt-1 block w-full"
                                        wire:model.defer="description" autocomplete="description" placeholder="Describe your strengths and skills in the company,     Keep it short and make sure it's error-free">
                                        </textarea>
                                    <x-jet-input-error for="description" class="mt-2" />
                                </div>
                            </div>
                            <div class=" w-1/12 bg-white p-2 m-3">
                                <div class="justify-center items-center">
                                    <button type="submit"
                                        class="bg-green-800 text-white py-2 px-4 rounded my-2"
                                        >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form class="{{$formUpdate}}" wire:submit.prevent="updateData">
                        <div class="flex flex-col md:flex-row">
                            <input type="hidden" wire:model="expId">
                            <div class=" w-full md:w-3/12 bg-white p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="company" value="{{ __('company') }}" />
                                    <x-jet-input id="company" type="text" class="mt-1 block w-full"
                                        wire:model.defer="company" autocomplete="company" />
                                    <x-jet-input-error for="company" class="mt-2" />
                                </div>
                                <div class="flex-1 m-2 ">
                                    <x-jet-label for="position" value="{{ __('position') }}" />
                                    <x-jet-input id="position" type="text" class="mt-1 block w-full"
                                        wire:model.defer="position" autocomplete="position" />
                                    <x-jet-input-error for="position" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full md:w-3/12 bg-white-300 p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="date_begin" value="{{ __('date begin') }}" />
                                    <x-jet-input id="date_begin" type="date" class="mt-1 block w-full"
                                        wire:model.defer="date_begin" autocomplete="date_begin" />
                                    <x-jet-input-error for="date_begin" class="mt-2" />
                                </div>
                                <div class="flex-1 m-2">
                                    <x-jet-label for="date_end" value="{{ __('date end') }}" />
                                    <x-jet-input id="date_end" type="date" class="mt-1 block w-full"
                                        wire:model.defer="date_end" autocomplete="date_end" />
                                    <x-jet-input-error for="date_end" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full md:w-5/12 bg-white-400 p-3">
                                <div class="flex-1 m-2">
                                    <x-jet-label for="descripion" value="{{ __('Description') }}" />
                                    <textarea id="description" cols="10" rows="4" class="form-control mt-1 block w-full"
                                        wire:model.defer="description" autocomplete="description" placeholder="Describe your strengths and skills in the company,     Keep it short and make sure it's error-free">
                                        </textarea>
                                    <x-jet-input-error for="description" class="mt-2" />
                                </div>
                            </div>
                            <div class=" w-1/12 bg-white p-2 m-3">
                                <div class="justify-center items-center">
                                    <button type="submit"
                                        class="bg-green-800 text-white py-2 px-4 rounded my-2">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <table>
                        table
                    </table>
                </div>
            </div>

            <div class="grid col-start-7 gap-2 p-4 bg-white rounded">
                <div class="flex flex-col">
                    <a href="{{route('user-profile')}}"
                        class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">Profile</a>
                    <a href="{{route('user-skills')}}"
                        class="bg-blue-400 hover:bg-blue-700 text-center text-white font-bold rounded mb-3 py-2 px-4">skills</a>
                </div>
            </div>
        </div>
        @endif
        <div class="p-3 items-center">
           @livewire('experience-list')
        </div>


    </div>
</div>
