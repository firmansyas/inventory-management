<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerkBarangTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'merk_barang';

    /**
     * Run the migrations.
     * @table merk_barang
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode',10)->primary();
            $table->string('nama', 60);
            $table->string('asal_negara', 60);
            $table->string('kode_supplier', 10);
             $table->softDeletes();

            $table->index(["kode_supplier"], 'fk_merk_barang_supplier1_idx');


            $table->foreign('kode_supplier', 'fk_merk_barang_supplier1_idx')
                ->references('kode_supplier')->on('supplier')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
