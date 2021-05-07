<x-table>
    <x-marco>
        <div class="flex flex-1 mx-2 text-sm items-center">
            <select class="rounded mx-2 text-sm" wire:model="paginate">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
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
    <div class="text-center p-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('title')">
                                        Offers
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('state')">
                                        Location
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        wire:click = "sorted('schedule')">
                                        Schedule
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post )
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <a href="#"> <img class="h-10 w-10 rounded"
                                                        src="{{asset('assets/jobs/paper-look.svg')}} " alt="">
                                                </a>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$post->title}}<br>
                                                {{$post->created_at->subMinutes(2)->diffForHumans()}}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{$post->min_salary}} $ - {{$post->max_salary}} $
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex text-sm text-gray-900">
                                            <img src="{{ asset('assets/jobs/pin.svg')}} " alt="{{$post->city}}"
                                                class="w-3">
                                            {{$post->state}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$post->city}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center">
                                        <p class="{{$post->class}} w-80 p-2">{{$post->schedule}}</p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white text-center">
                                        <a href="javascript:void(0)" wire:click="editPost({{$post->id}})"><img
                                                src="{{asset('assets/svg/editar.svg')}} " alt="{{{$post->title}}}"
                                                width="25px"></a>
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
</x-table>

