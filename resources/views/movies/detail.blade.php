@extends('layout.mainlayout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       	<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
				<img src="{{$movies->cover_image}}" class="img-thumbnail img-fluid" alt="Boats at Phi Phi, Thailand">
				<div class="caption">
					<p>{{$movies->title}} - {{$movies->release_year}}</p>
					<p>{{$movies->title}} - {{$movies->description}}</p>
				</div>
			</div>
		</div>
		</div>
	 </div>
   </div>
@endsection