@include('head')

<body>

  @include('header')  {{-- Include header file --}} 
  
  @yield('content')

  @include('footer') {{-- Include footer file --}}  </div>
</body>

</html>