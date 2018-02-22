<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\merkBarang;
use App\supplier;
use Illuminate\Http\Request;
use auth;

class merkBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $merkbarang = merkBarang::all();

        return view('merk-barang.index', compact('merkbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sup=merkBarang::withTrashed()->orderBy('kode','desc')->first();
        if($sup)
        $no=(int)substr($sup->kode,1)+1;
        else
        $no=1;   
        $hh=9-strlen($no);
        for($i=0;$i<$hh;$i++){
            $no='0'.$no;
        }
        $no='M'.$no;
        $suppliers=supplier::orderBy('nama_perusahaan')->get();
        return view('merk-barang.create',compact('suppliers','no'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        merkBarang::create($requestData);

        return redirect('merk-barang')->with('flash_message', 'merkBarang added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $merkbarang = merkBarang::findOrFail($id);

        return view('merk-barang.show', compact('merkbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $merkbarang = merkBarang::findOrFail($id);

        $suppliers=supplier::orderBy('nama_perusahaan')->get();

        return view('merk-barang.edit', compact('merkbarang','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = array('kode'=>$request->kode,
            'nama'=>$request->nama,
            'asal_negara'=>$request->asal_negara,
            'kode_supplier'=>$request->kode_supplier);
        // dd($requestData);
        // $merkbarang = 
        merkBarang::findOrFail($id)->update($requestData);

        return redirect('merk-barang')->with('flash_message', 'merkBarang updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        merkBarang::findOrFail($id)->delete($id);

        return redirect('merk-barang')->with('flash_message', 'merkBarang deleted!');
    }
}
