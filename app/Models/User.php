<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nik', 'ttl', 'alamat', 'no_hp', 'status',
        'jml_anak', 'umur_anak', 'jml_anggota', 'category_id', 'keluhan',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}