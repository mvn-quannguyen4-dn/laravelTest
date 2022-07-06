@extends('layout.template')
@section('title')
List User
@endsection
@section('content')
<div class="listUser">
    <table border="1" width="100%">
       <caption>Danh sách user</caption>
       <TR><TH>ID</TH><TH>User Name</TH><TH>User Mail</TH></TR>
       @for ($i=0; $i < sizeof($userList); $i++)
           <TR><TD>{{$userList[$i]->id}}</TD><TD>{{$userList[$i]->name}}</TD><TD>{{$userList[$i]->email}}</TD></TR>
       @endfor
       </table>;
</div>
@endsection