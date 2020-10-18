<?php namespace Umrohcom\Transactions\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePaymentMethodsTable extends Migration
{
    public function up()
    {
        Schema::create('umrohcom_transactions_payment_methods', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umrohcom_transactions_payment_methods');
    }
}
