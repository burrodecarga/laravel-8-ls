<div class="caja70 mx-auto my-3 bg-white">
 <h2 class="text-orange-900 text-2xl text-center underline font-bold p-3">{{auth()->user()->name}} List of applies</h2>
 <ul class="flex flex-col">
     @foreach ($posts as $post)
         <li>
             <div class="grid grid-cols-1">
                <div class="px-2 py-2">
                    <div class="flex flex-wrap items-center justify-items-start border-b ">
                        <div class="flex-shrink-0 h-10 w-10">
                            <a href="#"> <img class="h-10 w-10 rounded"
                                    src="{{asset('assets/jobs/paper-look.svg')}} " alt="">
                            </a>
                        </div>
                        <div class="ml-4">
                            <div class="text-sm text-gray-900 font-bold">
                                {{$post->title}}<br>
                                @if($post->pivot->created_at)
                             <span class="font-medium">  {{$post->pivot->created_at->subMinutes(2)->diffForHumans()}}</span>
                             @endif

                            </div>
                            <div class="text-sm text-gray-500">
                                {{$post->min_salary}} $ - {{$post->max_salary}} $
                            </div>
                        </div>


                <div class="items-start ml-6 text-sm text-gray-900">
                    <img src="{{ asset('assets/jobs/pin.svg')}} " alt="{{$post->city}}"
                        class="w-3 mr-2">

                <div class="text-sm text-gray-500 flex flex-col">
                    <span class="font-bold">
                      {{$post->state}}
                    </span>
                    <span>{{$post->city}}</span>
                </div>
                </div>
                <div class="items-start ml-6 text-sm text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
                          </svg>

                <div class="text-sm text-gray-500 flex flex-col">
                    <span class="font-bold">
                     @if ($post->active==1)
                     <p>Active</p>
                     @else
                     <p>Inactive</p>
                     @endif
                    </span>

                </div>
                </div>
             </div>
                </div>
         </li>
     @endforeach
 </ul>
 <div class="mx-auto  text-center pb-6 pt-6">
     <a href="{{ url()->previous() }}" class="text-center px-11 py-3 text-white bg-blue-600 rounded">Back</a>
 </div>


</div>
