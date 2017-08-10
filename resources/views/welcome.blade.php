@extends('layout')

@section('styles')
	<style>
		body{
			background-image: url("");
			background-color: white;
		}
	</style>
@endsection

@section('content')
	<div class="container-fluid ">
		<img class="logo" src="{{ url('assets/img/logo.png') }}" alt="bar" srcset="{{ url('assets/img/logo.png') }} 1024w, {{ url('assets/img/logo.png') }} 2048w, {{ url('assets/img/logo@2x.png') }} 2x" >
		<div class="row align-items-center" style="height: 90%">
			<div class="col-lg-12 text-center m-auto title" >
				<h1>Welcome to<br> Pre-release Showcase</h1>
				<h3>On this page, you’ll preview our education content and many other<br> interesting videos. Thank you for your interest at HRD Antwerp</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center ">
			<div class="col-12 text-center sub-title">
				<h2>EDUCATION ACTIVITIES</h2>
			</div>
			<div class="col-12 text-center diamond">
				<div class="text-center m-auto" id="diamond"></div>
			</div>
			
			<div class="col-lg-4 col-md-6 offset-lg-2 mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/205914241" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">HRD Antwerp Lebanon Graduation</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/227215320" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Hrd Antwerp Retail Workshop</small>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="row mt-4">
			<div class="col-12 text-center sub-title">
				<h2>ONLINE SALES COURSE CONTENT</h2>
			</div>
			<div class="col-12 text-center diamond ">
				<div class="text-center m-auto" id="diamond"></div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/165558789" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Lesson 1</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/165561469" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 2</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/165561930" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 3</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/165563058" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Lesson 4</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/165570923" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 5</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/179151302" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 6</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/179151795" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Lesson 7</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/179154297" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 8</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/179154874" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 9</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/179298108" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Lesson 10</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180577171" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 11</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180314414" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 12</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180580525" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Lesson 13</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180735037" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 14</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180739637" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 15</small>
				</div>
			</div>
			<div class="col-lg-4 offset-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/180868315" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Lesson 16</small>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mt-4">
				<div class="col-12 text-center sub-title">
					<h2>ONLINE SALES COURSE CASE STUDIES</h2>
				</div>
				<div class="col-12 text-center diamond">
					<div class="text-center m-auto" id="diamond"></div>
				</div>
				<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200135088" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Case Study 1</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200136838" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Case Study 2</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200136902" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Case Study 3</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200136978" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center">Case Study 4</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200137215" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Case Study 5</small>
				</div>
			</div>
			<div class="col-lg-4 col-md-6  mt-5">
				<div class="col-md-12 text-center">
					
					<iframe src="https://player.vimeo.com/video/200137392" width="100%" height="208" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<small class="text-center m-auto">Case Study 6</small>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div style="height:70px;"></div>
@endsection