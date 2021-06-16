@extends('master')
@section("content")
<div class="custom-login">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="register" method="POST">
                @csrf
                <center>
                    <h1>Zarejestruj się</h1>
                </center><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Imię</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Nazwisko</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tel_nr">Numer telefonu</label>
                        <input type="text" class="form-control" id="tel_nr" name="tel_nr">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Nazwa użytkownika</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Adres email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="street">Ulica</label>
                        <input type="text" class="form-control" id="street" name="street">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="building_nr">Nr budynku</label>
                        <input type="text" class="form-control" id="building_nr" name="building_nr">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="apart_nr">Nr mieszkania</label>
                        <input type="text" class="form-control" id="apart_nr" name="apart_nr">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mail_code">Kod pocztowy</label>
                        <input type="text" class="form-control" id="mail_code" name="mail_code">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mail">Miasto</label>
                        <input type="text" class="form-control" id="mail" name="mail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="exampleCheck1">Akceptuję <a href="/regulations">regulamin</a> sklepu</label><br>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Zarejestruj się</button>
            </form>
        </div>
    </div>
</div>
@stop