@extends('layout')
@section('content')
{{$appointment->id}}
{{$appointment->name}}
{{$appointment->email}}
{{$appointment->date}}
{{$appointment->message}}
@endsection