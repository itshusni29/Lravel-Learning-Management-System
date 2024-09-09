<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul kursus
            $table->string('category'); // Kategori kursus
            $table->string('level'); // Tingkat kursus
            $table->integer('duration'); // Waktu kursus dalam menit
            $table->integer('total_lessons'); // Total jumlah pelajaran
            $table->text('description')->nullable(); // Deskripsi kursus
            $table->string('trainer'); // Pengajar (bisa nama atau ID)
            $table->string('thumbnail')->nullable(); // Gambar thumbnail
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
        Schema::dropIfExists('courses');
    }
}
