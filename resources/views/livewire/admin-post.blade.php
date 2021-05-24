<div class="p-4">
    <x-marco>
        <div class="grid gap-1 grid-col-1 sm:grid-cols-3 xl:grid-cols-7 items-start">
            <select class="rounded mx-2 text-sm" wire:model="paginate">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="200">200</option>
            </select>
            <input id="m1" wire:model="search" type="text" class="rounded mx-2 text-sm">
            <select class="rounded mx-2 text-sm" wire:model="max_salary">
                <option value="100000000">Salary</option>
                @foreach ($salaries as $salary )
                <option class="text-center" value={{$salary->max_salary}}>
                    {{number_format($salary->max_salary,0)}} $ </option>
                @endforeach
            </select>
            <select class="rounded mx-2 text-sm" wire:model="state">
                <option value="">Select State</option>
                @foreach ($states as $state )
                <option value={{$state}}>{{$state}}</option>
                @endforeach
            </select>
            <select class="rounded mx-2 text-sm" wire:model="schedule">
                <option value="">Select Schedule</option>
                @foreach ($schedules as $schedule )
                <option value="{{$schedule}}">{{$schedule}}</option>
                @endforeach
            </select>
            <button class="border-none bg-red-500 hover:bg-red-700 text-sm rounded mx-2 py-2 px-3 text-white"
                wire:click="clear">
                clear
            </button>
            @livewire('create-post')
        </div>
    </x-marco>
    @if (!$posts->count())
    <div class="text-center bg-red-600 text-white p-3 ">
        There is no result for the search
    </div>
    @else
    <div class="text-center p-4 blanco-puro">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b sm:rounded-lg">
                        <table class="min-w-full bg-white table-resp">
                            <thead class="bg-white">
                                <tr>
                                    <th scope="col"
                                        class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('title')">
                                        Offers
                                        <span class="fa fa{{$campo === 'title' ? $icon : '-circle'}}"></span>
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('state')">
                                        Location
                                        <span class="fa fa{{$campo === 'state' ? $icon : '-circle'}}"></span>
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('schedule')">
                                        Schedule
                                        <span class="fa fa{{$campo === 'schedule' ? $icon : '-circle'}}"></span>
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider "
                                        wire:click = "sorted('active')">
                                       Publish
                                       <span class="fa fa{{$campo === 'active' ? $icon : '-circle'}}"></span>
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20"
                                        colspan="2">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($posts as $post )

                                <tr class="border-b-2">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <a href="javascript:void(0)"> <img class="h-10 w-10 rounded"
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
                                                <div class="text-sm text-blue-600">
                                                    Candidates : {{$post->users->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-center text-sm text-gray-900">
                                            <span class="text-orange-900 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>

                                            </span>


                                        <div class="text-sm text-gray-500 flex flex-col">
                                            <span class="font-bold">
                                              {{$post->state}}
                                            </span>
                                            <span>{{$post->city}}</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-white text-center">
                                        <p class="{{$post->class}} w-50 ">{{$post->schedule}}</p>
                                    </td>
                                </td>
                                <td class="px-6 py-4 text-sm text-white text-center cursor-pointer">
                                    <p class="{{$post->active==1 ? 'bg-green-500 rounded-full':'bg-red-500 rounded-full'}} w-10"
                                        wire:click="pubPost({{$post->id}})"
                                        title="{{$post->active==1 ? 'Publish':'No Publish'}}">{{$post->active==1 ? 'Y':'N'}}</p>
                                </td>
                                <td class="cliquear  hover:bg-gray-100  text-green-600 hover:text-blue-600">
                                    <a href="javascript:void(0)" wire:click="showCandidates({{$post->id}})" title="List of Candidates">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                              </svg></a>
                                </td>

                                    <td class="cliquear  hover:bg-gray-100 text-blue-700 hover:text-green-700">
                                        <a class="text-red" href="javascript:void(0)" wire:click="showPost({{$post->id}})" title="Edit post {{$post->title}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                              </svg>
                                            </a>
                                    </td>

                                    <td class="cliquear  hover:bg-gray-100 text-blue-700 hover:text-green-700">
                                        <a href="javascript:void(0)"
                                        wire:click.prevent="confirmDelete({{$post->id }})">
                                        <img
                                                src="{{asset('assets/svg/delete.svg')}} " alt="{{{$post->title}}}"
                                                width="25px"
                                                class="border-red-600">
                                            </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-3 items-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div class="p-4">
@livewire('show-post')


