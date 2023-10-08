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
        Schema::create('order', function (Blueprint $table) {
            $table->id('orderId');
            $table->string('orderNo');
            $table->date('orderDate');
            $table->boolean('IsDelete');
            $table->timestamps();
        });
        Schema::create('item', function (Blueprint $table) {
            $table->id('itemId');
            $table->integer('droupDownId');
            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('orderId')->on('order');
            $table->integer('itemQty');
            $table->integer('itemRate');
            $table->decimal('total',10,2);
            $table->boolean('IsDeleted');
            $table->timestamps();
        });
        Schema::create('tax', function (Blueprint $table) {
            $table->id('taxId');
            $table->string('textType');
            $table->integer('percentage');
            $table->decimal('taxtotal',10,2);
            $table->boolean('IsDeleted');
            $table->unsignedBigInteger('itemId');
            $table->foreign('itemId')->references('itemId')->on('item');
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
        Schema::dropIfExists('order');
        Schema::dropIfExists('item');
        Schema::dropIfExists('tax');
    }
};
