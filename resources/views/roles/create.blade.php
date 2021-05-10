<x-app-layout>
    <div class="flex justify-center">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 my-4">
            <form action="{{route('roles.store')}} " method="POST">
                @csrf
                <div class="flex flex-row m-2">
                    <div class="flex-1 logo">
                        <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="rol flex-1">New Rol</div>
                </div>

                <input id="name" type="text" name="name" value="{{old('name', $role->name)}}"
                class="form-control shadow-sm  mb-2 @error('name')is-invalid @else border-0 @enderror" placeholder="Role Name">
                <x-jet-input-error for="name"/>

                <div>
                    <button type="submit"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <a  href="{{route('roles.index')}}"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        title="Go to Role List"
                      >
                        Cancel
                    </a>
                </div>
                @foreach ($permissions as $key => $p)
                <div class="form-check col-md-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input ml-2" name="permissions[]" id="permissions" value="{{ $p->name }}"
                       {{ in_array($p->id,$permission_id) ? "checked" : "" }}
                        > {{$p->name}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
    </div>

</x-app-layout>
