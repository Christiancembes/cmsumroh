<?php namespace Umroh\Citiesdbemirates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohCitiesdbemiratesTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_citiesdbemirates_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_citiesdbemirates_table');
    }
}
