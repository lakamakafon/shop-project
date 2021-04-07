@extends('master')
@section("content")
<div class="custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action="login" method="POST">
                <div class="mb-3">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Zaloguj</button>
            </form>
        </div>
    </div>
</div>
@stop