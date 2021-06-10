<div class="grid grid-cols-1 md:grid-cols-5 gap-2">
    <div class="col-span-5 md:col-span-4">
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
 </div>
</div>
@livewire('show-role')
</div>
<div class="col-span-5 md:col-start-5 my-auto">
    <h1 class="text-2xl font-bold mb-16 text-center">List of Jobs</h1><hr class="my-3">
    <x-admin-nav-menu />
</div>
</div>

