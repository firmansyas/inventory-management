<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBeliTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'detail_beli';

    /**
     * Run the migrations.
     * @table detail_beli
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nota_beli',16);
            $table->string('kode_barang', 10);
            $table->integer('qty');
            $table->double('harga_satuan');
            $table->double('total_harga');
            $table->decimal('diskon');
            $table->double('harga_setelah_diskon');
            $table->integer('no_baris');

            $table->index(["kode_barang"], 'fk_nota_beli_has_barang_barang1_idx');

            $table->index(["nota_beli"], 'fk_nota_beli_has_barang_nota_beli1_idx');


            $table->foreign('nota_beli', 'fk_nota_beli_has_barang_nota_beli1_idx')
                ->references('nomor')->on('nota_beli')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('kode_barang', 'fk_nota_beli_has_barang_barang1_idx')
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
