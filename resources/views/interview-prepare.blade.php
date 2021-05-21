<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{asset('css/fontawesome-free-5.15.3-web/css/all.css')}} " rel="stylesheet">
    <link href="{{asset('css/labor-staffers.css')}} " rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('labor-js/script.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="font-sans antialiased bg-white">
    <div class="min-h-screen bg-gray-100">
        <div class="s10">
            <x-labor-staffers-social-media />
            <div class="p-5">
                <x-labor-staffers-menu />
            </div>
        </div>
        <main>
            <div class="caja70 m-auto">
                <div class="py-12 bg-white flex flex-col">

                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">The most common questions asked in interview
                        </h2>
                        <p class="text-gray-500 mt-5 text-justify">Every interview is different but having answers ready
                            for each potential question is key.</p>
                        <p class="text-gray-500 mt-5 text-justify">In this article, we are going to reveal what your
                            interviewer really wants to know when asking certain questions.The goal is to personalise
                            and adapt your responses to the position and the company’s culture in order to stand out. It
                            will also enable you to:</p>
                        <p class="text-gray-500 mt-5 text-justify">Are you ready? Grab your notebook and apply the STAR
                            method to ace that interview!</p>
                        <p class="text-gray-500 mt-5 text-justify">Here is a list of the most common questions asked in
                            interviews and guidelines on how to answer them.</p>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">1. Tell us about yourself.</h2>
                        <p class="text-gray-500 mt-5 text-justify">This is usually the opening question and, as first
                            impressions are key, one of the most important.</p>
                        <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                        <div class="caja80 p-5">
                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">Keep your answer to under five minutes
                                </li>
                                <li class="text-gray-500  text-justify list-disc">Begin with an overview of your highest
                                    qualifications then run through the jobs you’ve held in your career so far. You can
                                    follow the same structure as your CV.</li>
                            </ul>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">2. What are your strong points / strengths?
                        </h2>
                        <p class="text-gray-500 mt-5 text-justify">Pick three of your biggest attributes which you think
                            are the most important for this job and explain how these strengths will help you succeed in
                            the position.</p>
                        <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                        <div class="caja89 p-5">
                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">They could be related to process
                                    skills, such as proficiency and organisation</li>
                                <li class="text-gray-500  text-justify list-disc">They can also be in relation to a
                                    particular field such as proficiency in a computer language, or a specific tool such
                                    as Salesforce, Photoshop or Sage</li>
                                <li class="text-gray-500  text-justify list-disc">The last type are the intangible
                                    skills, also know as soft skills, like good managerial skills or creative thinking
                                    and adaptability</li>

                            </ul>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">3. What are your weak points / weaknesses?
                        </h2>
                        <p class="text-gray-500 mt-5 text-justify">This dreaded question is best handled by selecting
                            one where you have examples showing you have made positive steps to readdress this weakness.
                            Ensure you demonstrate to the hiring manager that you are self-aware of your weaknesses,
                            consider them when you are working on a project and will continue to work on improving
                            yourself professionally.</p>
                        <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                        <div class="caja8 p-5">
                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">Show that you are able to learn
                                    independently</li>
                                <li class="text-gray-500  text-justify list-disc">Demonstrate that your are a go-getter
                                </li>
                                <li class="text-gray-500  text-justify list-disc">Prove that your are adaptable</li>
                            </ul>
                        </div>
                        <p class="text-gray-500 mt-5 text-justify">For example, if your IT abilities are not at the
                            level they should be, state it as a weakness but then tell the interviewer about training
                            courses or time spent outside working hours where you have worked on improving those skills
                            (watching online videos, using a demo, asking experts…etc...</p>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">4. Why do you want this job?</h2>
                        <p class="text-gray-500 mt-5 text-justify">Think carefully about this one. Your answer is very
                            important to the interviewer and he is in fact waiting for several answers in one.</p>
                        <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                        <div class="caja80 p-5">
                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">Quote the aspects of the job and tasks
                                    you like</li>
                                <li class="text-gray-500  text-justify list-disc">Explain in a few sentences what you
                                    like about this particular company</li>
                                <li class="text-gray-500  text-justify list-disc">Show you are a team player by
                                    highlighting what excites you about joining the team</li>
                                <li class="text-gray-500  text-justify list-disc">Explain why they match both your
                                    professional and personal needs. Put emphasis on:</li>
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">the fact that it is an
                                        international environment that encourages an open minded culture</li>
                                    <li class="text-gray-500  text-justify list-disc">the youthfulness and friendliness
                                        of the team that will motivate you to perform even better</li>
                                    <li class="text-gray-500  text-justify list-disc">the passionate and skilled
                                        employees who could challenge your ideas and teach you new skills</li>
                                    <li class="text-gray-500  text-justify list-disc">Etc...</li>
                                  
                                </ul>
                                <li class="text-gray-500  text-justify list-disc">Explain why it matches with your
                                    career path and your goals</li>
                                <li class="text-gray-500  text-justify list-disc">Do not mention the negative aspects of
                                    your current job or the job you are being interviewed for</li>
                            </ul>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">5. What do you know about this company?</h2>
                        <p class="text-gray-500 mt-5 text-justify">This is your chance to impress the interviewer with
                            your knowledge and research of their company. This shows that you are really interested in,
                            even passionate about, the company and would be very involved in if you get the job.</p>
                        <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                        <div class="caja80 p-5">
                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">Check their website, career website,
                                    social media and blog</li>
                                <li class="text-gray-500  text-justify list-disc">Find the latest news about them by
                                    running a search on the web</li>
                                <li class="text-gray-500  text-justify list-disc">Give them a run down of their
                                    products/services, news, customers, etc.</li>
                                <li class="text-gray-500  text-justify list-disc">Show that you are resourceful and can
                                    find information on your own</li>
                                <li class="text-gray-500  text-justify list-disc">Show that you have a business mind set
                                    and would be an asset to the team. If you find news about a product or a change that
                                    could impact the manager, or might be related to the opening of the position, ask
                                    further questions about it and mention where you saw the news.</li>

                            </ul>
                        </div>
                    </section>
                </div>
        </main>
        <div class="">
            <x-labor-staffers-footer />
        </div>

        @stack('modals')

        @livewireScripts
        <script>
            livewire.on('alert',function(message){
  Swal.fire('Good job!', message,'success')
    });
        </script>
        <script>
            window.addEventListener('show-confirm-delete',event=>{
    Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {
livewire.emit('delPost',)
}
}) })

window.addEventListener('confirm-delete-user',event=>{
    Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {
livewire.emit('delUser',)
}
}) })


window.addEventListener('deleted',event=>{
Swal.fire(
'deleted...!',
event.detail.massage,
'success'
)
})

        </script>
</body>

</html>
