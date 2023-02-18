<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
   @include('includes.meta')

   @include('includes.style')

   <title>{{ config('app.name', 'LSAPP') }} | @yield('title')</title>
</head>

<body>
   @include('components.navbar')

   <div class="container">
      @include('components.messages')
      @yield('content')
   </div>

   @include('includes.script')
</body>

</html>