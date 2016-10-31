@extends('bootstrap')
@section('page_content')
	<div class="card">
		<div class="card-block">
			<div class="text-xs-center">
				<h3><i class="fa fa-lock"></i> Access Your Account:</h3>
			</div>
			<div class="md-form">
				<i class="fa fa-envelope prefix"></i>
				<input type="text" id="form2" class="form-control">
				<label for="form2">Your email</label>
			</div>
			<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input type="password" id="form4" class="form-control">
				<label for="form4">Your password</label>
			</div>
			<div class="text-xs-center">
				<a href="#" class="btn btn-primary" role="button">Login</a>
			</div>
		</div>
		<!--Footer-->
		<div class="modal-footer">
			<div class="options">
				<p>Not a member? <a href="/signup">Sign Up</a></p>
				<p>Forgot <a href="#">Password?</a></p>
			</div>
		</div>
	</div>
@stop