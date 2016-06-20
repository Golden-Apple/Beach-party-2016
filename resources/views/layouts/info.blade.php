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
				<ul class="col-md-offset-2 col-md-8 list-group info-list">
					<li class="list-group-item">日時: 7月9日(土) 15:00 ~ 19:00</li>
					<li class="list-group-item">場所: 波の上うみそら公園</li>
					<li class="list-group-item">参加費: 無料(表現がいまいち...)</li>
					<li class="list-group-item">持ち物: お好きな飲み物 ※瓶NG</li>
					<img src="{{{asset('/assets/image/konko/list-konko.png')}}}" alt="" />
				</ul>
			</div>

			<div>
				<p>会場ではBBQやドリンクをある程度用意していますが、その他飲みたい物がありましたらご自由に持参してください。※ただし瓶はNG</p>
			</div>

			<div class="row accessmap wow slideInLeft">
				<div class="col-md-offset-10 visible-md visible-lg konko"></div>
				<div class="col-md-12 col-xs-12" id="map"></div>
			</div>

			<div class="row">
				<a id="btn-contact" href="#entry" class="col-md-offset-3 col-xs-offset-3 col-md-6 col-xs-6 btn btn-success btn-lg wow bounceIn">参加する?</a>
			</div>

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
									<img src="{{{asset('assets/image/kiyono.jpg')}}}" alt="かぼちゃ" class="thumbnail-img wow hinge" />
								</a>
							</div>
							<div class="col-md-12 profile">
								<h4>島袋清乃
									<a href="https://www.facebook.com/kaboshima"><span class="icon-092"></span></a>
									<a href="https://www.instagram.com/kabotya155/"><span class="icon-026"></span></a>
								</h4>
								<div class="profile-info">
									<ul>
										<li>生息地: 読谷</li>
										<li>連絡先: 090-9782-3127</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 member">
						<div class="row text-center">
							<div class="col-md-12">
								<a>
									<img src="{{{asset('assets/image/thumbnail.png')}}}" alt="しおん" class="thumbnail-img wow wobble" data-wow-iteration="10" data-wow-duration="0.15s"/>
								</a>
							</div>
							<div class="col-md-12 profile">
								<h4>しおんだよ。</h4>
								連絡先: xxx-xxxx-xxxx
							</div>
						</div>
					</div>
				</div>

				<a id="btn-contact" href="#contact" class="col-md-offset-3 col-xs-offset-2 col-md-6 col-xs-8 btn btn-primary btn-lg wow zoomIn">お問い合わせはこちら</a>
			</div>
		</div>

		<script type="text/javascript" src="/js/app.js"></script>
	</div>

@endsection
