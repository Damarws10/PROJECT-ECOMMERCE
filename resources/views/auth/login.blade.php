@extends('layouts.login')
@section('judul','login')
@section('content')

	<body class="img js-fullheight" style="background-image: url(img/ddsimg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">E-Commerce</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
				<div class="card" style="background-color:#dc3545;">
          		<div class="card-body pt-3">
					<div class="login-wrap p-0">
		      	<form method="POST"action="{{ route('login') }}" class="signin-form">
                  {{ csrf_field()}}

		      	<div class="form-group">
		      		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>Cie salah!</strong>
                      </span>
                    @enderror
                    </div>

                    <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" name="password" placeholder="Password" style= "margin-bottom : 10px;">
                <!--<i class="fa-solid fa-eye" id="show-password"></i>-->
				<!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>-->
   
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>Cie Salah password!</strong>
                    </span>
                    @enderror
                </div>

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="{{ route('register') }}" style="color: #fff">Register Now!</a>
								</div>
	                    </div>
	          </form>
		      </div>
				</div>
			</div>
			</div>
			</div>
		</div>
	</section>
</body>
@endsection





