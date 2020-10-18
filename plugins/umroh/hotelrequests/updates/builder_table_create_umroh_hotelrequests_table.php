<?php namespace Umroh\Hotelrequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmrohHotelrequestsTable extends Migration
{
    public function up()
    {
        Schema::create('umroh_hotelrequests_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('rating', 250)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('description', 250)->nullable();
            $table->string('username', 250)->nullable();
            $table->string('package', 250)->nullable();
            $table->string('hotel_request', 250)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->dateTime('update_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umroh_hotelrequests_table');
    }
}
