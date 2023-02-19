<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   @include('includes.meta')

   <title>{{ config('app.name', 'LSAP') }} | @yield('title')</title>

   @include('includes.style')

</head>

<body>
   <div id="app">
      @include('components.navbar')
      <main class="container py-4">
         @include('components.messages')
         @yield('content')
      </main>
   </div>

   @include('includes.script')
</body>

</html>