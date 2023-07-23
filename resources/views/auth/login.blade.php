<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('backend')}}/vendors/core/core.css">
	<link rel="stylesheet" href="{{asset('backend')}}/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="{{asset('backend')}}/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="{{asset('backend')}}/css/demo_1/style.css">
  <link rel="shortcut icon" href="{{asset('backend')}}/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">
                   
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Riad</a>
                    <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="form-group">
                        <label>Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Remember me
                        </label>
                      </div>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          <i class="btn-icon-prepend" data-feather="twitter"></i>
                          Login with twitter
                        </button>
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

	<!-- core:js -->
	<script src="{{asset('backend')}}/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('backend')}}/vendors/feather-icons/feather.min.js"></script>
	<script src="{{asset('backend')}}/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>
