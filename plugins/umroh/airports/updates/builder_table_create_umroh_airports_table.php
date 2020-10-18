<?php namespace Umroh\Airports\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohAirportsTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_airports_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('logo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_airports_table');
    }
}
