<?php

use App\Enums\PropertyStatusEnum;
use App\Enums\PropertTypeEnum;
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
        Schema::create('property_characteristics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property')->unique();
            $table->float('price')->required();
            $table->integer('bedrooms')->required();
            $table->integer('bathrooms')->required();
            $table->float('sqft')->required();
            $table->float('price_sqft')->required();
            $table->enum("property_type",[
                PropertTypeEnum::SINGLE->value,
                PropertTypeEnum::TOWNHOUSE->value,
                PropertTypeEnum::MULTIFAMILY->value,
                PropertTypeEnum::BANGALOW->value,
            ])->default(PropertTypeEnum::SINGLE->value);
            $table->enum('status',[
                PropertyStatusEnum::SALE->value,
                PropertyStatusEnum::SOLD->value,
                PropertyStatusEnum::HOLD->value,
            ])->default(PropertyStatusEnum::SALE->value);
            $table->timestamps();
            $table->foreign('property')->references('id')->on('properties')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_characteristics');
    }
};