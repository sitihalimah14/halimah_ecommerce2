@extends('layouts.ecommerce')

@section('title')
<title>Login - Halimah Online Shop</title>
@endsection

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Register</h2>
				<div class="page_link">
					<a href="{{ url('/') }}">Home</a>
					<a href="{{ route('customer.login') }}">Login</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Login Box Area =================-->
<section class="login_box_area p_120">
	<div class="container">
		<div class="row">
			<div class="offset-md-3 col-lg-6">
				@if (session('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
				@endif

				@if (session('error'))
				<div class="alert alert-danger">{{ session('error') }}</div>
				@endif

				<div class="login_form_inner">
					<h3>Register in to enter</h3>
					<form class="row login_form" action="{{ route('customer.post_register') }}" method="post"
						id="contactForm" novalidate="novalidate">
						@csrf
						<div class="col-md-12 form-group">
							<input type="name" class="form-control" id="name" name="name" placeholder="Username">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="address" name="address" placeholder="Address">
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="btn submit_btn">Register</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection