@extends('layouts.master')
@section('content')

<div>
	<div class="top-header">
		<div class="container top-contents col-sm-12 col-md-12 col-lg-12" style="background-image:url(/assets/image/beach.jpg);">

			<p>CRUD Lab. BEACH PARTY 2016!!!</p>
			<p>2016/7/9(sat)</p>
			<p>波の上うみそら公園</p>
			
			<button type="button" class="btn btn-default"><a href="#info">詳細はこちら</a></button>
		</div>
	</div>
</div>
@endsection

@include('layouts.entry')
@include('layouts.info')

