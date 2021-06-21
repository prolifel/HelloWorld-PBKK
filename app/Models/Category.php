<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id', 'slug'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function scopeGetParent($query)
    {
        return $query->whereNull('parent_id');
    }

    // Mutator -> edit data sebelum disimpan ke DB
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    // Accessor -> edit data setelah diterima dari DB
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function product()
    {
        // one to many ke product
        return $this->hasMany(Product::class);
    }
}
