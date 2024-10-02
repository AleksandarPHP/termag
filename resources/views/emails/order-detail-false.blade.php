<style>
    .orders-table table {
      margin: 40px 0 40px 0;
      border-collapse: collapse;
      width: 100%;
    }
    
    .orders-table td, .orders-table th {
      border: 1px solid #dddddd;
      padding: 8px;
    }
</style>
<div class="orders-table">
    <table>
        <thead>
            <tr>
                <th>Artikal</th>
                <th>Cijena</th>
                <th>Količina</th>
                <th>Ukupno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->cart["products"] as $product)
            <tr>
                <td>{{ $product["title"] }}@if(($product["key"] ?? false) && $product["key"] != 'noKey') ({{ trim($product["key"]) }})@endif</td>
                <td align="center">{{ number_format($product["price_currency"], 2, ".", "") }} {{ $order->cart["currency"] }}</td>
                <td align="center">{{ $product["quantity"] }}</td>
                <td align="center">{{ number_format($product["total_currency"], 2, ".", "") }} {{ $order->cart["currency"] }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" align="right">Međuzbir:</th>
                <td align="center">{{ number_format($order->cart["total_currency"], 2, ".", "") }} {{ $order->cart["currency"] }}@if($order->cart["currency"] != 'KM') / {{ number_format($order->cart['total'], 2, ".", "") }} KM @endif</td>
            </tr>
            <tr>
                <th colspan="3" align="right">Dostava:</th>
                <td align="center">+ {{ number_format($order->cart["shipping_currency"], 2, ".", "") }} {{ $order->cart["currency"] }}@if($order->cart["currency"] != 'KM') / {{ number_format($order->cart['shipping'], 2, ".", "") }} KM @endif</td>
            </tr>
            <tr>
                <th colspan="3" align="right">Ukupno:</th>
                <td align="center">{{ number_format($order->cart["total_currency"] + $order->cart["shipping_currency"], 2, ".", "") }} {{ $order->cart["currency"] }}@if($order->cart["currency"] != 'KM') / {{ number_format($order->cart['total'] + $order->cart['shipping'], 2, ".", "") }} KM @endif</td>
            </tr>
        </tfoot>
    </table>
    <table>
        <thead>
            <tr>
                <th>Informacije za račun</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b>Narudžba</b>: #{{ $order->id.$order->created_at->format('His') }}<br>                    
                    @if($order->first_name!="")<b>Ime</b>: {{ $order->first_name }}<br>@endif
                    @if($order->last_name!="")<b>Prezime</b>: {{ $order->last_name }}<br>@endif
                    @if($order->company!="")<b>Ime firme</b>: {{ $order->company }}<br>@endif
                    @if($order->pdv!="")<b>ID/PDV broj</b>: {{ $order->pdv }}<br>@endif
                    @if($order->country!="")<b>Država</b>: {{ $order->country }}<br>@endif
                    @if($order->address!="")<b>Adresa</b>: {{ $order->address }}<br>@endif
                    @if($order->city_place!="")<b>Grad / Mjesto</b>: {{ $order->city_place }}<br>@endif
                    @if($order->zip!="")<b>Poštanski broj</b>: {{ $order->zip }}<br>@endif
                    @if($order->phone!="")<b>Telefon</b>: {{ $order->phone }}<br>@endif
                    @if($order->email_address!="")<b>Email adresa</b>: {{ $order->email_address }}<br>@endif
                </td>
            </tr>
        </tbody>
    </table>    
    <table>
        <thead>
            <tr>
                <th>Informacije za dostavu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    @if($order->first_name2!="")<b>Ime</b>: {{ $order->first_name2 }}<br>@endif
                    @if($order->last_name2!="")<b>Prezime</b>: {{ $order->last_name2 }}<br>@endif
                    @if($order->company2!="")<b>Ime firme</b>: {{ $order->company2 }}<br>@endif
                    @if($order->country2!="")<b>Država</b>: {{ $order->country2 }}<br>@endif
                    @if($order->address2!="")<b>Adresa</b>: {{ $order->address2 }}<br>@endif
                    @if($order->city_place2!="")<b>Grad / Mjesto</b>: {{ $order->city_place2 }}<br>@endif
                    @if($order->zip2!="")<b>Poštanski broj</b>: {{ $order->zip2 }}<br>@endif
                    @if($order->phone2!="")<b>Telefon</b>: {{ $order->phone2 }}<br>@endif
                    @if($order->email_address2!="")<b>Email adresa</b>: {{ $order->email_address2 }}<br>@endif
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th>Rezultat transakcije: Plaćanje nije uspešno, račun platne kartice nije zadužen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b>Broj narudžbine</b>: {{$responseData['ReturnOid']}}<br>
                    <b>Autorizacioni kod</b>: {{$responseData['AuthCode']}}<br>
                    <b>Status transakcije</b>: {{$responseData['Response']}}<br>
                    <b>Kod statusa transakcije</b>: {{$responseData['ProcReturnCode']}}<br>
                    <b>Datum transakcije</b>: {{$responseData['EXTRA_TRXDATE']}}<br>
                    <b>Statusni kod 3D transakcije</b>: {{$responseData['mdStatus']}}<br>
                </td>
            </tr>
        </tbody>
    </table>
</div>