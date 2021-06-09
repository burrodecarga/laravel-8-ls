<div class="grid col-start-7 gap-2 p-2 bg-white rounded">
    <div class="flex flex-col">
        <a href="{{url('posts')}}"
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">Offers</a>
        <a href="{{url('/users')}} "
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">Users</a>
        <a href="{{route('jobs')}}"
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">Jobs</a>
        <a href="{{route('roles.index')}}"
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">Roles</a>
        <hr class="border-2 m-5 bg-orange-900" />

        <a href="{{url('/skills')}}"
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">skills
            </a>

        <a href="{{url('/categories')}}"
            class="bg-blue-700 hover:bg-orange-900 text-center text-white font-bold rounded mb-3 py-2 px-4">Categories
            jobs</a>
    </div>
</div>
