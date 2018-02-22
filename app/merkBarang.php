<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class merkBarang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'merk_barang';
     use SoftDeletes;
        protected $dates = ['deleted_at'];
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'asal_negara', 'kode_supplier'];

    public function supplier(){
        return $this->belongsTo('App\supplier','kode_supplier','kode_supplier');
    }

    
}
