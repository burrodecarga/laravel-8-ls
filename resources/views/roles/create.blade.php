<x-cpp-layout>
    <div class="container mx-auto">
        <div class="bg-gray-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 my-4">
            <form action="{{route('roles.store')}} " method="POST">
                @csrf

                <input id="name" type="text" name="name" value="{{old('name', $role->name)}}"
                    class="form-control shadow-sm w-full my-2 @error('name')is-invalid @else border-0 @enderror"
                    placeholder="Role Name">
                <x-jet-input-error for="name" />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        @foreach ($permissions as $key => $p)
                        <div class="form-check grid-cols-1">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input ml-2" name="permissions[]"
                                    id="permissions" value="{{ $p->name }}"
                                    {{ in_array($p->id,$permission_id) ? "checked" : "" }}> {{$p->name}}
                            </label>
                        </div>
                        @endforeach
                </div>
                <hr class="my-3">
                <div>
                    <button type="submit"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <a href="{{route('roles.index')}}"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        title="Go to Role List">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-cpp-layout>
