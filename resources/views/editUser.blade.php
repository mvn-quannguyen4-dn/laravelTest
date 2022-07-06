@extends('layout.template')
@section('title')
Edit User
@endsection
@section('content')
<div class="register-container">
    <div class="createUser">
        <form action="/api/editUser/{{$user->id}}" method="post">
            <h4 class="register-title">Edit User</h4>
            <label id="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required value={{$user->name}} />
            <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="email" placeholder="Email" required value={{$user->email}} />
            <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="password" placeholder="Password" required value={{$user->password}} />
            <div class="submit-button">
                <button class="register-button" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection