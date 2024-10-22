<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('full_name', 100); // Full name (up to 100 characters)
            $table->string('nationality', 50); // Nationality (up to 50 characters)
            $table->date('birth_date'); // Date of birth
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']); // Marital status
            $table->enum('gender', ['male', 'female', 'other']); // Gender

            // Educational Information
            $table->enum('educational_qualification', ['high_school', 'bachelor', 'master', 'phd', 'other']);
            $table->string('specialization', 100); // Specialization or major

            // Language Skills
            $table->enum('english_proficiency', ['none', 'basic', 'intermediate', 'advanced', 'fluent']);
            $table->string('other_languages', 255)->nullable(); // List of other languages (optional)

            // Work Experience & Training
            $table->json('work_experience'); // JSON structure to store multiple experiences
            $table->text('training_courses')->nullable(); // List or description of training courses (optional)

            // Uploaded Files
            $table->string('cv')->nullable(); // File path for CV
            $table->string('upload_photo'); // File path for photo

            // Contact Information
            $table->string('phone_number', 15); // Phone number (up to 15 digits)
            $table->string('email')->unique(); // Email address (must be unique)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
};
