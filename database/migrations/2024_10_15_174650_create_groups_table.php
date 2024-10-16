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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("course_id")->constrained();
            $table->foreignId("teacher_id")->constrained("users");
            $table->date("start_date");
            $table->date("finish_date");
            $table->unsignedTinyInteger("students_count");
            $table->time("start_time");
            $table->time("end_time");
            $table->enum("schedule_type", ["odd", "even", "both"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
