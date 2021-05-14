<div>
    <div class="container">
        <div class="flex w-auto">
            <div class="flex-1 m-2">
                <table class="min-w-full divide-y divide-gray-500 ">
                    <thead class="bg-blue-700">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                               Id
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                             Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                               Skills
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($skills as $skill )
                           <tr>
                            <td class="px-6 py-4 ">
                               {{$skill->id}}
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-500 italic">{{$skill->category}}</div>
                                <div class="text-xs text-gray-900">{{$skill->skill}}</div>
                            </td>
                            <td class="px-6 py-4 w-1/3">
                                <div class="text-sm text-gray-500 italic">
                                    {{$skill->tag}}
                                    <div class="w-{{$skill->level*20}} bg-green-{{$skill->level*100}} text-green-900 text-center text-xs border-gray-200">
                                       {{$skill->level*20}} %
                                    </div>

                                </div>
                                <div>

                                </div>
                            </td>

                            <td class="px-6 py-4  text-right text-sm font-medium">
                                <a href="#" class="bg-red-700 px-3 text-white hover:bg-yellow-200 cursor-pointer rounded hover:text-gray-600"
                                wire:click="destroy({{$skill->id}})"
                                >delete</a>
                                </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
    </div>
</div>

