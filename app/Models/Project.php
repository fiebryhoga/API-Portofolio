<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'gambar', 'deskripsi', 'link'];

    public function tags()
    {
        return $this->hasMany(ProjectTag::class);
    }
}
