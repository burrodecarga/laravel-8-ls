<span class="text-base tracking-tighter text-white flex items-center">
    <span>
              <sup class="text-white align-text-bottom">{{$pendientes}}</sup>
              @if(auth()->user()->hasanyrole('admin', 'super-admin'))
              <a href="{{'/messages'}}">
             </span>   <x-svg-bell class="h-5 "/></a>
              @endif
              @if(auth()->user()->hasanyrole('candidate', 'employer'))
              <a href="/responses">
             </span>   <x-svg-bell class="h-5 "/></a>
              @endif
 </span>
