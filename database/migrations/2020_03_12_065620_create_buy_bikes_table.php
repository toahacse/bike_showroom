<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->string('bike_no');
            $table->string('price');
            $table->string('color');
            $table->string('date');
            $table->text('smart_card')->nullable();
            $table->text('text_token')->nullable();
            $table->text('insurance')->nullable();
            $table->text('house_copy')->nullable();
            $table->text('blue_book')->nullable();
            $table->text('acknowledge_slip')->nullable();
            $table->text('stamp')->nullable();
            $table->text('nid_card')->nullable();
            $table->string('smart_card1')->nullable();
            $table->string('text_token1')->nullable();
            $table->string('insurance1')->nullable();
            $table->string('house_copy1')->nullable();
            $table->string('blue_book1')->nullable();
            $table->string('acknowledge_slip1')->nullable();
            $table->string('stamp1')->nullable();
            $table->string('nid_card1')->nullable();
            $table->text('name');
            $table->text('number');
            $table->text('address');
            $table->text('media_name')->nullable();
            $table->text('media_number')->nullable();
            $table->text('media_address')->nullable();
            $table->text('sales_status');
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
        Schema::dropIfExists('buy_bikes');
    }
}
