@extends('layout.default')
@section('content')
<h1>Branch Details</h1>
<table class="table table-bordered">
    <thead>
        <th>Branch Short Form</th>
        <th>Branch Full Form</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach($branches as $branch)
        <tr>
        <td>{{$branch->bsort}}</td>
        <td>{{$branch->bfull}}</td>
        <td><a href="{{url('branchedit',[$branch->id])}}">Edit</a></td>
        <td><a href="{{url('branchdelete',[$branch->id])}}">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
 
{!!$branches->links()!!}

@endsection