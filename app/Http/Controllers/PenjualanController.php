<?php

namespace App\Http\Controllers;

use App\barang;
use App\customer;
use App\Helpers\Rupiah;
use App\notaJual;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = notaJual::all();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        $barang = barang::all();
        $customer = customer::all();
        return view('penjualan.create', ['customer' => $customer, 'barang' => $barang]);
    }

    public function store(Request $request)
    {
        //no nota
        if($request->pajak){
            $nomor = "/KMA/";
        } else{
            $nomor = "/KM/";
        }
        $tanggal = Carbon::now()->toDateString();//tanggal hari ini
        $nomor .= date("m",strtotime($tanggal)).'/';
        $nomor .= date("Y",strtotime($tanggal));

        $jumlah = notaJual::where('nomor','like', '%'.$nomor)->count()+1;
        if($jumlah<10){
            $nomor = "000".$jumlah.$nomor;
        }
        else if($jumlah<100)
        {
            $nomor = "00".$jumlah.$nomor;
        }
        else if($jumlah<1000)
        {
            $nomor = "0".$jumlah.$nomor;
        }
        else
        {
            $nomor = $jumlah.$nomor;
        }
        $notaJual = new notaJual();
        $notaJual->nomor = $nomor;
        $notaJual->tanggal = $tanggal;
        //no po dan tanggal po
        if($request->pajak){
            $notaJual->no_po = $request->no_po;
            $notaJual->tanggal_po = $request->tanggal_po;
        }
        $notaJual->tanggal_pengiriman = $request->tanggal_pengiriman;
        $notaJual->diantar_oleh = $request->diantar_oleh;
        $notaJual->jatuh_tempo = Carbon::now()->addDays(30)->toDateString();
        $notaJual->alamat = $request->alamat;
        $notaJual->provinsi = $request->provinsi;
        $notaJual->kode_pos = $request->kode_pos;
        $notaJual->down_payment = $request->down_payment;
        $notaJual->pajak = $request->pajak;
        $notaJual->grand_total = $request->grand_total;
        $notaJual->kode_customer = $request->kode_customer;
        $notaJual->terbilang = Rupiah::terbilang($request->grand_total).' rupiah';
        $notaJual->save();
        //barang
        $barang = $request->barang;
        $qty = $request->qty;
        $harga = $request->harga;
        $diskon = $request->diskon;
        $subtotal = $request->subtotal;

        foreach ($barang as $key => $item){
            $notaJual->barang()->attach($item, ['qty' => $qty[$key], 'harga_satuan' => $harga[$key], 'total_harga' => $qty[$key]*$harga[$key], 'diskon' => $diskon[$key], 'harga_setelah_diskon' => $subtotal[$key], 'no_baris' => $key+1]);
        }

        return back();
    }

    public function show($id,$nama,$bulan,$tahun){
        $notaJual = notaJual::find($id.'/'.$nama.'/'.$bulan.'/'.$tahun);
        return view('penjualan.showpajak', ['notaJual' => $notaJual]);
    }
}
