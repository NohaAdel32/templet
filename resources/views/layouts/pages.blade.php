<!DOCTYPE html>
<html>

<head>
  @include('includes.head')
</head>
<body >
<div class="hero_area"> 
  
  @include('includes.header')
    
  @yield('content')
  
  @include('includes.info')
  @include('includes.footer')

</body>

</html>