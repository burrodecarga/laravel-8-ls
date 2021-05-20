<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Send Message
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="sm:flex sm:items-start md:items-center">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-bold text-gray-900" id="modal-title">
                        Send Message
                    </h3>
                </div>
            </div>

        </x-slot>
        <x-slot name="content">
            <div class="p-6">
                <div class="w-full pt-4">
                    <div>
                        <div class="mb-4">
                            <x-jet-label value="offer title" class="bold" />
                            <x-jet-input type="text" class="w-full" name="title" wire:model.defer="title" />
                            <x-jet-input-error for="title"/>
                        </div>
                        <div class="mb-4">
                            <x-jet-label value="body" class="bold" />
                            <textarea class="w-full form-control" col="6" name="body" wire:model.defer="body"></textarea>
                            <x-jet-input-error for="body"/>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div>
                <x-jet-secondary-button wire:click="$set('open',false)">
                    Cancel
                </x-jet-secondary-button>
                <x-jet-danger-button wire:click="create()" wire:loading.attr="disabled">
                    Send
                </x-jet-danger-button>
            </div>
        </x-slot>
        </x-dialog-modal>
</div>

