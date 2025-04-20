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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id_fk');
            $table->string('ins_name');
            $table->string('ins_description')->nullable();
            // license_photo for verfication
            $table->string('ins_lic_photo')->nullable();
            $table->boolean('ins_is_verified');

            $table->foreign('user_id_fk')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
