@extends('layouts.app')

@section('content')
<div class="container pt-5 text-center">
    <h1>Hello World!</h1>
    <ul class="list-unstyled">
        @foreach ($projects as $project)
        <li>{{$project -> name}}</li>
        @endforeach
    </ul>
</div>

@endsection