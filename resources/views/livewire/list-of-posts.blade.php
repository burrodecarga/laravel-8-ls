<x-table>
    <x-marco>
        <div class="flex">
            <select class="rounded my-5 mx-2 text-sm" wire:model = "paginate">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <input type="text" class="form-search text-sm my-5  w-1/3 text-gray-600 p-3 rounded" placeholder="Search by Name or By Email" wire:model = "search">
            <button class="bg-red-500 hover:bg-red-700 text-sm my-5 ml-3 p-3 rounded text-white" wire:click ="clear">
                clear
              </button>
        </div>
    </x-marco>
    @if (!$users->count())
              <div class="text-center bg-red-600 text-white p-3 ">
               There is no result for the search
              </div>
               @else
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click = "sorted('name')">
                   Name
                   <span class="fa fa{{$campo === 'name' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click = "sorted('email')">
                 Email
                   <span class="fa fa{{$campo === 'email' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Role
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click = "sorted('id')">
                  Id
                    <span class="fa fa{{$campo === 'id' ? $icon : '-circle'}}"></span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>

        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                Jane Cooper
                            </div>
                            <div class="text-sm text-gray-500">
                                jane.cooper@example.com
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                    <div class="text-sm text-gray-500">Optimization</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Admin
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-center p-4">
        {{$users->links()}}
   </div>
    @endif
</x-table>
