<div class="bg-gray-300 p-3 rounded">
    <h2 class="text-center text-orange-900 text-2xl sm:text-3xl font-bold">Add Skill for {{auth()->user()->name}}</h2>
    <form class="grid grid-cols-1 items-center md:grid-cols-3 gap-2 bg-white rounded p-3">
       <input type="hidden" wire:model="skillId">
        <div>
          <x-jet-label for="cost" value="{{ __('Category') }}" />
            <select class="my-2 rounded w-full" wire:model="category" wire:change='getCategory'>
                <option value="category">category</option>
                @foreach ($categories as $c )
                     <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            <x-jet-input-error for="category" class="mt-2" />
        </div>
        <div>
            <x-jet-label for="skill" value="{{ __('New knowledge for the category')}}" />
            <x-jet-input id="skill" type="text" class="w-full" wire:model.defer="skill"
                autocomplete="skill"
                placeholder=" Enter skills (e.g. Web Designer)" />
            <x-jet-input-error for="skill" class="mt-2" />
        </div>
          <div>
            <x-jet-label for="" value="{{ __('action')}}" />
            <button class=" py-2 px-3 text-white bg-green-500 hover:bg-green-700 rounded w-1/2 {{$create}}"
            wire:click.prevent="store"
            >Save</button>

            <button class=" py-2 px-3 text-white bg-green-500 hover:bg-green-700 rounded w-1/2 {{$update}}"
            wire:click.prevent="update"
            >update</button>
        </div>
        <div class="col-span-full border-2 border-gray-200 p-3 wrap">
            @foreach ($selectCategory as $index=>$cat )
            <span class="inline-block">
            <label class="text-blue-700 text-justify">{{$cat->name}}</label>
            <input wire:model="selectSkills.{{ $index }}" value="{{ $cat->id }}"
            type="checkbox" class="m-4"></span>
            @endforeach
        </div>
    </form>
</div>

