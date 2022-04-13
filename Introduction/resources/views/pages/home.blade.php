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
    {{-- <a href="{{route('hello.parent')}}">go to hello parent page </a> <br/> --}}

    <div class="container-fluid">
        <form class="formclass" action="{{route('submit_form_page')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your Name" />
            </div>
    
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email Address" />
            </div>
    
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your Password" />
            </div>
    
            <div class="form-group">
                <label for="cpassword">Confirm Password:</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" />
            </div>
            
            <div class="form-group">
                <label for="passport">Confirm Password:</label>
                <input type="file" class="form-control" name="passport" placeholder="submit passport" />
            </div>
            
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
    
@endsection
