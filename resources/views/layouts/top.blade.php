@extends('layouts.master')
@section('content')

<div class="top-header">
	<div class="container top-image col-sm-12 col-md-12 col-lg-12" style="background-image:url(/assets/image/beach.jpg);">
		<div class="top-contents">
			<p>CRUD Lab. BEACH PARTY 2016!!!</p>
			<p>2016/7/9(sat)</p>
			<p>波の上うみそら公園</p>

			<button type="button" class="btn btn-default"><a href="#info">詳細はこちら</a></button>
		</div>
	</div>
</div>

<hr>
@endsection

@include('layouts.info')
@include('layouts.entry')
@include('layouts.contact')
