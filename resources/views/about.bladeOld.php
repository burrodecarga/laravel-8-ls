<x-bpp-layout pageClass="about">
    <x-slot name="pageTitulo">About Labor Staffers</x-slot>
    <x-slot name="pageSubTitulo"></x-slot>
    <x-slot name="classTitulo">
        text-white text-center font-bold my-20 text-4xl sm:text-5xl md:text-7xl
    </x-slot>
    <x-slot name="classSubTitulo"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-center bg-green-600 p-5">
                 <article>
                    <div class="bg-red-100">
                        <h2 class="text-orange-900 text-4xl font-bold">More than 20
                            years helping companies
                        </h2>
                        <p class="p text-gray-500 mt-5 text-justify">For nearly 20 years job seekers across the country
                            have trusted Labor Staffers’s expert recruiters to guide them through the hiring process and
                            help them find the perfect job. Labor Staffers places talented professionals into
                            administrative, light-industrial, superintendent, developers, and management level positions
                            at some of the nation’s largest and most recognizable companies.
                        </p>
                        <button href="{{url('/services')}}"
                            class="btnPage bg-blue-600 w-64 h-16 text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5">our
                            services
                        </button>
                        </div>
                    </div>
                </article>
                 <article class="bg-yellow-200">
                        <h2 class="text-orange-900 text-4xl font-bold">Looking for your next great hire? We can help
                            with that too
                        </h2>
                        <p>We have experience and a selective selection process to choose the best candidates
                            for your company, we know that it can be really expensive and requires a great investment of
                            effort and time to get highly trained personnel for the vacancies available in your company,
                            here at Labor Staffers we do it for you with the quality guarantee that we offer. If you are
                            looking for short, medium or long-term employment relationships, you are in the right place.
                        </p>
                        <div class="servicesList">
                            <ul class="ul">
                                <li class="li">Full time jobs</li>
                                <li class="li">Temporary staff</li>
                                <li class="li">1st, 2nd, and 3rd Shift</li>
                            </ul>
                        </div>
                        <div class="btnSide">
                            <button href="{{url('/employers')}}"
                                class="btnPage bg-blue-600 w-64 h-16 text-white text-sm font-bold uppercase hover:bg-orange-900  float-left my-5">request
                                staff</button>
                        </div>
                </article>
                </section>




                    <div class="sectionText">
                        <h2 class="text-orange-900 text-4xl font-bold">Our values and beliefs help us find the perfect
                            match</h2>
                        <p class="p">The perfect match requires a great search, not everyone can hold a position in the
                            same way. We believe that the right employee has to fit within a professional and personal
                            profile.</p>
                        <div class="btnSide">
                            <button href="{{url("/contact")}} class=" btnPage">contact us</button>
                        </div>
                    </div>
                    <div class="sectionText">
                        <h2 class="text-orange-900 text-4xl font-bold">Security is Mandatory</h2>
                        <p class="p">Safety has a high priority within Labor Staffers, all of our candidates and
                            visitors can see more than 20 safety videos that indicate the best practices of operating
                            certain work equipment and taking precautions in multiple circumstances.</p>
                        <div class="btnSide">
                            <button href="{{url("/focal-points")}} class=" btnPage">Focal Points</button>
                        </div>
                    </div>
                    <div class="sectionText">
                        <h2 class="text-orange-900 text-4xl font-bold">We care about the priorities of our clients</h2>
                        <p class="p">We know the priorities of our clients, we care about them and we consider finding
                            the best candidates, we provide the necessary tools to avoid work accidents and that our
                            clients can have highly trained personnel willing to give their best.</p>
                    </div>
                    <div class="sectionText">
                        <h2 class="text-orange-900 text-4xl font-bold">Our areas of expertise</h2>
                        <p class="p">We offer different professional fields, from technology, support, engineering,
                            sales, design to heavy duty personnel.</p>
                    </div>
                    <div class="breaker">
                        < div class="iconSection">
                            <div class="icon">
                                <img class="img" src="{{asset('assets/media/about-us/it-icon.svg')}}"
                                    alt="digital / it icon" />
                                <p class="p">digital / it</p>
                            </div>
                            <div class="icon">
                                <img class="img" src="{{asset('assets/media/about-us/sales-icon.svg')}}"
                                    alt="sales icon" />
                                <p class="p">sales</p>
                            </div>
                            <div class="icon">
                                < img class="img" src="{{asset('assets/media/about-us/support-icon.svg')}}"
                                    alt="support icon" />
                                <p class="p">support</p>
                            </div>
                            <div class="icon">
                                < img class="img" src="{{asset('assets/media/about-us/management-icon.svg')}}"
                                    alt="management icon" />
                                <p class="p">management</p>
                            </div>
                            <div class="none}>
                              < img class=" img" src="{{asset('assets/media/about-us/engineer-icon.svg')}}"
                                alt="engineer icon" />
                            <p class="p">engineering</p>
                    </div>
            </div>

            <div class="iconSection2">
                <div class="icon">
                    <img class="img" src="{{asset('assets/media/about-us/finance-icon.svg')}}" alt="finance icon" />
                    <p class="p">finance</p>
                </div>
                <div class="icon">
                    <img class="img" src="{{asset('assets/media/about-us/human-resources-icon.svg')}}"
                        alt="human resources icon" />
                    <p class="p">human resources</p>
                </div>
                <div class="icon">
                    <img class="img" src="{{asset('assets/media/about-us/maintenance-icon.svg')}}"
                        alt="maintenance icon" />
                    <p class="p">maintenance</p>
                </div>
                <div class="icon">
                    <img class="img" src="{{asset('assets/media/about-us/design-icon.svg')}}" alt="design icon" />
                    <p class="p">design</p>
                </div>
                <div class="none">
                    <img class="img" src="{{asset('assets/media/about-us/marketing-icon.svg')}}" alt="marketing icon" />
                    <p class="p">marketing</p>
                </div>
            </div>
        </div>
        </section>
        <section class="started">
            <div clas="startedText">
                <h3 class="h3">Ready to get started?</h3>
                <p class="p"> Find your next candidate with us</p>
                <button href="{{url("/employers")}}" class="btnPage2">request staff</button>
            </div>
        </section>
    </div>
    </div>
    </div>
</x-bpp-layout>
