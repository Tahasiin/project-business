<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id',100);
            $table->text('customer_name');
            $table->text('country');
            $table->text('address');
            $table->text('zip_code');
            $table->string('phone',20);
            $table->text('email');
            $table->text('payment_method');
            $table->text('how_found');
            $table->string('product_id',100);
            $table->text('product_name');
            $table->text('category_name');
            $table->string('time',100);
            $table->integer('is_checked')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
