<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Nota Penjualan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}" media="all">

    <!--jQuery -->
    <script src="{{ asset('assets/lib/jquery/jquery.js') }}"></script>

    <style>
        @page {
            size: A4;
        }
        @media print {
            .page {
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>
<body>
    <div class="container page">
        <div class="row">
            <br>
            <div class="col-xs-4" style="border: 1px solid black">
                <h4><u>Kepada:</u></h4>
                {{$notaJual->customer->nama_customer}}<br>
                {{$notaJual->customer->nama_perusahaan}}<br>
                Alamat :{{$notaJual->alamat}}<br>
                Provinsi {{$notaJual->provinsi}}<br>
                Kode Pos {{$notaJual->kode_pos}}
            </div>
            <div class="col-xs-offset-4 col-xs-4" style="border: 1px solid black">
                <h4 class="text-center">FAKTUR PENJUALAN</h4>No. Faktur : {{$notaJual->nomor}}<br>
                Tanggal Faktur : {{$notaJual->tanggal}}
            </div>

            <table class="col-xs-12" border="1px" style="margin-top: 20px">
                <tr>
                    <th class="col-xs-1 text-center">No</th>
                    <th class="col-xs-4 text-center">Nama Barang</th>
                    <th class="col-xs-1 text-center">Qty</th>
                    <th class="col-xs-2 text-center">@ Rp.</th>
                    <th class="col-xs-1 text-center">Disc</th>
                    <th class="col-xs-3 text-center">Jumlah Rp</th>
                </tr>
                @foreach($notaJual->barang->sortBy('no_baris') as $item)
                    <tr>
                        <td class="text-center">{{$item->pivot->no_baris}}</td>
                        <td>{{$item->kode_barang}} {{$item->nama}}</td>
                        <td class="text-right">{{number_format($item->pivot->qty,0,".",",")}}</td>
                        <td class="text-right">{{number_format($item->pivot->harga_satuan,0,".",",")}}</td>
                        <td class="text-right">{{$item->pivot->diskon}}%</td>
                        <td class="text-right">{{number_format($item->pivot->harga_setelah_diskon,0,".",",")}}</td>
                    </tr>
                @endforeach
                <tr>
                    <th class="text-center" >Terbilang</th>
                    <th>{{ucwords($notaJual->terbilang)}}</th>
                    <th></th>
                    <th class="text-center">Total</th>
                    <th colspan="2" class="text-right">{{number_format($notaJual->grand_total,0,".",",")}}</th>
                </tr>
            </table>

            <div class="col-xs-12" style="margin-top: 20px">
                <div class="col-xs-3">
                    Disetujui Oleh:<br><br><br><br>
                    LASINO
                </div>
                <div class="col-xs-3">
                    Dianter Oleh:<br><br><br><br>
                    {{$notaJual->diantar_oleh}}
                </div>
                <div class="col-xs-3">
                    Diterima Oleh:<br><br><br><br>
                    {{$notaJual->customer->nama_customer}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
