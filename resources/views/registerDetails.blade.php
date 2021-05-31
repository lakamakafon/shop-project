@extends('master')
@section("content")
<div class="custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <center>
                    <h1>Zarejestruj się</h1>
                </center><br><br>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nazwa użytkownika</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adres email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Hasło</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Zarejestruj</button>
                </form>
        </div>
    </div>
</div>
@stop