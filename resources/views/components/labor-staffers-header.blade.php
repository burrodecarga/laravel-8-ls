@php($navLink = [
    ['href'=>'/dashboard', 'name'=>'dashboard', 'text'=>'Dashboard'  ],
    ['href'=>'/users', 'name'=>'users', 'text'=>'Users'  ],
    ['href'=>'/posts', 'name'=>'posts', 'text'=>'posts'  ],
    ['href'=>'/jobs', 'name'=>'jobs', 'text'=>'jobs'  ],
    ['href'=>'/roles', 'name'=>'roles.index', 'text'=>'roles'  ],
    ['href'=>'/legal', 'name'=>'legal.index', 'text'=>'legal'  ],
    ['href'=>'/skills', 'name'=>'skills.index', 'text'=>'skills'  ],
    ['href'=>'/focal-points', 'name'=>'focal-points.index', 'text'=>'focal-points']
])

<header>
  <div>
    <nav class="menu">
        <div class="logo logo-mobile">
          <img src="{{asset('assets/media/Logo-white.png')}}"  alt="Logo" />
        </div>
      </div>
      <div class="nav-links">
        <div class="logo">
          <a href="/"><img src="{{asset('assets/media/Logo-white.png')}}" alt="Logo" /></a>
        </div>
        <div class="links">
            @foreach ($navLink as $link)
            <x-nav-link :href="$link['href']" :active="request()->routeIs($link['name'])">
             {{ __($link['text']) }}
           </x-nav-link>
         @endforeach
        </div>
      </div>
    </nav>
    <div class="menu-wrap" id="menu-wrap">
      <input type="checkbox" class="toggler" id="toggler" />
      <div class="hamburger">
        <div class="div1"></div></div>
      <div class="menu-mobile" id="menu-mobile">
        <div class="div2">
          <div class="div3">
          </div>
        </div>
      </div>
    </div>
  </div >
</header>
