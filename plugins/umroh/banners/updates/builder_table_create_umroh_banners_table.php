<?php namespace Umroh\Banners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohBannersTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_banners_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('image_url', 250)->nullable();
            $table->string('image_url_mobile', 250)->nullable();
            $table->string('order', 250)->nullable();
            $table->string('target_url', 250)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_banners_table');
    }
}
