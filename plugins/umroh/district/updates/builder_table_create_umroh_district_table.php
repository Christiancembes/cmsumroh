<?php namespace Umroh\District\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohDistrictTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_district_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_district_table');
    }
}
