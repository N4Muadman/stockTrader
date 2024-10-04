<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_faqs extends Model
{
    use HasFactory;
    public function faqs(){
        return $this->hasMany(Faqs::class, 'category_id');
    }
}
