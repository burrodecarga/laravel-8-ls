<div class="caja90 mx-auto">
    <h1 class="text-center text-xl font-bold my-3">List Of Messages</h1>
    @if (session()->has('success'))
    <div class="my-2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Message send..!</strong>
        <span class="block sm:inline">{{session('success')}}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg onClick="reset" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>
        @endif
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Message
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Response
                                </th>

                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($messages as $m )
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{$m->user->profile_photo_url}}"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$m->user->name}}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{$m->user->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($m->responses->count())
<div class="text-sm text-gray-900 mr-2">{{$m->subject}}
                                        <span class="text-xs text-gray-400 italic font-medium block">
                                            {{$m->created_at->subMinutes(2)->diffForHumans()}}</span>
                                    </div>
                                    <div class="text-sm text-gray-500">{{$m->body}}</div>
                                    @else
                                    <span class="text-red-600 font-bold">
                                        {{$m->subject}}
                                    </span>
                                    <span                                               class="text-xs text-red-900 italic font-medium block">
                                                {{$m->created_at->subMinutes(2)->diffForHumans()}}</span><br>
                                            <div class="text-sm font-medium text-gray-400">{{$m->body}}</div><a href="{{route('message-read',$m->id)}}" class="text-indigo-600 hover:text-green-900"><i
                                            class="fas fa-2x fa-mail-bulk float-right" title="Response Message" ></i></a>
                                    @endif

                                </td>
                                <td class="px-6 py-4">
                                    @if ($m->responses->count())
                                    <ul class="flex flex-col">
                                        @foreach ($m->responses as $r )
                                        <li class="text-sm font-medium text-gray-900">{{$r->subject}} <span
                                                class="text-xs text-gray-400 italic font-medium block">
                                                {{$r->created_at->subMinutes(2)->diffForHumans()}}</span><br>
                                            <div class="text-sm font-medium text-gray-400">{{$r->body}}</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif

                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
                <div class="my-2">
                    {{$messages->links()}}
                </div>
            </div>
        </div>
    </div>


</div>
