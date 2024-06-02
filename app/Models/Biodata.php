<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'gretting',
        'name',
        'job',
        'description',
        'image',
        'contact',
        'quote',
        'descriptionQuote',
        'linkAnonymous',
        'linkedin',
        'dribble',
        'github',
        'instagram',
        'twitter',
        'email',
        'linkLinkedin',
        'linkDribble',
        'linkGithub',
        'linkInstagram',
        'linkTwitter',
        'linkEmail',
    ];
}
