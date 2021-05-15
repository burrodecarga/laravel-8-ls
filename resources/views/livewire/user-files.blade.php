<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Upload Pdf files') }}
    </h2>
</x-slot>
<div class="grid grid-cols-1 mx-auto bg-gray-100 py-2 w-full md:w-2/5">
    <div class="container bg-white py-2 px-3 rounded shadow-md">
        <form wire:submit.prevent="store")>
            <div class="w-full bg-white p-2 m-3">
                <x-jet-label for="archivo" value="{{ __('Select Pdf file') }}" />
                <x-jet-input type="file" class="mt-1 block w-full" wire:model="archivo"
                    placeholder="Choose archivo" />
                <x-jet-input-error for="file" class="mt-2" />
            </div>
            <div class="w-full bg-white p-2 m-3">
                <x-jet-label for="resume" value="{{ $resume ? 'Upload may Resume':'please click if you plan to upload your resume ' }}" />
                <x-jet-input type="checkbox" class="mt-1 block w-1/4 bg-blue-400 cursor-pointer hover:bg-green-600 hover:text-blue-800 h-4 w-4" wire:model="resume"
                  title="please click if you plan to upload your resume"  />
                <x-jet-input-error for="file" class="mt-2" />
            </div>


            <div class=" w-1/12 bg-white p-2 m-3">
                <div class="justify-center items-center">
                    <button type="submit"
                        class="bg-green-800 text-white py-2 px-4 rounded my-2">Upload</button>
                </div>
            </div>
        </form>
        <div class=" w-1/12 bg-white p-2 m-3">
            <div class="justify-center items-center">
                <a href="{{route('user-profile')}}" class="px-3 py-2 bg-blue-400 rounded cursor-pointer hover:bg-blue-700 hover:text-white">Profile</a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 mx-auto bg-gray-100 py-2 w-full md:w-full">
        <div class="container bg-white py-2 px-3 rounded shadow-md">
            <ul>
                @foreach ($files as $f )
                   <li class="flex flex-row">
                       <a href="#" wire:click="destroy({{$f->id}})">
                        <i class="far fa-trash-alt"></i>
                      {{$f->name}}
                       @if ($f->resume)
                           <span class="text-xs font-bold ml-3">your Resume </span class="text-xs font-bold ml-3">
                       @endif

                     </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>
