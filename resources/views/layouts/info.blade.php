@section('info')

	<div class="container" id="info">
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
				<div class="col-md-12" id="map"></div>
			</div>

			<div class="responsible row">

				<h3>担当者はこの人たち。</h3>

				<div class="media">
					<div class="media-left">
						<a>
							<img src="{{{asset('assets/image/item-konko.png')}}}" alt="かぼちゃ" class="img-circle" />
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">かぼちゃよん。</h4>
						連絡先: xxx-xxxx-xxxx
					</div>
				</div>

				<div class="media">
					<div class="media-left">
						<a>
							<img src="{{{asset('assets/image/item-konko.png')}}}" alt="しおん" class="img-circle" />
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">しおんだよ。</h4>
						連絡先: xxx-xxxx-xxxx
					</div>
				</div>

				<a id="btn-contact" href="#contact" class="btn btn-primary btn-lg">お問い合わせ</a>
			</div>
		</div>

		<script type="text/javascript" src="/js/app.js"></script>
	</div>

	<hr>
@endsection
