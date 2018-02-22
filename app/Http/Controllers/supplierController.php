<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $supplier = supplier::all();

        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sup=supplier::withTrashed()->orderBy('kode_supplier','desc')->first();
         if($sup)
        $no=(int)substr($sup->kode_supplier,1)+1;
        else
        $no=1;
        $hh=9-strlen($no);
        for($i=0;$i<$hh;$i++){
            $no='0'.$no;
        }
        $no='S'.$no;
        
        return view('supplier.create',compact('no'));
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
        
        supplier::create($requestData);

        return redirect('supplier')->with('flash_message', 'supplier added!');
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
        $supplier = supplier::findOrFail($id);
       // $supplier= supplier::whereKodeSupplier($id)->first();

        return view('supplier.show', compact('supplier'));
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
        $supplier = supplier::findOrFail($id);

        return view('supplier.edit', compact('supplier'));
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
        
        $requestData = array('kode_supplier'=>$request->kode_supplier,
                'nama_perusahaan'=>$request->nama_perusahaan,
                'nama_supplier'=>$request->nama_supplier,
                'alamat_kantor'=>$request->alamat_kantor,
                'asal_negara'=>$request->asal_negara,
                'email'=>$request->email,
                'notelp_1'=>$request->notelp_1,
                'notelp_2'=>$request->notelp_2);
        
        $supplier = supplier::findOrFail($id)->update($requestData);

        return redirect('supplier')->with('flash_message', 'supplier updated!');
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
        supplier::findOrFail($id)->delete($id);

        return redirect('supplier')->with('flash_message', 'supplier deleted!');
    }
}
