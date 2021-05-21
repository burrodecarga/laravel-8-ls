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
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">6 CV Mistakes To Avoid At All Cost</h2>
                            <p class="text-gray-500 mt-5 text-justify">“You only get one shot — do not miss your chance to blow.” Eminem may have been referring to rap battles when he dropped this lyric back in 2002, but he just as easily could have been talking about CVs and the job search. CVs, after all, are your first chance to show a company what a perfect fit you are for a position — but if done incorrectly, they could also be your last. That’s why it’s absolutely critical to get them right the first time. Otherwise, all the time you spend filling out applications is essentially for naught.</p>
                            <p class="text-gray-500 mt-5 text-justify">“You only get one shot — do not miss your chance to blow.” Eminem may have been referring to rap battles when he dropped this lyric back in 2002, but he just as easily could have been talking about CVs and the job search. CVs, after all, are your first chance to show a company what a perfect fit you are for a position — but if done incorrectly, they could also be your last. That’s why it’s absolutely critical to get them right the first time. Otherwise, all the time you spend filling out applications is essentially for naught.</p>
                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">1. Telling Instead of Showing</h2>
                            <p class="text-gray-500 mt-5 text-justify">It’s an age-old adage in writing: show, don’t tell. When job seekers simply state how great they are without providing any evidence, they lose credibility in recruiters’ eyes. One common way job seekers do this is by “using buzzwords (strategic, specialized, leadership, experienced, passionate, focused, creative, enthusiastic),”</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: “Instead of using these words, demonstrate how you use that skill. It’s a powerful way to share your experiences and what makes you stand out without boring the person on the other end,” says Patti. One common approach is the STAR method — provide the situation, task, action and result of different initiatives you have been involved in, making sure to include specific information like metrics as relevant.</p>

                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">2. Including an Objective</h2>
                            <p class="text-gray-500 mt-5 text-justify">If your college career counselor ever told you to put an objective like “Find an entry-level position in marketing” at the top of your resume, we’re giving you full permission to disregard them. “[One of the biggest mistakes] that I often see in a resume is an objective in lieu of a professional summary. Objectives should notbe used in a CV."</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: Don’t just say you want a job — show recruiters why they should hire you for the job with a professional summary. “Your professional summary should resonate who you are as a professional and the high-caliber skill sets you have to offer,” explains Weiner. “Think of a professional summary as an introduction to the novel about yourself. It should allure the reader and entice him/her with information that will make him/her want to continue on reading to learn more.”</p>

                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">3. Not Customising Your CV</h2>
                            <p class="text-gray-500 mt-5 text-justify">When you’re applying to multiple jobs, it’s tempting to use a generic, cookie-cutter CV and blast it out everywhere you’re applying to. But that strategy may end up preventing your CV from getting in a recruiter’s hands at all. “Most CVs are reviewed electronically before a human sees them,” Patti says, and if your CV doesn’t have the keywords specified in the job description, it will likely be overlooked by the software.</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: It may be a pain to create a customized CV for each company, but if you’re truly interested in a position, it’s worth it. “Tailoring each submittal with keywords from the job posting is critical to pass the electronic screening,” Patti says.</p>

                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">4. Focusing on Job Functions Over Results</h2>
                            <p class="text-gray-500 mt-5 text-justify">TIf your CV reads like the original job description you saw when you applied, it’s time to spice it up. “Most people focus too much on their job tasks/functions to ensure [that] the keywords are in the CVs, and fail to devote time to strategically marketing their best skill sets and career wins,” Weiner says.</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: Instead of talking about the day-to-day, describe the big picture impact you had. “The more effective thing to do is to have a separate core skills section and focus your work experience section on results, major contributions and key projects you have worked on at various companies/organizations,” Weiner says. “It is the number one way to distinguish yourself among the hundreds of applicants applying for jobs.”</p>

                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">5. Leaving Out Social Media Links</h2>
                            <p class="text-gray-500 mt-5 text-justify">“Many people aren’t using the presence of social media to their advantage and use their CV as a stand-alone document,” Patti says. But in a constantly connected world where being transparent and informed is critical at every stage of the hiring process, it only makes sense to add links to your professional social media profiles.</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: Give another layer of depth to your CV by linking to relevant, professional social media links. Patti recommends that job seekers “remove your physical address and add your LinkedIn URL. By linking to your updated profile, you will immediately gain credibility through your recommendations and endorsements of your skills and show insight into your personal brand and value.”</p>

                        </div>
                        <div class="m-auto p-5 max-w-6xl">
                            <h2 class="text-orange-900 text-3xl sm:text-4xl font-bold">6. Poor Writing</h2>
                            <p class="text-gray-500 mt-5 text-justify">When it comes to your CV, your experience and career accomplishments are the most important, but how you present that information comes in at a close second. “The way you express yourself on your CV (and in any form of communication) impacts the way others perceive you,” says Angela Copeland, Career Coach. Spelling mistakes, clichés and complex, industry-specific jargon will all count against you.</p>
                            <p class="text-gray-500 mt-5 text-justify">The Fix: “First, ensure your resume is grammatically correct. Then, be sure that it is worded in a professional manner with a somewhat formal tone. Last, ensure your resume is understandable to someone, even if they don’t work in your industry,” Copeland says. “The easiest way to improve your choice of words is to read your resume out loud to yourself. This can catch many of the potential issues before anyone else sees it. Then, ask a friend or family member who works in another industry to read it. If they find your resume to be confusing, consider updating the wording, so that it’s more clear.”</p>

                        </div>


                </div>
            </div>
        </main>
    </div>
</body>
</html>
