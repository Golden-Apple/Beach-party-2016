@section('info')

	<div class="container" id="info">
		<div class="info-header">
			<div class="heading">
				<h2 class="wow bounceInRight">イベント詳細∧( 'Θ' )∧</h2>
			</div>
			<hr>
		</div>

		<div class="container info-contents">
			<div class="row">
				<ul class="col-md-8 list-group info-list">
					<li class="list-group-item">日時: 7月9日(土) 15:00 ~ 19:00</li>
					<li class="list-group-item">場所: うみそら公園</li>
					<li class="list-group-item">参加費: きっと無料</li>
					<li class="list-group-item">持ち物: 飲みたいお酒など ※瓶NG</li>
					<img src="{{{asset('/assets/image/konko/list-konko.png')}}}" alt="" />
				</ul>
			</div>

			<div class="row accessmap wow slideInLeft">
				<div class="col-md-offset-10 visible-md visible-lg konko">
				</div>
				<div class="col-md-12 col-xs-12" id="map"></div>
			</div>

			<a id="btn-contact" href="#entry" class="center-block btn btn-success btn-lg wow bounceIn">エントリーする</a>

			<div class="row responsible">

				<div class="heading">
					<h3>担当者はこの人たち。</h3>
				</div>
				<hr>
				<div class="container">
					<div class="col-md-6 col-xs-12 member">
						<div class="row text-center">
							<div class="col-md-12">
								<a>
									<img src="{{{asset('assets/image/thumbnail.png')}}}" alt="かぼちゃ" class="thumbnail-img wow hinge" />
								</a>
							</div>
							<div class="col-md-12 profile">
								<h4>かぼちゃよん。</h4>
								連絡先: xxx-xxxx-xxxx
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 member">
						<div class="row text-center">
							<div class="col-md-12">
								<a>
									<img src="{{{asset('assets/image/thumbnail.png')}}}" alt="しおん" class="thumbnail-img" />
								</a>
							</div>
							<div class="col-md-12 profile">
								<h4>しおんだよ。</h4>
								連絡先: xxx-xxxx-xxxx
							</div>
						</div>

					</div>
				</div>

				<a id="btn-contact" href="#contact" class="center-block btn btn-primary btn-lg wow zoomIn">お問い合わせはこちら</a>
			</div>
		</div>

		<script type="text/javascript" src="/js/app.js"></script>
	</div>

@endsection
