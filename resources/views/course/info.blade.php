@extends('layouts.base')


@section('title')
    {{ $course->name }}
@stop

@section('content')
    <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="{{  asset('courseimg/'.$course->img) }}" alt="{{ $course->name }}">
        <div class="card-body">
            <h4 class="card-title">{{ $course->name }}
            <small  class="text-muted" >{{ $course->idname }}</small></h4>
            <p class="card-text">{{ $course->summary }}</p>
            <a href="{{ route('courseview',$course->id) }}" class="btn btn-primary">View course</a>
        </div>
    </div>
@stop
