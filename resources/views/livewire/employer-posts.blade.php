<div>
<div class="contenedor-cards">
    @foreach ($posts as $post )
    <div class="objeto-card">

        <h3 class="font-bold text-center text-orange-900 text-xl my-4">{{$post->title}}</h3>
        <h3 class="font-bold text-center text-gray-400 text-3xs my-2">{{$post->position}}</h3>
        <h3 class="text-center"><span class="font-medium text-sm text-gray-400"> {{$post->created_at->subMinutes(2)->diffForHumans()}}</span></h3>
        <div class="flex justify-around text-gray-400 text-sm my-1">
            <div>{{$post->state}}</div>
            <div>{{$post->city}}</div>
        </div>
        <div class="flex justify-around text-white text-sm ">
            <div class="{{$post->class}} py-2 px-3 rounded">{{$post->schedule}}</div>
            <div  class="{{$post->class}} py-2 px-3 rounded">{{$post->min_salary.' - '.$post->max_salary}} $</div>
        </div>

        <div class="my-2 py-2 px-3 rounded">
            <strong>Candidates : </strong>{{$post->users?->count()}}
        @if($post->users?->count())
        <a href="#">Ir a Ver</a>
        @endif
        </div>
        <div class="my-2 py-2 px-3 rounded"><strong>Status : </strong>@if($post->active == 1) <span class="text-green-800 font-bold">Active</span> @else <span class="text-red-800 font-bold">Inactive</span> @endif</div>

        <p class="text-gray-500 mt-5 text-justify text-sm p-3"><strong>Body : </strong> {{$post->body}}</p>
        <p class="text-gray-500 mt-5 text-justify text-sm p-3"><strong>Qualifications : </strong>{{$post->qualifications}}</p>
        <p class="text-gray-500 mt-5 text-justify text-sm p-3"><strong>Resposabilities : </strong>{{$post->responsibilities}}</p>
    </div>
    @endforeach
</div>
</div>
