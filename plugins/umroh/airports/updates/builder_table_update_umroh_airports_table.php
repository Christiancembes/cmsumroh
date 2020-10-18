<?php namespace Umroh\Airports\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmrohAirportsTable extends Migration
{
    public function up()
    {
        Schema::table('umroh_airports_table', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('umroh_airports_table', function($table)
        {
            $table->string('logo', 191);
        });
    }
}
