<div>
  @foreach ($focalPoints as $point)
       <a href="{{route('focal-points-show',$point->slug)}}" class="text-orange-900 text-xl" >{{$point->title}}</a>
        <p clas="p">{{$point->description}}</p>
  @endforeach
</div>


