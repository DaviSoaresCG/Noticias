<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'content', 'user_ud', 'created_at', 'updated_at'];
}
