<div class="caja90 p-5">
    <div class="text-center p-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden sm:rounded-lg shadow-none">
                        <table class="min-w-full">
                            <thead class="bg-white invisible">
                                <tr>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                        Offers

                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                        Location

                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                        Schedule
                                        </th>


                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($posts as $post )

                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <a href="#"> <img class="h-10 w-10 rounded"
                                                        src="{{asset('assets/jobs/paper-look.svg')}} " alt="">
                                                </a>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm text-gray-900 font-bold">
                                                    {{$post->title}}<br>
                                                 <span class="font-medium">  {{$post->created_at->subMinutes(2)->diffForHumans()}}</span>

                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{$post->min_salary}} $ - {{$post->max_salary}} $
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-center text-sm text-gray-900">
                                            <img src="{{ asset('assets/jobs/pin.svg')}} " alt="{{$post->city}}"
                                                class="w-3 mr-2">


                                        <div class="text-sm text-gray-500 flex flex-col">
                                            <span class="font-bold">
                                              {{$post->state}}
                                            </span>
                                            <span>{{$post->city}}</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center">
                                        <p class="{{$post->class}} w-50 p-2">{{$post->schedule}}</p>
                                    </td>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center cursor-pointer">
                                    <a href="javascript:void(0)" wire:click="showJob({{$post->id}})"><img
                                            src="{{asset('assets/svg/portapapeles.svg')}} " alt="{{{$post->title}}}"
                                            width="25px"></a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
