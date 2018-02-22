<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customer = customer::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sup=customer::withTrashed()->orderBy('kode_customer','desc')->first();
        if($sup)
        $no=(int)substr($sup->kode_customer,1)+1;
        else
        $no=1;
            $hh=9-strlen($no);
        for($i=0;$i<$hh;$i++){
            $no='0'.$no;
        }
        $no='C'.$no;
        return view('customer.create',compact('no'));
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
        
        customer::create($requestData);

        return redirect('customer')->with('flash_message', 'customer added!');
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
        $customer = customer::findOrFail($id);

        return view('customer.show', compact('customer'));
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
        $customer = customer::findOrFail($id);

        return view('customer.edit', compact('customer'));
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
        
        $requestData = array('kode_customer'=>$request->kode_customer,
                'nama_perusahaan'=>$request->nama_perusahaan,
                'nama_customer'=>$request->nama_customer,
                'npwp'=>$request->npwp,
                'alamat_kantor'=>$request->alamat_kantor,
                'provinsi'=>$request->provinsi,
                'kota'=>$request->kota,
                'kode_pos'=>$request->kode_pos,
                'email'=>$request->email,
                'notelp_1'=>$request->notelp_1,
                'notelp_2'=>$request->notelp_2);
        
        $customer = customer::findOrFail($id)->update($requestData);

        return redirect('customer')->with('flash_message', 'customer updated!');
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
        customer::findOrFail($id)->delete($id);

        return redirect('customer')->with('flash_message', 'customer deleted!');
    }
}
