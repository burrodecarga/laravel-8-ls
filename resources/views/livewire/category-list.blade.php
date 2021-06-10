
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Personal Skills') }}
    </h2>
</x-slot>

<div>
    <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
        <div class="grid  grid-cols-1 md:grid-cols-7 bg-gray-300 p-3 rounded">
            <div class="grid col-start-1 col-span-2 gap-2 p-4 bg-white rounded">
                <div>
                    <select class="rounded mx-2 text-sm" wire:model="categoryId">
                        <option value="">Select Category</option>
                        @foreach ($categories as $c )
                        <option value={{$c->id}}>{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div> <div class="grid col-start-3 col-span-5 gap-2 p-4 bg-white rounded">
            <div class="flex flex-1 flex-wrap">
                @foreach ($skillsOfCategory as $s )
                <a href="#" class="text-center ml-4 text-white font-extralight px-4 py-3 bg-green-500 hover:bg-green-700 m-2 rounded" wire:model="skillId">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    wire:click='createSkill({{$s->id}},{{$categoryId}})'>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                      </svg>
                    <label >{{$s->name}}</label>
                </a>
                <div></div>
                 @endforeach
            </div>
        </div>
        </div>
    </div>


<div class="{{$showModalSkill}} fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
              <!-- Heroicon name: outline/exclamation -->
              <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                Add strength and skill
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                    This skill will serve to classify your service offer.
                    You must specify and add your domain level of:
                    <hr>
                    <strong class="font-bold bg-green-600 text-white px-2">{{$skillName}}</strong>
                </p>
              </div>
              <div class="flex-1 m-2 ">
                <x-jet-label for="tag" value="{{ __('specific ability') }}" />
                <x-jet-input id="tag" type="text" class="mt-1 block w-full placeholder-gray-500 placeholder-opacity-50"
                    wire:model.defer="tag" autocomplete="tag"
                    placeholder="For example PHP programmer" />
                <x-jet-input-error for="tag" class="mt-2" />
            </div>

            <div class="flex-1 m-2 ">
                <x-jet-label for="level" value="{{ __('mastery level') }}" />
               <select class="form-control" wire:model="level">
                   <option value="">Select Level</option>
                   <option value="1">low</option>
                   <option value="2">medio</option>
                   <option value="3">regular</option>
                   <option value="4">high</option>
                   <option value="5">excellent</option>
               </select>
                <x-jet-input-error for="level" class="mt-2" />
            </div>
            <input type="hidden" wire:model='skillId'>
            <input type="hidden" wire:model='categoryId'>

            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm"
          wire:click="storeSkill">
            Save Skill
          </button>
          <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" wire:click="$set('showModalSkill','hidden')">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>




