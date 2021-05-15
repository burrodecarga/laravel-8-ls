<div>
    <section class="container">
        <h2 class="text-2xl md:text-3xl text-gray-700 text-bold text-center py-2">Legal Documents for Hiring</h2>
        <h3 class="italic text-center p-3  text-gray-500 text-xl md:text-2xl">Please download and fill out these forms
            and you send them by mail to start our employment relationship once you have been selected.</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 bg-gray-300 p-2 justify-items-center">
            <div class="text-center p-2">
                <a href="/assets/pdf/I-9 Form .pdf" target="_blank" download
                    class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>Download Form I-9</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/I-9 Form .pdf')}}" frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/w-4 Form.pdf" target="_blank" download
                    class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>Download Form W-4</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/w-4 Form.pdf')}}" frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Time Card for Labor Staffers.pdf" target="_blank" download
                    class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>Download
                    Timesheet</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Time Card for Labor Staffers.pdf')}}"
                    frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Employee Agreement.pdf" target="_blank" download
                    class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>Download Employee
                    Agreement</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Employee Agreement.pdf')}}"
                    frameborder="0"></iframe>
            </div>

            <div class="text-center p-2">
                <a href="/assets/pdf/Direct Deposit Form INVOPEO.pdf" target="_blank" download
                    class="text-sl text-bold italic text-gray-600 "><i class="far fa-file-pdf"></i>Download Direct
                    Deposit Form</a>
                <iframe width="300" height="450" src="{{asset('/assets/pdf/Direct Deposit Form INVOPEO.pdf')}}"
                    frameborder="0"></iframe>
            </div>
        </div>
        {{-- fin de seccion pdf --}}

        <h2 class="text-xl md:text-2xl text-gray-700 text-bold text-center py-2">Watch the security videos is mandatory
            to be considered for the job</h2>
        <h2 class="text-xl md:text-2xl text-gray-700 text-bold text-center py-2">We highly recommend to watch our <a
                class="aa" href="/focal-points">Focal Points</a> with all the security videos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center bg-gray-300">
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
        <form>
            <h3 class="text-white font-medium bg-yellow-500 hover:bg-yellow-700
    rounded mx-2 px-2 text-2sm md:text-xl m-3">I declare that I watched the safety videos to be considered for the job
                <i class="fas fa-check text-green-800 font-bold"></i></h3>
        </form>
        @else
        <button button class="bg-yellow-500 hover:bg-yellow-700
    rounded mx-2 px-2 text-sm text-white" wire:click="declare">I declare that I saw the security videos</button>
        @endif








        <a href="{{route('user-profile')}}">
            <h2 class="font-semibold text-xl md:text-2xl text-gray-500 leading-tight my-3 mb-3">create, update or upload
                a pdf file of your resume, <strong
                    class="text-white text-xs bg-green-500 hover:bg-green-200 hover:text-gray-600 px-3 py-2 rounded">click
                    here</strong> </h2>
        </a>
        <div class="grid grid-cols-1 bg-gray-200 md:grid-cols-6  p-2 justify-items-center gap-2">

            <h3 class="col-span-6 text-xl md:text-2xl">{{auth()->user()->name}}</h3>
            <h3 class="col-span-6 text-xl md:text-xl">{{auth()->user()->profile?->title}}</h3>
            <div class="col-start-1 col-end-3 bg-yellow-400 m-auto">
                <img src="{{asset('assets/jobs/bg.jpg')}}" alt="{{auth()->user()->name}}" class="">
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
            <div class="grid grd-cols-1 my-2 bg-gray-300">
                <h3 class="text-xl md:text-2xl">{{auth()->user()->name}} skills</h3>
                <ul class="bg-white w-full ">
                    @foreach (auth()->user()->tags as $tag )
                    <li><span class="mx-3 my-2 font-bold italic"><i
                                class="fas fa-award mr-3 text-green-500 "></i>{{$tag->skill}}</span><span
                            class="font-medium text-sm">{{$tag->tag}}<i class="fas fa-tags ml-3 text-blue-400"></i>
                        </span> </li>
                    @endforeach
                </ul>
            </div>

            <div class="grid grd-cols-1 my-2 bg-gray-300">
                <h3 class="text-xl md:text-2xl">{{auth()->user()->name}} experiences</h3>
                <ul class="bg-white w-full ">
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

            <a href="{{asset('user-profile')}} " class="text-xs w-full bg-green-600 py-2 px-3 rounded text-white">Upload a PDF file with your I-94 or W-4 filled out</a >


    </section>
</div>
