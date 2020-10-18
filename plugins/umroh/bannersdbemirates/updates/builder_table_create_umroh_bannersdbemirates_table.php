<?php namespace Umroh\Bannersdbemirates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohBannersdbemiratesTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_bannersdbemirates_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name')->nullable();
            $table->string('order')->nullable();
            $table->string('target_url')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_bannersdbemirates_table');
    }
}
