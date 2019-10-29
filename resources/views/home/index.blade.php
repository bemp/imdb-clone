@extends('layout.mainlayout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       	@foreach ($movies as $rowMovie)
       	<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
				<img src="{{$rowMovie->cover_image}}" class="img-thumbnail img-fluid" alt="Boats at Phi Phi, Thailand">
				<div class="caption">
					<p>{{$rowMovie->title}} - {{$rowMovie->release_year}}</p>
					<p><a href="{{url('movies/detail/')}}/{{$rowMovie->id}}" class="btn btn-primary" role="button">Detail</a></p>
				</div>
			</div>
		</div>
		@endforeach
		</div>
		{{ $movies->links() }}
     </div>
   </div>
@endsection