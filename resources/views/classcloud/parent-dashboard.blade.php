@extends('layouts.main')
@section('content')
	<div class="mdl-grid">
		@foreach($students as $student)
			<a href="{{ url(url()->current().'/'.$student->class()->current()->first()->class_form) }}"  class="mdl-cell mdl-cell--2-col mdl-card mdl-color--yellow-300 mdl-shadow--2dp">
				<div class="mdl-card__title mdl-card--expand">
					<h2 class="mdl-card__title-text">{{ $student->full_name }}</h2>
				</div>
			</a>
		@endforeach
	</div>
@endsection