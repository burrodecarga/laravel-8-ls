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
                                Work from home: our best tips
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                We have been talking about it for years and it only took a global pandemic to make
                                working from home (WFM) the new standard within a few weeks. From the self-employed to
                                employees of all levels, by choice or not, everyone has been forced to work from home
                                (WFH). Thus, 88% of companies worldwide have imposed or encouraged their employees to
                                work from home since the beginning of the COVID-19 pandemic.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                <div class="caja80 p-5">
                                    <ul class="flex flex-col">
                                        <li class="text-gray-500  text-justify list-disc">5.5 fewer days of sick leave
                                            per year</li>
                                        <li class="text-gray-500  text-justify list-disc">45 minutes more sleep every
                                            day</li>
                                        <li class="text-gray-500  text-justify list-disc">a saving of 40 minutes of
                                            travel time on average per day</li>
                                    </ul>
                                </div>
                                <p class="text-gray-500 mt-5 text-justify">
                                    As working from home in 2020 has become the norm, it is important to quickly adopt
                                    the right habits. We have therefore prepared 7 best tips to get the most out of
                                    working from home.</p>
                        </div>
                    </section>

                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                1. Set up a workspace
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                One of the fundamental keys of success in remote working is the set up of one’s own
                                workspace.

                                The ideal is to have a room dedicated to work to physically separate the work day from
                                your personal life.

                                If you don’t have the possibility to have a dedicated room, then choose a quiet and
                                bright place where you can concentrate without being interrupted. Don’t forget to
                                install all the equipment you need and that will allow you to work properly: appropriate
                                chair, table, desk light, power outlet for your computer. This will help you avoid
                                health problems related to your posture or lack of comfort.
                            </p>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                2. Keep your usual habits
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                Don’t fall into the trap: working from home is not a day off, nor is it a day of work
                                overload.
                            </p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">
                                        Get into the habit of getting dressed in the morning to help get you in the work
                                        mind-set. Forget about jogging pants, these will remind you of your lazy Sundays
                                        at home!
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">
                                        Start and end your work day at your usual hours.
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">
                                        Mark breaks. Take real, time-defined breaks (with a beginning and an end) during
                                        which you disconnect.
                                    </li>
                                </ul>
                            </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                3. Set goals
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                If you are afraid of not being able to keep your concentration and being distracted by
                                the other occupations around you: get organized beforehand.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                If you need help, plan your day, maybe even more than when you were at the office.
                                At the beginning of the day, set up time slots in which you will work on a particular
                                file for as much time as you need. Also plan your break times.
                                An effective way to evaluate your time management is to set goals.
                            </p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">
                                        Did you complete your task on time?
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">
                                        Did you complete your to-do list?
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">
                                        Were you more efficient than expected and therefore freed up time for something
                                        else?
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                4. Communicate with the rest of your team
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                Whether you are a manager or not, it is important to stay in contact with the world
                                outside your home. Keep in touch with your team members by keeping regular check-ins.
                                This will :
                            </p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Prevent you from feeling alone and
                                        losing the sense of your mission</li>
                                    <li class="text-gray-500  text-justify list-disc">Motivate you to reach your goals
                                    </li>
                                    <li class="text-gray-500  text-justify list-disc">Will probably inspire you for
                                        other projects</li>
                                    <li class="text-gray-500  text-justify list-disc">Allows you to share your
                                        difficulties and successes</li>
                                </ul>
                                <p class="text-gray-500 mt-5 text-justify">In all cases, make a note of what you have
                                    accomplished at the end of the day so that you can account for the tasks you have
                                    performed.
                                </p>

                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                5. Use the tools available
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                There is an (almost endless) array of digital tools to help you in remote collaborative
                                work and the organization of your work. Here are a few of them:
                            </p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Google Drive: for document sharing
                                    </li>

                                    <li class="text-gray-500  text-justify list-disc">Zoom: for your video conference
                                        meetings</li>
                                    <li class="text-gray-500  text-justify list-disc">Google suite: for file
                                        construction: docs. slides. sheets.</li>
                                    <li class="text-gray-500  text-justify list-disc">Trello: to organize your work time
                                        and tasks</li>
                                    <li class="text-gray-500  text-justify list-disc">Canva: for creating visuals (ideal
                                        for novices), alternative to the Adobe suite</li>
                                    <li class="text-gray-500  text-justify list-disc">Whatsapp or Slack: for instant
                                        chatting between teams and team members</li>
                                    <li class="text-gray-500  text-justify list-disc">Doodle: to quickly find out what
                                        your colleagues think (survey tool)</li>
                                </ul>
                                <p class="text-gray-500 mt-5 text-justify">  In all cases, make a note of what you have accomplished at the end of the day so that you can account for the tasks you have performed.
                                </p>

                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                6. Separate your professional and personal lives
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                Keeping a clear separation between work and private life will allow you to rest better on one side and be more productive on the other.

By disconnecting yourself completely outside of work hours and during your breaks, you increase the quality of your rest and give yourself a pace that is essential to your well-being and productivity.
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                Conversely, not disconnecting completely would deteriorate the quality of your rest as you would keep be stimulated by work, emails, incoming calls…
                            </p>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">
                                7. Move!
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">
                                So certainly, in times of lockdown it is more difficult to exercise and stay active, but it is not impossible! If you are on the phone? Take the opportunity to get up and take a few steps! If your job does not require you to call regularly, take advantage of your breaks to get up and stretch! Prolonged sitting can cause health problems in the medium and long term. So stay active to avoid them!
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">
                                So, are you ready to work from home? Discover all the <a href="/jobs" className={styles.a}>open remote positions here!
                            </p>
                        </div>
                    </section>

                </div>
            </div>
        </main>
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
