<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title', 'default') 
	</title>
	<link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.css') }}">

</head>

<body>

<section >
	@yield('cabecera')
  @auth 
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"> @auth {{ Auth::user()->name }} @endauth </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Carrito (
          <?  int (count(session('carrito')) ) //anu no cuenta items
          ?>
          )
			</a>
      </li>

      
      <li class="nav-item">
          <a class= "nav-link" href="#" onclick= "event.preventDefault();
              document.getElementById('logout').submit();">
              Cerrar Sesion
          </a>
      </li>

        @else
      
    </ul>
    @endauth
          <form id="logout" action= "{{ route('logout')}}" method="post" style= "display: none;">
            Cerrar  Sesion
             @csrf
          </form>
      </li>
  </div>
  <br>
</nav>

</section>

	<section>

    @yield('content')
		
	</section>

	<script src= " {{ asset('plugins/jquery/js/jquery-3.4.1.js') }}">
	</script>	
	<script src= " {{ asset('plugins/bootstrap/bootstrap.js') }}">		
	</script>

</body>
</html>