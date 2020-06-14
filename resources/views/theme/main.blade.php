<!DOCTYPE html>
<html lang="en">
<head>
  @include('theme.head')
</head>

<body id="page-top">
  @include('theme.js')
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">  
      @include('theme.navbar')
      <div id="wrapper"> 
        @include('theme.sidebar')
        <div class="container-fluid pt-5 pb-5 mb-5">
          @yield('content')          
        </div>
      </div>
      @include('theme.footer')
    </div>
  </div>    
</body>
</html>