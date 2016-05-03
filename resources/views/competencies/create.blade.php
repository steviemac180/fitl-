@extends('layouts.master')


@section

{!! Form:model($competency, ['action' => 'CompetencyController@store']) !!}

@endsection