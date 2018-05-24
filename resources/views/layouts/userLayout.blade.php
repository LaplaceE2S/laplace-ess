<?php 
use App\User;
$type = Auth::user()->type;
?>

@include('layouts.head')

<body>

  @include('layouts.userheader')
  @include('layouts.userMenu')
  @yield('content')
  </div>
  </section>
  @include('layouts.footer')</div>
</body>
</html>
