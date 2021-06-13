<div>
    <section class="container mx-auto">
        <h2 class="text-2xl md:text-3xl text-orange-900 font-bold text-center py-2">Legal Documents for Hiring</h2>
        <h3 class="italic text-center p-3  text-orange-900 text-xl md:text-2xl">
            Step 1.- Please download and fill out these forms
            and you send them by mail to start our employment relationship once you have been selected.</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 bg-white p-2 justify-items-center">
            <div class="text-center p-2">
                <a href="/assets/pdf/I-9 Form .pdf" target="_blank" download
                    class="text-sl  italic text-gray-400 "><i class="far fa-file-pdf"></i>Download Form I-9</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/I-9 Form .pdf')}}" frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/w-4 Form.pdf" target="_blank" download
                    class="text-sl  italic text-gray-400 "><i class="far fa-file-pdf"></i>Download Form W-4</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/w-4 Form.pdf')}}" frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Time Card for Labor Staffers.pdf" target="_blank" download
                    class="text-sl  italic text-gray-400 "><i class="far fa-file-pdf"></i>Download
                    Timesheet</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Time Card for Labor Staffers.pdf')}}"
                    frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Employee Agreement.pdf" target="_blank" download
                    class="text-sl  italic text-gray-400 "><i class="far fa-file-pdf"></i>Download Employee
                    Agreement</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Employee Agreement.pdf')}}"
                    frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Direct Deposit Form INVOPEO.pdf" target="_blank" download
                    class="text-sl  italic text-gray-400 "><i class="far fa-file-pdf"></i>Download Direct
                    Deposit Form</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Direct Deposit Form INVOPEO.pdf')}}"
                    frameborder="0"></iframe>
            </div>
        </div>
        {{-- fin de seccion pdf --}}

        <h3 class="italic text-center p-3  text-orange-900 text-xl md:text-2xl text-justify">

            Step 2.- Watch the security videos is mandatory
            to be considered for the job</h3>
        <h2 class="text-xl md:text-2xl text-gray-400 font-bold text-center py-2">We highly recommend to watch our <a
                class="aa" href="/focal-points">Focal Points</a> with all the security videos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center bg-white">
            <video width="320" height="240" controls class="m-2">
                <source src={{asset("/assets/media/jobs/video1.mp4")}} type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="m-2">
                <source src={{asset("/assets/media/jobs/video2.mp4")}} type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
        @if ($declare)

            <h3 class="text-white font-medium bg-green-500 hover:bg-green-700
    rounded px-2 py-3 text-2sm md:text-xl mx-auto my-3">Step 3.- I declare that I watched the safety videos to be considered for the job
                <i class="fas fa-check text-white font-bold ml-4"></i></h3>

        @else
        <h3 class="text-white font-medium bg-red-700 hover:bg-green-700
    rounded px-2 py-3 my-2 text-2sm md:text-xl mx-auto cursor-pointer mb-4">
        Step 3.- Once viewed, the security videos must be declared to have been viewed.
        to do so, please press the declaration button
       </h3>
        <span class="bg-yellow-700 hover:bg-green-700
    rounded mx-auto text-sm text-white py-2 px-3 cursor-pointer" wire:click="declare">
    I declare that I saw the security videos
    </span>
        @endif
        <hr class="my-9">

        <h3 class="italic text-center p-3  text-orange-900 text-xl md:text-2xl text-justify">

            Step 3.- Optional, but highly recommended. You must create a curriculum summary or upload a file with your summary</h3>

            <div>



<a href="{{route('user-profile')}}" class="inline-block ml-16">
    <h2 class="italic p-3  text-orange-900 text-xl md:text-xl text-justify">Step 3.1.- Create, update or upload
                a pdf file of your resume, <strong
                    class="text-white text-xs bg-green-500 hover:bg-green-200 hover:text-gray-600 px-3 py-2 rounded">click
                    here</strong> </h2>
        </a> </h2>

            </div>

            <hr class="my-4">


        <div class="grid grid-cols-1 bg-gray-100 md:grid-cols-6  p-2 justify-items-center gap-2">

            <h3 class="col-span-6 text-xl md:text-2xl text-gray-500 font-bold">Profile: {{auth()->user()->name}}</h3>
            <h3 class="col-span-6 text-xl md:text-xl">{{auth()->user()->profile?->title}}</h3>
            <div class="col-start-1 col-end-3 bg-yellow-400 m-auto">
                <img src="{{asset(auth()->user()->profile_photo_url)}}" alt="{{auth()->user()->name}}" class="">
            </div>
            <div class="col-start-3 col-end-7 bg-gray-300 w-full">
                <p class="w-full px-3 "> <strong class="capitalize text-xl text-gray-600 ">address : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->address}}
                    </span></p>
                <p class="w-full px-3 "> <strong class="capitalize text-xl text-gray-600 ">phone : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->phone}}
                    </span></p>

                <p class="w-full px-3 "> <strong class="capitalize text-xl text-gray-600 ">mobile : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->mobile}}
                    </span></p>

                <p class="w-full px-3 "> <strong class="capitalize text-xl text-gray-600 ">birthdate : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->birthdate}}
                    </span></p>

                <p class="w-1/2 px-3 "> <strong class="capitalize text-xl text-gray-600 ">availability : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->availability}}
                    </span></p>

                <p class="w-1/2 px-3 "> <strong class="capitalize text-xl text-gray-600 ">cost : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->cost}} $/hr.
                    </span></p>

                <p class="w-full px-3 "> <strong class="capitalize text-xl text-gray-600 ">about me : </strong> <span
                        class="italic text-gray-500">
                        {{auth()->user()->profile?->about}}
                    </span></p>
            </div>
        </div>
        <div>
            <div class="grid grd-cols-1 my-2 bg-gray-50 border-2 mx-auto p-3">
                <h3 class="text-xl md:text-2xl">{{auth()->user()->name}} skills</h3>
                <ul class="bg-white w-full text-gray-500 flex flex-col">
                    @foreach (auth()->user()->knowledge as $tag )
                    <li><span class="mx-3 my-2 font-bold italic"><i
                                class="fas fa-award mr-3 text-green-500 "></i>{{$tag->category}}</span><span
                            class="font-medium text-sm">{{$tag->name}}<i class="fas fa-tags ml-3 text-blue-400"></i>
                        </span> </li>
                    @endforeach
                </ul>
            </div>

            <div class="grid grd-cols-1 my-2 bg-gray-50 border-2 mx-auto p-3">
                <h3 class="text-xl md:text-2xl ml-3">{{auth()->user()->name}} experiences</h3>
                <ul class="bg-white w-full flex flex-col">
                    @foreach (auth()->user()->experiences as $experience )
                    <li>
                        <div class="grid grid-rows-1 md:grid-cols-4">
                            <div class="col-start-1 col-end-2 flex flex-col">
                                <span class="mx-3 my-2 font-bold italic"><i
                                        class="fas fa-building mr-3 text-green-500 "></i>{{$experience->company}}
                                </span>
                                <span class="font-medium text-sm"><i class="fas fa-briefcase ml-3 text-blue-400"></i>
                                    <span class="ml-3">
                                        {{$experience->position}}
                                    </span>
                                </span>
                            </div>
                            <div>
                                <span class="ml-3 italic text-sm">
                                    Begin : {{$experience->date_begin}}
                                </span><br>
                                <span class="ml-3 italic text-sm">
                                    End : {{$experience->date_end}}
                                </span>
                            </div>
                            <div class="col-start-3 col-end-5 ">
                                <p class="text-justify text-gray-400 p-2 font-semibold text-xs">
                                    {{$experience->description}}
                                </p>
                            </div>


                        </div>

                        <hr>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</div>
