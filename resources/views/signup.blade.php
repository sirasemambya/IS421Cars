@extends('bootstrap')
@section('page_content')
	<div class="card">
		<div class="card-block">
			<div class="text-xs-center">
				<h3><i class="fa fa-user"></i> Register:</h3>
			</div>
			<div class="md-form">
				<i class="fa fa-user prefix"></i>
				<input type="text" id="form3" class="form-control">
				<label for="form3">Your name</label>
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
				<button class="btn btn-primary">Sign UP</button>
			</div>
		</div>
	</div>
    <div class="modal-footer">
        <div class="options">
            <p>Already a member <a href="/signin">Sign In</a></p>
            <p>NewsLetter <a href="/subscribe">Subscribe Me</a></p>
        </div>
    </div>
@stop