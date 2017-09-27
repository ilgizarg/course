@extends('layouts.base')

{{--@section('title', $title)--}}


@section('content')
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @isset ($status)
        <div class=" alert alert-success">{{ $status }}</div>
    @endisset


    {!! Form::model($course,['action' => 'CourseController@store','files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name','Course name') !!}
            {!! Form::text('name','',['class' =>'form-control','placeholder'=>'Enter course name' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('idname','Course id name') !!}
            {!! Form::text('idname','',['class' =>'form-control','placeholder'=>'Enter course idname' ]) !!}
        </div>
        <div class="form-group">
           {!! Form::label('summary','Course summary') !!}
           {!! Form::textarea('summary','',['class' =>'form-control','placeholder'=>'Enter course summary','rows'=>3 ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('img','Course img') !!}
            {!! Form::file('img',['class' =>'form-control-file']) !!}
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="show">
                Show course
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@stop