<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('movies.update', $movie->movieid) }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
				@endforeach -->
				@csrf
				@method("patch")
				<div class="form-group">
					<label for="name">Movie Name :</label>
					<input name="name" type="text" class="form-control" id="movie_name" placeholder="Movie Name" value="{{ old('moviename') }}">
					@if($errors->has("moviename"))
					<small class="form-text text-danger">
						{{ $errors->first('moviename') }}
					</small>
					@endif

				</div>
				<div class="col-auto my-1">
					<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Movie Type :</label>
					<select class="custom-select mr-sm-2" id="movie_movietype">
						<option selected>Choose Movie Type</option>
						<option value="1">Action</option>
						<option value="2">Drama</option>
						<option value="3">Honor</option>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description :</label>
					<textarea name="description" class="form-control" id="movie_description" rows="3" placeholder="Movie Description">{{ old('description') }}</textarea>
					@if($errors->has("description"))
					<small class="form-text text-danger">
						{{ $errors->first('description') }}
					</small>
					@endif
				</div>
				<div class="form-group">
					<label for="photo">Example file input</label>
					<input name="photo" type="file" class="form-control-file" id="movie-file">
					@if($errors->has("photo"))
					<small class="form-text text-danger">
						{{ $errors->first('photo') }}
					</small>
					@endif
				</div>
				<div class="form-group">
					<label for="startdate">Start Date :</label>
					<input name="startdate" type="text" class="date" id="movie_startdate" placeholder="Start Date" value="{{ old('v-scroll:#target="callback"') }}">
					@if($errors->has("startdate"))
					<small class="form-text text-danger">
						{{ $errors->first('startdate') }}
					</small>
					@endif

				</div>
				<div class="form-group">
					<label for="enddate">End Date :</label>
					<input name="enddate" type="text" class="date" id="movie_enddate" placeholder="End Date" value="{{ old('v-scroll:#target="callback"') }}">
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
	<script>
		$('.date').datepicker({
			autoclose: true,
			dateFormat: "yy-mm-dd"
		});
	</script>
	</html>