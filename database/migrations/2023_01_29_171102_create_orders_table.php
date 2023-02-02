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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id', 191)->unique();
            $table->integer('user_id');
            $table->integer('package_id');
            $table->date('purchase_date');
            $table->integer('expired_day');
            $table->date('expired_date')->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->text('transaction_id')->nullable();
            $table->tinyInteger('payment_status')->default(0);
            $table->decimal('amount_usd', 10, 0);
            $table->integer('amount_real_currency');
            $table->string('currency_type', 191);
            $table->string('currency_icon', 191);
            $table->tinyInteger('status')->default(0);
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
    }
};
