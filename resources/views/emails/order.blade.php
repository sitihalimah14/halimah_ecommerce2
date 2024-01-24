<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Anda Dikirim {{ $order->invoice }}</title>
</head>

<body>
    <h2>Hai, {{ $order->customer->name }}</h2>
    <p>Kami harap Anda dalam keadaan baik dan sehat. Terima kasih atas kepercayaan Anda berbelanja di Halimah Online Shop.
    </p>

    <p>Kami ingin memberitahu Anda bahwa pesanan Anda dengan nomor pesanan <strong>{{ $order->invoice }}</strong> saat ini
        sedang dalam proses pengiriman. Barang Anda diperkirakan akan tiba dalam beberapa hari ke depan, tergantung
        lokasi pengiriman.</p>

    <p>Berikut ini adalah detail pengiriman Anda:</p>
    <ul>
        <li>Nomor Pesanan: <strong>{{ $order->invoice }}</strong></li>
        <li>Nomor Resi Pesanan: <strong>{{$order->tracking_number }}</strong></li>
    </ul>

    <p>Terima kasih atas kesabaran dan pengertiannya. Kami berharap Anda menikmati produk yang Anda pesan.</p>
</body>
</html>