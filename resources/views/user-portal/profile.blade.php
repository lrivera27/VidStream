@extends('layouts.layout')
@section('title', 'Profile')

@section('dropdown-structure')
	<ul id="dropdown" class="dropdown-content">
		<li><a href="{{ url('profile') }}">Profile</a></li>
		<li class="divider"></li>
		<li><a href="#">Switch User</a></li>
		<li class="divider"></li>
		<li><a href="{{ url('logout') }}">Logout</a></li>
	</ul>
@endsection
@section('usertab')
	<ul id="nav-mobile" class="right hide-on-med-and-down">
		<li>
			<a href="{{ url('content') }}">Content</a>
		</li>
		<li>
			<a class="dropdown-button" href="#!" data-activates="dropdown">{{Session::get('session_username')}}<i class="material-icons right">arrow_drop_down</i></a>
		</li>
	</ul>
@endsection

@section('content')
<main>
	<br/>
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s4"><a href="#account">Account</a></li>
				<li class="tab col s4"><a class="active" href="#username">Users</a></li>
				<li class="tab col s4"><a href="#movies">Movies</a></li>
			</ul>
		</div>
		<!-- Account Tab -->
		<div id="account" class="col s12">
<<<<<<< HEAD
			<div class="container">
				<div class="row">
					<form class="col s12" action="/edit" method="POST">
							<div class="row">
								<div class="input-field col s6">
									<input type="text" name="firstName" value="">
									<label for="firstName">First Name</label>
								</div>
								<div class="input-field col s6">
									<input type="text" name="lastName" value="">
									<label for="lastName">Last Name</label>
								</div>
								<div class="input-field col s12">
									<input type="email" name="email" value="">
									<label for="email">Email</label>
								</div>
								<div class="input-field col s12">
									<input type="text" name="username" value="">
									<label for="username">Username</label>
								</div>
								<div class="input-field col s12">
=======
			<h4>{{ Session::get('session_username') }}</h4>
			<div class="container">
				<div class="row">
					<form class="col s12" action="/register" method="POST">
							<div class="row">
								<div class="input-field col s6">
									<input type="text" name="firstName" value="{{ Session::get('session_firstName') }}">
									<label for="firstName">First Name</label>
								</div>
								<div class="input-field col s6">
									<input type="text" name="lastName" value="{{ Session::get('session_lastName') }}">
									<label for="lastName">Last Name</label>
								</div>
								<div class="input-field col s12">
									<input type="email" name="email" value="{{ Session::get('session_email') }}">
									<label for="email">Email</label>
								</div>
								<div class="input-field col s12">
>>>>>>> b7b493b8c27f7b0769f1977399e82be629bda7f2
									<input type="password" name="password" value="">
									<label for="password">Password</label>
								</div>
								<div class="input-field col s12">
									<select name="level">
										<option value="" disabled selected>Choose Level</option>
										<option value="1">Free</option>
										<option value="2">Subscription</option>
									</select>
									<label>User Level</label>
								</div>
								<button class="btn submit-btn" type="submit" name="action">Update Info</button>
							</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
					</form>
				</div>
<<<<<<< HEAD
			</div>		</div>
=======
			</div>
		</div>
		<!-- Username Tab -->
>>>>>>> b7b493b8c27f7b0769f1977399e82be629bda7f2
		<div id="username" class="col s12">
			<!-- Add User Container -->
			<div class="container">
				<div class="row">
					<form class="col s12" action="/login" method="POST">
							<div class="row">
								<div class="input-field col s12">
									<input type="text" name="addUser" value="">
									<label for="addUser">Add User</label>
								</div>
								<button class="btn submit-btn" type="submit" name="action">Add User</button>
							</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
					</form>
				</div>
			</div>
		</div>

		<!-- Movies Tab -->
		<div id="movies" class="col s12">
			Movie Settings
		</div>
	</div>
</main>
@endsection
