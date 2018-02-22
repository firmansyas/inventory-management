<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaJualTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nota_jual';

    /**
     * Run the migrations.
     * @table nota_jual
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
            $table->string('no_po', 16)->nullable();
            $table->date('tanggal_po')->nullable();
            $table->date('tanggal_pengiriman');
            $table->string('diantar_oleh', 60);
            $table->date('jatuh_tempo');
            $table->text('alamat');
            $table->string('provinsi', 60);
            $table->string('kode_pos', 6);
            $table->decimal('pajak');
            $table->double('down_payment');
            $table->double('grand_total');
            $table->string('terbilang');
            $table->string('kode_customer', 10);

            $table->index(["kode_customer"], 'fk_nota_jual_customer1_idx');


            $table->foreign('kode_customer', 'fk_nota_jual_customer1_idx')
                ->references('kode_customer')->on('customer')
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
