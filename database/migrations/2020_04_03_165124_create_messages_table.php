<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message_id',100);
            $table->text('name');
            $table->text('country');
            $table->string('phone',20);
            $table->text('email');
            $table->text('customer_type');
            $table->text('priority_level');
            $table->text('query_type');
            $table->text('message');
            $table->string('time',100);
            $table->tinyInteger('is_seen')->default('1');
            $table->dateTimeTz('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
