<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricebook_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pricebook_id')->references('id')->on('pricebooks');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->string('createdby')->nullable();
            $table->string('lastmodifiedby')->nullable();
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
        Schema::dropIfExists('pricebook_entries');
    }
};
