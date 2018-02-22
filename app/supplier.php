<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class supplier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supplier';
     use SoftDeletes;
       protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode_supplier';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_supplier', 'nama_perusahaan', 'nama_supplier', 'alamat_kantor', 'asal_negara', 'email', 'notelp_1', 'notelp_2'];

    
}
