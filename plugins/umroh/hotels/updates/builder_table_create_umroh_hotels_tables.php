<?php namespace Umroh\Hotels\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohHotelsTables extends Migration
{
    public function up()
    {
        Schema::create('umroh_hotels_tables', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('rating', 250)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_hotels_tables');
    }
}
