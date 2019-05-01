<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MstPrefecture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_prefecture', function (Blueprint $table) {
           $table->char('prefecture_cd',2)->primary();
           $table->string('prefecture_name',20);
           $table->dateTime('insert_date');
           $table->char('insert_cd',5);
           $table->dateTime('update_date')->nullable();
           $table->char('update_cd',5)->nullable();
           $table->dateTime('delete_date')->nullable();
           $table->char('delete_cd',5)->nullable();
           $table->char('delete_flag',1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_prefecture');
    }
}
