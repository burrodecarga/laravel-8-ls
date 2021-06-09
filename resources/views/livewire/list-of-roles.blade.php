<div class="mx-auto">
    <div class="flex w-screen">
        <div class="flex-1 m-2 w-1/2">
            <table class="min-w-full divide-y divide-gray-500 ">
                <thead class="bg-blue-700">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                           Id
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Role Users
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($roles as $role )
                       <tr>
                        <td class="px-6 py-4 ">
                           {{$role->id}}
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-500">{{$role->name}} </div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-500">
                                {{$role->count_user}}
                            </div>
                        </td>

                        <td class="px-6 py-4  text-right text-sm font-medium">
                            <a href="#" class="bg-indigo-300 px-3 text-indigo-600 hover:text-indigo-900 cursor-pointer"
                            wire:click="showRole({{$role->id}})"
                            >Edit</a>
                            <a href="#" class="bg-green-300 px-3 text-green-600 hover:text-green-900 cursor-pointer">Permissions</a>
                            @if (!$role->count_user)
                                 <a href="#" class="bg-red-300 px-3 text-red-600 hover:text-red-900 cursor-pointer">Delete</a>
                            @endif

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
       <div class="flex-1 m-2 w-1/2">
       {{--      <table class="min-w-full divide-y divide-gray-500 ">
                <thead class="bg-blue-700">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                           Id
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            User
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>

                        <td class="px-6 py-4 ">
                           1
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-500">Admin</div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-500">4</div>
                        </td>

                        <td class="px-6 py-4  text-right text-sm font-medium">
                            <a href="#" class="bg-indigo-300 px-3 text-indigo-600 hover:text-indigo-900 cursor-pointer">Edit</a>
                            <a href="#" class="bg-green-300 px-3 text-green-600 hover:text-green-900 cursor-pointer">Permissions</a>
                            <a href="#" class="bg-red-300 px-3 text-red-600 hover:text-red-900 cursor-pointer">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table> --}}
        </div>
    </div>
</div>
@livewire('show-role')
