@extends('layout.template')
@section('title')
List User
@endsection
@section('content')
<div class="listUser">
    <table border="1" width="100%">
       <caption>Danh sách user</caption>
       <TR><TH>STT</TH><TH>User Name</TH><TH>User Mail</TH><TH>Action</TH></TR>
       @for ($i=0; $i < sizeof($userList); $i++)
           <TR>
                <TD>{{$i+1}}</TD>
                <TD>{{$userList[$i]->name}}</TD>
                <TD>{{$userList[$i]->email}}</TD>
                <TD>
                    <a href="/editUser/{{$userList[$i]->id}}"><button class="edit-btn">Edit</button></a>
                    <a href="/api/delete/{{$userList[$i]->id}}"><button class="delete-btn">Delete</button></a>
                </TD>
            </TR>
       @endfor
       </table>;
</div>
@endsection