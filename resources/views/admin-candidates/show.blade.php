<x-cpp-layout>
    <div class="caja80 p-4 mx-auto">
        <h2 class="text-gray-500 text-xl sm:text-xl font-bold">Candidates:</h2>
        <hr>
        <h2 class="text-orange-900 text-xl sm:text-xl font-bold"> {{$post->title}}</h2>
        <hr>
        <h2 class="text-gray-400 text-xl sm:text-sm font-bold">{{$post->state}} : {{$post->city}}</h2>
        <hr>
        <h2 class="text-gray-400 text-xl sm:text-sm font-bold">{{$post->min_salary}} $ : {{$post->max_salary}} $</h2>
        <hr class="my-1">

        <span class="text-white text-sm px-3 py-1 rounded {{$post->class}}">{{$post->schedule}}</span>


        <p class="text-gray-500 mt-5 text-justify"><strong>Body: </strong> {{$post->body}}</p>
        <p class="text-gray-500 mt-5 text-justify"><strong>Resposabilities: </strong>{{$post->responsibilities}}</p>
        <p class="text-gray-500 mt-5 text-justify"><strong>Qualifications: </strong>{{$post->qualifications}}</p>
    </div>
    <div class="caja80 p-4 mx-auto">
        <x-table>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                            Name

                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                            Files
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                            Resume
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

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$user->email}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-block w-full text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                                {{$user->profile?->title}}<br>

                            </span>@if($user->files)
                            <ul class="flex flex-col">


                            @foreach ($user->files as $f)
                            <li class="my-1">


<a href="{{asset('storage/'.$f->path)}}" target="_blank" download
                            class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>{{$f->name}}</a>
                            </li>

                            @endforeach
                        </ul>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="{{route('user.resume',$user->id)}}">Go..</a>
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
