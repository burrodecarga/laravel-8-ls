<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laboral Profile') }}
        </h2>
    </x-slot>



    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())

            <form class="grid grid-cols-1 md:grid-cols-3 gap-2 p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Personal Information') }}
                </h2>
                <div class="col-span-3 ml-2">
                    <x-jet-label for="address" value="{{ __('address') }}" />
                    <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address"
                        autocomplete="address" />
                    <x-jet-input-error for="address" class="mt-2" />
                </div>
                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="phone" value="{{ __('phone') }}" />
                    <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone"
                        autocomplete="phone" />
                    <x-jet-input-error for="phone" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="mobile" value="{{ __('mobile') }}" />
                    <x-jet-input id="mobile" type="text" class="mt-1 block w-full" wire:model.defer="state.mobile"
                        autocomplete="mobile" />
                    <x-jet-input-error for="mobile" class="mt-2" />
                </div>

                <div class="col-span-3 sm:col-span-1 flex-1 ml-2">
                    <x-jet-label for="birthdate" value="{{ __('birthdate') }}" />
                    <x-jet-input id="birthdate" type="date" class="mt-1 block w-full" wire:model.defer="state.birthdate"
                        autocomplete="birthdate" />
                    <x-jet-input-error for="birthdate" class="mt-2" />
                </div>

                <div class="flex justify-end col-span-3">
                    <button type="submit" class="bg-green-500 py-2 px-3 rounded my-2">Save</button>
                </div>
            </form>
            <x-jet-section-border />

            <form class="grid grid-cols-1 md:grid-cols-3 gap-2 p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight col-span-3">
                    {{ __('Skills') }}
                </h2>
                <div class="cols-span-3 sm:col-span-2 ml-2 bg-red-500">

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Role
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                                alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                Jane Cooper
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                jane.cooper@example.com
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                    </div>
                                                    <div class="text-sm text-gray-500">Optimization</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    Admin
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 sm:col-span-1 ml-2 bg-blue-50">
                    <x-jet-label for="skill" value="{{ __('New Skill') }}" />
                    <select class="w-full rounded">
                        <option value="0">level</option>
                        <option value="1"> beginner.</option>
                        <option value="2">elementary.</option>
                        <option value="3">intermediate.</option>
                        <option value="4">high midium.</option>
                        <option value="5">advanced.</option>
                        <option value="6">Master's degree.</option>
                    </select>
                    <textarea id="skill" cols="10" rows="8" class="form-control mt-1 block w-full"
                        wire:model.defer="skill" autocomplete="skill">
                     </textarea>
                    <x-jet-input-error for="skill" class="mt-2" />

                    <div class="flex flex-row">
                        <select class="my-2 rounded">
                            <option value="0">level</option>
                            <option value="1"> beginner.</option>
                            <option value="2">elementary.</option>
                            <option value="3">intermediate.</option>
                            <option value="4">high midium.</option>
                            <option value="5">advanced.</option>
                            <option value="6">Master's degree.</option>
                        </select>
                        <div class="flex justify-end col-span-3 flex-1">
                            <button type="submit" class="bg-green-500 py-2 px-3 rounded my-2">+ New Skill</button>
                        </div>
                    </div>
                </div>
            </form>

            @endif
        </div>
    </div>
</x-app-layout>
