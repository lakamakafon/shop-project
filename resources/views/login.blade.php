@extends('master')
@section("content")
<div class="custom-login">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="login" method="POST" >
                <div class="mb-3">
                    @csrf
                    <center><h1>Zaloguj się</h1></center><br><br>
                    <label for="exampleInputEmail1" class="form-label">Adres email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hasło</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Zaloguj</button>
            </form>
        </div>
    </div>
</div>
@stop