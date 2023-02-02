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
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->string('package_type');
            $table->integer('price');
            $table->integer('number_of_days');
            $table->integer('number_of_aminities');
            $table->integer('number_of_nearest_place');
            $table->integer('number_of_photo');
            $table->integer('number_of_property');
            $table->integer('number_of_feature_property');
            $table->integer('number_of_top_property');
            $table->integer('number_of_urgent_property');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('is_top')->default(0);
            $table->tinyInteger('is_urgent')->default(0);
            $table->integer('package_order');
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
        Schema::dropIfExists('packages');
    }
};
