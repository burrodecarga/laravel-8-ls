
        <form class="grid grid-cols-7 gap-1 p-2 bg-white rounded" wire:submit.prevent="personal">
            <div class="col-span-full">
                <x-jet-label for="title" value="{{ __('My professional skills')}}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title"
                    autocomplete="title"
                    placeholder=" Enter a description of your professional skills (e.g. Web Designer)" />
                <x-jet-input-error for="title" class="mt-2" />
            </div>

            <div class="col-span-full">
                <x-jet-label for="title" value="{{ __('About me') }}" />
                <textarea id="about" cols="10" rows="4" class="form-control mt-1 block w-full"
                    wire:model.defer="about" autocomplete="about" placeholder="Use this space to show clients you have the skills and experience they're looking for.
             Describe your strengths and skills, projects and education
             Keep it short and make sure it's error-free">
            </textarea>
                <x-jet-input-error for="about" class="mt-2" />
            </div>

            <div class="col-span-full">
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="address"
                    autocomplete="address" />
                <x-jet-input-error for="address" class="mt-2" />
            </div>
            <div class="col-start-1 col-end-8 md:col-end-4 ">
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="phone"
                    autocomplete="phone" />
                <x-jet-input-error for="phone" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-start-4 ">
                <x-jet-label for="mobile" value="{{ __('mobile') }}" />
                <x-jet-input id="mobile" type="text" class="mt-1 block w-full" wire:model.defer="mobile"
                    autocomplete="mobile" />
                <x-jet-input-error for="mobile" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-start-1 md:col-end-4 ">
                <x-jet-label for="country" value="{{ __('country') }}" />
                <x-jet-input id="country" type="text" class="mt-1 block w-full" wire:model.defer="country"
                    autocomplete="country" />
                <x-jet-input-error for="country" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-start-4 ">
                <x-jet-label for="city" value="{{ __('city') }}" />
                <x-jet-input id="city" type="text" class="mt-1 block w-full" wire:model.defer="city"
                    autocomplete="city" />
                <x-jet-input-error for="city" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-end-4 ">
                <x-jet-label for="birthdate" value="{{ __('birthdate') }}" />
                <x-jet-input id="birthdate" type="date" class="mt-1 block w-full" wire:model.defer="birthdate"
                    autocomplete="birthdate" />
                <x-jet-input-error for="birthdate" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-start-4 md:col-end-6 py-1 ">
                <x-jet-label for="cost" value="{{ __('availability') }}" />

                <select class="rounded" wire:model.defer="availability">
                    <option value="availability">availability</option>
                    <option value="More than 30 hrs/week">More than 30 hrs/week</option>
                    <option value="Less than 30 hrs/week">Less than 30 hrs/week</option>
                    <option value="As needed - open to offers">As needed - open to offers</option>
                </select>
                <x-jet-input-error for="'availability" class="mt-2" />
            </div>

            <div class="col-start-1 col-end-8 md:col-start-6 md:col-end-8">
                <x-jet-label for="cost" value="{{ __('Hourly Rate') }}" />
                <x-jet-input id="cost" type="text" class="block w-full" wire:model.defer="cost"
                    autocomplete="cost" placeholder="Hourly Rate $/hrs" />
                <x-jet-input-error for="cost" class="mt-2" />
            </div>

            <div class="float-right">

                <button type="submit" class="bg-green-800 hover:bg-orange-900 text-white py-2 px-11 rounded ">Save</button>
            </div>
        </form>

