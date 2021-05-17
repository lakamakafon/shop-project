@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                @foreach($towary as $towar)
                <tr>
                    <td>{{$towar->name}}</td>
                    <td>{{$towar->price}} zł</td>
                </tr>
                @endforeach
                <tr>
                    <td>Razem</td>
                    <td>{{$total}} zł</td>
                </tr>
                <tr>
                    <td>W tym podatek VAT 23%</td>
                    <td>{{$tax_value}} zł</td>
                </tr>
                <tr>
                    <td>Dostawa</td>
                    <td>10 zł</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3" style="float:left;">
                    <label class="form-label">Ulica</label>
                    <input type="text" style="width: 300px;" class="form-control" name="street" id="street">
                    <label class="form-label">Nr budynku</label>
                    <input type="text" style="width: 300px;" class="form-control" name="build_nr" id="build_nr">
                    <label class="form-label">Nr mieszkania</label>
                    <input type="text" style="width: 300px;" class="form-control" name="a_nr" id="a_nr">
                    <label class="form-label">Kod pocztowy</label>
                    <input type="text" style="width: 300px;" class="form-control" name="city_code" id="city_code">
                    <label class="form-label">Miasto</label>
                    <input type="text" style="width: 300px;" class="form-control" name="city" id="city">
                </div>
                <br>
                <div class="form-group" style="float:left; margin-left:50px;">
                    <label for="pwd">Metoda płatności:</label><br>
                    <input type="radio" value="online" name="payment"><span>Płatność online</span><br>
                    <input type="radio" value="karta" name="payment"><span>Płatność kartą</span><br>
                    <input type="radio" value="przy odbiorze" name="payment"><span>Płatność przy odbiorze</span><br>
                </div>
                <div class="form-group" style="float:left; margin-left:50px;">
                    <label>Informacje dodatkowe</label><br>
                    <textarea class="form-control" style="width: 300px;" id="add_info" name="add_info" rows="4" cols="33">
                </textarea><br>
                    <button type="submit" class="btn btn-primary">Zamów teraz</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@stop