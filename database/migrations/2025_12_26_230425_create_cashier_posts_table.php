<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cashier_posts', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('name');
            $table->decimal('mandate', 8, 2);
            $table->decimal('memoirs', 8, 2);
            $table->decimal('purchases', 8, 2);
            $table->decimal('totalepost', 8, 2);

            $table->bigInteger('employe_id')->unsigned();
            $table->foreign('employe_id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier_posts');
    }
};
