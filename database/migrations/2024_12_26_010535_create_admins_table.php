<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique(); // Nama pengguna admin
            $table->string('password'); // Kata sandi admin
            $table->timestamps();
        });
    }

public function down()
{
    Schema::dropIfExists('admins');
}

};
