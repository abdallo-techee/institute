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
        Schema::create('course_advs', function (Blueprint $table) {
            $table->id();
            $table->string('course_adv_name');
            $table->string('course_adv_description')->nullable();
            $table->unsignedBigInteger('category_id_fk');
            // $table->unsignedBigInteger('photo_id_fk');
            $table->unsignedBigInteger('institute_id_fk');

            $table->timestamps();




            $table->foreign('institute_id_fk')->references('id')->on('institutes')->onDelete('cascade');

            $table->foreign('category_id_fk')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('photo_id_fk')->references('id')->on('course_adv_photos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_advs');
    }
};
