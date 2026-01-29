<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crew_id')->nullable()->constrained('crews')->nullOnDelete();
            $table->string('name');
            $table->string('surnames')->nullable();
            $table->string('genre')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('course_id')->nullable()->constrained('courses')->nullOnDelete();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('colony')->nullable();
            $table->string('municipality')->nullable();
            $table->string('PC')->nullable();
            $table->string('phone')->nullable();
            $table->string('cel_phone')->nullable();
            $table->string('generation')->nullable();
            $table->foreignId('modality_id')->nullable();
            $table->foreignId('payment_periodicity_id')->nullable()->constrained('payment_periodicities')->nullOnDelete();
            $table->foreignId('schedule_id')->nullable();
            $table->boolean('sabbatine')->nullable();
            $table->decimal('tuition', 10, 2)->nullable();
            $table->string('start')->nullable();
            $table->string('curp')->nullable();
            $table->boolean('first_time')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
