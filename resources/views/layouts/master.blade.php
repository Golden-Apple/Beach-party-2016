<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ビーチパーティー</title>

		<!-- js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{{asset('/assets/umi/js/bootstrap.js')}}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcrYYNSa7AfR1Okvly46kErNEXtuj2hPU"></script>

		<!-- css -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{{asset('/assets/umi/css/bootstrap.css')}}}">
		<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/app.css">

	</head>
	<body>
		<header id="nav"></header>

		@yield('content')
		@yield('info')
		@yield('join')
		@yield('contact')

		<footer class="footer">
			<a href="/" class="konko wow zoomInRight"></a>
		</footer>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
		<script type="text/javascript">
			new WOW().init();
		</script>

		<script type="text/javascript" src="js/navi.js"></script>
		<script type="text/javascript" src="{{{asset('/assets/js/toggle.js')}}}"></script>
	</body>
</html>
