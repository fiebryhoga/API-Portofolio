<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceContent extends Model
{
    use HasFactory;

    protected $fillable = ['reference_id', 'title', 'link'];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }
}
