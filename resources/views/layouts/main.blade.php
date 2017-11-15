<!DOCTYPE html>

 <html class="no-js"> 

<head>
	@include('partials._head')
</head>

<body>
		
	@include('partials._nav')

    @yield('content')
	

	@include('partials._footer')
</body>

@include('partials._javascript')
</html>