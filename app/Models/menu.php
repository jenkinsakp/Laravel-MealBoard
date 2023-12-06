<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'user_id',
        'food_id',
        'date',
        'status',
    ];

    public function food(): BelongsTo
    {
        return $this->belongsTo(food::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany(comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }


}
