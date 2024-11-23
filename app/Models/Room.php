<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(int[]|null[] $array)
 */
class Room extends Model
{
    protected $fillable = ['room','used'];
}
