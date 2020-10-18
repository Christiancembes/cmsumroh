<?php namespace Umroh\Packagefacility\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohPackagefacilityTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_packagefacility_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('partner', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('facilities_included', 255)->nullable();
            $table->string('facilities_excluded', 255)->nullable();
            $table->string('terms_and_conditions', 255)->nullable();
            $table->string('travel_details', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_packagefacility_table');
    }
}
