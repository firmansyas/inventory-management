<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'detail_po';

    /**
     * Run the migrations.
     * @table detail_po
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('surat_po',16);
            $table->string('kode_barang', 10);
            $table->integer('qty');
            $table->integer('no_baris');

            $table->index(["kode_barang"], 'fk_surat_po_has_barang_barang1_idx');

            $table->index(["surat_po"], 'fk_surat_po_has_barang_surat_po1_idx');


            $table->foreign('surat_po', 'fk_surat_po_has_barang_surat_po1_idx')
                ->references('nomor')->on('surat_po')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('kode_barang', 'fk_surat_po_has_barang_barang1_idx')
                ->references('kode_barang')->on('barang')
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
