@extends('layouts.master')

@section('info')

	<div class="container">
		<div class="info-header">
			<h2>イベント詳細∧( 'Θ' )∧</h2>
		</div>
AIzaSyAcrYYNSa7AfR1Okvly46kErNEXtuj2hPU
		<div class="container info-contents">
			<div class="row">
				<ul class="col-md-8 list-group">
					<li class="list-group-item">日時: 7月9日(土) 15:00 ~ 19:00</li>
					<li class="list-group-item">場所: うみそら公園</li>
					<li class="list-group-item">参加費: きっと無料</li>
					<li class="list-group-item">持ち物: 飲みたいお酒など ※瓶NG</li>
				</ul>
			</div>

			<div class="row accessmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1714.4213056853953!2d127.66521147950057!3d26.221288544008388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569922f08e25b%3A0x27441ac8cedca253!2z44CSOTAwLTAwMzcg5rKW57iE55yM6YKj6KaH5biC6L6777yT5LiB55uu77yT4oiS77yRIOazouOBruS4iuOBhuOBv-OBneOCieWFrOWckg!5e0!3m2!1sja!2sjp!4v1465373789056" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div id="map"></div>
			</div>

			<div class="row">
				<button type="button" name="button" class="btn btn-primary btn-lg">お問い合わせ</button>
			</div>
		</div>

		<script type="text/javascript" src="/js/app.js"></script>
	</div>

@endsection
