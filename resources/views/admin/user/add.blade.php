@extends('admin.master')
@section('pageHeader', 'User')
@section('function', 'Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
	@include('admin.blocks.validation_error')
	@if(Session::get('message'))
		<div class="alert alert-{!! Session::get('type') !!}">
			{!! Session::get('message') !!}
		</div>
	@endif
	<form action="{!! route('postAddUser') !!}" method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token(); !!}"/>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{!! old('txtUser') !!}" />
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" value="{!! old('txtPass') !!}"/>
		</div>
		<div class="form-group">
			<label>RePassword</label>
			<input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" value="{!! old('txtRePass') !!}"/>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{!! old('txtEmail') !!}"/>
		</div>
		<div class="form-group">
			<label>User Level</label>
			<label class="radio-inline">
				<input name="rdoLevel" value=1 type="radio" checked="checked" <?php if(old('rdoLevel')== 1) { echo 'checked'; } ?>>Admin
			</label>
			<label class="radio-inline">
				<input name="rdoLevel" value=2 type="radio" <?php if(old('rdoLevel')== 2) { echo 'checked'; } ?> >Member
			</label>
		</div>
		<button type="submit" class="btn btn-default">User Add</button>
		<button type="reset" class="btn btn-default">Reset</button>
	<form>
</div>
@endsection()  
