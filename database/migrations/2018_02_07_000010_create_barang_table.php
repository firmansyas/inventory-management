<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'barang';

    /**
     * Run the migrations.
     * @table barang
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_barang',10)->primary();
            $table->string('nama', 60);
            $table->string('nomor_izin', 100);
            $table->string('asal_negara', 60);
            $table->string('spesifikasi_khusus', 60);
            $table->double('harga_beli');
            $table->double('harga_jual');
            $table->string('gambar_barang', 150);
            $table->string('kode_supplier', 10);
            $table->integer('kategori_barang')->unsigned();
            $table->string('merk_barang', 10);
            $table->softDeletes();

            $table->index(["merk_barang"], 'fk_barang_merk_barang1_idx');

            $table->index(["kategori_barang"], 'fk_barang_kategori_barang1_idx');

            $table->index(["kode_supplier"], 'fk_barang_supplier_idx');


            $table->foreign('kode_supplier', 'fk_barang_supplier_idx')
                ->references('kode_supplier')->on('supplier')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('kategori_barang', 'fk_barang_kategori_barang1_idx')
                ->references('kode')->on('kategori_barang')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('merk_barang', 'fk_barang_merk_barang1_idx')
                ->references('kode')->on('merk_barang')
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
