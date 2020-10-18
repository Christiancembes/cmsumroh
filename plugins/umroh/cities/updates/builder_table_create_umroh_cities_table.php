<?php namespace Umroh\Cities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_cities_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_cities_table');
    }
}
