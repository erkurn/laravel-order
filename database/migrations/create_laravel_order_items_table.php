<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(config('order.order_model'))->constrained();
            $table->decimal('price', 11);
            $table->string('status');
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }
};
