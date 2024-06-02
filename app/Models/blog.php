<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'penulis',
        'tanggal',
        'image',
        'judul',
        'deskripsi',
    ];

    public function contents()
    {
        return $this->hasMany(BlogContent::class);
    }
}
