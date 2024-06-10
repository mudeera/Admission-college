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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->text('cnic');
            $table->text('marksheet');
            $table->text('cnicofGuardian');
            $table->text('image');
            $table->text('Domicile');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('p_no');
            $table->text('address');
            $table->boolean('gender');
            $table->text('district');
            $table->text('character');
            $table->text('academic_year');
            $table->text('obtained_percentage');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
