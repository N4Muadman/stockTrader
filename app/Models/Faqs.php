<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;
    public function category_faqs(){
        return $this->belongsTo(Category_faqs::class, 'category_id');
    }
}
