@extends('master')
@section("content")
<div class="container custom-login">
    <form class="custom-login-form" action="register" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default btn-primary">Register</button>
    </form>
</div>
@endsection