<?php namespace Umroh\Districtsdbemirates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohDistrictsdbemiratesTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_districtsdbemirates_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_districtsdbemirates_table');
    }
}
