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
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Job interview: Strengths &
                                Weaknesses</h2>
                            <p class="text-gray-500 mt-5 text-justify">During a job interview, the recruiter may ask you
                                this famous question: “Tell me 3 of your strengths and 3 of your weaknesses“. This
                                question (with multiple variations) can be challenging, however, it is a good way of
                                earning points with your recruiter. With a little training and preparation it is easy to
                                make a good impression.</p>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Advice</h2>
                            <p class="text-gray-500 mt-5 text-justify">Firstly, here is a bit of advice on how to best
                                answer the question: “What are your strengths and weaknesses?” It is much easier to
                                discuss your strengths than it is your weaknesses. If you are short on ideas, ask those
                                around you for inspiration and advice.</p>
                            <p class="text-gray-500 mt-5 text-justify">Here are a few tips for talking about your weak
                                points with peace of mind:</p>
                                <div class="caja80 p-5">

                            <ul class="flex flex-col">
                                <li class="text-gray-500  text-justify list-disc">Avoid a “weakness” that could eliminate you from the position: you don’t want a surgeon to be someone who is distracted.</li>
                                <li class="text-gray-500  text-justify list-disc">Favour a “hybrid” weak point such as demanding, distrustful, impatient, where you
                                    can flip them into positives and show your strengths</li>
                                <li class="text-gray-500  text-justify list-disc">Use an example to illustrate your point and don’t apologise for being the way you
                                    are.</li>
                            </ul>
                                </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>

                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Strengths</h2>
                            <p class="text-gray-500 mt-5 text-justify">Talking about your strengths is a golden
                                opportunity to highlight your successes. When you discussing one of your strengths,
                                illustrate it with a concrete example.
                                For example: “I am very organised. In fact, I am often taken as an example by my peers,
                                and I organised an event for my team last year…”.</p>
                            <p class="text-gray-500 mt-5 text-justify">Here is a list of qualities that are highly
                                appreciated by recruiters:</p>
                            <div class="caja80 p-5">
                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Rigourous: rigour is generally
                                        appreciated in all sectors.</li>
                                    <li class="text-gray-500  text-justify list-disc">Organised: in project management
                                        or management, the ability to organise is a real asset.</li>
                                    <li class="text-gray-500  text-justify list-disc">Curious: to question and ensure
                                        you understand a topic or task is a truly appreciated</li>
                                    <li class="text-gray-500  text-justify list-disc">Sociable: this is important when
                                        working in a team or with external partners</li>
                                    <li class="text-gray-500  text-justify list-disc">Optimistic: highly appreciated
                                        during teamwork</li>
                                    <li class="text-gray-500  text-justify list-disc">Creative: some trades require more
                                        creative profiles than others (marketing/communication/design/graphic design,     etc...</li>
                                    <li class="text-gray-500  text-justify list-disc">Precise: Very important in
                                        finance, accounting and analysis among others</li>
                                    <li class="text-gray-500  text-justify list-disc">Personable: especially if you have
                                        to meet people or be on the phone</li>
                                    <li class="text-gray-500  text-justify list-disc">Honest: important if you are
                                        dealing with sensitive data or money</li>
                                    <li class="text-gray-500  text-justify list-disc">Adaptable: some companies will
                                        require you to be adaptable on a given position</li>
                                    <li class="text-gray-500  text-justify list-disc">Patient: proves to be a quality
                                        for administrative or tedious tasks, as well as
                                        within a team</li>
                                    <li class="text-gray-500  text-justify list-disc">Courageous: a courageous person
                                        dares and doesn’t hesitate when making decisions
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Weaknesses</h2>
                            <p class="text-gray-500 mt-5 text-justify">Stating a “weakness” during a job interview can
                                be unsettling. Indeed, you are here to “sell yourself” yet they ask you to sabotage
                                yourself? In fact, not really.
                                You are given the opportunity to be honest about yourself and let your personality shine
                                through.
                                Some “hybrid weaknesses” can be considered strengths depending on the job. Here are a
                                few of them:</p>
                            <div class="caja80 p-5">

                                <ul class="flex flex-col">
                                    <li class="text-gray-500  text-justify list-disc">Stubborn: you don’t give up, you
                                        are a fighter</li>
                                    <li class="text-gray-500  text-justify list-disc">Talkative: you are sociable and
                                        communication is important to you</li>
                                    <li class="text-gray-500  text-justify list-disc">Authoritarian: you know how to
                                        assert yourself if needed</li>
                                    <li class="text-gray-500  text-justify list-disc">Distrustful: you are attentive and
                                        don’t let yourself be fooled</li>
                                    <li class="text-gray-500  text-justify list-disc">Distracted: your creativity gets
                                        you from one idea to another quickly</li>
                                    <li class="text-gray-500  text-justify list-disc">Pessimistic: you think about and
                                        anticipate possible obstacles</li>
                                    <li class="text-gray-500  text-justify list-disc">Impatient: you are a “go-getter”,
                                        you make sure you reach your goals quickly.</li>
                                    <li class="text-gray-500  text-justify list-disc">Direct: you are frank and get
                                        straight to the point, ensure you show you aren’t
                                        tactless at the same time.</li>
                                    <li class="text-gray-500  text-justify list-disc">Emotive: your empathy helps you
                                        understand other people’s feelings</li>
                                    <li class="text-gray-500  text-justify list-disc">Shy: you don’t put yourself
                                        forward at all time</li>
                                    <li class="text-gray-500  text-justify list-disc">“Control freak”: you like to keep
                                        control of what’s around you, this can be a great
                                        quality</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="m-auto p-5 max-w-6xl">
                        <div>
                            <p class="text-gray-500 mt-5 text-justify">Attention: some weak points such as
                                aggressiveness, laziness, lack of rigour, pretension must be avoided. They will work
                                against you no matter what type of position you are aiming for.</p>
                            <p class="text-gray-500 mt-5 text-justify">You are now ready to talk about your strengths
                                and weaknesses successfully at your next job interview! Don’t forget that everyone has
                                weaknesses, including your recruiter. Just make sure you explain your point and
                                illustrate it so that it shows your strengths.</p>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
