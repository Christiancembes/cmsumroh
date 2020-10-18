<?php namespace Umroh\Packages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohPackagesPackages extends Migration
{
    public function up()
    {
        Schema::create('umroh_packages_packages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_packages_packages');
    }
}
