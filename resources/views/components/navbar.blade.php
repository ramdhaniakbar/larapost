<nav class="navbar navbar-expand-lg mb-5 navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href="#">{{ config('app.name', 'LSAP') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
         aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav me-auto">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
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
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
            </li>
            {{-- <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown link
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
               </ul>
            </li> --}}
         </ul>
      </div>
   </div>
</nav>