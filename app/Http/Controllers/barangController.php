<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\supplier;
use App\kategoriBarang;
use App\merkBarang;
use App\barang;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $sup=barang::withTrashed()->orderBy('kode_barang','desc')->first();
        if($sup)
        $no=(int)substr($sup->kode_barang,1)+1;
        else
        $no=1;
            $hh=9-strlen($no);
        for($i=0;$i<$hh;$i++){
            $no='0'.$no;
        }
        $no='B'.$no;
        $suppliers=supplier::orderBy('nama_perusahaan')->get();
        $merks=merkBarang::orderBy('nama')->get();
        $kategoris=kategoriBarang::orderBy('nama')->get();
        return view('barang.create',compact('no','suppliers','merks','kategoris'));
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

        
          $image=$request->gambar_barang;
          $h=Image::make($image->getRealPath())->height();
          $w=Image::make($image->getRealPath())->width();
          $height=200;
          $width=300;
           $no=(int)substr($request->kode_barang,1);
         $filename  = $no . '.' . $image->getClientOriginalExtension();

         

        $path = public_path('img/' . $filename);

            if($w>=$h)
            Image::make($image->getRealPath())->resize($width,$height )->save($path);
            else
            Image::make($image->getRealPath())->resize($height,$width )->save($path);
            

        $requestData  = array('kode_barang'=>$request->kode_barang,
                'nama'=>$request->nama,
                'nomor_izin'=>$request->nomor_izin,
                'spesifikasi_khusus'=>$request->spesifikasi_khusus,
                'asal_negara'=>$request->asal_negara,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual,
                'gambar_barang'=>$filename,
                'kode_supplier'=>$request->kode_supplier,
                'kategori_barang'=>$request->kategori_barang,
                'merk_barang'=>$request->merk_barang);
        
        barang::create($requestData);

        return redirect('barang')->with('flash_message', 'barang added!');
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
        $barang = barang::findOrFail($id);

        return view('barang.show', compact('barang'));
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
        $barang = barang::findOrFail($id);
        $suppliers=supplier::orderBy('nama_supplier')->get();
        $merks=merkBarang::orderBy('nama')->get();
        $kategoris=kategoriBarang::orderBy('nama')->get();
        return view('barang.edit', compact('barang','suppliers','merks','kategoris'));
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
        
        $requestData = array('kode_barang'=>$request->kode_barang,
                'nama'=>$request->nama,
                'nomor_izin'=>$request->nomor_izin,
                'spesifikasi_khusus'=>$request->spesifikasi_khusus,
                'asal_negara'=>$request->asal_negara,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual,
                'kode_supplier'=>$request->kode_supplier,
                'kategori_barang'=>$request->kategori_barang,
                'merk_barang'=>$request->merk_barang);

        if($request->gambar_barang){
            $bar=barang::findOrFail($id);
            
        $image=$request->gambar_barang;
          $h=Image::make($image->getRealPath())->height();
          $w=Image::make($image->getRealPath())->width();
          $height=200;
          $width=300;
           $no=(int)substr($request->kode_barang,1);
         $filename  = $no . '.' . $image->getClientOriginalExtension();

         

        $path = public_path('img/' . $filename);
            unlink(public_path('img/' . $bar->gambar_barang));
            if($w>=$h){
            Image::make($image->getRealPath())->resize($width,$height)->save($path);
            }else{
            Image::make($image->getRealPath())->resize($height,$width)->save($path);
            }
            $requestData['gambar_barang']=$filename;
        }
        barang::findOrFail($id)->update($requestData);


        return redirect('barang')->with('flash_message', 'barang updated!');
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
        barang::findOrFail($id)->delete($id);

        return redirect('barang')->with('flash_message', 'barang deleted!');
    }
}
