<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Upload Pdf files') }}
    </h2>
</x-slot>
<div class="grid grid-cols-1 mx-auto bg-gray-100 py-2 w-full md:w-2/5">
    <div class="container bg-white py-2 px-3 rounded shadow-md">
        <h2 class="text-center text-orange-900 text-xl sm:text-xl font-bold p-3">Pdf files of {{auth()->user()->name}}
        </h2>
        <form wire:submit.prevent="store" ) class="p-2 border-2" enctype="multipart/form-data">
            <h2 class="text-blue-600 text-xl sm:text-xl font-bold">Add New Pdf</h2>
            <div class="w-full bg-white p-2 m-3">
                <x-jet-label for="archivo" value="{{ __('Select Pdf file') }}" />
                <x-jet-input type="file" class="mt-1 block w-full" wire:model="archivo" placeholder="Choose archivo" />
                <x-jet-input-error for="file" class="mt-2" />
            </div>
            <div class="w-full bg-white p-2 m-3">
                <x-jet-label for="resume"
                    value="{{ $resume ? 'Upload my Resume':'please click if you plan to upload your resume ' }}" />
                <x-jet-input type="checkbox"
                    class="mt-1 block w-1/4 bg-blue-400 cursor-pointer hover:bg-green-600 hover:text-blue-800 h-4"
                    wire:model="resume" title="please click if you plan to upload your resume" />
                <x-jet-input-error for="file" class="mt-2" />
            </div>


            <div class=" w-1/12 bg-white p-2 m-3">
                <div class="justify-center items-center">
                    <button type="submit" class="bg-green-800 text-white py-2 px-4 rounded my-2">
                        <i class="fas fa-file-upload"><span class="ml-2 text-white">Upload</span></i>

                    </button>
                </div>
            </div>
        </form>
        <div class=" w-1/12 bg-white p-2 m-3">
            <div class="justify-center items-center">
                <a href="{{route('user-profile')}}"
                    class="px-3 py-2 bg-blue-400 rounded cursor-pointer hover:bg-blue-700 hover:text-white"
                    title="Go To Profile...">
                    <i class="fas fa-link"><span class="ml-2 text-white">Profile</span></i>
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 mx-auto bg-gray-100 py-2 w-full md:w-full">
        <h2 class="text-center text-orange-900 text-xl sm:text-xl font-bold p-3">List of {{auth()->user()->name}} Pdfs
            File</h2>

        <div class="container bg-white py-2 px-3 rounded shadow-md">
            <div class="caja90 p-5">
                <ul class="flex flex-col list-disc">
                    @foreach ($files as $f )
                    <li class="flex items-center">
                        <div class="mr-3">
                            <a href="#" wire:click="destroy({{$f->id}})" title="Delete File">
                                <span class="mx-3"><i class="far fa-trash-alt text-red-600" title="Delete item"></i>
                                </span>
                                {{$f->name}}
                                @if ($f->resume)
                                <span class="text-xs font-bold ml-3">your Resume </span class="text-xs font-bold ml-3">
                                @endif </a>
                        </div>
                        <div>
                            <div class="text-center p-2" x-data="{open : false}">
                                <a  href="/assets/pdf/I-9 Form .pdf" target="_blank" download
                                    class="text-sl text-bold italic text-green-600 "><i
                                        class="far fa-file-pdf"></i> {{$f->name}}
                                        <i class="fas fa-file-download mx-3"></i>
                                    </a>
                                    <i class="far fa-eye ml-3 cursor-pointer" x-on:click="open=!open"></i>
                                    <iframe width="300" height="450" src="{{asset('storage/'.$f->path)}}"
                                        frameborder="0" x-show="open"  x-transition:enter="transition duration-200 transform ease-out"
                                        x-transition:enter-start="scale-75"
                                        x-transition:leave="transition duration-100 transform ease-in"
                                        x-transition:leave-end="opacity-0 scale-90"></iframe> </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</div>
