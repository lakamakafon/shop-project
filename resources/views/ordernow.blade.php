@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                @foreach($towary as $towar)
                <tr>
                    <td>{{$towar->name}}</td>
                    <td>{{number_format($towar->price, 2, '.', '')}} zł</td>
                </tr>
                @endforeach
                <tr>
                    <td>Razem</td>
                    <td>{{number_format($total, 2, '.', '')}} zł</td>
                </tr>
                <tr>
                    <td>W tym podatek VAT 23%</td>
                    <td>{{number_format($tax_value, 2, '.', '')}} zł</td>
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
                <div class="form-group" style="float:left;">
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