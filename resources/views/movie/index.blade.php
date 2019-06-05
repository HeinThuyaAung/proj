<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<br>
				<a class="btn btn-success" href="{{ route('movies.create') }}">Create Movie</a>
				<hr>
				@if($movies->count() > 0)
					<table class="table table-striped">
					<thead>

						<tr>
							<th>Movie ID</th>
							<th>MovieName</th>
							<th>MovieType</th>
							<th>Description</th>
							<th>Photo</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Photo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($movies as $movie)
							<tr>
								<td>{{ $movie->movieid }}</td>
								<td>{{ $movie->moviename }}</td>
								<td>{{ $movie->movietype }}</td>
								<td>{{ $movie->description }}</td>
								<td>{{ $movie->startdate }}</td>
								<td>{{ $movie->enddate }}</td>
								<td><img class="card-img-top" style="max-height:10rem;"  src="{{ $movie->media[0]->getUrl() }}" alt="Card image cap"></td>
								<td><a href="{{ route('movies.edit', $movie->movieid) }}"><button class="btn btn-primary">Edit</button></a></td>
								<td>
									<form method="post" action="{{ route('movies.destroy', $movie->movieid) }}">
										@method('delete')
    									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
									
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $movies->links() }}
				
				@else
					<h2>No Movies</h2>
				@endif
				
			</div>
		</div>
	</div>
	
</body>
</html>