<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'qty',
        'amount',
        'user_id',
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
