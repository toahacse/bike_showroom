<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background: rgba(94, 151, 110, 0.3);
            color: black;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">

    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <img src="{{asset('/')}}/front_end/images/logo.png" alt="Logo" width="80" class="logo"/>
                <img src="{{asset('/')}}/front_end/images/name1.png" alt="Logo" width="200" class="logo">


            </td>
            <td align="center">
            </td>
            <td align="right" style="width: 40%;">
                <pre>
                    S. K Market, Circle of new chandgaon thana,
                    Beside Flyover, Bohoddarhat,
                    Chattogram, Bangladesh
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>


<div class="invoice">

    <table width="100%">
        <tr>
            <td>
                <p style="float: left; margin-left: 10px;">
                    Name: {{$sale->name}}<br>
                    Phone: {{$sale->number}}<br>
                    Address: {{$sale->address}}
                </p>
            </td>
            <td>
                <p style="text-align: right; margin-right: 10px">Date: {{ $sale->date }}</p>
            </td>
        </tr>
    </table>

    <br/>

    <table width="100%">

        <tr>
            <th>Sl</th>
            <th>Bike no</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <tr>
            <td><p style="text-align: center">1</p></td>
            <td><p style="text-align: center">{{$sale->bike_no}}</p></td>
            <td><p style="text-align: center">1</p></td>
            <td><p style="text-align: center">{{$sale->price}} TK</p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <p style="text-align: center" >Total: {{$sale->price}} TK</p>
            </td>
        </tr>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                © 2020 All Rights Reserved.Design by Md.Ismat Toaha
            </td>
            <td align="right" style="width: 50%;">
            </td>
        </tr>

    </table>
</div>
</body>
</html>