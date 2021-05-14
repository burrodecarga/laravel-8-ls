<div>
    <section class="container">
        <h2 class="text-2xl md:text-3xl text-gray-700 text-bold text-center py-2">Legal Documents for Hiring</h2>
        <h3 class="italic text-center p-3  text-gray-500 text-xl md:text-2xl">Please download and fill out these forms and you send them by mail to start our employment relationship once you have been selected.</h3>

         <div class="grid grid-cols-1 md:grid-cols-3 bg-gray-300 p-2 justify-items-center">
        <div class="text-center p-2">
             <a href="/assets/pdf/I-9 Form .pdf" target="_blank" download class="text-sl text-bold italic text-gray-600 " ><i class="far fa-file-pdf"></i>Download Form I-9</a>
             <iframe width="300" height="450" src="{{asset('/assets/pdf/I-9 Form .pdf')}}" frameborder="0"></iframe>
        </div>

        <div class="text-center p-2">
            <a href="/assets/pdf/w-4 Form.pdf" target="_blank" download class="text-sl text-bold italic text-gray-600 " ><i class="far fa-file-pdf"></i>Download Form W-4</a>
            <iframe width="300" height="450" src="{{asset('/assets/pdf/w-4 Form.pdf')}}" frameborder="0"></iframe>
       </div>

       <div class="text-center p-2">
        <a href="/assets/pdf/Time Card for Labor Staffers.pdf" target="_blank" download class="text-sl text-bold italic text-gray-600 " ><i class="far fa-file-pdf"></i>Download Timesheet</a>
        <iframe width="300" height="450" src="{{asset('/assets/pdf/Time Card for Labor Staffers.pdf')}}" frameborder="0"></iframe>
       </div>

       <div class="text-center p-2">
        <a href="/assets/pdf/Employee Agreement.pdf" target="_blank" download class="text-sl text-bold italic text-gray-600 " ><i class="far fa-file-pdf"></i>Download Employee Agreement</a>
        <iframe width="300" height="450" src="{{asset('/assets/pdf/Employee Agreement.pdf')}}" frameborder="0"></iframe>
       </div>

       <div class="text-center p-2">
        <a href="/assets/pdf/Direct Deposit Form INVOPEO.pdf" target="_blank" download class="text-sl text-bold italic text-gray-600 " ><i class="far fa-file-pdf"></i>Download Direct Deposit Form</a>
        <iframe width="300" height="450" src="{{asset('/assets/pdf/Direct Deposit Form INVOPEO.pdf')}}" frameborder="0"></iframe>
       </div>
        </div>
{{-- fin de seccion pdf --}}

     <h2 class="text-xl md:text-2xl text-gray-700 text-bold text-center py-2">Watch the security videos is mandatory to be considered for the job</h2>
     <h2 class="text-xl md:text-2xl text-gray-700 text-bold text-center py-2">We highly recommend to watch our <a class="aa" href="/focal-points">Focal Points</a> with all the security videos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center bg-gray-300">
 <video width="320" height="240" controls class="m-2">
    <source src={{asset("/assets/media/jobs/video1.mp4")}} type="video/mp4"/>
    Your browser does not support the video tag.

  </video>
  <video width="320" height="240" controls class="m-2">
    <source src={{asset("/assets/media/jobs/video2.mp4")}}  type="video/mp4"/>
    Your browser does not support the video tag.
  </video>
    </div>
  @if ($declare)
    <form>
    <h3 class="text-white font-medium bg-yellow-500 hover:bg-yellow-700
    rounded mx-2 px-2 text-2sm md:text-xl m-3">I declare that I watched the safety videos to be considered for the job <i class="fas fa-check text-green-800 font-bold"></i></h3>
  </form>
  @else
      <button button class="bg-yellow-500 hover:bg-yellow-700
    rounded mx-2 px-2 text-sm text-white" wire:click ="declare">I declare that I saw the security videos</button>
  @endif








  <a href="{{route('user-profile')}}">
  <h2 class="font-semibold text-xl md:text-2xl text-gray-500 leading-tight">create, update or upload a pdf file of your resume, <strong class="text-white text-xs bg-green-500 hover:bg-green-200 hover:text-gray-600 px-3 py-2 rounded">click here</strong> </h2>
  </a>


  <div>
  <h3>{{auth()->user()->name}}</h3>
  <p>phone {{auth()->user()->profile->phone}} </p>
  <p>address {{auth()->user()->profile->address}} </p>
  <p>about me {{auth()->user()->profile->about}} </p>
  <p>skills</p>
   <ul>
  @foreach (auth()->user()->tags as $tag )
  <li>{{$tag->skill .' '. $tag->tag}}</li>
 @endforeach
   </ul>

  <p>experience</p>
  @foreach (auth()->user()->experiences as $tag )
  <li>{{$tag->skill.' -'. $tag->tag}}</li>
 @endforeach

 <a href="/assets/pdf/Direct Deposit Form INVOPEO.pdf" target="_blank" download class=""><i class="far fa-file-pdf"></i>Download resume: {{{auth()->user()->name}}}</a>

 <iframe src="https://docs.google.com/viewer?url=/assets/pdf/Direct Deposit Form INVOPEO.pdf&embedded=true"  frameborder="0"></iframe>

 <iframe width="400" height="400" src="{{asset('/assets/pdf/MP-Timecard.pdf')}}" frameborder="0"></iframe>
  </div>
  <div>
  <h1>Upload a PDF file with your I-94 or W-4 filled out</h1>

  <br/>
  </div>

  </section>


</div>
