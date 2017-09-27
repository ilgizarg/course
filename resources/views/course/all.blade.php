@extends('layouts.base')


@section('title')
    All courses
@stop

@section('content')
    @foreach($courses as $course)
        @if ($loop->index%2==0)
            <div class="row">
        @endif
        <div class="col-sm-6">
            <div class="card " style="width: 20rem;">
                <img class="card-img-top" src="{{  asset('courseimg/'.$course->img) }}" alt="{{ $course->name }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $course->name }}
                    <small  class="text-muted" >{{ $course->idname }}</small></h4>
                    <p class="card-text">{{ $course->summary }}</p>
                    <a href="{{ url('course/'.$course->id) }}" class="btn btn-primary">Show more..</a>
                </div>
            </div>
        </div>
        @if ($loop->index%2!=0)
            </div>
        @endif
    @endforeach
@stop
