@php($navLink = [
    ['href'=>'/dashboard', 'name'=>'home', 'text'=>'Home' ],
    ['href'=>'/', 'name'=>'home', 'text'=>'Home'  ],
    ['href'=>'/about', 'name'=>'about', 'text'=>'About Us'  ],
    ['href'=>'/candidates', 'name'=>'candidates', 'text'=>'Candidates'  ],
    ['href'=>'/employers', 'name'=>'employers', 'text'=>'Employers'  ],
    ['href'=>'/services', 'name'=>'services', 'text'=>'Services'  ],
    ['href'=>'/users', 'name'=>'users', 'text'=>'Users'  ],
    ['href'=>'/posts', 'name'=>'posts', 'text'=>'posts'  ],
    ['href'=>'/jobs', 'name'=>'jobs', 'text'=>'jobs'  ],
    ['href'=>'/roles', 'name'=>'roles.index', 'text'=>'roles'  ],
    ['href'=>'/legal', 'name'=>'legal.index', 'text'=>'legal'  ],
    ['href'=>'/skills', 'name'=>'skills.index', 'text'=>'skills'  ],
    ['href'=>'/focal-points', 'name'=>'focal-points.index', 'text'=>'focal-points']
])
<div>
    <div class="nav-links">
        <div class="logo">
            <a href="/"><img src="{{asset('assets/media/Logo-white.png')}}" alt="Labor Staffers" /></a>
        </div>
        <div class="links">
            <ul>
                <li><a class="text-white" href="{{url('/dashboard')}}">Home</a></li>
                <li><a class="text-white" href="{{ url('/about')}} ">About us</a></li>
                <li><a class="text-white" href="./jobs/">Jobs</a></li>
                <li><a class="text-white" href="{{url('/candidates')}}">Candidates</a></li>
                <li><a class="text-white" href="{{url('/employers')}}">Employers</a></li>
                <li><a class="text-white" href="{{url('/services')}}">Services</a></li>
                <li><a class="text-white" href="./contact-us/">Contact us</a></li>
            </ul>
        </div>
      </div>
      </nav>
      <!-- end navbar -->
      <!-- mobile burger menu -->
      <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger">
      <div><!-- do not delete this empty div --></div></div>
      <div class="menu-mobile">
      <div>
      <div>
      <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="./jobs/">Jobs</a></li>
                <li><a href="./candidates/">Candidates</a></li>
                <li><a href="./employers/">Employers</a></li>
                <li><a href="./services/">Services</a></li>
                <li><a href="./contact-us/">Contact us</a></li>
            </ul>
      </div>
      </div>
      </div>
      </div>
      <!-- end mobile burger menu -->
</div>
