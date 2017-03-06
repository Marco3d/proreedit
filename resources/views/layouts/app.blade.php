<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BiblioNet</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" media="screen" href="{{ asset('css/bootstrap.css')}}">
		<link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet"  href="{{ asset('css/main.css')}}">
		
		<link href="https://fonts.googleapis.com/css?family=Courgette|Yanone+Kaffeesatz" rel="stylesheet">
		
	</head>
	<body>
		<div class="container">
		  <div class="row">
		  	<div class="col-md-12">
		  			<h1 class="mititle1">BiblioNet</h1>
		  		</div>
		  </div>	
		  	<hr>
		  	
			@yield('content')



		</div>

		<!-- jQuery -->
		<script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
		
	</body>
</html>

