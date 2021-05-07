    <form wire:submit.prevent="updatePost">
        <x-jet-dialog-modal wire:model="showPost">

        <x-slot name="title">
            <div class="sm:flex sm:items-start md:items-center">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-bold text-gray-900" id="modal-title">
                        View Post
                    </h3>
                </div>
            </div>

        </x-slot>
        <x-slot name="content">
            <div x-data="{ openTab: 1 }" class="p-6">
                <ul class="flex border-b">
                    <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1 ">
                        <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                            class="bg-white inline-block py-2 px-4 font-semibold " href="#">
                            Offer
                        </a>
                    </li>
                    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                        <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">Detail</a>
                    </li>
                    <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                        <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">Resposabilities</a>
                    </li>
                    <li @click="openTab = 5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
                        <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">Cualificatios</a>
                    </li>
                    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                        <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">Location</a>
                    </li>
                </ul>
                <div class="w-full pt-4">
                    <div x-show="openTab === 1">
                        <div class="mb-4">
                            <x-jet-label value="offer title" class="bold" />
                            <x-jet-input type="text" class="w-full" name="title" wire:model="title" />
                            <x-jet-input-error for="title"/>
                        </div>
                        <div class="mb-4">
                            <x-jet-label value="position" class="bold" />
                            <x-jet-input type="text" class="w-full" name="position" wire:model="position"/>
                            <x-jet-input-error for="position"/>
                        </div>
                        <div class="flex flex-1">
                            <div class="mb-4 w-1/2 mr-2">
                                <x-jet-label value="state" class="bold" />
                                <select class="form-control w-full" wire:model.defer="schedule">
                                    <option>Schedule</option>
                                    @foreach ($schedules as $schedule )
                                    <option value="{{$schedule}}">{{$schedule}}</option>
                                    @endforeach
                                    <select>
                                <x-jet-input-error for="schedule"/>
                            </div>
                            <div class="mb-4">
                                <x-jet-label value="min salary" class="bold" />
                                <x-jet-input type="text" class="w-full" name="min_salary" wire:model="min_salary"/>
                                <x-jet-input-error for="min_salary"/>
                            </div>
                            <div class="mb-4 mx-2">
                                <x-jet-label value="max salary" class="bold" />
                                <x-jet-input type="text" class="w-full" name="max_salary" wire:model="max_salary"/>
                                <x-jet-input-error for="max_salary"/>
                            </div>
                        </div>
                    </div>
                    <div x-show="openTab === 4">
                        <div class="mb-4">
                            <x-jet-label value="responsibilities" class="bold" />
                            <textarea class="w-full form-control" col="12" rows="8" name="responsibilities" wire:model="responsibilities"></textarea>
                            <x-jet-input-error for="responsibilities"/>
                        </div>
                    </div>
                    <div x-show="openTab === 5">
                        <div class="mb-4">
                            <x-jet-label value="qualifications" class="bold" />
                            <textarea class="w-full form-control" col="12" rows="8" name="qualifications" wire:model="qualifications"></textarea>
                            <x-jet-input-error for="qualifications"/>
                        </div>
                    </div>
                    <div x-show="openTab === 2">
                        <div class="mb-4">
                            <x-jet-label value="body" class="bold" />
                            <textarea class="w-full form-control" col="12" rows="8" name="body" wire:model="body"></textarea>
                            <x-jet-input-error for="body"/>
                        </div>



                    </div>
                    <div x-show="openTab === 3">

                        <div class="mb-4">
                            <x-jet-label value="state" class="bold" wire:model="state" />
                            <select class="form-control w-full" wire:model="state" >
                                <option>Select State</option>
                                @foreach ($states as $state )
                                <option value="{{$state}}">{{$state}}</option>
                                @endforeach
                                <select>
                                    <x-jet-input-error for="state"/>
                        </div>
                        <div class="mb-4">
                            <x-jet-label value="city" class="bold" />
                            <x-jet-input type="text" class="w-full" name="city" wire:model="city"/>
                            <x-jet-input-error for="city"/>
                        </div>
                    </div>

                </div>
                <input type="hidden" wire:model="postId">
            </div>
        </x-slot>
        <x-slot name="footer">
            <div>
                <x-jet-secondary-button wire:click="$set('showPost',false)">
                    Cancel
                </x-jet-secondary-button>
                <x-jet-danger-button type="submit" wire:loading.attr="disabled">
                    Save
                </x-jet-danger-button>
            </div>
        </x-slot>

</x-dialog-modal>
</form>
