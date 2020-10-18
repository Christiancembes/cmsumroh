<?php namespace Umroh\Airlines\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohAirlinesTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_airlines_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('logo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_airlines_table');
    }
}
