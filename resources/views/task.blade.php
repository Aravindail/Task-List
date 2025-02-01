@extends('layouts.app')

@section('title', $task->title)
@section('content')
    @isset($task)
        <div>{{$task['description']}}</div>
        @if($task->long_description)
            <div>{{$task->long_description}}</div>
        @endif
        <div>{{$task->created_at}}</div>
        <div>{{$task->updated_at}}</div>
    @else
        <h1>There are no task!</h1>
    @endisset
@endsection
