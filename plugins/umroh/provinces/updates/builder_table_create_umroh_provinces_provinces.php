<?php namespace Umroh\Provinces\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohProvincesProvinces extends Migration
{
    public function up()
    {
        Schema::create('umroh_provinces_provinces', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_provinces_provinces');
    }
}
