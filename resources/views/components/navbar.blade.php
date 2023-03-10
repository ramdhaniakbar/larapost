<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
   <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
         {{ config('app.name', 'LSAP') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <!-- Left Side Of Navbar -->
         <ul class="navbar-nav me-auto">
            @guest
            @if (Route::has('index'))
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            @endif
            @endguest
            <li class="nav-item">
               <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('posts.index') }}">Blog</a>
            </li>
         </ul>

         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ auth()->user()->name }}
               </a>

               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                  <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button type="submit" class="dropdown-item" role="button">
                        Logout
                     </button>
                  </form>
               </div>
            </li>
            @endguest
         </ul>
      </div>
   </div>
</nav>