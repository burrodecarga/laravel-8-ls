<form wire:submit.prevent="updateUser">
<x-jet-dialog-modal wire:model="showUser">
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
                    View User
                </h3>
            </div>
        </div>

    </x-slot>

    <x-slot name="content">
        <input type="hidden" wire:model="userId">
        <div class="mb-4">
            <x-jet-label value="Name" class="bold" />
            <x-jet-input type="text" class="w-full" name="name" wire:model.defer="name" />
            <x-jet-input-error for="name"/>
        </div>
        <div class="mb-4">
            <x-jet-label value="Email" class="bold" />
            <x-jet-input type="text" class="w-full" name="email" wire:model.defer="email" />
            <x-jet-input-error for="email"/>
        </div>
        <div class="mb-4">
            <x-jet-label value="Role" class="bold" />
            <x-jet-input type="text" class="w-full" name="role" wire:model.defer="role" />
            <x-jet-input-error for="role"/>
        </div>

    </x-slot>
    <x-slot name="footer">
        <div>
            <x-jet-secondary-button wire:click="$set('showUser',false)">
                Cancel
            </x-jet-secondary-button>
            <x-jet-danger-button type="submit" wire:loading.attr="disabled">
                Save
            </x-jet-danger-button>
        </div>
    </x-slot>

</x-jet-dialog-modal>
</form>

