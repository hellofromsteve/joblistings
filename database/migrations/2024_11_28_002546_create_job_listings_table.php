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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete;
            $table->string('job_title');
            $table->string('gender');
            $table->string('job_cat');
            $table->string('qualification');
            $table->string('city');
            $table->string('region');
            $table->string('salary');
            $table->string('language');
            $table->longText('job_desc');
            $table->boolean('job_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
