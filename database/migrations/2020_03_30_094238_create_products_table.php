<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('product_name');
            $table->string('product_id')->unique();
            $table->string('category_name');
            $table->tinyInteger('category_id');
            $table->string('production_year');
            $table->string('product_weight');
            $table->string('product_mileage');
            $table->string('fuel_type');
            $table->string('product_color');
            $table->string('product_ccm');
            $table->string('product_condition');
            $table->string('smoking_status');
            $table->string('history_status');
            $table->string('product_price');
            $table->string('pre_description');
            $table->string('accidental_issue');
            $table->string('mileage_issue');
            $table->string('service_issue');
            $table->string('other_issue')->nullable();
            $table->string('term_1')->nullable();
            $table->string('term_2')->nullable();
            $table->string('term_3')->nullable();
            $table->string('term_4')->nullable();
            $table->string('term_5')->nullable();
            $table->string('term_6')->nullable();
            $table->string('term_7')->nullable();
            $table->string('term_8')->nullable();
            $table->string('term_9')->nullable();
            $table->string('term_10')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();
            $table->boolean('publication_status')->default(false);
            $table->boolean('is_imaged')->default(false);
            $table->string('created_on',100);
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
        Schema::dropIfExists('products');
    }
}
