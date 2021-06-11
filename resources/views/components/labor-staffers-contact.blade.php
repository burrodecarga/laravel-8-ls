<div class="caja40 m-auto p-5">
    <div class="sm:flex sm:items-start md:items-center mb-3">
        <div
            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-yellow-400 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-6 w-6 text-orange-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-bold text-yellow-700" id="modal-title">
                Send us a message
            </h3>
        </div>
    </div>
    <form>
        <div class="mb-4">
            <x-jet-label value="Topic" class="bold" />
            <x-jet-input type="text" class="w-full" name="title" wire:model.defer="title" />
            <x-jet-input-error for="title"/>
        </div>
        <div class="mb-4">
            <x-jet-label value="body" class="bold" />
            <textarea class="w-full form-control" col="6" name="body" wire:model.defer="body"></textarea>
            <x-jet-input-error for="body"/>
        </div>
        <div>
            <x-jet-danger-button wire:click="create()" wire:loading.attr="disabled">
                Send
            </x-jet-danger-button>
    </form>
</div>
