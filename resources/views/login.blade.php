
@extends('master')<!-- used to link two blades-->
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action='login' method="POST">
                <div class="form-group">
                    @csrf
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="paasword">Password</label>
                    <input type="password" class="form-control"  id="password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection