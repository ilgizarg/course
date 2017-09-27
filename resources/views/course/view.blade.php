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
           @isset($course->thems)
               <ul class="list-unstyled">
               @foreach($course->thems as $them)
                       <li>{{ $them->name }}
                           <div class="lead">
                               {{ $them->summary }}
                           </div>
                           <div>
                           </div>
                       </li>

               @endforeach
               </ul>
           @endisset
        </div>
    </div>
@stop
