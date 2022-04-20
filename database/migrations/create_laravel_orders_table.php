<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(config('order.order_model'), 'parent_id')->constrained('laravel_orders', 'id');
            $table->string('status');
            $table->decimal('sub_total', 11);
            $table->decimal('tax_total', 11)->nullable();
            $table->decimal('discount_total', 11)->nullable();
            $table->decimal('total', 11);
            $table->string('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
};
