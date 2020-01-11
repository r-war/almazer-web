<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Almazer.id</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="manifest" href="/manifest.json">     
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff"> 
</head>
<body>
	<style type="text/css">
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.card {
			

		}
	</style>
	@if(Auth::user()->number)
	<div class="container" style="margin-top: 3%">
		<div class="card" style="border-radius: 15px 50px; width:75%; background-image: url('images/logo.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover "> 
			<div class="card-body" style="margin-bottom: 30%;">
			</div>
			<div class="" style="background-color: transparent; color: white; border: transparent; font-size: x-large; margin-left: 40px;">
				{{ Auth::user()->name }}
				
			</div>
			<div class="" style="background-color: transparent; color: white; border: transparent; font-size: large; margin-left: 40px;">
				
				# {{ Auth::user()->number }}
			</div>
			<div class="" style="background-color: transparent; color: white; border: transparent; font-size: large; margin-top: -25px;text-align: right; margin-right: 10px;">	
				{{ Auth::user()->vin }}
			</div>
		</div>	
	</div>
	@else
	<div class="text-center" style="margin-top: 3%">
		Pendaftaran anda masih dalam proses verifikasi, silahkan hubungi admin untuk informasi lebih lanjut
	</div>
	@endif
	<div class="card container" style="margin-top: 3%; margin-bottom: 75px">
		<!-- <form method="post" action="change-password" autocomplete="off">
			@csrf
			@method('put')

			<h6 style="text-align: center;" >{{ __('Change Password') }}</h6>

			@include('alerts.success', ['key' => 'password_status'])
			@include('alerts.error_self_update', ['key' => 'not_allow_password'])

			<div class="pl-lg-4">
				<div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
					<label class="form-control-label" for="old_password">{{ __('Current Password') }}</label>
					<input type="password" name="old_password" id="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" required>

					@include('alerts.feedback', ['field' => 'old_password'])
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
					<label class="form-control-label" for="password">{{ __('New Password') }}</label>
					<input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" required>

					@include('alerts.feedback', ['field' => 'password'])
				</div>
				<div class="form-group">
					<label class="form-control-label" for="password_confirmation">{{ __('Confirm New Password') }}</label>
					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" required>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
				</div>

			</form> -->
			<div class="text-center" style="margin-top: 10px;">
				<form id="logout-form" action="{{ route('logout') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-danger">Logout</button>
				</form>
			</div>
			@if(Auth::user()->type ==='staff')
			<div class="text-center" style="margin-top: 10px;">
				<a href="{{ action('UserController@index') }}"><button type="button" class="btn btn-info">Manage User</button></a>
			</div>
			@endif

			@if(Auth::user()->type ==='vendor')
			<div class="text-center" style="margin-top: 10px;">
				<a href="{{ action('VendorController@index') }}"><button type="button" class="btn btn-info">List User</button></a>
			</div>
			@endif
		</div>		
	</div>
	<script type="text/javascript">
		if ('serviceWorker' in navigator) {
			console.log("Will the service worker register?");
			navigator.serviceWorker.register('service-worker.js')
			.then(function(reg){
				console.log("Yes, it did.");
			}).catch(function(err) {
				console.log("No it didn't. This happened:", err)
			});
		}
	</script>
</body>
<footer>
        <style type="text/css">
            .footer {
                position: fixed; 
                bottom: 0;
                left: 0;
                right: 0;
                height: 50px;
                text-align: center;
                background-color: black;
                color: white;
                padding-top: 15px;
            }
        </style>
        <div class="footer"> <strong>Copyright © <?php echo date("Y"); ?> <a target="_blank" href="#">Almazer</a></strong>. Powered by <a href="https://eloquentdev.com/">EloquentDev</a> </div>

    </footer>
</html>