<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class foods extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'body',
        'status',
    ];

    public function Category(): HasMany
    {
        return $this->hasMany(category::class);
    }
}
