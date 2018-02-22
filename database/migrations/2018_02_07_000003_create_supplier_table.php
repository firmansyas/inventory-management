<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'supplier';

    /**
     * Run the migrations.
     * @table supplier
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_supplier',10)->primary();
            $table->string('nama_perusahaan', 100);
            $table->string('nama_supplier', 60);
            $table->text('alamat_kantor');
            $table->string('email', 225);
            $table->string('notelp_1', 15);
            $table->string('notelp_2', 15);
            $table->string('asal_negara', 60);
            $table->softDeletes();

            $table->unique(["email"], 'email_UNIQUE');
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
