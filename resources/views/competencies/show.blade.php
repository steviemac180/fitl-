@extends('layouts.master')		
		
@section('content')
		<h1>
			{{$object->staff}}
		</h1>
		<h1><?php echo $object->assay;?></h1>
		
		<pre>
			<?php echo $object->type;?>
		</pre>
		<pre>
			<?php echo $object->signed;?>
		</pre>
		<pre>
			<?php echo $object->completed;?>
		</pre>
		<pre>
			<?php echo $object->review_due;?>
		</pre>
@endsection
