@extends('master')

@section('content')
    <h1>Contact Page</h1>

    @if(count($people))
        <h3>People I Like</h3>

        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@stop