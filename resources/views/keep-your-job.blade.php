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
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Tips for Keeping the Job You Have
                            </h2>
                            <p class="text-gray-500 mt-5 text-justify">One of the comments I get over and over again
                                from unemployed job seekers is to do whatever you can to keep the job you have unless
                                you're ready to move on and have a new job lined up.</p>
                            <p class="text-gray-500 mt-5 text-justify">If you are unhappy with your job, before turning
                                in your resignation, take a look at these tips on how to keep your position. You don't
                                need to stay forever, but, if you can, you may want to stay at least until you have
                                another job lined up because it's harder to find a new position when you're unemployed.
                            </p>
                        </div>
                    </section>
                        <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Top 10 Tips for Keeping Your Job</h2>
                            <p class="text-gray-500 mt-5 text-justify">Try to Make the Job Work. Is there anything you
                                could be doing differently to make the job work? Could you ask for a transfer or a shift
                                change? Is there anything that would make a difference and convince you to stay?</p>
                        </div>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Work Hard. </h2>
                            <p class="text-gray-500 mt-5 text-justify">Most employers don't mind a little time spent on
                                Facebook or texting, but do focus on your job and give your employer the time you're
                                getting paid for. When it comes to making lay-off decisions, and the company has to
                                choose, your employer will keep the most productive employees. Make sure you’re one of
                                them.</p>
                            <p class="text-gray-500 mt-5 text-justify">If spending too much time on Facebook is your
                                main vice, make it more difficult to visit the website by installing a Facebook blocker
                                in your browser. Both Google Chrome and Apple offer a couple that is highly effective in
                                keeping your Facebook time in check.</p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Be On Time.</h2>
                            <p class="text-gray-500 mt-5 text-justify"> Employees who are late to work, take a long
                                lunch hour, use a ton of sick time, and/or leave early every day aren't going to win any
                                points with their boss. Be punctual and be there, instead of making excuses for why you
                                can't be at work.</p>
                            <p class="text-gray-500 mt-5 text-justify">Should a personal issue be the cause of your
                                tardiness, schedule a meeting with your boss to explain the situation. Ask if they would
                                allow you to stay late to make up for lost time until you resolve the issue. Most
                                employers will sympathize and be flexible if the matter is serious enough. </p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Be a Team Player.</h2>
                            <p class="text-gray-500 mt-5 text-justify"> Be the employee who gets along well with
                                everyone, who doesn’t take part in workplace gossip, and who offers to help colleagues.
                                A positive attitude and kindness go a long way in earning respect and trust from your
                                colleagues. This approach may even lead to your heightened satisfaction and happiness at
                                work. </p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Be Flexible. </h2>
                            <p class="text-gray-500 mt-5 text-justify">Flexibility can be a key component of hanging on
                                to your job. When your company needs someone to change shifts, work weekends, put in
                                some overtime, or take on new tasks, consider volunteering if your personal schedule
                                permits.</p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Don't Complain. </h2>
                            <p class="text-gray-500 mt-5 text-justify">Nobody likes complainers, regardless of how
                                legitimate the complaints are. If you don't like your job, know that there are plenty of
                                other people who would jump at the chance to get it. One way to stop complaining is to
                                practice gratitude by saying, “I get” to do something, instead of “I have” to do
                                something. By changing one word, you will immediately start to see the glass half full!
                            </p>
                            <p class="text-gray-500 mt-5 text-justify">There are some cases when it does make sense to
                                speak up. If for example, you are being discriminated against or harassed by a
                                co-worker, then it is important that you have a formal meeting with someone from HR and
                                document each incident in writing.</p>
                            <p class="text-gray-500 mt-5 text-justify">Offer to Help. One of the best ways to get (or
                                keep) job security is to volunteer for new initiatives, to offer to help with projects
                                and to take on more responsibility. Doing so will also benefit you – the more you take
                                on tasks outside of your comfort zone, the more you will learn and grow.</p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Keep Social Media and Work
                                Separate.</h2>
                            <p class="text-gray-500 mt-5 text-justify">Even if you hate your job, keep it to yourself or
                                your trustworthy family and friends. Don't post your discontent on social media, because
                                chances are, the wrong person will see it. That, in and of itself, can cost you your
                                job.</p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Be Positive. </h2>
                            <p class="text-gray-500 mt-5 text-justify">A positive attitude is very contagious and a key
                                component to keeping your job long-term. I have a Post-it note on my desk with the
                                quote, “Cheerfulness is a choice,” from Rosanne Cash. Maintaining a positive attitude,
                                even through tough times, will make your life and the lives of your colleagues much
                                easier. If you feel stuck in a negative rut, make simple changes to your daily routine
                                to become more positive. </p>
                        </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Suck it Up. </h2>
                            <p class="text-gray-500 mt-5 text-justify">Maybe it's not your favorite job. Maybe you'd
                                rather be doing something else. However, it is a paycheck and if you need the income, it
                                can make sense to stay until you secure a new position. Also, spend some time
                                considering whether it's more than the job that's the problem - perhaps your career is
                                in need of a makeover.</p>
                            <p class="text-gray-500 mt-5 text-justify">When All Else Fails. When keeping your job simply
                                isn't feasible, and it isn't always, take the time to prepare for a job search and plan
                                your departure. That way, you're not scrambling to find a job because you just got
                                terminated. But be sure you have secured a job before quitting if you can. In fact,
                                research shows that it’s much easier to find a job when you are employed.</p>
                        </section>

                        

                    </section>


                </div>
            </div>
        </main>
    </div>
</body>

</html>
