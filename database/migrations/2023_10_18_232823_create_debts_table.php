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
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedFloat('value')->nullable();
            $table->integer('priority')->nullable();
            $table->date('since_date')->nullable();

            $table->unsignedBigInteger('expense_category_id')->nullable();
            $table->foreign('expense_category_id')
                ->references('id')
                ->on('expense_category');

            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')
                ->on('status_debt');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};
