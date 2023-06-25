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
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->unsignedBigInteger('mobile')->unique();
            $table->string('address');
            $table->string('pincode');
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->integer('children');
            $table->integer('family_member');
            $table->timestamps();
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
