<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kategoriBarang;
use Illuminate\Http\Request;

class kategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kategoribarang = kategoriBarang::all();

        return view('kategori-barang.index', compact('kategoribarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kategori-barang.create');
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
        
        kategoriBarang::create($requestData);

        return redirect('kategori-barang')->with('flash_message', 'kategoriBarang added!');
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
        $kategoribarang = kategoriBarang::findOrFail($id);

        return view('kategori-barang.show', compact('kategoribarang'));
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
        $kategoribarang = kategoriBarang::findOrFail($id);

        return view('kategori-barang.edit', compact('kategoribarang'));
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
        
        $requestData = $request->all();
        
        $kategoribarang = kategoriBarang::findOrFail($id);
        $kategoribarang->update($requestData);

        return redirect('kategori-barang')->with('flash_message', 'kategoriBarang updated!');
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
        kategoriBarang::findOrFail($id)->delete($id);

        return redirect('kategori-barang')->with('flash_message', 'kategoriBarang deleted!');
    }
}
