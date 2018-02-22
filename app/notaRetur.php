<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class notaRetur extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nota_retur';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nomor';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomor', 'tanggal_retur', 'tanggal_transaksi', 'diterima_oleh', 'alasan'];

    
}
