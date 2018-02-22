<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class detailBeli extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail_beli';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    // protected $primaryKey = 'nomor';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nota_beli', 'kode_barang', 'qty', 'harga_satuan', 'total_harga', 'diskon', 'harga_setelah_diskon', 'no_baris'];

    
}
