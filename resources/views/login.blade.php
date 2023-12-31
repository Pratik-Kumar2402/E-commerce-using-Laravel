@extends('master')
@section("content")
<div class="container custom-login">
    <form class="custom-login-form" action="login" method="POST">
        <div class="form-group">
            @csrf
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default btn-primary">Login</button>
    </form>
</div>
@endsection