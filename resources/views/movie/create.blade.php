<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" enctype="multipart/form-data" action="{{ route('movies.store') }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
				@endforeach -->
				@csrf
				<div class="form-group">
					<label for="name">Movie Name :</label>
					<input name="moviename" type="text" class="form-control" id="movie_moviename" placeholder="You Movie Name" value="{{ old('moviename') }}">
					@if($errors->has("moviename"))
					<small class="form-text text-danger">
						{{ $errors->first('moviename') }}
					</small>
					@endif

				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Example select</label>
					<select name="movietype" class="form-control" id="movie_movietype">
						<option>action</option>
						<option>drama</option>
						<option>horror</option>
						<option>animation</option>
						<option>thriller</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Description :</label>
					<textarea name="description" class="form-control" id="movie_description" rows="3" placeholder="Movie Description">{{ old('description') }}</textarea>
					@if($errors->has("description"))
					<small class="form-text text-danger">
						{{ $errors->first('description') }}
					</small>
					@endif
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<input id="avatar" type="file" class="form-control" name="avatar">
					</div>
				</div>
				<div class="form-group">
					<label for="sdate">Start Date :</label>
					<input name="startdate" type="date" class="form-control" id="movie_startdate" placeholder="Date" value="{{ old('startdate') }}">
					@if($errors->has("startdate"))
					<small class="form-text text-danger">
						{{ $errors->first('startdate') }}
					</small>
					@endif

				</div>
				<div class="form-group">
					<label for="edate">End Date :</label>
					<input name="enddate" type="date" class="form-control" id="movie_enddate" placeholder="Date" value="{{ old('enddate') }}">
					@if($errors->has("enddate"))
					<small class="form-text text-danger">
						{{ $errors->first('enddate') }}
					</small>
					@endif

				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
	</html>