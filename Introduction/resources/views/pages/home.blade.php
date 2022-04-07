@extends('layouts.landing')

@section('content')
    <p> my body comes here </p>

    <ul>
        @foreach ($students as $student)
            <li> 
                <a href="{{route('hello.student',$student['age'])}}"> {{$student['name']}} is {{$student['age']}} years old</a>
            </li>
        @endforeach
    </ul>
    <a href="{{route('hello.home')}}">go to hello page </a> <br/>
    <a href="{{route('hello.student','20')}}">go to hello student age page </a> <br/>
    <a href="{{route('hello.teacher')}}">go to hello teacher page </a> <br/>
    {{-- <a href="{{route('hello.parent')}}">go to hello parent page </a> <br/> --}}
@endsection
