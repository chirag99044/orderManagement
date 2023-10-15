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
        Schema::create('droupdown',function (Blueprint $table){
            $table->id('droupDownId');
            $table->string('name');
        });
        Schema::create('item', function (Blueprint $table) {
            $table->id('itemId');
            $table->unsignedBigInteger('droupDownId');
            $table->foreign('droupDownId')->references('droupDownId')->on('droupdown');
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
        Schema::dropIfExists('droupdown');
        Schema::dropIfExists('tax');
        Schema::dropIfExists('item');
        Schema::dropIfExists('order');
    }
};
