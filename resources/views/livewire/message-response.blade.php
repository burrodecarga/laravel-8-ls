<div class="grid grid-cols-1 md:grid-cols-2 gap-2">
    <div class="card p-4 border-gray-300  border-2 m-4 rounded">
        <div class="card-header">
            <h1 class="text-xl font-bold">{{$message->subject}}</h1>
            <p class="text-gray-500 text-justify text-xs"> {{$message->created_at->subMinutes(2)->diffForHumans()}}</p>
        </div>
        <div class="card-body">
            <p class="text-gray-500 mt-5 text-justify">{{$message->body}}</p>
        </div>
    </div>
    <div>
        <form class="p-6"   wire:submit.prevent="store({{$message->id}})">
            <div>
                <x-jet-label for="subject" value="{{ __('subject')}}" />
                <x-jet-input id="subject" type="text" class="w-full" wire:model.defer="subject"
                    autocomplete="subject"
                    placeholder=" Enter subject..." />
                <x-jet-input-error for="subject" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="body" value="{{ __('body')}}" />
                <textarea name="body" cols="30" rows="2" class="form-control mt-1 block w-full"
                wire:model.defer="body"></textarea>
                <x-jet-input-error for="body" class="mt-2" />
                <x-jet-input-error for="message_id" class="mt-2" />
            </div>
            <div class="mt-3">

             <button type ="submit" role="button" class="py-2 px-3 text-white bg-green-500 hover:bg-green-700 rounded w-1/2 "

                >Send</button>
            </div>

        </form>

    </div>
</div>
