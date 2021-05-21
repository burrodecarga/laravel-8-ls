<div class="bg-gray-300 p-3 rounded">
    <h2 class="text-center text-orange-900 text-2xl sm:text-3xl font-bold">Add Skill</h2>
    <form class="flex flex-row flex-wrap p-4 bg-white rounded">
       <input type="hidden" wire:model="skillId">

        <div class="flex-1 md:w-1/5 ml-2 ">
            <x-jet-label for="cost" value="{{ __('category') }}" />
            <select class="my-2 rounded" wire:model.defer="category">
                <option value="category">category</option>
                @foreach ($categories as $c )
                     <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            <x-jet-input-error for="category" class="mt-2" />
        </div>
        <div class="w-full md:flex-1 ml-2">
            <x-jet-label for="skill" value="{{ __('skill')}}" />
            <x-jet-input id="skill" type="text" class="mt-1 block w-full" wire:model.defer="skill"
                autocomplete="skill"
                placeholder=" Enter skills (e.g. Web Designer)" />
            <x-jet-input-error for="skill" class="mt-2" />
        </div>
        <div class="flex-1 my-6 ml-2 min-w-min">
            <button class=" py-2 px-3 text-white bg-green-500 hover:bg-green-700 rounded w-1/2 {{$create}}"
            wire:click.prevent="store"
            >Save</button>
            <button class=" py-2 px-3 text-white bg-green-500 hover:bg-green-700 rounded w-1/2 {{$update}}"
            wire:click.prevent="update"
            >update</button>
        </div>
    </form>
</div>
