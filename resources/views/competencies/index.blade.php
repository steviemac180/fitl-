@extends('layouts.master')

@section('content')
<div class="page-header">
	<h1>All competencies</h1>
</div>

<div class="list-group">

@foreach($objects as $competency)
	<a href="{{url('competencies',[$competency->id])}}" class="list-group-item">
	<h2 class="list-group-item">{{$competency->staff}}</h2>
	<h3 class="list-group-item">{{$competency->assay}}</h3>
@endforeach

</div>
@endsection