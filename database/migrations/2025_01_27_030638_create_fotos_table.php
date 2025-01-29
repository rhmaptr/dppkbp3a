<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
{
    Schema::create('foto', function (Blueprint $table) {
        $table->id();
        $table->string('path'); // Path untuk menyimpan file
        $table->timestamps();
    });
}

    // /**
    //  * Run the migrations.
    //  */
    // public function up(): void
    // {
    //     Schema::create('fotos', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('fotos');
    // }
};
