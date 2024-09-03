<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePengalamanTable extends Migration
{
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id('id_pengalaman');
            $table->foreignId('id')->constrained('gunung')->onDelete('cascade');
            $table->string('nama');
            $table->date('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('deskripsi');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at dengan tipe timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengalaman');
    }
}
