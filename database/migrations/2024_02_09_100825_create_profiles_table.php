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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('Last_name');
            $table->string('First_name');
            $table->string('Middle_name')->nullable();
            $table->date('date_of_but');
            $table->string('residential_address');
            $table->string('login');
            $table->decimal('balance')->nullable();
            $table->timestamps();

            $table->foreignId('gender_id')->index()->constrained('genders');
            $table->foreignId('user_id')->index()->constrained('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
