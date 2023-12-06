<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class food extends Model
{
    use HasFactory;

    protected $table = 'foods';

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

//    public function User(): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }
//
    public function menu(): HasMany
    {
        return $this->hasMany(food::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(food::class);
    }
}
