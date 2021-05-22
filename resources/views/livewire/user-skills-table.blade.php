<div class="flex flex-col text-center">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-center">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-1/2">
                                Category/Skill
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                                Level
                            </th>
                            <th scope="col" class="relative px-6 py-3 w-1/4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($skills as $s )
                        <tr>
                            <td class="px-6 py-4 ">
                                <div class="flex items-center">

                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$s->category}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$s->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 ">
                                <a href="#" wire:click="level({{$s->id}})">
                                <i class="fas fa-text-height" wire:click="level({{$s->id}})"></i>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                   {{$s->level_id}}
                                </span>
                                </a>
                            </td>

                            <td class="px-6 py-4  text-right text-sm font-medium">
                                <a href="#" wire:click="destroy({{$s->id}})">
                                    <i class="fas fa-trash-alt text-red-600"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

