@extends('layouts.app');

@section('content')

<style>

.profile-img {
	max-width: 150px;
	border: 5px solid #fff;
	border-radius: 100%;
	box-shadow: 0 2px 2px rgba(0,0,0, 0.3);
}

</style>

<div class="row">
	<dic class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
			<img class="profile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar.png">

			<h1>{{ $user->name }}</h1>
			<h5>{{ $user->email }}</h5>
			<h5>{{ $user->dob->format('l j F Y') }} ({{ $user->dob->age  }} years old )</h5>
			<button type="button" class="btn btn-primary">Follow</button>
			</div>
		</div>
	</dic>

</div>


@endsection