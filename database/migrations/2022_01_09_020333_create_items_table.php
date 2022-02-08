<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcatagory_id')->default(0);
            $table->integer('childcategory_id')->default(0);
            $table->integer('tax_id')->default(0);
            $table->integer('brand_id')->default(0);
            $table->text('name')->unique();
            $table->text('slug')->unique();
            $table->string('sku')->nullable();
            $table->text('tags')->nullable();
            $table->text('vedio')->nullable();
            $table->text('sort_details')->nullable();
            $table->text('specification_name')->nullable();
            $table->text('specification_description')->nullable();
            $table->integer('is_specification')->nullable();
            $table->text('details')->nullable();
            $table->text('photo')->nullable();
            $table->text('api_photo')->nullable();
            $table->double('discount_price')->nullable();
            $table->double('previoust_price')->nullable();
            $table->integer('stock')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('status')->nullable();
            $table->string('is_type')->nullable();
            $table->string('file')->nullable();
            $table->text('link')->nullable();
            $table->string('file_type')->nullable();
            $table->text('lincense_name')->nullable();
            $table->text('lincense_key')->nullable();
            $table->string('item_type')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('items');
    }
}
