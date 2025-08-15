<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 
        'title', 
        'body', 
        'date', 
        'image',
        'author_id',
        'kategori',
        'category_id',
        'is_active' // Tambahkan field ini
    ];
    
    protected $attributes = [
        'is_active' => true // Default value
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    // Scope untuk berita aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}