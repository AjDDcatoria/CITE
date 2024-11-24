<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(int[]|null[] $array)
 */
class Room extends Model
{
    protected $fillable = ['room','used'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'used','id');
    }
}