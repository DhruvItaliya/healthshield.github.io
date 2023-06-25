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
        Schema::create('policy_holders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_id');
            $table->foreign('policy_id')->references('policy_id')->on('policies');
            $table->unsignedBigInteger('mobile');
            $table->foreign('mobile')->references('mobile')->on('clients');
            $table->integer('family_member');
            $table->decimal('premium',10,2);
            $table->decimal('total_premium',10,2);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->unique(['policy_id', 'mobile']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_holders');
    }
};
