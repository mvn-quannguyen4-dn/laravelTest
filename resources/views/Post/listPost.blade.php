@extends('layouts.app')
@section('title')
List Posts
@endsection
@section('content')
<div class="listUser">
    <table border="1" width="100%">
       <TR><TH>STT</TH><TH>Post Name</TH><TH>Content</TH><TH>Author</TH></TR>
       @for ($i=0; $i < sizeof($posts); $i++)
           <TR>
                <TD>{{$i+1}}</TD>
                <TD>
                    <a href="/posts/{{$posts[$i]->id}}">{{$posts[$i]->title}}</a>
                </TD>
                <TD>{{\Illuminate\Support\Str::limit($posts[$i]->content, 100, $end='...')}}</TD>
                <TD>{{$posts[$i]->user->name}}</TD>
            </TR>
        
       @endfor
       </table>;
</div>
@endsection