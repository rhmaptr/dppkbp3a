<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('nik');
        $table->string('ttl');
        $table->string('alamat');
        $table->string('no_hp');
        $table->string('status');
        $table->string('jml_anak');
        $table->string('umur_anak');
        $table->string('jml_anggota');
        $table->string('category');
        $table->text('keluhan');
        $table->timestamps();
    });
}

};
