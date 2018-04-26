@include('head')

<body>

  @include('header')  {{-- Include header file --}} 
  <div>
  @yield('content')
  </div>
  @include('footer') {{-- Include footer file --}}  </div>
</body>
</html>