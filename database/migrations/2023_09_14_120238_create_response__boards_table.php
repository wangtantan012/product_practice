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
        Schema::create('response__boards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('respond')->nullable()->comment('respond content');
            $table->text('message_id')->nullable()->comment('message id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('response__boards');
    }
};
