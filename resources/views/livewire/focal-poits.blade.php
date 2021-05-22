        <div class="grid  grid-cols-1 bg-white p-3 rounded caja80 items-center m-auto">
            <h2  class="text-orange-900 text-4xl font-bold">
                PA OSHA CONSULTATION FOCAL POINTS SERIES
            </h2>
            <p class="text-gray-500 mt-5 text-justify">
                The Pennsylvania OSHA Consultation Program developed this series of videos focusing on the top 25 areas identified by the Occupational Safety and Health Administration during inspections. The video series can be used to supplement training that employers must provide to their employees. The video series includes 25 videos that are available to help both employees and employers.
            </p>
            <h3 class="text-orange-900 my-8 text-justify text-4xl font-bold">Focal Point :</h3>
  @foreach ($focalPoints as $point)
     <section class="p-5 max-w-6xl text-justify">
      <a href="{{route('focal-points-show',$point->id)}}"
        class="text-orange-900 text-4xl font-bold hover:text-blue-700 hover:underline" >{{$point->title}}</a>
        <p class="text-gray-500 mt-5 text-justify">{{$point->description}}</p>
     </section>
  @endforeach
        </div>


