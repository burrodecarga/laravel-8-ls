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
                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">10 steps to a successful CV</h2>
                        <p class="text-gray-500 mt-5 text-justify" >Writing a good CV can be one of the toughest challenges of job hunting. Most employers spend just a few seconds scanning each CV before sticking it in the 'Yes' or 'No' pile.</p>
                    </section>
                        <section class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Keep it real!</h2>
                            <p class="text-gray-500 mt-5 text-justify" >Usually a CV should be no more than two pages – and that's two pages of A4 paper! Employers spend, an average, just 8 seconds looking at any one CV, and a surefire way of landing yourself on the no pile is to send them your entire life story. Keep it punchy, to the point, and save those niggly little details for the interview.</p>
                        </section>
                            <section class="m-auto p-5 max-w-6xl">
                                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Tailor it</h2>
                                <p class="text-gray-500 mt-5 text-justify" >We've all done it. Whizzed the same CV out to lots of employers to save time... Stop! Take the time to change your CV for each role that you apply for. Research the company and use the job advert to work out EXACTLY what skills you should point out to them. They will appreciate the obvious effort.</p>
                            </section>
                                <section class="m-auto p-5 max-w-6xl">
                                    <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Include a personal statement.</h2>
                                    <p class="text-gray-500 mt-5 text-justify" >Don’t just assume an employer will see how your experience relates to their job. Instead, use a short personal statement to explain why you are the best person for the job. This should be reflected in your cover letter as well see our tips to the perfect cover letter</p>
                                </section>
                                    <section class="m-auto p-5 max-w-6xl">
                                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Don't leave gaps.</h2>
                                        <p class="text-gray-500 mt-5 text-justify" >We are a cynical bunch and leaving obvious gaps on your CV immediately makes employers suspicious – and they won't give you the benefit of the doubt. If you’ve been out of work it can be a worry but just put a positive spin on it. Did you do a course, volunteer work or develop soft skills such as communication, teamwork or project management? If so, shout about it!</p>
                                    </section>
                                        <section class="m-auto p-5 max-w-6xl">
                                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Keep it current.</h2>
                                            <p class="text-gray-500 mt-5 text-justify" >You should keep your CV up-to-date whether you’re looking for a job or not. Every time something significant occurs in your career, record it so you don't later forget something that could be important.</p>
                                        </section>
                                            <section class="m-auto p-5 max-w-6xl">
                                                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">The error of your ways.</h2>
                                                <p class="text-gray-500 mt-5 text-justify" >Employers DO look for mistakes on CVs and if they find them, it makes you look really bad. David Hipkin, head of recruitment and resourcing at Reed Business Information, warns, 'With most employers experiencing massive volumes of applicants right now, giving them the excuse to dismiss your application because of avoidable errors is not going to help you secure an interview.' If you're unsure then use a spellchecker and ask someone else to double-check what you've written. And don't ignore the most common CV mistakes.</p>
                                            </section>
                                                <section class="m-auto p-5 max-w-6xl">
                                                    <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Tell the truth.</h2>
                                                    <p class="text-gray-500 mt-5 text-justify" >Everyone lies on their CV, right? NO! Stop! Blatant lies on your CV can land you in a whole heap of trouble when it comes to employers checking your background and references. The last thing you want is to start work and then lose your new job for lying. You also may get caught out at the interview stage when you suddenly can't answer questions on what you claim to know. And that can be VERY awkward!</p>
                                                </section>
                                                    <section class="m-auto p-5 max-w-6xl">
                                                        <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">The math.</h2>
                                                        <p class="text-gray-500 mt-5 text-justify" >This may sound dull but by backing up your achievements with numbers it makes selling yourself much easier. When writing your work history, don’t just say that you increased sales; tell them you increased sales by 70% over a six month period. Get it? Big numbers are especially good (although don't forget point 7 of our list!).</p>
                                                    </section>
                                                        <section class="m-auto p-5 max-w-6xl">
                                                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Make it look good.</h2>
                                                            <p class="text-gray-500 mt-5 text-justify" >We live in a world where image is everything, and that also goes for your CV. Take some time to pretty it up... Use bullet points and keep sentences short. Use the graphic design trick of leaving plenty of white space around text and between categories to make the layout easy on the eye. Alternatively, get creative with your job application!</p>
                                                        </section>
                                                            <section class="m-auto p-5 max-w-6xl">
                                                                <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">Make it keyword friendly.</h2>
                                                                <p class="text-gray-500 mt-5 text-justify" >If you’ve uploaded your CV to a job site so recruiters can find you, keywords are very important. Job titles and job buzzwords will help a search engine pick out your CV from the pile. Confused? Don't be. A marketing candidate might mention SEO (Search Engine Optimization), direct marketing and digital marketing among their experience and skills, for example... If you're not sure, have a search online and see what words are commonly mentioned when you input your job title.</p>
                                                            </section>


                </div>
            </div>
        </main>
    </div>
</body>
</html>
