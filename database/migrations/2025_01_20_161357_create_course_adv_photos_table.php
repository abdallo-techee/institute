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
        Schema::create('course_adv_photos', function (Blueprint $table) {
            $table->id();

            $table->string('photo_url');
            $table->unsignedBigInteger('course_adv_id_fk');
            $table->unsignedBigInteger('institute_id_fk');



            $table->foreign('course_adv_id_fk')->references('id')->on('course_advs')->onDelete('cascade');
            $table->foreign('institute_id_fk')->references('id')->on('institutes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_adv_photos');
    }
};
