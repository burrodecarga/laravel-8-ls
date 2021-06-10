<div class="mt-10 flex items-center justify-between text-center text-xs font-bold capitalize mx-5 ">
    <div class="bg-transparent border-2 border-orange-900 cursor-pointer hover:bg-blue-500  hover:text-white w-1/2 mr-2 py-2 px-3 text-orange-900">
        <a href="#">Welcome : {{auth()->user()->name}},   you have the role of : {{auth()->user()->getRoleNames()->join('')}}</a></div>
</div>
