<?php namespace Umroh\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohCrmTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_crm_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_crm_table');
    }
}
