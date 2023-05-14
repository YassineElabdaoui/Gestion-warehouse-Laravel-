<html>
<head>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('info/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('info/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('info/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('info/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('info/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('info/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="{{ asset('info/vendors/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('info/vendors/images/login-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To DeskApp</h2>
						</div>
                        <x-slot name="logo">
                        
                        </x-slot>
                       
    
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
    
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
				  
						<form method="POST" action="{{ route('login') }}">
							  @csrf
						
							
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" placeholder="email" id="email" :value="old('email')" required autofocus />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********" id="password" 
                                name="password"
                                required autocomplete="current-password" />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password">
									@if (Route::has('password.request'))
							             <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
												{{ __('Forgot your password?') }}
										</a>
								    @endif
									</div>
								</div>
							</div>
							
										
										<x-button class="btn btn-primary btn-lg btn-block">
											{{ __('Log in') }}
										</x-button>
							
						</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="{{ asset('info/vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('info/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('info/vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('info/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>