<x-cpp-layout>
    <div class="flex justify-center">
        <div class="flex w-3/5">
            <div class="flex-1 m-4 text-green-700 hover:text-green-300" title="{{__('Create new Role ')}}">
                <a href="{{route('roles.create')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg> <p>New Role</p></a>
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
                                User
                            </th>

                            <th scope="col" class="relative px-6 py-3" colspan="2">
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
                                    {{$role->cont_user}}

                                </div>
                            </td>

                            <td>
                                <a href="{{route('roles.edit',$role->id)}}"
                                class="text-indigo-600 hover:text-indigo-900 cursor"
                                title="{{'Edit role '.$role->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                  </svg>
                                </a>
                            </td>
                            <td>
                                <a class="" href="#" onclick="event.preventDefault();
                                document.getElementById('{{'delete-form'.$role->id}}').submit();"
                   data-toggle="tooltip" data-placement="top"
                   title="{{__('delete record '.$role->name)}} ">

                   <i class="fa fa-trash text-red-600 hover:text-red-300" aria-hidden="true"></i>
               </a>
               <form id="{{'delete-form'.$role->id}}" action="{{route('roles.destroy',$role->id)}}" method="POST"
                   style="display: none;">
                   @csrf
                   @method('DELETE')
               </form>
                            </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <div class="col-span-5 md:col-start-5 my-auto">
        <h1 class="text-2xl font-bold my-3 text-center">Roles</h1><hr class="my-3">
        <x-admin-nav-menu />
    </div>
</x-cpp-layout>
