<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_content',
        'img',
        'user_id',
        'content',
        'show',
        'slug',
        'view',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
