<x-table>
    <x-marco>
        <div class="flex flex-1 mx-2 text-sm">
            <select class="rounded mx-2 text-sm" wire:model = "paginate">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <input type="text" class="rounded mx-2 text-sm w-1/3" placeholder="Search by Name or by Email" wire:model = "search">
            <select class="rounded mx-2 text-sm" wire:model = "user_role">
                <option value="">role</option>
                <option value="guest">guest</option>
                <option value="candidate">candidate</option>
                <option value="employer">employer</option>
                <option value="admin">admin</option>
            </select>
            <button class="bg-red-500 hover:bg-red-700
            rounded mx-2 px-2 text-sm text-white" wire:click ="clear">
                clear
              </button>
        </div>
    </x-marco>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                    wire:click="sorted('name')">
                    Name
                    <span class="fa fa{{$campo === 'name' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                    wire:click="sorted('email')">
                    Email
                    <span class="fa fa{{$campo === 'email' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                >
                 Role
                 <span class="fa fa{{$campo === 'role' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                    wire:click="sorted('id')">
                    Id
                    <span class="fa fa{{$campo === 'id' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col" class="relative px-6 py-3" colspan="2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user )
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_url}}"
                                alt="{{$user->name}}">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$user->name}}
                            </div>
                            <div class="text-sm text-gray-500">

                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$user->email}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{$user->role}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$user->id}}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center cursor-pointer">
                    <a href="javascript:void(0)" wire:click="showUser({{$user->id}})"><img
                            src="{{asset('assets/svg/editar.svg')}} " alt="{{{$user->title}}}"
                            width="25px"></a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center cursor-pointer">
                    <a href="javascript:void(0)"
                    wire:click.prevent="confirmDelete({{$user->id }})">
                    <img
                            src="{{asset('assets/svg/delete.svg')}} " alt="{{{$user->title}}}"
                            width="25px">
                        </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
    <x-marco>
       <div class="text-center p-4">
        {{$users->links()}}
    </div>
    </x-marco>
</x-table>
@livewire('show-user')

