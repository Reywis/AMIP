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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('first_lastname');
            $table->string('second_lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('identification_type')->nullable();
            $table->unsignedBigInteger('identification_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('city_of_birth')->nullable();
            $table->string('department_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->unsignedBigInteger('cell_phone')->nullable();
            $table->string('church_address')->nullable();
            $table->string('city_church_located')->nullable();
            $table->string('department_of_church_located')->nullable();
            $table->tinyInteger('church_area')->nullable();
            $table->string('eps')->nullable();
            $table->string('regime')->nullable();
            $table->string('provides_old_age_savings')->nullable();
            $table->string('baptized_holy_spirit')->nullable();
            $table->string('ministerial_degree')->nullable();
            $table->string('position_held')->nullable();
            $table->string('ministerial_profile')->nullable();
            $table->date('presentation_date_iames')->nullable();
            $table->string('appointments')->nullable();
            $table->string('academic_training_within_iames')->nullable();
            $table->string('news')->nullable();
            $table->string('valid_credential')->nullable();
            $table->string('actual_state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
