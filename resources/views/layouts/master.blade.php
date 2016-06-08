<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ビーチパーティー</title>
			


			<!-- Bootstrapのcss -->
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<!-- umi -->
			<link rel="stylesheet" href="{{{asset('/assets/umi/css/bootstrap.css')}}}">

		    
			<!-- jQuery -->
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		   
			<!-- js	 -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<!-- umi -->
			<script type="text/javascript" src="{{{asset('/assets/umi/js/bootstrap.js')}}}"></script>
		
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav">
								<li><a href="/top">TOP</a></li>
								<li><a href="/info">詳細</a></li>
								<li><a href="/entry">申し込みフォーム</a></li>
								<li><a href="/contact">問い合わせ</a></li>
							</ul>						
						</div>
					</div>
				</nav>
	</head>
	<body>
	        @yield('content')

	</body>
</html>