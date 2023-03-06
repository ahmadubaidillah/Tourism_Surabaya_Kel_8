<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori',[
                'History & Heritage',
                'Museum',
                'Religi',
                'Outdoor & Nature',
                'Pusat Perbelanjaan',
                'Pasar Tradisional',
                'Kampung Wisata',
                'Sport',
                'Cagar Budaya',
                'City Park',
                'Monumen & Landmark'
            ]);
            $table->string('foto');
            $table->string('alamat');
            $table->text('deskripsi');
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
        Schema::dropIfExists('destinasis');
    }
}
