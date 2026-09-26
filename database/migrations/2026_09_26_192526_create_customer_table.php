<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->id('cust_id');

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');

            $table->integer('contact_number');
            $table->string('address');

            $table->foreignId('created_by')
                ->constrained('users')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Customer');
    }
};