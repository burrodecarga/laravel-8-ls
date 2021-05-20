<x-bpp-layout pageClass="about">
    <x-slot name="pageTitulo">About Labor Staffers</x-slot>
    <x-slot name="pageSubTitulo">''</x-slot>
    <x-slot name="classTitulo">
        text-white text-center font-bold my-20 text-4xl sm:text-5xl md:text-7xl
    </x-slot>
    <x-slot name="classSubTitulo">''</x-slot>
    <div class="py-12 bg-white flex flex-col">
        <section class="m-auto p-5 max-w-6xl">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">More than 20
                    years helping companies
                </h2>
                <p class="text-gray-500 mt-5 text-justify">For nearly 20 years job seekers across the country
                    have trusted Labor Staffers’s expert recruiters to guide them through the hiring process and
                    help them find the perfect job. Labor Staffers places talented professionals into
                    administrative, light-industrial, superintendent, developers, and management level positions
                    at some of the nation’s largest and most recognizable companies.
                </p>

                <a href="{{url('/services')}}"
                    class="btnPage bg-blue-600 py-6 w-60 text-center  text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5">our
                    services
                </a>
            </div>
        </section>
        <section class="m-auto p-5 max-w-6xl">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Looking for your next great hire? We can help
                    with that too
                </h2>
                <p class="text-gray-500 mt-5 text-justify">We have experience and a selective selection process to
                    choose the best candidates
                    for your company, we know that it can be really expensive and requires a great investment of
                    effort and time to get highly trained personnel for the vacancies available in your company,
                    here at Labor Staffers we do it for you with the quality guarantee that we offer. If you are
                    looking for short, medium or long-term employment relationships, you are in the right place.
                </p>
                <div class="font-bold text-gray-500 my-5">
                    <ul class=" flex flex-col text-blue-600 text-2xl p-5">
                        <li class="list-disc"><span class="text-gray-500 text-sm">Full time jobs</span></li>
                        <li class="list-disc"><span class="text-gray-500 text-sm">Temporary staff</span></li>
                        <li class="list-disc"><span class="text-gray-500 text-sm">1st, 2nd, and 3rd Shift</span></li>
                    </ul>
                </div>
                <div>
                    <a href="{{url('/employers')}}"
                        class="btnPage bg-blue-600 py-6 w-60 text-center text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5 content-center">request
                        staff</a>
                </div>
            </div>
        </section>
        <section class="m-auto p-5 max-w-6xl">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Our values and beliefs help us find the
                    perfect
                    match</h2>
                <p class="text-gray-500 mt-5 text-justify">The perfect match requires a great search, not everyone can
                    hold a position in the
                    same way. We believe that the right employee has to fit within a professional and personal
                    profile.</p>
                <a href="{{url('/contact')}}"
                    class="btnPage bg-blue-600 py-6 w-60 text-center text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5">contact
                    us</a>
            </div>
        </section>
        <section class="m-auto p-5 max-w-6xl">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Security is Mandatory</h2>
                <p class="text-gray-500 mt-5 text-justify">Safety has a high priority within Labor Staffers, all of our
                    candidates and
                    visitors can see more than 20 safety videos that indicate the best practices of operating
                    certain work equipment and taking precautions in multiple circumstances.</p>

                <a href="{{route('focal-points')}}"
                    class="btnPage bg-blue-600 py-6 w-60 text-center text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5">Focal
                    Points</a>
            </div>
        </section>

        <section class="m-auto p-5 max-w-6xl">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                    We care about the priorities of our clients
                </h2>
                <p class="text-gray-500 mt-5 text-justify">
                    We know the priorities of our clients, we care about them and we consider finding
                    the best candidates, we provide the necessary tools to avoid work accidents and that our
                    clients can have highly trained personnel willing to give their best.
                </p>
            </div>
        </section>

        <section class="p-5 max-w-6xl mx-auto">
            <div>
                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Our areas of expertise</h2>
                <p class="text-gray-500 mt-5 text-justify">We offer different professional fields, from technology,
                    support, engineering,
                    sales, design to heavy duty personnel.</p>

                <div
                    class="p-5 grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5  m-2.5  align-baseline">
                    <div class="border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/it-icon.svg')}}" alt="digital / it icon" width="60px"
                            height="60px" />
                        <p class="w-full text-center my-3 text-gray-700" >digital / it</p>
                    </div>

                    <div class="border-r-0 sm:border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/sales-icon.svg')}}" alt="sales icon" />
                        <p class="w-full text-center my-3 text-gray-700" >sales</p>
                    </div>
                    <div class="border-r-2  border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/support-icon.svg')}}" alt="support icon" />
                        <p class="w-full text-center my-3 text-gray-700" >support</p>
                    </div>
                    <div class="border-r-0 sm:border-r-0 md:border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/management-icon.svg')}}" alt="management icon" />
                        <p class="w-full text-center my-3 text-gray-700" >management</p>
                    </div>
                    <div class="border-r-2 border-b-2 md:border-r-0 border-gray-400 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/engineer-icon.svg')}}" alt="engineer icon" />
                        <p class="w-full text-center my-3 text-gray-700" >engineering</p>
                    </div>
                    <div class="border-r-0 sm:border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/finance-icon.svg')}}" alt="finance icon" />
                        <p class="w-full text-center my-3 text-gray-700" >finance</p>
                    </div>
                    <div class="border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/human-resources-icon.svg')}}"
                            alt="human resources icon" />
                        <p class="w-full text-center my-3 text-gray-700" >human resources</p>
                    </div>
                    <div class="border-r-0 md:border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/maintenance-icon.svg')}}" alt="maintenance icon" />
                        <p class="w-full text-center my-3 text-gray-700" >maintenance</p>
                    </div>
                    <div class="border-r-2 sm:col-span-2 md:col-span-1 md:border-r-2 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/design-icon.svg')}}" alt="design icon" />
                        <p class="w-full text-center my-3 text-gray-700" >design</p>
                    </div>
                    <div class="border-r-0 sm:border-r-0 sm:col-span-2 md:col-span-1 md:border-r-0 border-gray-400 border-b-2 p-4">
                        <img class="m-auto" src="{{asset('assets/media/about-us/marketing-icon.svg')}}" alt="marketing icon" />
                        <p class="w-full text-center my-3 text-gray-700" >marketing</p>
                    </div>
                </div>
            </div>
         </section>
    </div>
    </div>
    <x-labor-staffers-s5 />
</x-bpp-layout>
