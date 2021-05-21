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
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                Succeed in your Skype interview.
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                Keep calm, read our guidelines and go get your dream job.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                In today’s global workplace, many employers opt to use Skype to interview candidates.
                                This type of interview cuts down on travel expenses. It also enables employers to
                                quickly and easily recruit international top talent. Moreover, with the rise of remote
                                workers around the world, meeting over Skype has become the norm for professionals when
                                communicating with their team as well as their clients.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                Did you know?
                            </p>
                            <ul class="caja60 flex-col">
                                <li class="text-gray-500 mt-5 text-justify">One out of 10 companies conduct job
                                    interviews over Skype</li>
                                <li class="text-gray-500 mt-5 text-justify">70% of employees globally work remotely at
                                    least once a week</li>
                                <li class="text-gray-500 mt-5 text-justify">70% of employees globally work remotely at
                                    least once a week</li>
                            </ul>

                            <p class="text-gray-500 mt-5 text-justify">
                                You have understood it, you will have to use this tool many times across your work life!
                                So you better to get familiar with it. We know it does feel different from a
                                face-to-face, even if you have the video and sound. But after reading this article, you
                                will know exactly the do’s and don’ts for your Skype interview!
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                If you are a new user, we recommend you to check out this guide first on how to set up
                                and use Skype and learn its main functions. Our following pro tips will help you handle
                                any Skype interview and meeting like an Ace.
                            </p>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                1. Important note when you create your profile.
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                You do not need to be an expert, but there are a few things you should know in advance.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                Pro tips.
                            </p>
                            <div class="caja80 p-4">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">
                                        Be careful when you create your account and pick your username. It is like an
                                        email address, it has to be professional!
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">
                                        Same for your description and the picture you upload on your profile. The
                                        recruiter will see it. It should not compromise their image of you before
                                        starting the interview.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                2. Make sure it works before your interview.
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                We still hear about recruiters who have to postpone interviews because the candidate
                                could not connect to Skype or get the camera or the microphone to work properly… It is
                                not professional. It shows that you are not organised and maybe not really motivated for
                                the job. You would not think about arriving late to a face-to-face job interview so
                                adopt the same logic for a Skype interview.</p>
                            <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Run some tests to make sure the
                                        camera is working and that people can see you</li>
                                    <li class="text-gray-500  text-justify list-disc">Set up the camera in the right
                                        place so that the interviewers can see your face</li>
                                    <li class="text-gray-500  text-justify list-disc">We advise you to place it so that
                                        the interviewer can see your face and shoulders
                                        class="text-gray-500 text-justify list-disc" </li>
                                    <li class="text-gray-500  text-justify list-disc">Test the microphone to make sure
                                        it works and that the interviewer can hear you</li>
                                    <li class="text-gray-500  text-justify list-disc">The best way to test everything is
                                        to do a mock interview with a friend who will
                                        class="text-gray-500 text-justify list-disc" tell you if you need to make some
                                        adjustments</li>
                                    <li class="text-gray-500  text-justify list-disc">Do not forget to add the
                                        interviewer’s Skype ID in advance to avoid unnecessary
                                        class="text-gray-500 text-justify list-disc" panic the day of your interview if
                                        you cannot find the correct person.</li>
                                    <li class="text-gray-500  text-justify list-disc">Charge your laptop the day before
                                        so that it is fully charged for the Skype call.
                                        You do not want it to switch off during the interview.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                3. Prepare your surroundings.
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                Be aware of your environment. Even if you set up the camera so that the recruiter can
                                only see your face and shoulders, there is always a part of the background that will be
                                seen. A messy room with an unmade bed and teenager posters will not make for a good
                                first impression!
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">Pro tips:</p>
                            <div class="caja90 p-5">

                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Choose a room with nice natural light and avoid backlighting as the recruiter
                                        class="text-gray-500  text-justify list-disc" will not be able to see you well</li>
                                    <li class="text-gray-500  text-justify list-disc">Choose a tastefully decorated environment and, above all, ensure it is tidy!
                                        class="text-gray-500  text-justify list-disc"    </li>
                                    <li class="text-gray-500  text-justify list-disc">Set up your computer in a quiet place. A noisy background will annoy both the
                                        recruiter and you as you will not hear each other properly. You may not be
                                        understood and will have to make your interviewer repeat themselves constantly.
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </section>


                </div>
            </div>

            <section class="m-auto p-5 max-w-6xl">
                <div>
                    <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">

                    </h2>
                    <p class="text-gray-500 mt-5 text-justify">

                    </p>
                </div>
            </section>
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
