<div>
<div class="bg-gray-300 p-3 rounded">
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


<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Category
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Skill
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Slug
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($skills as $s )
                   <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{$s->category}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                 {{$s->name}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$s->id}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium cursor-pointer">
                  <a class="text-green-600 hover:text-green-900"
                  wire:click="edit({{$s->id}})"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium cursor-pointer">
                    <a class="text-red-600 hover:text-red-900"
                    wire:click="destroy({{$s->id}})"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                      </svg>
                    </a>
                  </td>
              </tr>
                @endforeach
            </tbody>
          </table>

        </div>

      </div>
    </div>
</div>
     <div class="p-3 items-center">
                {{$skills->links()}}
     </div>
</div>


