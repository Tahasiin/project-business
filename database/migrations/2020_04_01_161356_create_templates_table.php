<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name')->nullable();
            $table->text('welcome_text')->nullable();
            $table->text('introductory_text')->nullable();
            $table->text('about_us')->nullable();
            $table->text('why_to_choose')->nullable();
            $table->text('how_to_buy')->nullable();
            $table->text('how_it_works')->nullable();
            $table->text('contact')->nullable();
            $table->text('solution')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('templates');
    }
}
