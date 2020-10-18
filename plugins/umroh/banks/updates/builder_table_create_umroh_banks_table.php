<?php namespace Umroh\Banks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohBanksTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_banks_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_banks_table');
    }
}
