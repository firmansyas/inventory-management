<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barang';
     use SoftDeletes;
        protected $dates = ['deleted_at'];

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode_barang';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_barang', 'nama', 'nomor_izin', 'spesifikasi_khusus', 'asal_negara', 'harga_beli', 'harga_jual', 'gambar_barang', 'kode_supplier', 'kategori_barang', 'merk_barang'];

    public function supplier(){
        return $this->belongsTo('App\supplier','kode_supplier','kode_supplier');
    }
    public function kategori(){
        return $this->belongsTo('App\kategoriBarang','kategori_barang','kode');
    }
    public function merk(){
        return $this->belongsTo('App\merkBarang','merk_barang','kode');
    }

    public function notaJual(){
        return $this->belongsToMany('App\notaJual', 'detail_jual', 'kode_barang', 'nota_jual')->withPivot('qty', 'harga_satuan', 'total_harga', 'diskon', 'harga_setelah_diskon', 'no_baris');
    }
    
}
