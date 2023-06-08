
@extends('master')<!-- used to link two blades-->
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action='register' method="POST">
            @csrf
            <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" name="username">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="paasword">Password</label>
                    <input type="password" class="form-control"  id="password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection