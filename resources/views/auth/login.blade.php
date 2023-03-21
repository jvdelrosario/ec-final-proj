@extends('template')

@section('title', 'Login');

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="checkout-accordion-wrap">
						  <div class="card">
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
								@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
								@endif
								@if ($errors->has('login_error'))
									<div class="alert alert-danger">
										{{ $errors->first('login_error') }}
									</div>
								@endif
						        	<form method="POST" action="{{ route('login') }}">
										@csrf
						        		<p><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</p>
						        		<p><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</p>
                                        <div class="text-center">
                                            <button type="submit" class="boxed-btn">Login</button>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="#" class="">Register</a>
                                        </div>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

@endsection