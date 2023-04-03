<header>
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
  
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mt-3">
        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Popular</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Followers</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Favorites</a></li>
      </ul>
  
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark mt-3 "style="border-radius:0%" placeholder="Search..." aria-label="Search">
      </form>
  
      <div class="text-end mt-3 mx-3">
        @if(!Auth::check())
        <a href="{{url("login")}}" type="button" class="btn btn-primary me-2" style="border-radius:0%">Login</a>
        <a href="{{url('register')}}" type="button" class="btn btn-warning" style="border-radius:0%">Register</a>
        @else

        <div class="dropdown">
          
          <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('logout')}}">Log Out</a></li>
          </ul>
        </div>

        @endif
      </div>
    </div>
    </header>