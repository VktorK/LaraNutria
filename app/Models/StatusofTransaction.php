<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusofTransaction extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'status_of_transactions';

    public function transactions(): hasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
