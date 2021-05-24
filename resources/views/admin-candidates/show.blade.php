<x-cpp-layout>
   <div class="caja80 p-4 ">
       <h2 class="text-orange-900 text-xl sm:text-2xl font-bold">candidates who applied for : {{$post->title}}</h2>
       <h2 class="text-gray-400 text-xl sm:text-xl font-bold">{{$post->state}} : {{$post->city}}</h2>
       <h2 class="text-gray-400 text-xl sm:text-xl font-bold">{{$post->min_salary}} $ : {{$post->max_salary}} $ - {{$post->schedule}}</h2>
       <p class="text-gray-500 mt-5 text-justify">{{$post->body}}</p>
       <p class="text-gray-500 mt-5 text-justify">{{$post->responsibilities}}</p>
       <p class="text-gray-500 mt-5 text-justify">{{$post->qualifications}}</p>
   </div>
   <div class="caja80 p-4 ">
       <x-table>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                    >
                    Name

                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                  >
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                >
                 Role
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                  >
                    Id
                </th>
                <th scope="col" class="relative px-6 py-3" colspan="2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($candidates as $user )
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
                        {{$user->resume}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$user->id}}
                </td>


            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
</x-table>
@livewire('show-user')
</div>

</x-cpp-layout>
