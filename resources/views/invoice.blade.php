<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: DejaVu Sans;
        }

        table,
        th,
        td {
            border: solid black 1px;
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            text-align: center;
        }

        p {
            padding-left: 10px;
            font-size: 10px;
        }

        h2 {
            margin-bottom: 0.25rem;
        }

        h1 {
            margin-bottom: 70px;
            margin-top: 40px;
        }

        .data {
            display: inline-block;
        }

        img {
            width: 210px;
            height: 75px;
        }
    </style>
</head>

<body>
    <div style="width: 90%; margin:10px">
        <img src="{{ public_path('1.png') }}">
        <p style="float:right">Numer sprzedaży: <b>{{$number}}</b><br>Data wystawienia: <b>{{$date2}}</b></p><br><br>
        <h1 style="text-align: center;">Faktura sprzedaży <br> {{$number}}</h1><br>
        <div>
            <div class="data">
                <h4>Dane sprzedawcy</h4>
                <p>LaptopeX</p>
                <p>NIP: 12333333312</p>
                <p>ul. Najlepsza 2137</p>
                <p>64-100 Leszno</p>
            </div>
            <div class="data" style="margin-left:20px;">
                @foreach($buyer as $b)
                <h4>Dane nabywcy</h4>
                <p>{{$b->firstname}} {{$b->lastname}} NIP: {{$b->NIP}}</p>
                <p>ul. {{$b->street}} {{$b->building_nr}}/{{$b->apart_nr}}</p>
                <p>{{$b->mail_code}} {{$b->mail}}</p>
                <p>Nr telefonu: {{$b->tel_nr}}</p>
                @endforeach
            </div>
        </div>
        <table>
            <tr>
                <th>NAZWA</th>
                <th>CENA BRUTTO</th>
                <th>STAWKA VAT</th>
                <th>WARTOŚĆ NETTO</th>
                <th>WARTOŚĆ BRUTTO</th>
            </tr>
            @foreach($products as $p)
            <tr style="text-align:center">
                <td>{{$p->name}}</td>
                <td>{{number_format($p->price, 2, '.', '')}} zł</td>
                <td>23%</td>
                <td>{{number_format($p->price*0.77, 2, '.', '')}} zł</td>
                <td>{{number_format($p->price, 2, '.', '')}} zł</td>
            </tr>
            @endforeach
            <tr>
                <td>Dostawa</td>
                <td>10.00 zł</td>
                <td>23%</td>
                <td>7.70 zł</td>
                <td>10.00 zł</td>
            </tr>
        </table>
        <br><br>
        <div class="details">
            <table style="width: 70%;">
                <tr>
                    <th></th>
                    <th>WARTOŚĆ NETTO</th>
                    <th>KWOTA VAT</th>
                    <th>WARTOŚĆ BRUTTO</th>
                </tr>
                <tr style="background-color: #e0e0d1;">
                    <td>RAZEM</td>
                    @foreach($razem as $r2)
                    <td>{{number_format($r2, 2, '.', '')*0.77}} zł</td>
                    <td>{{number_format($r2, 2, '.', '')*0.23}} zł</td>
                    <td>{{number_format($r2, 2, '.', '')}} zł</td>
                    @endforeach
                </tr>
            </table>
        </div>
        <br><br><br><br><br><br>

        <p id="aaa" style="float:left; text-align:center">........................................................<br>
            <i>Podpis osoby upoważnionej do wystawiania faktur</i>
        </p>
        <p id="bbb" style="float:right; text-align:center">........................................................<br>
            <i>Podpis osoby upoważnionej do odbioru faktur</i>
        </p>
    </div>
</body>

</html>