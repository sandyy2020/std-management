@foreach($students as $student)
        <tr>
        <td>{{$student->sname}}</td>
        <td>{{$student->fname}}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->phnum}}</td>
        <td>{{$student->email}}</td>
        <td><a href="{{url('studentfee',[$student->id])}}">Add Fee</a></td>
        <td><a href="{{url('singlestudent',[$student->id])}}">Show</a></td>
        <td><a href="{{url('studentedit',[$student->id])}}">Edit</a></td>
        <td><a href="{{url('studentdelete',[$student->id])}}">delete</a></td>
        </tr>
        @endforeach
        <tr class="pag_link"><td colspan="7">{{$students->links()}}</td></tr>