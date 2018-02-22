<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'customer';

    /**
     * Run the migrations.
     * @table customer
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_customer',10)->primary();
            $table->string('nama_perusahaan', 100);
            $table->string('nama_customer', 60);
            $table->string('npwp', 100)->nullable();
            $table->text('alamat_kantor');
            $table->string('provinsi', 60);
            $table->string('kota', 60);
            $table->string('kode_pos', 5);
            $table->string('email', 225);
            $table->string('notelp_1', 15);
            $table->string('notelp_2', 15);

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
