<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategoriBarang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kategori_barang';
     use SoftDeletes;
       protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode';
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama'];

    
}
