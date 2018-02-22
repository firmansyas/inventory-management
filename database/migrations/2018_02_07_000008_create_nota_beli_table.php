<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaBeliTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nota_beli';

    /**
     * Run the migrations.
     * @table nota_beli
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nomor',16)->primary();
            $table->date('tanggal');
            $table->date('jatuh_tempo');
            $table->text('alamat');
            $table->string('provinsi', 60);
            $table->string('kode_pos', 6);
            $table->double('grand_total');
            $table->string('terbilang');
            $table->string('kode_supplier', 10);

            $table->index(["kode_supplier"], 'fk_nota_beli_supplier1_idx');


            $table->foreign('kode_supplier', 'fk_nota_beli_supplier1_idx')
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
