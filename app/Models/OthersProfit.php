<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OthersProfit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'amount',
        'note',
        'status',
    ];
}