<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function statusOfTransaction(): belongsTo
    {
        return $this->belongsTo(StatusofTransaction::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
