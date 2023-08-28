@extends('layout.default')
@section('content')
<div style="text-align: center;border: 3px solid black; width:200px; margin-top:70px">
<img style="width: 100%" src="/posting/{{$student->image}}">
<div>
<p>Student Name: {{$student->sname}}</p>
<p>Father name: {{$student->fname}}</p>
<p>Class: {{$student->class}}</p>
<p>Email: {{$student->email}}</p>

</div>


</div>

@endsection