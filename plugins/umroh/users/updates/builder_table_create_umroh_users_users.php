<?php namespace Umroh\Users\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohUsersUsers extends Migration
{
    public function up()
    {
        Schema::create('umroh_users_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_users_users');
    }
}
