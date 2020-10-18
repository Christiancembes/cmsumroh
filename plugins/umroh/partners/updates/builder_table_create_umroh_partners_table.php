<?php namespace Umroh\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohPartnersTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_partners_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_partners_table');
    }
}
