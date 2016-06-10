@extends('layouts.master')

@section('info')

	<div class="container">
		<div class="info-header">
			<h2>イベント詳細∧( 'Θ' )∧</h2>
		</div>
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
				<div id="map"></div>
			</div>

			<div class="row">
				<button type="button" name="button" class="btn btn-primary btn-lg">お問い合わせ</button>
			</div>
		</div>

		<script type="text/javascript" src="/js/app.js"></script>
	</div>

@endsection
