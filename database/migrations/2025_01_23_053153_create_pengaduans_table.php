<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */     
            // 'name' => 'required|string|max:255',
            // 'nik' => 'required|digits:16|unique:users,nik',
            // 'ttl' => 'required|date',
            // 'alamat' => 'required|string|max:255',
            // 'no_hp' => 'required|regex:/^[0-9]{10,15}$/',
            // 'status' => 'required|string',
            // 'jml_anak' => 'required|integer|min:0',
            // 'umur_anak' => 'required|integer|min:0',
            // 'jml_anggota' => 'required|integer|min:1',
            // 'category' => 'required',
            // 'keluhan' => 'required'

    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('status');
            $table->integer('jml_anak');
            $table->integer('umur_anak');
            $table->integer('jml_anggota');
            $table->string('category');
            $table->string('keluhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
