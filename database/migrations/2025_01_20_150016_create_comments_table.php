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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('institute_id_fk');
            $table->unsignedBigInteger('student_id_fk');
            $table->unsignedBigInteger('course_adv_id_fk');
            $table->string('comment_text');





            $table->foreign('institute_id_fk')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('student_id_fk')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('course_adv_id_fk')->references('id')->on('course_advs')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
